<!DOCTYPE html>
<html>
<head>
 <title>Report Maintenance Issue</title>
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
                                                                                    <th style="text-align:left;padding-right:30px;background: #690b10;color: #fff;font-size: 15px;">Building name: </th>
                                                                                    <td style="padding-left: 15px;font-size: 15px;">{{ ucfirst($details['building_name']) }}</td>
                                                                                </tr>
                                                                                
                                                                                <tr>
                                                                                    <th style="text-align:left;padding-right:30px;background: #690b10;color: #fff;font-size: 15px;">Unit number: </th>
                                                                                    <td style="padding-left: 15px;font-size: 15px;">{{ $details['unit_no'] }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th style="text-align:left;padding-right:30px;background: #690b10;color: #fff;font-size: 15px;">Physical address: </th>
                                                                                    <td style="padding-left: 15px;font-size: 15px;">{{ $details['physical_address'] }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th style="text-align:left;padding-right:30px;background: #690b10;color: #fff;font-size: 15px;">Name:</th>
                                                                                    <td style="padding-left: 15px;font-size: 15px;">{{  $details['name'] }}</td>
                                                                                </tr>
                                                                                
                                                                                
                                                                                <tr>
                                                                                    <th style="text-align:left;padding-right:30px;background: #690b10;color: #fff;font-size: 15px;">Tel:</th>
                                                                                    <td style="padding-left: 15px;font-size: 15px;">{{  $details['tel'] }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th style="text-align:left;padding-right:30px;background: #690b10;color: #fff;font-size: 15px;vertical-align: baseline;">Cell: </th>
                                                                                    <td style="word-break: break-all;padding-left: 15px;font-size: 15px;">{{  $details['cell'] }}</td>
                                                                                </tr>
                                                                                
                                                                                <tr>
                                                                                    <th style="text-align:left;padding-right:30px;background: #690b10;color: #fff;font-size: 15px;vertical-align: baseline;">Email: </th>
                                                                                    <td style="word-break: break-all;padding-left: 15px;font-size: 15px;">{{  $details['email'] }}</td>
                                                                                </tr>
                                                                                
                                                                                <tr>
                                                                                    <th style="text-align:left;padding-right:30px;background: #690b10;color: #fff;font-size: 15px;vertical-align: baseline;">Report maintenance: : </th>
                                                                                    <td style="word-break: break-all;padding-left: 15px;font-size: 15px;">{{  $details['report_maintenance'] }}</td>
                                                                                </tr>
                                                                                
                                                                                <tr>
                                                                                    <th style="text-align:left;padding-right:30px;background: #690b10;color: #fff;font-size: 15px;vertical-align: baseline;">Urgency: </th>
                                                                                    <td style="word-break: break-all;padding-left: 15px;font-size: 15px;">
                                            @if($details['urgency'] == 'critical')
                                            Critical (< 6 hours)
                                            @endif
                                             @if($details['urgency'] == 'urgent')
                                             Urgent (< 12 hours)
                                            @endif
                                             @if($details['urgency'] == 'high')
                                             High (24 - 48 hours)
                                            @endif
                                              @if($details['urgency'] == 'low')
                                              Low (5 working days)
                                            @endif
                                          
                                                                                    </td>
                                                                                </tr>
                                                                                
                                                                                <tr>
                                                                                    <th style="text-align:left;padding-right:30px;background: #690b10;color: #fff;font-size: 15px;vertical-align: baseline;">Person responsible for the account: </th>
                                                                                    <td style="word-break: break-all;padding-left: 15px;font-size: 15px;">{{  $details['responsible_for_account'] }}</td>
                                                                                </tr>
                                                                                
                                                                                <tr>
                                                                                    <th style="text-align:left;padding-right:30px;background: #690b10;color: #fff;font-size: 15px;vertical-align: baseline;">Quote first/approved job:: </th>
                                                                                    <td style="word-break: break-all;padding-left: 15px;font-size: 15px;">{{  $details['quote_first'] }}</td>
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