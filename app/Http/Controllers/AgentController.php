<?php

namespace App\Http\Controllers;


use App\Models\Setting;
use App\Models\EntegralApiData;
use App\Models\Agent;

class AgentController extends Controller
{
  public function index()
  {
    $setting = Setting::find(1);
    $agentGetBuyCategory = $this->agentGetBuyCategory();

    $arrayResidential =  $this->getAgentData('for rent');
    $arrayCommercial =  $this->getAgentData('for sale');
    return view('frontPart.agentSearch', compact('setting', 'arrayResidential', 'arrayCommercial', 'agentGetBuyCategory'));
  }

  public function getAgentData($keyword)
  {
    $getData =  EntegralApiData::select('town')->whereIn('town', ['Cape Town', 'Durban', 'East London', 'Johannesburg', 'Kynsna', 'Port Elizabeth', 'Pretoria'])->where('mandate_saletype', $keyword)->distinct()->get();

    $arrayData = array();
    foreach ($getData as $key => $value) {

      $search = "mandate_saletype = '" . $keyword . "' AND town = '" . $value->town . "' AND agent_name != 'Jeanne Memeworx'";

      $getList = EntegralApiData::select('agent_id')->WhereRaw($search)->distinct()->groupBy('agent_name')->get();

      foreach ($getList as $result => $listValue) {

        $agentDetail = $this->getAgentDetailApiById($listValue->agent_id);

        if (isset($agentDetail[0]) && !empty($agentDetail[0])) {

          if (isset($agentDetail[0]['agent_name_slug']) && $agentDetail[0]['agent_name_slug'] != '') {
            $agent_id = $agentDetail[0]['agent_name_slug'];
          } else {
            $agent_id = '';
          }

          if (isset($agentDetail[0]['first_name']) && $agentDetail[0]['first_name'] != '') {
            $name = $agentDetail[0]['title'] . " " . $agentDetail[0]['first_name'] . " " . $agentDetail[0]['last_name'];
          } else {
            $name = '';
          }

          if (isset($agentDetail[0]['photo_url']) && $agentDetail[0]['photo_url'] != '') {
            $agentImg = $agentDetail[0]['photo_url'];
          } else {
            $agentImg = route('/') . 'front/images/agent-img.png';
          }

          if (isset($agentDetail[0]['mobile_number']) && $agentDetail[0]['mobile_number'] != '') {
            $mobile = $agentDetail[0]['mobile_number'];
          } else {
            $mobile = '';
          }

          if (isset($agentDetail[0]['email']) && $agentDetail[0]['email'] != '') {
            $email = $agentDetail[0]['email'];
          } else {
            $email = '';
          }

          $arrayData[$value->town][] = array('agent_id' => $agent_id, 'agent_name' => $name, 'mobile_number' => $mobile, 'email' => $email, 'photo_url' => $agentImg);
        }
      }
    }

    return $arrayData;
  }

  public function getAgentDetailApiById($agentId)
  {
    $getAgent =  Agent::select('*')->where('agent_id', $agentId)->get();
    $responseBody = json_decode($getAgent, true);

    return $agentDetail = $responseBody;
  }


  // 'commercial_property_practitioner' => $this->getAgentDataByCity($cities, 'commercial property practitioner'),
  // 'residential_letting_and_sales_agent' => $this->getAgentDataByCity($cities, 'residential and sales agent'),
  // 'commercial_letting_and_sales_agent' => $this->getAgentDataByCity($cities, 'commercial sales agent'),

  public function agentGetBuyCategory()
  {
    $cities = ['capeTown', 'durban', 'eastLondon', 'innerCity', 'johannesBurg', 'portElizabeth', 'pretoria'];

    $categories = [
      'residential_letting_agent' => ['residential letting consultant', 'residential letting agent', 'residential and sales agent', 'residential letting and sales agent'],
      'residential_sales_agent' => ['residential sales agent', 'residential and sales agent', 'residential and commercial sales agent', 'residential letting and sales agent'],
      'commercial_letting_agent' => ['commercial property practitioner', 'commercial sales agent', 'commercial letting and sales agent'],
      'commercial_sales_agent' => ['commercial sales agent', 'residential and commercial sales agent', 'commercial letting and sales agent'],
    ];

    $agentCategoriesByCity = [];

    foreach ($categories as $category => $jobTitles) {
      $agentCategoriesByCity[$category] = $this->getAgentDataByCity($cities, $jobTitles);
    }

    return $agentCategoriesByCity;
  }

  private function getAgentDataByCity($cities, $jobTitles)
  {
    $agentDataByCity = [];
    foreach ($cities as $city) {
      $query = Agent::select('*')
        ->where('api_city_key', $city)
        ->where('api_name', 'Entegral api')
        ->where(function ($query) use ($jobTitles) {
          foreach ($jobTitles as $jobTitle) {
            $query->orWhere('job_title', $jobTitle);
          }
        });

      $agentDataByCity[$city]['agentData'] = $query->get();
    }
    return $agentDataByCity;
  }
}
