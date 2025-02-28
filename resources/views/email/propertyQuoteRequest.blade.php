<!DOCTYPE html>
<html>
<head>
    
 <title>Property Management Quote Request</title>
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
                                                                    <td>
                                                                        <table border="1" cellpadding="5" cellspacing="0" style="border-collapse: collapse;border-color: #ddd;">
                                                                            <tbody>
                                          
                                                                                <tr>
                                                                                    <th style="text-align:left;padding-right:30px;background: #690b10;color: #fff;font-size: 15px;">Name:</th>
                                                                                    <td style="padding-left: 15px;font-size: 15px;">{{ ucfirst($details['name'])." ".ucfirst($details['surname']) }}</td>
                                                                                </tr>
                                                                                
                                                                                <tr>
                                                                                    <th style="text-align:left;padding-right:30px;background: #690b10;color: #fff;font-size: 15px;">Designation:</th>
                                                                                    <td style="padding-left: 15px;font-size: 15px;">{{ $details['designation'] }}</td>
                                                                                </tr>
                                                                                
                                                                                <tr>
                                                                                    <th style="text-align:left;padding-right:30px;background: #690b10;color: #fff;font-size: 15px;">Name of Scheme:</th>
                                                                                    <td style="padding-left: 15px;font-size: 15px;">{{ $details['name_of_scheme'] }}</td>
                                                                                </tr>
                                                                                
                                                                                <tr>
                                                                                    <th style="text-align:left;padding-right:30px;background: #690b10;color: #fff;font-size: 15px;">Property Address:</th>
                                                                                    <td style="padding-left: 15px;font-size: 15px;">{{ $details['property_address'] }}</td>
                                                                                </tr>
                                                                                
                                                                                
                                                                                <tr>
                                                                                    <th style="text-align:left;padding-right:30px;background: #690b10;color: #fff;font-size: 15px;">Property Suburb:</th>
                                                                                    <td style="padding-left: 15px;font-size: 15px;">{{ $details['property_suburb'] }}</td>
                                                                                </tr>
                                                                                
                                                                                
                                                                                                                          <tr>
                                                                                    <th style="text-align:left;padding-right:30px;background: #690b10;color: #fff;font-size: 15px;">Property City:</th>
                                                                                    <td style="padding-left: 15px;font-size: 15px;">{{ $details['property_city'] }}</td>
                                                                                </tr>
                                                                                
                                                                                
                                                                                
                                               
                                                                                
                                                                                
                                                                                
                                                                                
                                                                                <tr>
                                                                                    <th style="text-align:left;padding-right:30px;background: #690b10;color: #fff;font-size: 15px;">Email:</th>
                                                                                    <td style="padding-left: 15px;font-size: 15px;">{{ $details['email'] }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th style="text-align:left;padding-right:30px;background: #690b10;color: #fff;font-size: 15px;">Cell Phone:</th>
                                                                                    <td style="padding-left: 15px;font-size: 15px;">{{  $details['cellphone'] }}</td>
                                                                                </tr>
                                                                                
                                                                                <tr>
                                                                                    <th style="text-align:left;padding-right:30px;background: #690b10;color: #fff;font-size: 15px;">Approximate Levy Arrears:</th>
                                                                                    <td style="padding-left: 15px;font-size: 15px;">{{ $details['levy_arrears'] }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th style="text-align:left;padding-right:30px;background: #690b10;color: #fff;font-size: 15px;vertical-align: baseline;">When was your scheme built:</th>
                                                                                    <td style="word-break: break-all;padding-left: 15px;font-size: 15px;">{{  $details['when_scheme_built'] }}</td>
                                                                                </tr>
                                                                                
                                                                                <tr>
                                                                                    <th style="text-align:left;padding-right:30px;background: #690b10;color: #fff;font-size: 15px;">Why are you looking for a new managing agent:</th>
                                                                                    <td style="padding-left: 15px;font-size: 15px;">{{ $details['why_new_agent'] }}</td>
                                                                                </tr>
                                                                                
                                                                                <tr>
                                                                                    <th style="text-align:left;padding-right:30px;background: #690b10;color: #fff;font-size: 15px;">Do you have any outstanding Annual General Meetings and audited financial statements:</th>
                                                                                    <td style="padding-left: 15px;font-size: 15px;">{{ $details['audited_statement'] }}</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                    <td style="width: 10px;"></td>
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