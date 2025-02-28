<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Agent;


class ImportAgentsController extends Controller
{

    public function index()
    {

        return view('admin.pages.importAgents');
    }
    // DURBAN
    public function durban()
    {

        $apiKey = 'heJ2Hmr5Ax692JkGVtf1oU2bAuRqHK9NDspia25sCyNYWHRjy+BD3AxQhpggFB/O';
        $this->importDataFunction($apiKey, 'durban');
        return redirect('/admin/importagents')->with('success', 'Property import successfully');
    }

    // PRETORIA
    public function pretoria()
    {

        $apiKey = 'dwvFM9KwKjZChmcrPDhpIvMi8/O4dFoeghs/Xmrob5h8Q99GT6q+qaCrAONJ7uIc';
        $this->importDataFunction($apiKey, 'pretoria');
        return redirect('/admin/importagents')->with('success', 'Property import successfully');
    }

    //CAPE TOWN
    public function capeTown()
    {

        $apiKey = 'pdab3oCUefEgYMWcwEbwGaO3YOwyMsCFLHv+J9wRLWEar7Vb+K/AwKoCbJf6vuIF';
        $this->importDataFunction($apiKey, 'capeTown');
        return redirect('/admin/importagents')->with('success', 'Property import successfully');
    }

    //JOHANNESBURG
    public function johannesBurg()
    {

        $apiKey = 'iJqzkct/9+S333CWawiPzquO43KX2PNfdceo5Y10Y5W9Z/h+WReevEFIujLvrkJ7';
        $this->importDataFunction($apiKey, 'johannesBurg');
        return redirect('/admin/importagents')->with('success', 'Property import successfully');
    }

    // PORT ELIZABETH
    public function portElizabeth()
    {

        $apiKey = 'oVfwb/YN/rO9Hhj99grZhpzC/5A2yEH0O4GyN+o7gJO01ME5yvJgkJB7UhgI5SWc';
        $this->importDataFunction($apiKey, 'portElizabeth');
        return redirect('/admin/importagents')->with('success', 'Property import successfully');
    }


    // inner City
    public function innerCity()
    {

        $apiKey = 'ZJGmaqJ5/sCxZAStUcou3nFELh9R14WPu15UYd/DYUgzxB93MoLwtd2SdQ8i4s2W';
        $this->importDataFunction($apiKey, 'innerCity');
        return redirect('/admin/importagents')->with('success', 'Property import successfully');
    }

    // East London
    public function eastLondon()
    {

        $apiKey = 'CGkkJkU172ympsbxOYuGGY3OdaHo6CEEXDjESH6ON39gT6l0BQ+GYmFS6Ng58mYf';
        $this->importDataFunction($apiKey, 'eastLondon');
        return redirect('/admin/importagents')->with('success', 'Property import successfully');
    }



    public function importDataFunction($apiKey, $api_city_key_name)
    {
        // URL
        $apiURL = 'https://baseapi.entegral.net/api/v1/agents';

        // POST Data
        $postInput = [
            // 'mandate_price_from' => '500000',
        ];

        // Headers
        $headers = [
            'Token' => $apiKey,
            'Accept' => 'application/json'
        ];

        $response = Http::withHeaders($headers)->get($apiURL, $postInput);
        $statusCode = $response->status();
        $responseBody = json_decode($response->getBody(), true);


        
        if (count($responseBody) > 0) {
            Agent::where('api_city_key', $api_city_key_name)->delete();
        }
        ///  dd($responseBody);

        for ($r = 0; $r < count($responseBody); $r++) {

            $checkAgentExist =   Agent::where('agent_id', $responseBody[$r]['id'])->first();
            if (!empty($checkAgentExist)) {
                $insertAgentData =  Agent::find($checkAgentExist->id);
                $insertAgentData->is_agent_new = 0;
                // variable for checking new agent
                $checkifAgentNew = 0;
            } else {
                $insertAgentData =  new Agent;
                $insertAgentData->is_agent_new = 1;
                // variable for checking new agent
                $checkifAgentNew = 1;
            }
            $insertAgentData->api_name = "Entegral api";
            $insertAgentData->api_city_key = $api_city_key_name;
            $insertAgentData->agent_id = $responseBody[$r]['id'];
            $insertAgentData->title = $responseBody[$r]['title'];
            $insertAgentData->first_name = ucfirst(strtolower($responseBody[$r]['first_name']));
            $insertAgentData->last_name = ucfirst(strtolower($responseBody[$r]['last_name']));
            $insertAgentData->photo_url = $responseBody[$r]['photo_url'];
            $insertAgentData->role = $responseBody[$r]['role'];
            $insertAgentData->mobile_number = $responseBody[$r]['mobile_number'];

            $agentSlug = str_replace(" ", "-", trim($responseBody[$r]['first_name']) . " " . trim($responseBody[$r]['last_name']));
            $agentSlug = str_replace("--", "-", $agentSlug);
            $insertAgentData->agent_name_slug = strtolower($agentSlug);

            $insertAgentData->email = $responseBody[$r]['email'];
            $insertAgentData->job_title = preg_replace('/^\s+|\s+$|\s+(?=\s)/', '', strtolower($responseBody[$r]['job_title']));
            $insertAgentData->birthday = $responseBody[$r]['birthday'];
            $insertAgentData->added = $responseBody[$r]['added'];
            $insertAgentData->updated = $responseBody[$r]['updated'];

            $insertAgentData->save();
        }
    }



    //  public function getAgentDetailData($id,$key){
    //       $apiURLAgentDetail = 'https://baseapi.entegral.net/api/v1/agents/.$id';
    //         // Headers
    //     $headers = [
    //       'Token' => $key,
    //       'Accept' => 'application/json'
    //     ];

    //     $response = Http::withHeaders($headers)->get($apiURLAgentDetail);
    //     $statusCode = $response->status();
    //      $response->getBody();
    //     $responseBody = json_decode($response->getBody(), true);
    //     print_r($responseBody);
    // }
}
