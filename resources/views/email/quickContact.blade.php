<!DOCTYPE html>
<html>
<head>
 <title>Quick Contact</title>
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
                                                                                    <th style="text-align:left;padding-right:30px;background: #690b10;color: #fff;font-size: 15px;">Name</th>
                                                                                    <td style="padding-left: 15px;font-size: 15px;">{{ ucfirst($details['name']) }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th style="text-align:left;padding-right:30px;background: #690b10;color: #fff;font-size: 15px;">Email</th>
                                                                                    <td style="padding-left: 15px;font-size: 15px;">{{ $details['email'] }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th style="text-align:left;padding-right:30px;background: #690b10;color: #fff;font-size: 15px;">Phone</th>
                                                                                    <td style="padding-left: 15px;font-size: 15px;">{{  $details['phone'] }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th style="text-align:left;padding-right:30px;background: #690b10;color: #fff;font-size: 15px;vertical-align: baseline;">Message</th>
                                                                                    <td style="word-break: break-all;padding-left: 15px;font-size: 15px;">{{  $details['message'] }}</td>
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