<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use App\Models\Agent;
use Redirect;

class SyncApiImportAgentsController extends Controller
{
  public function index()
  {
    return view('admin.pages.syncApiImportAgents');
  }

  public function importBranch($branch)
  {
    $username = config("branches.{$branch}.username");
    $password = config("branches.{$branch}.password");
    $token = 'Basic ' . base64_encode($username . ':' . $password);

    $this->importDataFunction($token, $username);
    return Redirect::back()->with('success', $username . ' Agents import successfully');
  }

  public function durban()
  {
    return $this->importBranch('durban');
  }

  public function capeTown()
  {
    return $this->importBranch('capeTown');
  }

  public function eastLondon()
  {
    return $this->importBranch('eastLondon');
  }

  public function johannesBurg()
  {
    return $this->importBranch('johannesBurg');
  }

  public function portElizabeth()
  {
    return $this->importBranch('portElizabeth');
  }

  public function pretoria()
  {
    return $this->importBranch('pretoria');
  }

  public function importDataFunction($token, $api_city_key_name)
  {
    $apiURL = 'https://sync.entegral.net/api/agents';
    $headers = ['Authorization' => $token];
    $response = Http::withHeaders($headers)->get($apiURL);
    $responseBody = json_decode($response->getBody(), true);

    foreach ($responseBody as $agent) {
      $checkAgentExist = Agent::where('agent_id', $agent['clientAgentID'])->first();
      $insertAgentData = $checkAgentExist ?: new Agent;
      $insertAgentData->is_agent_new = $checkAgentExist ? 0 : 1;
      $insertAgentData->api_name = "Sync api";
      $insertAgentData->api_city_key = $api_city_key_name;
      $insertAgentData->agent_id = $agent['clientAgentID'];
      $insertAgentData->first_name = ucfirst(strtolower($agent['fullName']));
      $insertAgentData->last_name = ucfirst(strtolower($agent['lastName']));
      $insertAgentData->photo_url = $agent['photo'];
      $insertAgentData->role = $agent['role'];
      $insertAgentData->mobile_number = $agent['cell'];
      $insertAgentData->agent_name_slug = strtolower(str_replace("--", "-", str_replace(" ", "-", $agent['fullName'] . " " . $agent['lastName'])));
      $insertAgentData->email = $agent['email'];
      $insertAgentData->job_title = preg_replace('/^\s+|\s+$|\s+(?=\s)/', '', strtolower($agent['role']));
      $insertAgentData->profile = $agent['profile'];
      $insertAgentData->save();
    }
  }
}
