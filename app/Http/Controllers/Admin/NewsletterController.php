<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Excel;
use App\Exports\NewsLetterSignUpExport;
use App\Models\NewsLetterSignUp;

class NewsletterController extends Controller
{
    public function index(){
        $newsLetterSignUp = NewsLetterSignUp::orderBy('created_at','desc')->paginate(20);
        return view('admin.pages.newsLetterSubscriberList',compact('newsLetterSignUp'));
    }
    
    
      public function display($id)
    {
    
       $propertySolution = NewsLetterSignUp::find($id);
       $propertySolution->is_active = 1;
       $propertySolution->save();
       $url = route('admin.news-letter-subscriber');
        return redirect($url)->with('success', 'newsletter subscribed successfully');
    }
    
    
      public function notDisplay($id)
    {
         $propertySolution = NewsLetterSignUp::find($id);
       $propertySolution->is_active = 0;
       $propertySolution->save();
         $url = route('admin.news-letter-subscriber');
        return redirect($url)->with('success', 'newsletter unsubscribed successfully');
    }
    
     public function export() 
    {
        
        $data =  NewsLetterSignUp::selectRaw('id,user_name,user_email,is_active,created_at')->get();
        
        foreach($data as $key => $value){
            
			if($data[$key]->is_active == 1){
                $data[$key]->is_active = "Yes";
            }
            if($data[$key]->is_active == "0"){
                 $data[$key]->is_active = "No";
            }
            
           
        }
       
       $cnt = 1;
        $filename = 'newsletter_'.strtotime("now").'.xls';
         $output ="";
        $output .= '
   <table  border="1">  
                    <tr>  
                         <th>S.No</th>  
                         <th>Name</th>  
                         <th>Email</th>  
       <th>Subscribed</th>
       <th>Date</th>
                    </tr>
  ';
  foreach($data as $row)
  {
   $output .= '
    <tr>  
     <td>'.$cnt.'</td>
                         <td>'.$row["user_name"].'</td>  
                         <td>'.$row["user_email"].'</td>  
                         <td>'.$row["is_active"].'</td>  
       <td>'.$row["created_at"].'</td>  
      
                    </tr>
   ';
   $cnt++;
  }
  $output .= '</table>';
//   header("Content-type: application/octet-stream");
  header('Content-Type: application/vnd.ms-excel');
header("Content-Disposition: attachment; filename=".$filename);
header("Pragma: no-cache");
header("Expires: 0");

  echo $output;
	       // return Excel::download(new NewsLetterSignUpExport, 'newsletter_'.strtotime("now").'.xlsx');
    }
}
