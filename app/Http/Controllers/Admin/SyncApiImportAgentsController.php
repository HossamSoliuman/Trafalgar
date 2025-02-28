<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Agent;
use Redirect;


class SyncApiImportAgentsController extends Controller
{
    
    public function index(){
 
        return view('admin.pages.syncApiImportAgents');
    }
    
    
    
     // unibase_sandbox
     public function unibaseAgentApiData(){
        
        // unibase_sandbox
       $userName_unibase_sandbox = 'unibase_sandbox';
       $password_unibase_sandbox = 'dda4d7c3-96ba-462e-80cf-262fee74f745';
       $token_unibase_sandbox = 'Basic '.base64_encode($userName_unibase_sandbox . ':' . $password_unibase_sandbox);
        $this->importDataFunction($token_unibase_sandbox,$userName_unibase_sandbox);
         return Redirect::back()->with('success', $userName_unibase_sandbox.' Agents import successfully');
      
    }
    
    
    
    // DURBAN
    
    
      public function trafalgarPropertyMangementPretoria(){
        
          $userName_property_mangement_pretoria = 'Trafalgar Property Management PTY LTD - Pretoria';
       $password_property_mangement_pretoria = 'd7b702b7-b56d-4ebb-938d-d3f2d3ca796c';
        $token_property_mangement_pretoria = 'Basic '.base64_encode($userName_property_mangement_pretoria . ':' . $password_property_mangement_pretoria);
        
      $this->importDataFunction($token_property_mangement_pretoria,$userName_property_mangement_pretoria);
        return Redirect::back()->with('success', $userName_property_mangement_pretoria.' Agents import successfully');
    }
    
    
    public function trafalgarPropertyMangement(){
        
         $userName_property_mangement = 'Trafalgar Property Management';
       $password_property_mangement = 'b1e791f2-77ba-4891-9c5a-83a1a8ccc54c';
       $token_property_mangement = 'Basic '.base64_encode($userName_property_mangement . ':' . $password_property_mangement);
      
       $this->importDataFunction($token_property_mangement,$userName_property_mangement);
        return Redirect::back()->with('success', $userName_property_mangement.' Agents import successfully');
    }
    
    
     public function eastLondon(){
        
        $userName_east_london = 'Trafalgar Property Management East London';
       $password_east_london = 'a191f3a4-c618-4743-9c87-c6df426ca3f1';
       $token_east_london = 'Basic '.base64_encode($userName_east_london . ':' . $password_east_london);
    
     $this->importDataFunction($token_east_london,$userName_east_london);
        return Redirect::back()->with('success', $userName_east_london.' Agents import successfully');
    
    }
    
    // PRETORIA
    public function pretoria(){
        
         $userName_pretoria = 'Trafalgar Property Management Pretoria';
       $password_pretoria = '1da831e1-2d25-4ba1-9a4d-81d605d28130';
       $token_pretoria = 'Basic '.base64_encode($userName_pretoria . ':' . $password_pretoria);
        
       $this->importDataFunction($token_pretoria,$userName_pretoria);
        return Redirect::back()->with('success', $userName_pretoria.' Agents import successfully');
    }
    
    //CAPE TOWN
    public function capeTown(){
        
         $userName_cape_town = 'Trafalgar Property Management Cape Town';
       $password_cape_town = '66aa41d2-b9f3-4d7a-8b5b-ecca1d8ef08c';
       $token_cape_town = 'Basic '.base64_encode($userName_cape_town . ':' . $password_cape_town);
        
      $this->importDataFunction($token_cape_town,$userName_cape_town);
        return Redirect::back()->with('success', $userName_cape_town.' Agents import successfully');
    }
    
    //JOHANNESBURG
    public function johannesBurg(){
        
         $userName_Johannesburg = 'Trafalgar Property Management Johannesburg';
       $password_Johannesburg = '9389bc73-febc-47cd-8149-b4deac7b6e07';
       $token_Johannesburg = 'Basic '.base64_encode($userName_Johannesburg . ':' . $password_Johannesburg);
      
       $this->importDataFunction($token_Johannesburg,$userName_Johannesburg);
        return Redirect::back()->with('success', $userName_Johannesburg.' Agents import successfully');
        
    }
    
    // PORT ELIZABETH
    public function portElizabeth(){
        
         $userName_port_elizabeth = 'Trafalgar Port Elizabeth';
       $password_port_elizabeth = '830ba548-6f44-4d6c-9a89-f5666e30752d';
       $token_port_elizabeth = 'Basic '.base64_encode($userName_port_elizabeth . ':' . $password_port_elizabeth);
        
       
     $this->importDataFunction($token_port_elizabeth,$userName_port_elizabeth);
        return Redirect::back()->with('success', $userName_port_elizabeth.' Agents import successfully');
    }
    
    public function importDataFunction($token,$api_city_key_name){
        // URL
        $apiURL = 'https://sync.entegral.net/api/agents';

        $headers = [
           'Authorization' => $token
        ];
  
        $response = Http::withHeaders($headers)->get($apiURL);
        $statusCode = $response->status();
        $responseBody = json_decode($response->getBody(), true);
       // dd($responseBody);
      
        
        for($r=0; $r < count($responseBody); $r++){
           
            $checkAgentExist =   Agent::where('agent_id',$responseBody[$r]['clientAgentID'])->first();
            if(!empty($checkAgentExist)){
                 $insertAgentData =  Agent::find($checkAgentExist->id);
                 $insertAgentData->is_agent_new = 0 ;
                  // variable for checking new agent
                 $checkifAgentNew = 0;
            }else{
                 $insertAgentData =  new Agent;
                 $insertAgentData->is_agent_new = 1 ;
                  // variable for checking new agent
                 $checkifAgentNew = 1;
            }
            
  
            
             $insertAgentData->api_name = "Sync api" ;
            $insertAgentData->api_city_key = $api_city_key_name ;
            $insertAgentData->agent_id = $responseBody[$r]['clientAgentID'];
            //$insertAgentData->title = $responseBody[$r]['profile'];
            $insertAgentData->first_name = ucfirst(strtolower($responseBody[$r]['fullName']));
            $insertAgentData->last_name = ucfirst(strtolower($responseBody[$r]['lastName']));
            $insertAgentData->photo_url = $responseBody[$r]['photo'];
            $insertAgentData->role = $responseBody[$r]['role'];
            $insertAgentData->mobile_number = $responseBody[$r]['cell'];
            
            $agentSlug = str_replace(" ","-",$responseBody[$r]['fullName']." ".$responseBody[$r]['lastName']);
             $agentSlug = str_replace("--","-",$agentSlug);
            $insertAgentData->agent_name_slug = strtolower($agentSlug);
            
            $insertAgentData->email = $responseBody[$r]['email'];
            $insertAgentData->job_title = preg_replace('/^\s+|\s+$|\s+(?=\s)/', '',strtolower($responseBody[$r]['role']));
               $insertAgentData->profile = $responseBody[$r]['profile'];
            //$insertAgentData->birthday = $responseBody[$r]['birthday'];
            //$insertAgentData->added = $responseBody[$r]['timeStamp'];
            //$insertAgentData->updated = $responseBody[$r]['updated'];
            
            $insertAgentData->save();

        }
        
    }
}