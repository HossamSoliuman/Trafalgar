<!DOCTYPE html>
<html>

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Email Template</title>
   <style>
      td {
         padding: 0;
         margin: 0;
      }
   </style>
</head>

<body>
   <center>

    <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
        <tbody>
           <tr>
              <td align="center" valign="top">
                 <!-- BEGIN TEMPLATE // -->
                 <table align="center" border="0" cellpadding="0" cellspacing="0" style="width: 600px;">
                    <tbody>
                       <tr>
                          <td>
                             <table border="0" cellspacing="0" cellpadding="0" style="width: 100%;">
                                <tbody>
                                   <tr>
                                      <td colspan="3">
                                         <table style="width: 100%;">
                                            <tbody>
                                                <tr>
                                                   <td style="height: 7px;background-color: #6e0d16;width: 100%;"></td>
                                                </tr>
                                                <tr>
                                                   <td style="height: 10px;"></td>
                                                </tr>
                                                <tr>
                                                   <td style="text-align: center;">
                                                      <img src="https://webplan.live/front/images/logo.png" alt="">
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td style="height: 10px;"></td>
                                                </tr>
                                            </tbody>
                                         </table>
                                      </td>
                                   </tr>
                                   <tr style="background: #f5f5f5;font-family: Arial;">
                                    <td colspan="3">
                                       <table style="border-collapse: collapse;margin: 0;padding: 0;width: 100%;text-align: left;font-size: 14px;">
                                          <tbody>
                                              <tr style="border-bottom: 1px solid #ddd;">
                                              <th style="padding: 8px;text-align: left;width: 50%;">Job For Applied:</th>
                                              <td style="padding: 8px;">@if(isset($details['job'])) {{ $details['job']['job_title'] }} @endif</th>
                                            </tr>
                                            <tr style="border-bottom: 1px solid #ddd;">
                                              <th style="padding: 8px;text-align: left;width: 50%;">Full name :</th>
                                              <td style="padding: 8px;">@if(isset($details['first_name'])) {{ $details['title']." ".$details['first_name']." ".$details['sur_name'] }} @endif</th>
                                            </tr>
                                            <tr style="border-bottom: 1px solid #ddd;">
                                              <th style="padding: 8px;text-align: left;width: 50%;">South African Resident :</th>
                                              <td style="padding: 8px;">@if(isset($details['south_african_resident'])) {{ $details['south_african_resident'] }} @endif</td>
                                            </tr>
                                            <tr style="border-bottom: 1px solid #ddd;">
                                              <th style="padding: 8px;text-align: left;width: 50%;">National ID Number :</th>
                                              <td style="padding: 8px;">@if(isset($details['national_id_number'])) {{ $details['national_id_number'] }} @endif</td>
                                            </tr>
                                            <tr style="border-bottom: 1px solid #ddd;">
                                              <th style="padding: 8px;text-align: left;width: 50%;">Home Language :</th>
                                              <td style="padding: 8px;">@if(isset($details['home_language'])) {{ $details['home_language'] }} @endif</td>
                                            </tr>
                                            <tr style="border-bottom: 1px solid #ddd;">
                                              <th style="padding: 8px;text-align: left;width: 50%;">Gender:</th>
                                              <td style="padding: 8px;">@if(isset($details['gender'])) {{ $details['gender'] }} @endif</td>
                                            </tr>
                                            <tr style="border-bottom: 1px solid #ddd;">
                                              <th style="padding: 8px;text-align: left;width: 50%;">Address:</th>
                                              <td style="padding: 8px;">@if(isset($details['address'])) {{ $details['address'] }} @endif</td>
                                            </tr>
                                            <tr style="border-bottom: 1px solid #ddd;">
                                              <th style="padding: 8px;text-align: left;width: 50%;">Country:</th>
                                              <td style="padding: 8px;">@if(isset($details['country'])) {{ $details['country'] }} @endif</td>
                                            </tr>
                                            <tr style="border-bottom: 1px solid #ddd;">
                                              <th style="padding: 8px;text-align: left;width: 50%;">City:</th>
                                              <td style="padding: 8px;"> @if(isset($details['city'])) {{ $details['city'] }} @endif</td>
                                            </tr>
                                            <tr style="border-bottom: 1px solid #ddd;">
                                              <th style="padding: 8px;text-align: left;width: 50%;">Postal Code:</th>
                                              <td style="padding: 8px;">@if(isset($details['postal_code'])) {{ $details['postal_code'] }} @endif</td>
                                            </tr>
                                            <tr style="border-bottom: 1px solid #ddd;">
                                              <th style="padding: 8px;text-align: left;width: 50%;">Address Type:</th>
                                              <td style="padding: 8px;">@if(isset($details['address_type'])) {{ $details['address_type'] }} @endif</td>
                                            </tr>
                                              <tr style="border-bottom: 1px solid #ddd;">
                                              <th style="padding: 8px;text-align: left;width: 50%;">Province:</th>
                                              <td style="padding: 8px;">@if(isset($details['province'])) {{ $details['province'] }} @endif</td>
                                            </tr>
                                              <tr style="border-bottom: 1px solid #ddd;">
                                              <th style="padding: 8px;text-align: left;width: 50%;">Telephone Number (Home):</th>
                                              <td style="padding: 8px;">@if(isset($details['tel_number_home'])) {{ $details['tel_number_home'] }} @endif</td>
                                            </tr>
                                              <tr style="border-bottom: 1px solid #ddd;">
                                              <th style="padding: 8px;text-align: left;width: 50%;">Telephone Number (Work):</th>
                                              <td style="padding: 8px;">@if(isset($details['tel_number_work'])) {{ $details['tel_number_work'] }} @endif</td>
                                            </tr>
                                              <tr style="border-bottom: 1px solid #ddd;">
                                              <th style="padding: 8px;text-align: left;width: 50%;">Cell Number:</th>
                                              <td style="padding: 8px;">@if(isset($details['cell_number'])) {{ $details['cell_number'] }} @endif</td>
                                            </tr>
                                              <tr style="border-bottom: 1px solid #ddd;">
                                              <th style="padding: 8px;text-align: left;width: 50%;">Email Address:</th>
                                              <td style="padding: 8px;">@if(isset($details['email_address'])) {{ $details['email_address'] }} @endif</td>
                                            </tr>
                                              <tr style="border-bottom: 1px solid #ddd;">
                                              <th style="padding: 8px;text-align: left;width: 50%;">Annual Package (Cost to Company):</th>
                                              <td style="padding: 8px;">@if(isset($details['annual_package'])) {{ $details['annual_package'] }} @endif</td>
                                            </tr>
                                             <tr >
                                              <th style="padding: 8px;text-align: left;width: 50%;">Applied on:</th>
                                              <td style="padding: 8px;">@if(isset($details['created_at'])) {{ $details['created_at'] }} @endif</td>
                                            </tr>
                                          </tbody>
                                        </table>
                                     </td>
                                   </tr>
                                   
                                </tbody>
                             </table>
                          </td>
                       </tr>
                       
                    </tbody>
                 </table>
                 <!-- // END TEMPLATE -->
              </td>
           </tr>
        </tbody>
     </table>
      
   </center>

</body>

</html>