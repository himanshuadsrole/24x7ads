<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'sales@24x7ads.com';                     //SMTP username
    $mail->Password   = 'Adsrole@2023';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('sales@24x7ads.com', '24x7 Ads - Order Confirmation');
    $mail->addAddress($_POST['email'], $_POST['companyname']);     //Add a recipient
    $mail->addReplyTo('sales@24x7ads.com', '24x7 Ads');
    $mail->addCC('info@adsrole.com');
  

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Thank you for your Order | 24x7 Ads';
    $mail->Body    = "<html><head></head><body>

    <table cellspacing='0' cellpadding='0' width='80%' style='margin:0 auto;'><tr><td colspan='2' align='center' style='padding:10px; border:1px solid #ccc'><img src='https://24x7ads.com/assets/logo.png' width='200px' /><br>760a Gilman Street, Berkeley,<br> California 94710, United StatesA<br><a href='https://www.24x7ads.com/' target='_blank'>www.24x7ads.com</a> | <a href='tel:+1 (855) 443-0001'>+1 (855) 443-0001</a></td></tr><tr><th align='left' style='padding:10px; border:1px solid #ccc'>Client Name : </th><td align='left' style='padding:10px; border:1px solid #ccc'>".$_POST['name']."</td></tr>\n\n". "<tr><th align='left' style='padding:10px; border:1px solid #ccc'>Company Name : </th><td align='left' style='padding:10px; border:1px solid #ccc'>".$_POST['companyname']."</td></tr>\n\n"."<tr><th align='left' style='padding:10px; border:1px solid #ccc'>Client Email : </th><td align='left' style='padding:10px; border:1px solid #ccc'>".$_POST['email']."</td></tr>\n\n"."<tr><th align='left' style='padding:10px; border:1px solid #ccc'>Website URL : </th><td align='left' style='padding:10px; border:1px solid #ccc'>".$_POST['url']."</td></tr>\n\n"."<tr><th align='left' style='padding:10px; border:1px solid #ccc'>Phone Number : </th><td align='left' style='padding:10px; border:1px solid #ccc'>".$_POST['phonenumber']."</td></tr>\n\n"."<tr><th align='left' style='padding:10px; border:1px solid #ccc'>Address : </th><td align='left' style='padding:10px; border:1px solid #ccc'>".$_POST['clientaddress']."</td></tr>\n\n"."<tr><th align='left' style='padding:10px; border:1px solid #ccc'>State : </th><td align='left' style='padding:10px; border:1px solid #ccc'>".$_POST['clientstate']."</td></tr>\n\n"."<tr><th align='left' style='padding:10px; border:1px solid #ccc'>Zip : </th><td align='left' style='padding:10px; border:1px solid #ccc'>".$_POST['clientzip']."</td></tr>\n\n"."<tr><th align='left' style='padding:10px; border:1px solid #ccc'>Country : </th><td align='left' style='padding:10px; border:1px solid #ccc'>".$_POST['country']."</td></tr>\n\n"."<tr><th align='left' style='padding:10px; border:1px solid #ccc'>Sales Representatives Name : </th><td align='left' style='padding:10px; border:1px solid #ccc'>".$_POST['salesname']."</td></tr>\n\n"."<tr><th align='left' style='padding:10px; border:1px solid #ccc'>Sales Representatives Email : </th><td align='left' style='padding:10px; border:1px solid #ccc'>".$_POST['salesemail']."<tr><th>\n\n"."<tr><th align='left' style='padding:10px; border:1px solid #ccc'>Campaign Selected :</th><td align='left' style='padding:10px; border:1px solid #ccc'>".$_POST['packages']."</td></tr>\n\n"."<tr><th align='left' style='padding:10px; border:1px solid #ccc'>Campaign Timeline : </th><td align='left' style='padding:10px; border:1px solid #ccc'>".$_POST['campaigntimeline']."</td></tr>\n\n"."<tr><th align='left' style='padding:10px; border:1px solid #ccc'>Charges :</th><td align='left' style='padding:10px; border:1px solid #ccc'>".$_POST['monthlycharges']."</td></tr>\n\n"."<tr><th align='left' style='padding:10px; border:1px solid #ccc'>Payment Date :</th><td align='left' style='padding:10px; border:1px solid #ccc'>".date("m-d-Y", strtotime($_POST['_date']))."</td></tr>\n\n"."<tr><th align='left' style='padding:10px; border:1px solid #ccc'>Paid Via :</th><td align='left' style='padding:10px; border:1px solid #ccc'>".$_POST['payvia']."</td></tr>\n\n"."<tr><th align='left' style='padding:10px; border:1px solid #ccc'>Comment : </th><td align='left' style='padding:10px; border:1px solid #ccc'>".$_POST['your-message']."</td></tr><tr><td align='left' colspan='2' style='padding:10px; border:1px solid #ccc'><strong>Terms:-</strong> This Agreement is entered into on the payment date unless extended by any subsequent written indication. Any of the digital marketing services supplied under this Agreement shall be subject to 24x7ads general terms and conditions as outlined in (Terms & Conditions). The signing party confirms that they are the authorized person/representative of the stated client and are subscribing to 24x7ads's monthly Digital Marketing Services. At the end of the stated time, the authorized person/representative of the client and 24x7ads will renegotiate the original Agreement. The renegotiation will encompass one of the following: a continuation of the agreed contract, a revised contract, or cancellation of the contract, whichever is agreed. The client hereby represents, undertakes, and warrants that the services provided by 24x7ads under this Agreement do not violate/infringe, or shall not at any time during or after this Agreement violate/infringe the intellectual property rights of any third party. Unless stated in our quotation or invoice, the client agrees to pay 24x7ads the entire cost upfront for all / any of our services at the start of every month. The signing party has the right to terminate the Agreement with a prior thirty-days (30) notice.<br>

In case of the settlement of any billing dispute, the signed party agrees to provide 24x7ads the time period of thirty days before disputing with any third-party credit/debit card company or bank. Service fees, including but not limited to those related to our digital marketing services are non-refundable. 24x7ads will review each request subjectively and will reserve the right to issue or deny a refund.</td></tr>
</body></html>
    
    
    
    ";
$mail->send();
//   echo "Message Sucessfully Sent";
header("Location: https://24x7ads.com/oc?msg=Success");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}