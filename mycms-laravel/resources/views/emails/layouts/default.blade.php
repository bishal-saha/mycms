<html xmlns="http://www.w3.ord/1999/xhtml" class="gr__reallygoodemails_com">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'MyCMS') }}</title>
    @include('emails.includes.styles')
</head>
<body class="perks "
      style="color: #2a2a2a; font-family: Arial, sans-serif; font-size: 18px; width: 100% !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; line-height: 18px; margin: 0 0 20px; padding: 0;"
      data-gr-c-s-loaded="true">
    <div style="background-color: #eae9ea;">
        <!--[if mso]>
        <v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
            <v:fill type="tile" color="#eae9ea"></v:fill>
        </v:background><![endif]-->
    </div>
    <table height="100%" width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#eae9ea"
           style="border-collapse: collapse;">
        <tbody>
            <tr>
                <td valign="top" align="center" style="border-collapse: collapse;">
                    <table width="600" cellspacing="0" cellpadding="0" border="0" class="main"
                           style="border-collapse: collapse; margin-left: 30px; margin-right: 30px;">
                        <tbody>
                            <tr>
                                <td align="left" class="min_width" style="border-collapse: collapse; width: 600px;">
                                    <!-- BODY SECTION -->
                                    <table width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff"
                                           style="border-collapse: collapse; margin-top: 10px;" class="">
                                        <tbody>
                                        <tr>
                                            <td align="left" style="border-collapse: collapse;">
                                                <table width="100%" cellspacing="0" cellpadding="0" border="0"
                                                       style="border-collapse: collapse;">
                                                    <tbody>
                                                    <tr style="margin: 0; padding: 0;">
                                                            @yield('content')
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    @include('emails.includes.footer')
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
    <center>
        <p style="font-size: 13px; font-family: Arial, sans-serif; color: #000001;">
            <a href="#" style="color: #000001;">
                Manage your subscription preferences</a>
            | <a href="#" style="font-family: Arial, sans-serif; color: #000001; font-size: 13px;">View this email in your browser</a>
        </p>
    </center>
</body>
</html>