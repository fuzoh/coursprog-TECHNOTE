<?php

  // envoi du mail php

  // trate la création d'une fiche technique

  // on initialise la class newtechnote -> qui nous peremttra de faire des traitements
  $newtechnote = new newtechnote($_POST, $session->getUserID());

  // cette fonction vérifie que les champ ont été remplis
  $newtechnote->verifyContent();

  // methode spécifique pour vérifier que le pin est numérique
  $newtechnote->verifyPin();

  // si le statut de verification est OK
  if ($newtechnote->getState()) {

    // ecriture dans la bd
    $newtechnote->updateInfos($session->getEdit());

    // redirection
    echo json_encode($newtechnote->state);

  } else {

    // renvoir ajax des erreurs
    echo json_encode($newtechnote->state);

  }


  $to = 'bastien.nicoud@cpnv.ch';

  $subject = 'Fiche technique Pink Floyd';

  $headers = "From: noreply@mediamatique.ch\r\n";
  $headers .= "Reply-To: noreply@mediamatique.ch\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

  $message = '<!doctype html>
  <html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
  <head>
    <title></title>
    <!--[if !mso]><!-- -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<![endif]-->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <style type="text/css">
    #outlook a { padding: 0; }
    .ReadMsgBody { width: 100%; }
    .ExternalClass { width: 100%; }
    .ExternalClass * { line-height:100%; }
    body { margin: 0; padding: 0; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
    table, td { border-collapse:collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
    img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; }
    p { display: block; margin: 13px 0; }
  </style>
  <!--[if !mso]><!-->
  <style type="text/css">
    @media only screen and (max-width:480px) {
      @-ms-viewport { width:320px; }
      @viewport { width:320px; }
    }
  </style>
  <!--<![endif]-->
  <!--[if mso]>
  <xml>
    <o:OfficeDocumentSettings>
      <o:AllowPNG/>
      <o:PixelsPerInch>96</o:PixelsPerInch>
    </o:OfficeDocumentSettings>
  </xml>
  <![endif]-->
  <!--[if lte mso 11]>
  <style type="text/css">
    .outlook-group-fix {
      width:100% !important;
    }
  </style>
  <![endif]-->

  <!--[if !mso]><!-->
      <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type="text/css">
      <style type="text/css">

          @import url(https://fonts.googleapis.com/css?family=Ubuntu);

      </style>
    <!--<![endif]--><style type="text/css">
    @media only screen and (min-width:480px) {
      .mj-column-per-100 { width:100%!important; }
    }
  </style>
  </head>
  <body>
    <div><!--[if mso | IE]>
        <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="600" align="center" style="width:600px;">
          <tr>
            <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
        <![endif]--><table role="presentation" cellpadding="0" cellspacing="0" style="background:url(http://bnicoud.eleves.mediamatique.ch/technote/public/img/live.jpg) top center / cover repeat;font-size:0px;width:100%;" border="0" background="http://bnicoud.eleves.mediamatique.ch/technote/public/img/live.jpg"><tbody><tr><td><div style="margin:0px auto;max-width:600px;"><!--[if mso | IE]>
        <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width:600px;">
          <v:fill origin="0.5, 0" position="0.5,0" type="tile" src="http://bnicoud.eleves.mediamatique.ch/technote/public/img/live.jpg" />
          <v:textbox style="mso-fit-shape-to-text:true" inset="0,0,0,0">
        <![endif]--><table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;" align="center" border="0"><tbody><tr><td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:50px 0px 50px 0px;"><!--[if mso | IE]>
        <table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td style="vertical-align:top;width:600px;">
        <![endif]--><div class="mj-column-per-100 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;"><table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0"><tbody><tr><td style="word-break:break-word;font-size:0px;padding:10px 25px;" align="center"><table role="presentation" cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-spacing:0px;" align="center" border="0"><tbody><tr><td style="width:300px;"><img alt="" title="" height="auto" src="http://bnicoud.eleves.mediamatique.ch/technote/public/img/logomail.png" style="border:none;border-radius:0px;display:block;outline:none;text-decoration:none;width:100%;height:auto;" width="300"></td></tr></tbody></table></td></tr><tr><td style="word-break:break-word;font-size:0px;padding:10px 25px;" align="center"><div class="" style="cursor:auto;color:#FFF;font-family:Ubuntu;font-size:24px;line-height:22px;text-align:center;">Partage de fiches techniques en ligne.</div></td></tr></tbody></table></div><!--[if mso | IE]>
        </td></tr></table>
        <![endif]--></td></tr></tbody></table><!--[if mso | IE]>
          </v:textbox>
        </v:rect>
        <![endif]--></div></td></tr></tbody></table><!--[if mso | IE]>
        </td></tr></table>
        <![endif]-->
        <!--[if mso | IE]>
        <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="600" align="center" style="width:600px;">
          <tr>
            <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
        <![endif]--><div style="margin:0px auto;max-width:600px;"><table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;" align="center" border="0"><tbody><tr><td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:50px 0px 70px 0px;"><!--[if mso | IE]>
        <table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td style="vertical-align:top;width:600px;">
        <![endif]--><div class="mj-column-per-100 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;"><table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0"><tbody><tr><td style="word-break:break-word;font-size:0px;padding:10px 25px;" align="center"><div class="" style="cursor:auto;color:#000000;font-family:Ubuntu;font-size:18px;line-height:22px;text-align:center;">Bonjour</div></td></tr><tr><td style="word-break:break-word;font-size:0px;padding:10px 25px;" align="center"><div class="" style="cursor:auto;color:#000000;font-family:Ubuntu;font-size:16px;line-height:22px;text-align:center;">Bastien souhaite vous partager la fiche technique du groupe <strong>Pink Floyd</strong>.</div></td></tr><tr><td style="word-break:break-word;font-size:0px;padding:10px 25px;" align="center"><div class="" style="cursor:auto;color:#000000;font-family:Ubuntu;font-size:16px;line-height:22px;text-align:center;">Suivez ce lien pour y accéder : <a href="/technote?id=1">/technote?id=1</a></div></td></tr><tr><td style="word-break:break-word;font-size:0px;padding:10px 25px;" align="center"><div class="" style="cursor:auto;color:#000000;font-family:Ubuntu;font-size:16px;line-height:22px;text-align:center;">Le code PIN pour y accéder est : <strong>3456</strong></div></td></tr></tbody></table></div><!--[if mso | IE]>
        </td></tr></table>
        <![endif]--></td></tr></tbody></table></div><!--[if mso | IE]>
        </td></tr></table>
        <![endif]-->
        <!--[if mso | IE]>
        <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="600" align="center" style="width:600px;">
          <tr>
            <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
        <![endif]--><table role="presentation" cellpadding="0" cellspacing="0" style="background:#2c3e50;font-size:0px;width:100%;" border="0"><tbody><tr><td><div style="margin:0px auto;max-width:600px;"><table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;" align="center" border="0"><tbody><tr><td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:50px 0px 50px 0px;"><!--[if mso | IE]>
        <table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td style="vertical-align:top;width:600px;">
        <![endif]--><div class="mj-column-per-100 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;"><table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0"><tbody><tr><td style="word-break:break-word;font-size:0px;padding:10px 25px;" align="center"><div class="" style="cursor:auto;color:#FFF;font-family:Ubuntu;font-size:13px;line-height:22px;text-align:center;">TECHNOTE<br>Une application pour vous pérmetre de parager vos fiches techniques plus facilement.</div></td></tr></tbody></table></div><!--[if mso | IE]>
        </td></tr></table>
        <![endif]--></td></tr></tbody></table></div></td></tr></tbody></table><!--[if mso | IE]>
        </td></tr></table>
        <![endif]--></div>
  </body>
  </html>';

  mail($to, $subject, $message, $headers);
