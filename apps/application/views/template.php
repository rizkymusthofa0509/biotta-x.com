<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="x-apple-disable-message-reformatting" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="color-scheme" content="light dark" />
    <meta name="supported-color-schemes" content="light dark" />
    <title></title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <!--[if mso]>
    <style type="text/css">
      .f-fallback  {
        font-family: Arial, sans-serif;
      }
    </style>
  <![endif]-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CSS -->
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .carousel-cell {
            width: 100%;
            /* full width */
            /* height: 160px; */
            /* height of carousel */
            margin-right: 10px;

        }
  </style>
</head>
  <body>
    <table class="email-wrapper" width="100%" cellpadding="0" cellspacing="0" role="presentation">
      <tr>
        <td align="center">
          <table class="email-content" width="100%" cellpadding="0" cellspacing="0" role="presentation" style="margin-top:10px;">
             
            <!-- Email Body -->
            <tr>
              <td class="email-body" width="100%" cellpadding="0" cellspacing="0">
                <table class="email-body_inner" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
                  <!-- Body content -->
                  <tr>
                    <td class="content-cell">
                      <div class="carousel" data-flickity='{ "autoPlay": true }'>
                            <div class="carousel-cell">
                                <img src="https://img.freepik.com/free-vector/happy-islamic-new-year-holiday-banner_1017-20519.jpg?size=626&ext=jpg" width="100%;" height="150px;" style="border-radius:10px;" alt="">
                            </div>
                            <div class="carousel-cell">
                                <img src="https://dikti.kemdikbud.go.id/wp-content/themes/dikti2020/kampus-merdeka/img/social_image_kampus_merdeka.jpg" width="100%;" height="150px;" style="border-radius:10px;" alt="">
                            </div>
                            <div class="carousel-cell">
                                <img src="https://www.kupasmerdeka.com/wp-content/uploads/2019/04/img-20190421-wa01041570305868-650x276.jpg" width="100%;" height="150px;" style="border-radius:10px;" alt="">
                            </div>
                        </div>
                      <div class="f-fallback">
                        
                        <h1>Welcome, {{name}}!</h1>
                        <p>Thanks for trying [Product Name]. We’re thrilled to have you on board. To get the most out of [Product Name], do this primary next step:</p>
                        <!-- Action -->
                        <table class="body-action" align="center" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                          <tr>
                            <td align="center"> 
                              <table width="100%" border="0" cellspacing="0" cellpadding="0" role="presentation">
                                <tr>
                                  <td align="center">
                                    <a href="{{action_url}}" class="f-fallback button" target="_blank">Do this Next</a>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </table>
                        <p>For reference, here's your login information:</p>
                        <table class="attributes" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                          <tr>
                            <td class="attributes_content">
                              <table width="100%" cellpadding="0" cellspacing="0" role="presentation">
                                <tr>
                                  <td class="attributes_item">
                                    <span class="f-fallback">
                                      <strong>Login Page:</strong> {{login_url}}
                                    </span>
                                  </td>
                                </tr>
                                <tr>
                                  <td class="attributes_item">
                                    <span class="f-fallback">
                                      <strong>Username:</strong> {{username}}
                                    </span>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </table>
                        <p>You've started a {{trial_length}} day trial. You can upgrade to a paying account or cancel any time.</p>
                        <table class="attributes" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                          <tr>
                            <td class="attributes_content">
                              <table width="100%" cellpadding="0" cellspacing="0" role="presentation">
                                <tr>
                                  <td class="attributes_item">
                                    <span class="f-fallback">
                                      <strong>Trial Start Date:</strong> {{trial_start_date}}
                                    </span>
                                  </td>
                                </tr>
                                <tr>
                                  <td class="attributes_item">
                                    <span class="f-fallback">
                                      <strong>Trial End Date:</strong> {{trial_end_date}}
                                    </span>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </table>
                        <p>If you have any questions, feel free to <a href="mailto:{{support_email}}">email our customer success team</a>. (We're lightning quick at replying.) We also offer <a href="{{live_chat_url}}">live chat</a> during business hours.</p>
                        <p>Thanks,
                          <br>[Sender Name] and the [Product Name] Team</p>
                        <p><strong>P.S.</strong> Need immediate help getting started? Check out our <a href="{{help_url}}">help documentation</a>. Or, just reply to this email, the [Product Name] support team is always ready to help!</p>
                        <!-- Sub copy -->
                        <table class="body-sub" role="presentation">
                          <tr>
                            <td>
                              <p class="f-fallback sub">If you’re having trouble with the button above, copy and paste the URL below into your web browser.</p>
                              <p class="f-fallback sub">{{action_url}}</p>
                            </td>
                          </tr>
                        </table>
                      </div>
                    </td>
                  </tr>
                </table>
                
              </td>
            </tr>
             
          </table> 
        </td>
      </tr>
    </table>


    <table class="" role="presentation" width="100%;" align="center" border="0" style="background-color:#6bc5db; position: fixed;
                                            top: 0;
                                            right: 0;
                                            border-bottom-left-radius: 10px;
                                            border-bottom-right-radius: 10px; 
                                            ">
        <tr>
            <td class="" width="100%" cellpadding="0" cellspacing="0">
                <table border="0" style="background-color:#6bc5db;" class=" email-body_inner" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
                    <tr>
                        <td style="width:50px;">
                            <img src="https://assets.kitabisa.cc/images/logos/logogram__ktbs_white.png" alt="" style="width:80%;">
                        </td>
                        <td>
                            <input type="text" name="pencarian" id="" class="pencarian" placeholder="Pencarian">
                        </td>
                        <td style="background-position: 10px 10px;">
                            <!-- <h1><i class="fa fa-list"></i></h1> -->
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table class="" role="presentation" width="100%;" align="center" border="0" style="background-color:rgb(235, 231, 231); position: fixed;
                                            bottom: -10px;
                                            right: 0;  
                                            ">
              <tr>
                        <td class="" width="100%" cellpadding="0" cellspacing="0">
                            <table border="0" style="background-color:#ffffff;" class=" email-body_inner" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
                                <tr>
                                    <td align="center" style="width:25%;">
                                        <a href="/remaja-islam" style="text-decoration:none;">
                                            <font size="5">
                                                <i class="fa fa-podcast"></i>
                                            </font>
                                            <p class="judul-berita">Islam</p>
                                        </a>
                                    </td>
                                    <td align="center" style="width:25%;">
                                        <a href="#" onclick="return alert('Development fitur')" style="text-decoration:none;">
                                            <font size="5">
                                                <i class="fa fa-home"></i>
                                            </font>
                                            <p class="judul-berita">Home</p>
                                        </a>
                                    </td>
                                    <td align="center" style="width:25%;">
                                        <a href="#" onclick="return alert('Development fitur')" style="text-decoration:none;">
                                            <font size="5">
                                                <i class="fa fa-qrcode"></i>
                                            </font>
                                            <p class="judul-berita">Donasi Saya</p>
                                        </a>
                                    </td>
                                    <td align="center" style="width:25%;">
                                        <a href="#" onclick="return alert('Development fitur')" style="text-decoration:none;">
                                            <font size="5">
                                                <i class="fa fa-user"></i>
                                            </font>
                                            <p class="judul-berita">Akun</p>
                                        </a>
                                    </td>
                                  </tr>
                              </table>
            </td>
        </tr>
    </table>
    
    
  </body>
</html>


 