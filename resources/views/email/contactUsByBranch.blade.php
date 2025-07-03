<!DOCTYPE html>
<html>
<head>
 <title>Finance Contact</title>
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
                                                                                  @if(trim(strtolower($details['formMain'])) != "homepage")
                                                                                   
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <th style="text-align:left;padding-right:30px;background: #690b10;color: #fff;font-size: 15px;">Branch Email</th>
                                                                                            <td style="padding-left: 15px;font-size: 15px;">{{ $details['branches_email'] }}</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th style="text-align:left;padding-right:30px;background: #690b10;color: #fff;font-size: 15px;">FullName</th>
                                                                                            <td style="padding-left: 15px;font-size: 15px;">{{ ucfirst($details['name']) }}</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th style="text-align:left;padding-right:30px;background: #690b10;color: #fff;font-size: 15px;">Email</th>
                                                                                            <td style="padding-left: 15px;font-size: 15px;">{{ $details['email'] }}</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th style="text-align:left;padding-right:30px;background: #690b10;color: #fff;font-size: 15px;">Mobile Number</th>
                                                                                            <td style="padding-left: 15px;font-size: 15px;">{{  $details['phone'] }}</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th style="text-align:left;padding-right:30px;background: #690b10;color: #fff;font-size: 15px;vertical-align: baseline;">City</th>
                                                                                            <td style="word-break: break-all;padding-left: 15px;font-size: 15px;">{{  $details['city'] }}</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th style="text-align:left;padding-right:30px;background: #690b10;color: #fff;font-size: 15px;vertical-align: baseline;">Method Of Contact</th>
                                                                                            <td style="word-break: break-all;padding-left: 15px;font-size: 15px;">{{  $details['method_of_contact'] }}</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th style="text-align:left;padding-right:30px;background: #690b10;color: #fff;font-size: 15px;vertical-align: baseline;">Time To Contact</th>
                                                                                            <td style="word-break: break-all;padding-left: 15px;font-size: 15px;">{{  $details['time_to_call'] }}</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th style="text-align:left;padding-right:30px;background: #690b10;color: #fff;font-size: 15px;vertical-align: baseline;">Comment or Question</th>
                                                                                            <td style="word-break: break-all;padding-left: 15px;font-size: 15px;">{{  $details['comment_or_question'] }}</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                    @else
                                                                                     
                                                                                        <tbody>
                                                                                       
                                                                                            <tr>
                                                                                                <th style="text-align:left;padding-right:30px;background: #690b10;color: #fff;font-size: 15px;">Default Name</th>
                                                                                                <td style="padding-left: 15px;font-size: 15px;">{{ ucfirst($details['name']) }}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th style="text-align:left;padding-right:30px;background: #690b10;color: #fff;font-size: 15px;">Default Email</th>
                                                                                                <td style="padding-left: 15px;font-size: 15px;">{{ ucfirst($details['email']) }}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th style="text-align:left;padding-right:30px;background: #690b10;color: #fff;font-size: 15px;">Default Phone</th>
                                                                                                <td style="padding-left: 15px;font-size: 15px;">{{ ucfirst($details['phone']) }}</td>
                                                                                            </tr>
                                                                                           
                                                                                            <tr>
                                                                                                <th style="text-align:left;padding-right:30px;background: #690b10;color: #fff;font-size: 15px;vertical-align: baseline;">Default Comment or Question</th>
                                                                                                <td style="word-break: break-all;padding-left: 15px;font-size: 15px;">{{ ucfirst($details['comment_or_question']) }}</td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    @endif

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