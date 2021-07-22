public static function certz_new_user_welcome_fb($name, $email, $password) {
        $html = <<< EOT
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <!--[if !mso]><!-->
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <!--<![endif]-->
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title></title>
            <!--[if !mso]><!-->
            <style type="text/css">
            @font-face {
                        font-family: 'flama-condensed';
                        font-weight: 100;
                        src: url('http://assets.vervewine.com/fonts/FlamaCond-Medium.eot');
                        src: url('http://assets.vervewine.com/fonts/FlamaCond-Medium.eot?#iefix') format('embedded-opentype'),
                            url('http://assets.vervewine.com/fonts/FlamaCond-Medium.woff') format('woff'),
                            url('http://assets.vervewine.com/fonts/FlamaCond-Medium.ttf') format('truetype');
                    }
                    @font-face {
                        font-family: 'Muli';
                        font-weight: 100;
                        src: url('http://assets.vervewine.com/fonts/muli-regular.eot');
                        src: url('http://assets.vervewine.com/fonts/muli-regular.eot?#iefix') format('embedded-opentype'),
                            url('http://assets.vervewine.com/fonts/muli-regular.woff2') format('woff2'),
                            url('http://assets.vervewine.com/fonts/muli-regular.woff') format('woff'),
                            url('http://assets.vervewine.com/fonts/muli-regular.ttf') format('truetype');
                    }
                    .address-description a {color: #000000 ; text-decoration: none;}
                    @media (max-device-width: 480px) {
                    .vervelogoplaceholder {
                        height:83px ;
                    }
                    }
            </style>
            <!--<![endif]-->
            <!--[if (gte mso 9)|(IE)]>
            <style type="text/css">
                .address-description a {color: #000000 ; text-decoration: none;}
                table {border-collapse: collapse ;}
            </style>
            <![endif]-->
        </head>
    
        <body bgcolor="#e1e5e8" style="margin-top:0 ;margin-bottom:0 ;margin-right:0 ;margin-left:0 ;padding-top:0px;padding-bottom:0px;padding-right:0px;padding-left:0px;background-color:#e1e5e8;">
            <!--[if gte mso 9]>
        <center>
        <table width="600" cellpadding="0" cellspacing="0"><tr><td valign="top">
        <![endif]-->
            <center style="width:100%;table-layout:fixed;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;background-color:#e1e5e8;">
            <div style="max-width:600px;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto;">
                <table align="center" cellpadding="0" style="border-spacing:0;font-family: verdana, sans-serif;color:#333333;Margin:0 auto;width:100%;max-width:600px;">
                <tbody>
                    <tr>
                    <td align="center" class="vervelogoplaceholder" height="143" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;height:143px;vertical-align:middle;" valign="middle"><span class="sg-image"><a href="https://certz.io/" target="_blank"><img alt="CertzIO" height="34" src="https://admin.certz.io/assets/images/logo.png" style="border-width: 0px; width: 120px; height: auto;" width="160"></a></span></td>
                    </tr>
                    <!-- Start of Email Body-->
                    <tr>
                    <td class="one-column" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;background-color:#ffffff;">
                        <!--[if gte mso 9]>
                            <center>
                            <table width="80%" cellpadding="20" cellspacing="30"><tr><td valign="top">
                            <![endif]-->
                        <table style="border-spacing:0;" width="100%">
                        <tbody>
                            <tr>
                            <td align="center" class="inner" style="padding-top:15px;padding-bottom:15px;padding-right:30px;padding-left:30px;" valign="middle"><span class="sg-image"></span></td>
                            </tr>
                            <tr>
                            <td class="inner contents center" style="padding-top:15px;padding-bottom:15px;padding-right:30px;padding-left:30px;text-align:left;">
                                <p style="line-height: 1.4em;font-weight: bold;">Hey, $name</p>
                                <p style="line-height: 1.4em;text-decoration: underline;">Welcome to the family!</p>
                                <p style="line-height: 1.4em;">Think of us as a world wide unit of mom’s and dad’s, brothers and sisters and sons and daughters all working towards a better way of LIVING LIFE!</p>
                                <p style="line-height: 1.4em;">Here you will find the login link to get into the digital university.</p>
                                
                                <p style="line-height: 1.4em; margin-top: 30px;"><b>Email: </b> $email</p>
                                <p style="line-height: 1.4em;"><b>Password: </b> $password</p>
                                
                                    
                                <a href="https://fb.certz.io/" style="background: #38a269;color: #fff;text-decoration: none;padding: 9px 16px;display: inline-block;border-radius: 5px;" target="_blank">Login Url</a>
                                
                               
                                <p style="line-height: 1.4em; margin-top: 30px;">Secondly, we have set you up with a few other accounts that will come in handy as you build out your empire.</p>
                                <p style="line-height: 1.4em;">We have worked closely with our dev team to try and keep EVERYTHING you could possibly need to run this business under one roof…. And under one username and pw!</p>
                                <p style="line-height: 1.4em;">These tools, platforms and bonus upgrades will all be in your backend dashboard we will show you next.</p>
                                <p style="line-height: 1.4em;">Remember, it only takes a small spark to start a raging fire. </p>
                                <p style="line-height: 1.4em;">You bring the spark</p>
                                <p style="line-height: 1.4em;">We’ll bring the GASOLINE!</p>
                                <p style="line-height: 1.4em;">Let’s blow this up together!</p>
                                <p style="line-height: 1.4em;">Seeya inside,</p>
                                <p style="line-height: 1.4em;">Your Lead Gen Family</p>
                                <p style="line-height: 1.4em;font-style: italic;">Ippei, Dan, Tori, Sarah, Damian, Beau, Char, Ryan, Alec, Simon, Lisa, Craig, Hanni, Mike and the rest of the support staff (100+ helpers)</p>
                                
                            </td>
                            </tr>
                        </tbody>
                        </table>
                        <!--[if (gte mso 9)|(IE)]>
                            </td></tr></table>
                            </center>
                            <![endif]-->
                    </td>
                    </tr>
                    <!-- End of Email Body-->
                    <!-- whitespace -->
                    <tr>
                    <td height="40">
                        <p style="line-height: 40px; padding: 0 0 0 0; margin: 0 0 0 0;">&nbsp;</p>
        
                        <p>&nbsp;</p>
                    </td>
                    </tr>
                    <!-- Social Media -->
                    <!-- whitespace -->
                    <tr>
                    <td height="25">
                        <p style="line-height: 25px; padding: 0 0 0 0; margin: 0 0 0 0;">&nbsp;</p>
        
                        <p>&nbsp;</p>
                    </td>
                    </tr>
                    <!-- Footer -->
                    <tr>
                    <td style="padding-top:0;padding-bottom:0;padding-right:30px;padding-left:30px;text-align:center;Margin-right:auto;Margin-left:auto;">
                        <center>
                        <p style="font-family: verdana, sans-serif;Margin:0;text-align:center;Margin-right:auto;Margin-left:auto;font-size:15px;color:#a1a8ad;line-height:23px;">Problems or questions? Email us at
                            <p style="font-family: verdana, sans-serif;Margin:0;text-align:center;Margin-right:auto;Margin-left:auto;font-size:15px;color:#a1a8ad;line-height:23px;"><a href="mailto:support@certz.io" style="color:#a1a8ad;text-decoration:underline;" target="_blank">support@certz.io</a></p>
                        </p>
                        </center>
                    </td>
                    </tr>
                    <!-- whitespace -->
                    <tr>
                    <td height="40">
                        <p style="line-height: 40px; padding: 0 0 0 0; margin: 0 0 0 0;">&nbsp;</p>
        
                        <p>&nbsp;</p>
                    </td>
                    </tr>
                </tbody>
                </table>
            </div>
            </center>
            <!--[if gte mso 9]>
        </td></tr></table>
        </center>
        <![endif]-->
        
        
        </body>
        EOT;

        return $html;
    }
    
    
    public static function certz_old_user_welcome_fb( $name, $email ) {
        $html = <<< EOT
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <!--[if !mso]><!-->
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <!--<![endif]-->
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title></title>
            <!--[if !mso]><!-->
            <style type="text/css">
            @font-face {
                        font-family: 'flama-condensed';
                        font-weight: 100;
                        src: url('http://assets.vervewine.com/fonts/FlamaCond-Medium.eot');
                        src: url('http://assets.vervewine.com/fonts/FlamaCond-Medium.eot?#iefix') format('embedded-opentype'),
                            url('http://assets.vervewine.com/fonts/FlamaCond-Medium.woff') format('woff'),
                            url('http://assets.vervewine.com/fonts/FlamaCond-Medium.ttf') format('truetype');
                    }
                    @font-face {
                        font-family: 'Muli';
                        font-weight: 100;
                        src: url('http://assets.vervewine.com/fonts/muli-regular.eot');
                        src: url('http://assets.vervewine.com/fonts/muli-regular.eot?#iefix') format('embedded-opentype'),
                            url('http://assets.vervewine.com/fonts/muli-regular.woff2') format('woff2'),
                            url('http://assets.vervewine.com/fonts/muli-regular.woff') format('woff'),
                            url('http://assets.vervewine.com/fonts/muli-regular.ttf') format('truetype');
                    }
                    .address-description a {color: #000000 ; text-decoration: none;}
                    @media (max-device-width: 480px) {
                    .vervelogoplaceholder {
                        height:83px ;
                    }
                    }
            </style>
            <!--<![endif]-->
            <!--[if (gte mso 9)|(IE)]>
            <style type="text/css">
                .address-description a {color: #000000 ; text-decoration: none;}
                table {border-collapse: collapse ;}
            </style>
            <![endif]-->
        </head>
        
        <body bgcolor="#e1e5e8" style="margin-top:0 ;margin-bottom:0 ;margin-right:0 ;margin-left:0 ;padding-top:0px;padding-bottom:0px;padding-right:0px;padding-left:0px;background-color:#e1e5e8;">
            <!--[if gte mso 9]>
        <center>
        <table width="600" cellpadding="0" cellspacing="0"><tr><td valign="top">
        <![endif]-->
            <center style="width:100%;table-layout:fixed;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;background-color:#e1e5e8;">
            <div style="max-width:600px;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto;">
                <table align="center" cellpadding="0" style="border-spacing:0;font-family: verdana, sans-serif;color:#333333;Margin:0 auto;width:100%;max-width:600px;">
                <tbody>
                    <tr>
                    <td align="center" class="vervelogoplaceholder" height="143" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;height:143px;vertical-align:middle;" valign="middle"><span class="sg-image"><a href="https://certz.io/" target="_blank"><img alt="CertzIO" height="34" src="https://admin.certz.io/assets/images/logo.png" style="border-width: 0px; width: 120px; height: auto;" width="160"></a></span></td>
                    </tr>
                    <!-- Start of Email Body-->
                    <tr>
                    <td class="one-column" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;background-color:#ffffff;">
                        <!--[if gte mso 9]>
                            <center>
                            <table width="80%" cellpadding="20" cellspacing="30"><tr><td valign="top">
                            <![endif]-->
                        <table style="border-spacing:0;" width="100%">
                        <tbody>
                            <tr>
                            <td align="center" class="inner" style="padding-top:15px;padding-bottom:15px;padding-right:30px;padding-left:30px;" valign="middle"><span class="sg-image"></span></td>
                            </tr>
                            <tr>
                            <td class="inner contents center" style="padding-top:15px;padding-bottom:15px;padding-right:30px;padding-left:30px;text-align:left;">
                                <p style="line-height: 1.4em; font-weight: bold;">Hey, $name</p>
                                <p style="line-height: 1.4em; text-decoration: underline;">Welcome to the family!</p>
                                <p style="line-height: 1.4em;">Think of us as a world wide unit of mom’s and dad’s, brothers and sisters and sons and daughters all working towards a better way of LIVING LIFE!</p>
                                <p style="line-height: 1.4em;">As we were setting up your account, we noticed that you are already a Snapps user… which is AWESOME!  We have a strategic partnership with Snapps that means more training, tools and upgrades for you… </p>
                                
                                <p>Just for being a Snapps user + a new Certz member!</p>
                                <p>No need to setup a new account.  Simply use your Snapps login to access the digital university.</p>
                                
                                <p style="line-height: 1.4em; margin-top: 30px;"><b>Snapps login email: </b> $email</p>
                                    
                                <a href="https://fb.certz.io/" style="background: #38a269;color: #fff;text-decoration: none;padding: 9px 16px;display: inline-block;border-radius: 5px;" target="_blank">Login Url</a>
                                <p>*use your Snapps username and password to login to Certz</p>
                                
                                <p style="line-height: 1.4em; margin-top: 30px;">Secondly, we have set you up with a few other accounts that will come in handy as you build out your empire.</p>
                                <p style="line-height: 1.4em;">We have worked closely with our dev team to try and keep EVERYTHING you could possibly need to run this business under one roof…. And under one username and pw!</p>
                                <p style="line-height: 1.4em;">These tools, platforms and bonus upgrades will all be in your backend dashboard we will show you next.</p>
                                <p style="line-height: 1.4em;">Remember, it only takes a small spark to start a raging fire.   </p>
                                <p style="line-height: 1.4em;">You bring the spark</p>
                                <p style="line-height: 1.4em;">We’ll bring the GASOLINE!</p>
                                <p style="line-height: 1.4em;">Let’s blow this up together!</p>
                                <p style="line-height: 1.4em;">Seeya inside,</p>
                                <p style="line-height: 1.4em;">Your Lead Gen Family</p>
                                <p style="line-height: 1.4em; font-style: italic;">Ippei, Dan, Tori, Sarah, Damian, Beau, Char, Ryan, Alec, Simon, Lisa, Craig, Hanni, Mike and the rest of the support staff (100+ helpers)</p>
                            </td>
                            </tr>
                        </tbody>
                        </table>
                        <!--[if (gte mso 9)|(IE)]>
                            </td></tr></table>
                            </center>
                            <![endif]-->
                    </td>
                    </tr>
                    <!-- End of Email Body-->
                    <!-- whitespace -->
                    <tr>
                    <td height="40">
                        <p style="line-height: 40px; padding: 0 0 0 0; margin: 0 0 0 0;">&nbsp;</p>
        
                        <p>&nbsp;</p>
                    </td>
                    </tr>
                    <!-- Social Media -->
                    <!-- whitespace -->
                    <tr>
                    <td height="25">
                        <p style="line-height: 25px; padding: 0 0 0 0; margin: 0 0 0 0;">&nbsp;</p>
        
                        <p>&nbsp;</p>
                    </td>
                    </tr>
                    <!-- Footer -->
                    <tr>
                    <td style="padding-top:0;padding-bottom:0;padding-right:30px;padding-left:30px;text-align:center;Margin-right:auto;Margin-left:auto;">
                        <center>
                        <p style="font-family: verdana, sans-serif;Margin:0;text-align:center;Margin-right:auto;Margin-left:auto;font-size:15px;color:#a1a8ad;line-height:23px;">Problems or questions? Email us at
                            <p style="font-family: verdana, sans-serif;Margin:0;text-align:center;Margin-right:auto;Margin-left:auto;font-size:15px;color:#a1a8ad;line-height:23px;"><a href="mailto:support@certz.io" style="color:#a1a8ad;text-decoration:underline;" target="_blank">support@certz.io</a></p>
                        </p>
                        </center>
                    </td>
                    </tr>
                    <!-- whitespace -->
                    <tr>
                    <td height="40">
                        <p style="line-height: 40px; padding: 0 0 0 0; margin: 0 0 0 0;">&nbsp;</p>
        
                        <p>&nbsp;</p>
                    </td>
                    </tr>
                </tbody>
                </table>
            </div>
            </center>
            <!--[if gte mso 9]>
        </td></tr></table>
        </center>
        <![endif]-->
        
        
        </body>
        EOT;

        return $html;
    }
