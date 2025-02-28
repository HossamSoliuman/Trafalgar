<!DOCTYPE html>
<html>
<head>
 <title>Agent contact</title>
</head>
<body style="background-color: #e9ecef;">
    <center>
        <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
            <tbody>
                <tr style="height: 20px;"></tr>
                <tr>
                    <td align="center" valign="top">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width: 600px;font-family: Arial,sans-serif;line-height: 25px;font-size: 14px;background: #fff;">
                            <tbody>
                                <tr>
                                    <td>
                                        <table border="0" cellspacing="0" cellpadding="0" style="width: 100%;">
                                            <tbody>
                                                <tr style="height: 10px;"></tr>
                                                <tr>
                                                    <td colspan="3">
                                                        <table align="center" border="0" cellpadding="0"
                                                            cellspacing="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <img style="width: 150px;" src="{{ asset('front/images/logo.png') }}">
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr style="height: 10px;"></tr>
                                                <tr style="height: 2px;">
                                                    <td colspan="3" style="width: 100%;background-color: #e9ecef;"></td>
                                                </tr>
                                                <tr style="height: 15px;"></tr>
                                                <tr>
                                                    <td style="width: 10px;"></td>
                                                    <td>
                                                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="padding: 0px 5px;">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="font-size: 16px;font-weight: 600;">Hello , we have new results matching your alert.</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                    <td style="width: 10px;"></td>
                                                </tr>
                                                <tr style="height: 20px;"></tr>
                                                <tr style="background: #f5f5f5;">
                                                    <td colspan="3">
                                                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:100%;text-align:center;">
                                                            <tbody>
                                                                <tr style="height: 40px;"></tr>
                                                                <tr>
                                                                    <td style="font-size:28px;font-weight: 600;font-family: Arial,sans-serif;color: #6e0d16;">New Properties</td>
                                                                </tr>
                                                                <tr style="height: 25px;"></tr>
                                                                <tr>
                                                                    <td>
                                                                        @foreach($details as $detailss )
                                                                        <table align="center" border="0" cellpadding="6" cellspacing="0" style="width:100%;padding-top: 15px;">
                                                                            <tbody>
                                                                                <tr style="text-align:left;">
                                                                                    <td style="width: 250px;" rowspan="7"><img style="width: 250px;height: 200px;object-fit: cover;border-radius: 20px;vertical-align: middle;" src="{{ $detailss['news_featured_image'] }}" /></td>
                                                                                </tr>
                                                                                <tr style="text-align:left;display: block;">
                                                                                    <td style="line-height: normal;font-size: 20px;color: #6e0d16;font-weight: 600;padding: 4px 15px;">R {{ number_format($detailss['price'],0," "," ")  }}</td>
                                                                                </tr>
                                                                                <tr style="text-align:left;display: block;">
                                                                                    @if($detailss['complex_name'] != '' && $detailss['unit_number'] !="" )
                                                                                    @php $propertyCustomTitle = $detailss['unit_number']." ".$detailss['complex_name'] @endphp
                                                                                    @else
                                                                                      @php $propertyCustomTitle = $detailss['street_number']." ".$detailss['street_name'] @endphp
                                                                                    @endif
                                                                                    <td style="line-height: normal;padding: 4px 15px;font-size: 15px;">{{ $propertyCustomTitle }} </td>
                                                                                </tr>
                                                                                <!--<tr style="text-align:left;display: block;">-->
                                                                                <!--    <td style="line-height: normal;padding: 4px 15px;font-size: 15px;"><b></b></td>-->
                                                                                <!--</tr>-->
                                                                                <!--<tr style="text-align:left;display: block;">-->
                                                                                <!--    <td style="line-height: normal;padding: 4px 15px;font-size: 15px;"></td>-->
                                                                                <!--</tr>-->
                                                                                <tr style="text-align:left;">
                                                                                    <td style="line-height: normal;padding: 0px 15px;">
                                                                                        @if($detailss['bathrooms'] != "")                                           
                                                                                        <span style="padding-right: 15px;font-size: 16px;font-weight: 600;font-family: Arial,sans-serif;">
                                                                                           <img style="width: 17px;" src="{{ asset('front/images/icon_bath_new.png') }}" /> {{ $detailss['bathrooms'] }}
                                                                                        </span>
                                                                                        @endif()
                                                                                        
                                                                                        @if($detailss['bedrooms'] != "" )                                   
                                                                                        <span style="padding-right: 15px;font-size: 16px;font-weight: 600;font-family: Arial,sans-serif;">
                                                                                            <img style="width: 17px;" src="{{ asset('front/images/icon_bed_new.png') }}" /> {{ $detailss['bedrooms'] }}
                                                                                        </span>
                                                                                        @endif()
                                                                                         
                                                                                        @if($detailss['floor_size'] != "" && $detailss['floor_size'] != 0)                                         
                                                                                        <span style="font-size: 16px;font-weight: 600;font-family: Arial,sans-serif;">
                                                                                            <img style="width: 17px;" src="{{ asset('front/images/icon_floor_new.png') }}" /> {{ $detailss['floor_size'].$detailss['floor_size_unit'] }}
                                                                                        </span>
                                                                                        @endif()                                         
                                                                                    </td>
                                                                                </tr>
                                                                                <tr style="text-align:left;">
                                                                                      @php
                                $suburb = str_replace(" ","-",$detailss['suburb']);
                                $town = str_replace(" ","-",$detailss['town']);
                                $province = str_replace(" ","-",$detailss['province']);
                                $mandate_saletype = str_replace(" ","-",$detailss['mandate_saletype']);
                               $customUrl_detail_property = route('property-'.$mandate_saletype,['p_suburb'=>$suburb, 'p_town'=>$town, 'p_province'=>$province,'p_id'=>$detailss['id'],'p_ref'=>$detailss['property_id'] ]);
                               @endphp
                                                                                    <td style="line-height: normal;padding: 4px 15px;"><a style="font-weight: bold;color: #6e0d16;font-size: 15px;" href="{{ $customUrl_detail_property }}">View Property</a></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                        @endforeach
                                                                    </td>
                                                                </tr>
                                                                <tr style="height: 40px;"></tr>
                                                                <tr style="">
                                                                    <td>
                                                                       
                                                                        
                                       
                                       @if($emailAlertData['listing_type'] == 'commercial')
                                       
                                         @if($emailAlertData['property_for'] == 'for rent')
                                        
                                       @php    $customUrl = route('commercial-property-for-rent.multiple-areas',['city'=>$emailAlertData['region'].",".$emailAlertData['suburg'],'ptype'=>$emailAlertData['property_type'],'minprice' => $emailAlertData['minprice'],'maxprice' => $emailAlertData['maxprice']]);
                                       @endphp
                                        @endif
                                        
                                          @if($emailAlertData['property_for'] == 'for sale')
                                       @php      $customUrl = route('commercial-property-for-sale.multiple-areas',['city'=>$emailAlertData['region'].",".$emailAlertData['suburg'],'ptype'=>$emailAlertData['property_type'],'minprice' => $emailAlertData['minprice'],'maxprice' => $emailAlertData['maxprice']]);
                                       @endphp
                                           @endif
                                       
                                       @endif
                                       
                                       <!--- residential  code--->
                                        @if($emailAlertData['listing_type'] == 'residential')
                                        
                                         @if($emailAlertData['property_for'] == 'for rent')
                                       @php       $customUrl = route('to-rent.multiple-areas',['city'=>$emailAlertData['region'].",".$emailAlertData['suburg'],'ptype'=>$emailAlertData['property_type'],'minprice' => $emailAlertData['minprice'],'maxprice' => $emailAlertData['maxprice']]);
                                       @endphp
                                        @endif
                                        
                                         @if($emailAlertData['property_for'] == 'for sale')
                                        @php     $customUrl = route('for-sale.multiple-areas',['city'=>$emailAlertData['region'].",".$emailAlertData['suburg'],'ptype'=>$emailAlertData['property_type'],'minprice' => $emailAlertData['minprice'],'maxprice' => $emailAlertData['maxprice']]); @endphp
                                           @endif
                                        
                                        
                                       @endif
                                        
                                      
                                     
                                       
                                         
                                                                        <a href="{{ $customUrl }}" style="background: #6e0d16;color: #fff;height: 50px;width: 250px;display: inline-block;line-height: 50px;text-decoration: none;font-size: 15px;">View matching properties</a>
                                                                    </td>
                                                                </tr>
                                                                <tr style="height: 40px;"></tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                    
                                                </tr>
                                                <tr style="height: 15px;"></tr>
                                                <tr>
                                                    <td colspan="3" style="text-align:right;padding: 0px 12px;">Click here to <a target="_blank" href="{{ route('unsubscribe-property-alert',['email' => $userEmail ]) }}" style="color:#690b10;font-weight: 500;">unsubscribe </a>property alert</td>
                                                </tr>
                                                <tr style="height: 15px;"></tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr style="height: 2px;">
                                    <td colspan="3" style="width: 100%;background-color: #e9ecef;"></td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <table align="center" border="0" cellpadding="0"
                                            cellspacing="0">
                                            <tbody>
                                                <tr style="height: 10px;"></tr>
                                                <tr>
                                                    <td style="font-weight: bold;color: #6e0d16;">
                                                        Copyright © 2022 Trafalgar Property.
                                                    </td>
                                                </tr>
                                                <tr style="height: 10px;"></tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr style="height: 3px;">
                                    <td colspan="3" style="width: 100%;background-color: #6e0d16;"></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </center>
</body>
</html> 