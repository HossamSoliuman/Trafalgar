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
                                              <th style="padding: 8px;text-align: left;width: 50%;">Property ID :</th>
                                              <td style="padding: 8px;">@if(isset($details['property_id'])) {{ $details['property_id'] }} @endif</th>
                                            </tr>
                                            <tr style="border-bottom: 1px solid #ddd;">
                                              <th style="padding: 8px;text-align: left;width: 50%;">Property Name :</th>
                                              <td style="padding: 8px;">@if(isset($details['property_name'])) {{ $details['property_name'] }} @endif</td>
                                            </tr>
                                            <tr style="border-bottom: 1px solid #ddd;">
                                              <th style="padding: 8px;text-align: left;width: 50%;">Property City :</th>
                                              <td style="padding: 8px;">@if(isset($details['property_city'])) {{ $details['property_city'] }} @endif</td>
                                            </tr>
                                            <tr style="border-bottom: 1px solid #ddd;">
                                              <th style="padding: 8px;text-align: left;width: 50%;">Property Suburb :</th>
                                              <td style="padding: 8px;">@if(isset($details['property_suburb'])) {{ $details['property_suburb'] }} @endif</td>
                                            </tr>
                                            <tr style="border-bottom: 1px solid #ddd;">
                                              <th style="padding: 8px;text-align: left;width: 50%;">Garage / Under Cover Bay:</th>
                                              <td style="padding: 8px;">@if(isset($details['property_garage'])) {{ $details['property_garage'] }} @endif</td>
                                            </tr>
                                            <tr style="border-bottom: 1px solid #ddd;">
                                              <th style="padding: 8px;text-align: left;width: 50%;">Open Bay:</th>
                                              <td style="padding: 8px;">@if(isset($details['property_open_bay'])) {{ $details['property_open_bay'] }} @endif</td>
                                            </tr>
                                            <tr style="border-bottom: 1px solid #ddd;">
                                              <th style="padding: 8px;text-align: left;width: 50%;">Occupation Date:</th>
                                              <td style="padding: 8px;">@if(isset($details['property_occupation_date'])) {{ $details['property_occupation_date'] }} @endif</td>
                                            </tr>
                                            <tr style="border-bottom: 1px solid #ddd;">
                                              <th style="padding: 8px;text-align: left;width: 50%;">Lease term:</th>
                                              <td style="padding: 8px;"> @if(isset($details['property_lease_term'])) {{ $details['property_lease_term'] }} @endif</td>
                                            </tr>
                                            <tr style="border-bottom: 1px solid #ddd;">
                                              <th style="padding: 8px;text-align: left;width: 50%;">Rental:</th>
                                              <td style="padding: 8px;">@if(isset($details['property_rental'])) {{ $details['property_rental'] }} @endif</td>
                                            </tr>
                                            <tr>
                                              <th style="padding: 8px;text-align: left;width: 50%;vertical-align: baseline;">Property Details:</th>
                                              <td style="padding: 8px;">@if(isset($details['property_detail'])) {{ $details['property_detail'] }} @endif</td>
                                            </tr>
                                          </tbody>
                                        </table>
                                     </td>
                                   </tr>
                                   <tr>
                                      <td>
                                         <h4 style="display:inline-block;font-size: 18px;font-family: Georgia;color: #6e0d16;">Personal Information</h4>
                                      </td>
                                   </tr>
                                   <tr style="background: #f5f5f5;font-family: Arial;">
                                    <td colspan="3" style="display: block;">
                                       <table style="width: 100%;">
                                          <tbody>
                                             <tr>
                                                <td colspan="3">
                                                   <table style="border-collapse: collapse;margin: 0;padding: 0;width: 100%;text-align: left;font-size: 14px;">
                                                      <tbody>
                                                         <tr style="border-bottom: 1px solid #ddd;">
                                                            <th style="padding: 8px;text-align: left;width: 50%;">
                                                               ID Number (if S.A Citizen) :</th>
                                                            <td style="padding: 8px;">@if(isset($details['personal_id_number'])) {{ $details['personal_id_number'] }} @endif</td>
                                                         </tr>
                                                         <tr style="border-bottom: 1px solid #ddd;">
                                                            <th style="padding: 8px;text-align: left;width: 50%;">
                                                               Resident Permit No (if not S.A Citizen) :</th>
                                                            <td style="padding: 8px;">@if(isset($details['personal_resident_permit_no'])) {{ $details['personal_resident_permit_no'] }} @endif</td>
                                                         </tr>
                                                         <tr style="border-bottom: 1px solid #ddd;">
                                                            <th style="padding: 8px;text-align: left;width: 50%;">
                                                               Passport Number :</th>
                                                            <td style="padding: 8px;">@if(isset($details['personal_passport_number'])) {{ $details['personal_passport_number'] }} @endif</td>
                                                         </tr>
                                                         <tr style="border-bottom: 1px solid #ddd;">
                                                            <th style="padding: 8px;text-align: left;width: 50%;">
                                                               Nationality :</th>
                                                            <td style="padding: 8px;">@if(isset($details['personal_nationality'])) {{ $details['personal_nationality'] }} @endif</td>
                                                         </tr>
                                                         <tr style="border-bottom: 1px solid #ddd;">
                                                            <th style="padding: 8px;text-align: left;width: 50%;">
                                                               Visa Expiry Date :</th>
                                                            <td style="padding: 8px;">@if(isset($details['personal_visa_exp_date'])) {{ $details['personal_visa_exp_date'] }} @endif</td>
                                                         </tr>
                                                         <tr style="border-bottom: 1px solid #ddd;">
                                                            <th style="padding: 8px;text-align: left;width: 50%;">
                                                               Title :</th>
                                                            <td style="padding: 8px;">@if(isset($details['personal_title'])) {{ $details['personal_title'] }} @endif</td>
                                                         </tr>
                                                         <tr style="border-bottom: 1px solid #ddd;">
                                                            <th style="padding: 8px;text-align: left;width: 50%;">
                                                               First Name :</th>
                                                            <td style="padding: 8px;">@if(isset($details['personal_first_name'])) {{ $details['personal_first_name'] }} @endif</td>
                                                         </tr>
                                                         <tr style="border-bottom: 1px solid #ddd;">
                                                            <th style="padding: 8px;text-align: left;width: 50%;">
                                                               Surname :</th>
                                                            <td style="padding: 8px;">@if(isset($details['personal_surname'])) {{ $details['personal_surname'] }} @endif</td>
                                                         </tr>
                                                         <tr style="border-bottom: 1px solid #ddd;">
                                                            <th style="padding: 8px;text-align: left;width: 50%;">
                                                               Date of Birth:*(yyyy/mm/dd) :</th>
                                                            <td style="padding: 8px;">@if(isset($details['personal_dob'])) {{ $details['personal_dob'] }} @endif</td>
                                                         </tr>
                                                         <tr style="border-bottom: 1px solid #ddd;">
                                                            <th style="padding: 8px;text-align: left;width: 50%;">
                                                               Residential Address :</th>
                                                            <td style="padding: 8px;">@if(isset($details['personal_residential_address'])) {{ $details['personal_residential_address'] }} @endif</td>
                                                         </tr>
                                                         <tr style="border-bottom: 1px solid #ddd;">
                                                            <th style="padding: 8px;text-align: left;width: 50%;">
                                                               Province :</th>
                                                            <td style="padding: 8px;">@if(isset($details['personal_province'])) {{ $details['personal_province'] }} @endif</td>
                                                         </tr>
                                                         <tr style="border-bottom: 1px solid #ddd;">
                                                            <th style="padding: 8px;text-align: left;width: 50%;">
                                                               Postal Address :</th>
                                                            <td style="padding: 8px;">@if(isset($details['personal_postal_address'])) {{ $details['personal_postal_address'] }} @endif</td>
                                                         </tr>
                                                         <tr style="border-bottom: 1px solid #ddd;">
                                                            <th style="padding: 8px;text-align: left;width: 50%;">
                                                               Postal Code :</th>
                                                            <td style="padding: 8px;">@if(isset($details['personal_postal_code'])) {{ $details['personal_postal_code'] }} @endif</td>
                                                         </tr>
                                                         <tr style="border-bottom: 1px solid #ddd;">
                                                            <th style="padding: 8px;text-align: left;width: 50%;">
                                                               Email :</th>
                                                            <td style="padding: 8px;">@if(isset($details['personal_email'])) {{ $details['personal_email'] }} @endif</td>
                                                         </tr>
                                                         <tr style="border-bottom: 1px solid #ddd;">
                                                            <th style="padding: 8px;text-align: left;width: 50%;">
                                                               Cell No. :</th>
                                                            <td style="padding: 8px;">@if(isset($details['personal_cell_no'])) {{ $details['personal_cell_no'] }} @endif</td>
                                                         </tr>
                                                         <tr style="border-bottom: 1px solid #ddd;">
                                                            <th style="padding: 8px;text-align: left;width: 50%;">
                                                               Tel No. :</th>
                                                            <td style="padding: 8px;">@if(isset($details['personal_tel_no'])) {{ $details['personal_tel_no'] }} @endif</td>
                                                         </tr>
                                                         <tr style="border-bottom: 1px solid #ddd;">
                                                            <th style="padding: 8px;text-align: left;width: 50%;">
                                                               Next of Kin :</th>
                                                            <td style="padding: 8px;">@if(isset($details['personal_next_of_kin'])) {{ $details['personal_next_of_kin'] }} @endif</td>
                                                         </tr>
                                                         <tr style="border-bottom: 1px solid #ddd;">
                                                            <th style="padding: 8px;text-align: left;width: 50%;">
                                                               Address :</th>
                                                            <td style="padding: 8px;">@if(isset($details['personal_address'])) {{ $details['personal_address'] }} @endif</td>
                                                         </tr>
                                                         
                                                          <tr style="border-bottom: 1px solid #ddd;">
                                                            <th style="padding: 8px;text-align: left;width: 50%;">
                                                              Postal Code :</th>
                                                            <td style="padding: 8px;">@if(isset($details['personal_postal_code_2'])) {{ $details['personal_postal_code_2'] }} @endif</td>
                                                         </tr>
                                                         
                                                         <tr style="border-bottom: 1px solid #ddd;">
                                                            <th style="padding: 8px;text-align: left;width: 50%;">
                                                               Marital Status :</th>
                                                            <td style="padding: 8px;">@if(isset($details['personal_marital_status'])) {{ $details['personal_marital_status'] }} @endif</td>
                                                         </tr>
                                                         <tr style="border-bottom: 1px solid #ddd;">
                                                            <th style="padding: 8px;text-align: left;width: 50%;">
                                                               Monthly Salary (Gross) :</th>
                                                            <td style="padding: 8px;">@if(isset($details['personal_monthly_gross_salary'])) {{ $details['personal_monthly_gross_salary'] }} @endif</td>
                                                         </tr>
                                                         <tr style="border-bottom: 1px solid #ddd;">
                                                            <th style="padding: 8px;text-align: left;width: 50%;">
                                                               Monthly Salary (Net) :</th>
                                                            <td style="padding: 8px;">@if(isset($details['personal_monthly_net_salary'])) {{ $details['personal_monthly_net_salary'] }} @endif</td>
                                                         </tr>
                                                         <tr style="border-bottom: 1px solid #ddd;">
                                                            <th style="padding: 8px;text-align: left;width: 50%;">
                                                               Monthly instalment :</th>
                                                            <td style="padding: 8px;">@if(isset($details['personal_monthly_instalment'])) {{ $details['personal_monthly_instalment'] }} @endif</td>
                                                         </tr>
                                                         <tr>
                                                            <th style="padding: 8px;text-align: left;width: 50%;">
                                                               Income Tax Registration Number :</th>
                                                            <td style="padding: 8px;">@if(isset($details['personal_income_tax_reg_number'])) {{ $details['personal_income_tax_reg_number'] }} @endif</td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </td>
                                   </tr>
                                   <tr>
                                       <td>
                                          <h4 style="display:inline-block;font-size: 18px;font-family: Georgia;color: #6e0d16;">Previous Landlord Information:</h4>
                                       </td>
                                    </tr>
                                    <tr style="background: #f5f5f5;font-family: Arial;">
                                       <td style="display: block;">
                                          <table style="width: 100%;">
                                             <tbody>
                                                <tr>
                                                   <td>
                                                      <table style="border-collapse: collapse;margin: 0;padding: 0;width: 100%;text-align: left;font-size: 14px;">
                                                         <tbody>
                                                            <tr style="border-bottom: 1px solid #ddd;">
                                                               <th style="padding: 8px;text-align: left;width: 50%;">
                                                                  Present Lessor / Agent :</th>
                                                               <td style="padding: 8px;">@if(isset($details['landlord_present_lessor'])) {{ $details['landlord_present_lessor'] }} @endif</td>
                                                            </tr>
                                                            <tr style="border-bottom: 1px solid #ddd;">
                                                               <th style="padding: 8px;text-align: left;width: 50%;">
                                                                  Tel No :</th>
                                                               <td style="padding: 8px;">@if(isset($details['landlord_tel_no'])) {{ $details['landlord_tel_no'] }} @endif</td>
                                                            </tr>
                                                            <tr style="border-bottom: 1px solid #ddd;">
                                                               <th style="padding: 8px;text-align: left;width: 50%;">
                                                                  Cell No :</th>
                                                               <td style="padding: 8px;">@if(isset($details['landlord_cell_no'])) {{ $details['landlord_cell_no'] }} @endif</td>
                                                            </tr>
                                                            <tr style="border-bottom: 1px solid #ddd;">
                                                               <th style="padding: 8px;text-align: left;width: 50%;">
                                                                  Rent Paid :</th>
                                                               <td style="padding: 8px;">@if(isset($details['landlord_rent_paid'])) {{ $details['landlord_rent_paid'] }} @endif</td>
                                                            </tr>
                                                            <tr style="border-bottom: 1px solid #ddd;">
                                                               <th style="padding: 8px;text-align: left;width: 50%;">
                                                                  Years in Occupation :</th>
                                                               <td style="padding: 8px;">@if(isset($details['landlord_year_in_occupation'])) {{ $details['landlord_year_in_occupation'] }} @endif</td>
                                                            </tr>
                                                            <tr style="border-bottom: 1px solid #ddd;">
                                                               <th style="padding: 8px;text-align: left;width: 50%;">
                                                                  Personal Reference :</th>
                                                               <td style="padding: 8px;">@if(isset($details['landlord_personal_reference'])) {{ $details['landlord_personal_reference'] }} @endif</td>
                                                            </tr>
                                                            <tr>
                                                               <th style="padding: 8px;text-align: left;width: 50%;">
                                                                  Relation :</th>
                                                               <td style="padding: 8px;">@if(isset($details['landlord_relation'])) {{ $details['landlord_relation'] }} @endif</td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                   </td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </td>
                                    </tr>
                                   <tr>
                                       <td>
                                          <h4 style="display:inline-block;font-size: 18px;font-family: Georgia;color: #6e0d16;">Employment Information:</h4>
                                       </td>
                                    </tr>
                                    <tr style="background: #f5f5f5;font-family: Arial;">
                                       <td style="display: block;">
                                          <table style="width: 100%;">
                                             <tbody>
                                                <tr>
                                                   <td>
                                                      <table style="border-collapse: collapse;margin: 0;padding: 0;width: 100%;text-align: left;font-size: 14px;">
                                                         <tbody>
                                                            <tr style="border-bottom: 1px solid #ddd;">
                                                               <th style="padding: 8px;text-align: left;width: 50%;">
                                                                  Employer's Name :</th>
                                                               <td style="padding: 8px;">@if(isset($details['emp_info_employer_name'])) {{ $details['emp_info_employer_name'] }} @endif</td>
                                                            </tr>
                                                            <tr style="border-bottom: 1px solid #ddd;">
                                                               <th style="padding: 8px;text-align: left;width: 50%;">
                                                                  Employer's Address :</th>
                                                               <td style="padding: 8px;">@if(isset($details['emp_info_employer_address'])) {{ $details['emp_info_employer_address'] }} @endif</td>
                                                            </tr>
                                                            <tr style="border-bottom: 1px solid #ddd;">
                                                               <th style="padding: 8px;text-align: left;width: 50%;">
                                                                  Occupation :</th>
                                                               <td style="padding: 8px;">@if(isset($details['emp_info_occupation'])) {{ $details['emp_info_occupation'] }} @endif</td>
                                                            </tr>
                                                            <tr style="border-bottom: 1px solid #ddd;">
                                                               <th style="padding: 8px;text-align: left;width: 50%;">
                                                                  Paye/Tax No :</th>
                                                               <td style="padding: 8px;">@if(isset($details['emp_info_paye_tax_no'])) {{ $details['emp_info_paye_tax_no'] }} @endif</td>
                                                            </tr>
                                                            <tr style="border-bottom: 1px solid #ddd;">
                                                               <th style="padding: 8px;text-align: left;width: 50%;">
                                                                  Period Employed :</th>
                                                               <td style="padding: 8px;">@if(isset($details['emp_info_period_employed'])) {{ $details['emp_info_period_employed'] }} @endif</td>
                                                            </tr>
                                                            <tr style="border-bottom: 1px solid #ddd;">
                                                               <th style="padding: 8px;text-align: left;width: 50%;">
                                                                  Tel No / Ext No :</th>
                                                               <td style="padding: 8px;">@if(isset($details['emp_info_tel_no'])) {{ $details['emp_info_tel_no'] }} @endif</td>
                                                            </tr>
                                                            <tr style="border-bottom: 1px solid #ddd;">
                                                               <th style="padding: 8px;text-align: left;width: 50%;">
                                                                  Fax No :</th>
                                                               <td style="padding: 8px;">@if(isset($details['emp_info_fax_no'])) {{ $details['emp_info_fax_no'] }} @endif</td>
                                                            </tr>
                                                            <tr>
                                                               <th style="padding: 8px;text-align: left;width: 50%;">
                                                                  Contact Name :</th>
                                                               <td style="padding: 8px;">@if(isset($details['emp_info_contact_name'])) {{ $details['emp_info_contact_name'] }} @endif</td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                   </td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </td>
                                    </tr>
                                    
                                        @if(isset($details['propertyApplingOccupants']))
                                        @php  $propertyApplingOccupants = $details['propertyApplingOccupants']; @endphp
                                        @foreach($propertyApplingOccupants as $propertyApplingOccupant)
                                        <tr>
                                       <td>
                                          <h4 style="display:inline-block;font-size: 18px;font-family: Georgia;color: #6e0d16;">Occupants:</h4>
                                       </td>
                                    </tr>
                                    <tr style="background: #f5f5f5;font-family: Arial;;">
                                       <td style="display: block;">
                                          <table style="width: 100%;">
                                             <tbody>
                                                <tr>
                                                   <td>
                                                      <table style="border-collapse: collapse;margin: 0;padding: 0;width: 100%;text-align: left;font-size: 14px;">
                                                         <tbody>
                                                            <tr style="border-bottom: 1px solid #ddd;">
                                                               <th style="padding: 8px;text-align: left;width: 50%;">
                                                                  No. of Persons to Occupy Unit :</th>
                                                               <td style="padding: 8px;">{{ $propertyApplingOccupant['occupants_no_of_person_occupy_unit'] }}</td>
                                                            </tr>
                                                            <tr style="border-bottom: 1px solid #ddd;">
                                                               <th style="padding: 8px;text-align: left;width: 50%;">
                                                                  ID No :</th>
                                                               <td style="padding: 8px;">{{ $propertyApplingOccupant['occupants_id_no'] }}</td>
                                                            </tr>
                                                            <tr style="border-bottom: 1px solid #ddd;">
                                                               <th style="padding: 8px;text-align: left;width: 50%;">
                                                                  Male / Female :</th>
                                                               <td style="padding: 8px;">{{ $propertyApplingOccupant['occupants_gender'] }}</td>
                                                            </tr>
                                                            <tr style="border-bottom: 1px solid #ddd;">
                                                               <th style="padding: 8px;text-align: left;width: 50%;">
                                                                  Title :</th>
                                                               <td style="padding: 8px;">{{ $propertyApplingOccupant['occupants_title'] }}</td>
                                                            </tr>
                                                            <tr style="border-bottom: 1px solid #ddd;">
                                                               <th style="padding: 8px;text-align: left;width: 50%;">
                                                                  Name :</th>
                                                               <td style="padding: 8px;">{{ $propertyApplingOccupant['occupants_name'] }}</td>
                                                            </tr>
                                                            <tr style="border-bottom: 1px solid #ddd;">
                                                               <th style="padding: 8px;text-align: left;width: 50%;">
                                                                  Surname :</th>
                                                               <td style="padding: 8px;">{{ $propertyApplingOccupant['occupants_surname'] }}</td>
                                                            </tr>
                                                            <tr style="border-bottom: 1px solid #ddd;">
                                                               <th style="padding: 8px;text-align: left;width: 50%;">
                                                                  Cell No :</th>
                                                               <td style="padding: 8px;">{{ $propertyApplingOccupant['occupants_cell_no'] }}</td>
                                                            </tr>
                                                            <tr style="border-bottom: 1px solid #ddd;">
                                                               <th style="padding: 8px;text-align: left;width: 50%;">
                                                                  Work Tel No :</th>
                                                               <td style="padding: 8px;">{{ $propertyApplingOccupant['occupants_work_tel_no'] }}</td>
                                                            </tr>
                                                            <tr>
                                                               <th style="padding: 8px;text-align: left;width: 50%;">
                                                                  Email :</th>
                                                               <td style="padding: 8px;">{{ $propertyApplingOccupant['occupants_email'] }}</td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                   </td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                    <tr>
                                       <td>
                                          <h4 style="display:inline-block;font-size: 18px;font-family: Georgia;color: #6e0d16;">Financial Status:</h4>
                                       </td>
                                    </tr>
                                    <tr style="background: #f5f5f5;font-family: Arial;">
                                       <td style="display: block;">
                                          <table style="width: 100%;">
                                             <tbody>
                                                <tr>
                                                   <td>
                                                      <table style="border-collapse: collapse;margin: 0;padding: 0;width: 100%;text-align: left;font-size: 14px;">
                                                         <tbody>
                                                            <tr style="border-bottom: 1px solid #ddd;">
                                                               <th style="padding: 8px;text-align: left;width: 50%;">
                                                                  Do you have any judgements? :</th>
                                                               <td style="padding: 8px;">@if(isset($details['financial_you_have_judgements'])) {{ $details['financial_you_have_judgements'] }} @endif</td>
                                                            </tr>
                                                            <tr>
                                                               <th style="padding: 8px;text-align: left;width: 50%;">
                                                                  Details :</th>
                                                               <td style="padding: 8px;">@if(isset($details['financial_details'])) {{ $details['financial_details'] }} @endif</td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                   </td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <h4 style="display:inline-block;font-size: 18px;font-family: Georgia;color: #6e0d16;">Bank Details:</h4>
                                       </td>
                                    </tr>
                                    <tr style="background: #f5f5f5;font-family: Arial;">
                                       <td style="display: block;">
                                          <table style="width: 100%;">
                                             <tbody>
                                                <tr>
                                                   <td>
                                                      <table style="border-collapse: collapse;margin: 0;padding: 0;width: 100%;text-align: left;font-size: 14px;">
                                                         <tbody>
                                                            <tr style="border-bottom: 1px solid #ddd;">
                                                               <th style="padding: 8px;text-align: left;width: 50%;">
                                                                  Bank :</th>
                                                               <td style="padding: 8px;">@if(isset($details['bank'])) {{ $details['bank'] }} @endif</td>
                                                            </tr>
                                                            <tr style="border-bottom: 1px solid #ddd;">
                                                               <th style="padding: 8px;text-align: left;width: 50%;">
                                                                  Branch Name :</th>
                                                               <td style="padding: 8px;">@if(isset($details['bank_branch_name'])) {{ $details['bank_branch_name'] }} @endif</td>
                                                            </tr>
                                                            <tr style="border-bottom: 1px solid #ddd;">
                                                               <th style="padding: 8px;text-align: left;width: 50%;">
                                                                  Branch Code :</th>
                                                               <td style="padding: 8px;">@if(isset($details['bank_branch_code'])) {{ $details['bank_branch_code'] }} @endif</td>
                                                            </tr>
                                                            <tr>
                                                               <th style="padding: 8px;text-align: left;width: 50%;">
                                                                  Account Number :</th>
                                                               <td style="padding: 8px;">@if(isset($details['bank_account_number'])) {{ $details['bank_account_number'] }} @endif</td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                   </td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </td>
                                    </tr>

                                   <tr style="padding: 5px;font-family: Georgia;border: 1px solid #ddd;">
                                      <td>
                                         <table style="border-collapse: collapse;margin: 0;padding: 0;width: 100%;font-size: 16px;">
                                            <tbody>
                                             <tr>
                                                <td colspan="2" style="height: 10px;"></td>
                                             </tr>
                                               <tr>
                                                  <td style="padding: 8px 13px;text-align: right;width: 50%;"><b>Agent :</b></td>
                                                  <td style="padding: 8px;color: #6e0d16;"><b>@if(isset($details['get_agent'])) {{ $details['get_agent'] }} @endif</b></td>
                                               </tr>
                                             <tr>
                                                <td colspan="2" style="height: 10px;"></td>
                                             </tr>
                                               <tr>
                                                   <td colspan="2" style="height: 7px;background-color: #6e0d16;width: 100%;"></td>
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