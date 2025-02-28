<?php

namespace App\Exports;

use App\Models\NewsLetterSignUp;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class NewsLetterSignUpExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array {
        return [ "S.No","Name", "Email", "Subscribed","Date"];
      } 
    
    public function collection()
    {
        $data =  NewsLetterSignUp::selectRaw('id,user_name,user_email,is_active,created_at')->get();
        $sr = 1;
        foreach($data as $key => $value){
            
			if($data[$key]->is_active == 1){
                $data[$key]->is_active = "Yes";
            }
            if($data[$key]->is_active == "0"){
                 $data[$key]->is_active = "No";
            }
            
            $sr++;
        }
       
        return $data; 
		
    }
}
