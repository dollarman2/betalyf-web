<!DOCTYPE html>
<html>
    <head>
        <title> Mail</title>
        <style type="text/css">
            @import url('http://fonts.googleapis.com/css?family=Nunito:300,600');
            body {
                height: 100% !important; 
                margin: 0 !important; 
                padding: 0 !important;
                width: 100% !important;
            }

            @media screen and (max-width: 640px) {
                table[class=devicewidth]{
                    width: 100% !important;
                }

                img[class=bigimage]{
                    width: 100% !important; 
                }

                .mobile_padding {
                    padding-left: 20px!important; 
                    padding-right: 20px!important;
                }

                .hide_for_mob {
                    display: none!important;
                }
            }

            @media only screen and (max-width: 480px){
                table[class=devicewidth]{
                    width: 100% !important;
                }

                img[class=bigimage] {
                    width: 100% !important; 
                }

                .mobile_padding {
                    padding-left: 10px!important; 
                    padding-right: 10px!important;
                }

                .hide_for_mob {
                    display: none!important;
                }
            }
        </style>
    </head>
    <body style="margin: 0 !important; padding: 0 !important; background-color: #f0f0f0;" bgcolor="#f0f0f0">
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td align="center" style="padding: 15px 10px; background-color: #f0f0f0;" bgcolor="#f0f0f0">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" class="devicewidth">
                        
                    <!-- header -->
                        <tr>
                            <td align="center" valign="top" width="100%" bgcolor="#f0f0f0" style="background: #f0f0f0;">
                            <img src="http://lp.ryte.com/imgs/email/crash/bg_welcome2017.png" width="600" border="0" alt="Ryte Welcome Guide" 
                            style="max-width:100%!important;display: block; font-family: sans-serif; font-size: 24px;height:auto!important;" class="bigimage"></td>
                        </tr>

                        <!-- white block with heading -->
                        <tr>
                            <td align="center" style="padding:35px; background-color: #ffffff;" bgcolor="#ffffff" class="mobile_padding">
                                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <tr>
                                        <td align="left" style="font-family: Nunito, Helvetica, Arial,sans-serif; font-size: 14px; font-weight: normal; line-height: 24px;">
                                            <p style="font-size: 18px; line-height: 24px;font-weight: bold; color: #58595b; margin: 0;"></p>
                                            <p style="font-size: 14px; line-height: 24px; color: #72808e;">
                                                <?php echo htmlspecialchars_decode($content['message']) ?>
                                            </p>
                                        </td>
                                    </tr>

                                </table>
                            </td>
                        </tr>

                        <!-- footer -->
                        <tr>
                            <td align="center" style="padding: 20px 35px; background-color: #dfe3e7;border-bottom-left-radius:4px;border-bottom-right-radius:4px;" bgcolor="#dfe3e7" class="mobile_padding">
                                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <!-- social buttons -->
                                    <tr>
                                        <td align="center" style="padding:10px 0">
                                            <a target="_blank" style="text-decoration: none!important;"id="ct14_0" href="" width="24" height="24">
                                                <img align="none" height="24" height="24" src="{{ asset('images/facebook.png')}}" width="24" height="24" />
                                            </a>
                                            <a target="_blank" style="text-decoration: none!important;" id="ct12_0" href="" width="24" height="24">
                                                <img align="none" height="24" height="24" src="http://gallery.mailchimp.com/09bba7cf4ecd30379b5e88ae9/images/linkedin_4_24.png" width="24" height="24" />
                                            </a>
                                            <a target="_blank" style="text-decoration: none!important;" id="ct13_0" href="">
                                                <img align="none" height="24" height="24" src="{{ asset('images/twitter.png')}}" width="24" height="24" />
                                            </a>
                                            <a target="_blank" style="text-decoration: none!important;" id="ct13_0" href="">
                                                <img align="none" height="24" height="24" src="{{ asset('images/youtube.png')}}" width="24" height="24" />
                                            </a>
                                        </td>
                                    </tr>

                                    <!-- copyright -->
                                    <tr>
                                        <td align="center" style="font-family: Nunito, Helvetica, Arial, sans-serif; font-size: 11px; font-weight: normal; line-height: 16px;">
                                            <p style="font-size: 11px; font-weight: normal; line-height: 16px; color: #8fa0ac;">
                                                <a style="color:#8fa0ac!important;text-decoration:none!important;" id="ct10_0" href="#">&copy; 2018 Ryte.</a> 
                                                <a style="color:#8fa0ac!important;text-decoration:none!important;" href="">You don't want to receive any further emails from Ryte?</a> 
                                                <a href=""><span style="color:#8fa0ac">click here</span></a> to unsubscribe from our content. By the way,we are sending content to the email address destinyajakaiye@gmail.com.<br><br>
                                                <a style="text-decoration: underline; color: #8fa0ac" target="_bl" id="ct4_0" href="#">
                                                    <span color="#8fa0ac">About</span>
                                                </a> |  
                                                <a style="text-decoration: underline; color: #8fa0ac" target="_blank" id="ct5_0" href="#">
                                                    <span color="#8fa0ac">Terms and Conditions</span>
                                                </a> | 
                                                <a style="text-decoration: underline; color: #8fa0ac" target="_blank" id="ct6_0" href="#">
                                                    <span color="#8fa0ac">Privacy</span>
                                                </a>
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>