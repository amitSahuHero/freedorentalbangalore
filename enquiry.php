<?php
@ob_start ();
@session_start ();
//error_reporting(0);
date_default_timezone_set ( "Asia/Kolkata" );
$date = date ( "Y-m-d h:i:s" );
require_once 'phpmailer/class.phpmailer.php';
$mail = new PHPMailer(true);
$action_type = $_REQUEST ['action_type'];


if ($action_type == "getquotes") {

    $name = $_REQUEST ['getname'];
    $email = $_REQUEST ['getemail'];
    $phone = $_REQUEST ['getphone'];
    $state = $_REQUEST ['getstate'];
    $location = $_REQUEST ['getvehicle'];
    try {
		$mail->isSMTP();
		$mail->Host = 'smtpout.secureserver.net';
		$mail->SMTPAuth = true;
		$mail->Username = 'contact@freedo.rentals';
		$mail->Password = 'Welcome@123';
		$mail->SMTPSecure = 'tls';
		$mail->Port = 587;

		$emailFrom='no-reply@freedo.rentals';
		$nameFrom='Freedo Rental';
		$emailTo='udayan.kumar@heromotocorp.com';
		$nameTo=$_REQUEST ['getname'];;
		
    $message = "<html><body >";
    $message .= "<div style='background:#dcdcdc; width:499px; padding:4px 5px;'>
				<table style='width:500px; background-color:#fff;border:0; padding:10px; margin:0 auto;' cellpadding='0' cellpadding='0'>
				<tr><td colspan='2'><table width='100%' cellpadding='0' cellspacing='0' border='0'>
				<tr><td style='color: #0eabd4;padding:10px 0;border-bottom: 2px solid #eee;border-top: 2px solid #eee;border-left: 2px solid #eee;border-right: 2px solid #eee;padding: 5px;'><img src='http://sh012.global.temp.domains/~sarkark2/freedo/img/index.png' style='max-height: 67px !important;margin:0 auto;'></td>
				</tr></table></td></tr>";

    $message .= "<tr>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>First Name</td>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee;border-right:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>" . '&nbsp;' . $name. PHP_EOL . "</td> </tr>";

    $message .= "<tr>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>Email</td>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee;border-right:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>" . '&nbsp;' . $email . PHP_EOL . "</td> </tr>";

    $message .= "<tr>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>Mobile</td>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee;border-right:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>" . '&nbsp;' . $phone . PHP_EOL . "</td> </tr>";

    $message .= "<tr>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>State</td>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee;border-right:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>" . '&nbsp;' . $state. PHP_EOL . "</td> </tr>";


    $message .= "<tr>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>Vehicle</td>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee;border-right:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>" . '&nbsp;' . $location. PHP_EOL . "</td> </tr>";
    $message .= "</table></div>";
    $message .= "</body></html>";
   $mail->AddAddress($emailTo, $nameTo);
	  $mail->SetFrom($emailFrom, $nameFrom);
	  $mail->AddReplyTo($emailFrom, $nameFrom);
	  $mail->Subject = 'Thank you for registering on Freedo Rental';
	  $mail->AltBody = '';
	  $mail->MsgHTML($message);
	  $mail->Send();
	  echo "send";
	} catch (phpmailerException $e) {
		echo $e->errorMessage();
	} catch (Exception $e) {
		echo $e->errorMessage();
	}
}



if ($action_type == "enquiry") {

	 $name = $_REQUEST ['name'];
	 $email = $_REQUEST ['email'];
	 $phone = $_REQUEST ['phone'];
     $state = $_REQUEST ['state'];
     $location = $_REQUEST ['vehicle'];
		try {
		$mail->isSMTP();
		$mail->Host = 'smtpout.secureserver.net';
		$mail->SMTPAuth = true;
		$mail->Username = 'contact@freedo.rentals';
		$mail->Password = 'Welcome@123';
		$mail->SMTPSecure = 'tls';
		$mail->Port = 587;

		$emailFrom='no-reply@freedo.rentals';
		$nameFrom='Freedo Rental';
		$emailTo='udayan.kumar@heromotocorp.com';
		$nameTo=$_REQUEST ['name'];
		$message = "<html><body >";
		$message .= "<div style='background:#dcdcdc; width:499px; padding:4px 5px;'>
    				<table style='width:500px; background-color:#fff;border:0; padding:10px; margin:0 auto;' cellpadding='0' cellpadding='0'>
    				<tr><td colspan='2'><table width='100%' cellpadding='0' cellspacing='0' border='0'>
    				<tr><td style='color: #0eabd4;padding:10px 0;border-bottom: 2px solid #eee;border-top: 2px solid #eee;border-left: 2px solid #eee;border-right: 2px solid #eee;padding: 5px;'><img src='http://sh012.global.temp.domains/~sarkark2/freedo/img/index.png' style='max-height: 67px !important;margin:0 auto;'></td>
    				</tr></table></td></tr>";

		$message .= "<tr>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>First Name</td>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee;border-right:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>" . '&nbsp;' . $name. PHP_EOL . "</td> </tr>";
		
		$message .= "<tr>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>Email</td>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee;border-right:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>" . '&nbsp;' . $email . PHP_EOL . "</td> </tr>";

		$message .= "<tr>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>Mobile</td>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee;border-right:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>" . '&nbsp;' . $phone . PHP_EOL . "</td> </tr>";

        $message .= "<tr>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>State</td>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee;border-right:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>" . '&nbsp;' . $state. PHP_EOL . "</td> </tr>";
		
		
		$message .= "<tr>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>Vehicle</td>
		<td style='border-bottom:2px solid #eee;border-top:2px solid #eee;border-left:2px solid #eee;border-right:2px solid #eee; padding:5px; color:#343333; font-size:13px;' align='left'>" . '&nbsp;' . $location. PHP_EOL . "</td> </tr>";
	$message .= "</table></div>";
	$message .= "</body></html>"; 
	$mail->AddAddress($emailTo, $nameTo);
	  $mail->SetFrom($emailFrom, $nameFrom);
	  $mail->AddReplyTo($emailFrom, $nameFrom);
	  $mail->Subject = 'Thank you for registering on Freedo Rental';
	  $mail->AltBody = '';
	  $mail->MsgHTML($message);
	  $mail->Send();
	  echo "send";
	} catch (phpmailerException $e) {
		echo $e->errorMessage();
	} catch (Exception $e) {
		echo $e->getMessage();
	}
    }


	




?>