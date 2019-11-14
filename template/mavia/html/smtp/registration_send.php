<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="MAVIA - Register, Reservation, Questionare, Reviews form wizard">
	<meta name="author" content="Ansonika">
	<title>MAVIA | Register, Reservation, Questionare, Reviews form wizard</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="../img/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="../img/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="../img/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="../img/apple-touch-icon-144x144-precomposed.png">

	<!-- GOOGLE WEB FONT -->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">

	<!-- BASE CSS -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">
	<link href="../css/responsive.css" rel="stylesheet">
	<link href="../css/animate.min.css" rel="stylesheet">

	<!-- YOUR CUSTOM CSS -->
	<link href="../css/custom.css" rel="stylesheet">
    
	<script type="text/javascript">
    function delayedRedirect(){
        window.location = "../index.html"
    }
    </script>

</head>
<body onLoad="setTimeout('delayedRedirect()', 8000)" style="background-color:#fff;">

<?php
	
$firstname    = $_POST['firstname'];
$lastname    = $_POST['lastname'];
$email   = $_POST['email'];
$telephone = $_POST['telephone'];
$age   = $_POST['age'];
$gender   = $_POST['gender'];
$address   = $_POST['address'];
$city   = $_POST['city'];
$zip_code   = $_POST['zip_code'];
$country   = $_POST['country'];
$additional_message   = $_POST['additional_message'];
$terms   = $_POST['terms'];
	
$mail = new EMail;

// Enter your SMTP server (defaults to "127.0.0.1" or localhost):
$mail->Server = "localhost";

// Enter your FULL email address:
$mail->Username = 'info@yourdomain.com';

// Enter the password for your email address:
$mail->Password = 'YourPassword';

// Enter the email address you wish to send FROM (Name is an optional friendly name):
$mail->SetFrom("info@yourdomain.com", "MAVIA");

// Enter the email address you wish to send TO (Name is an optional friendly name):
$mail->AddTo("info@yourdomain.com", "MAVIA");

// You can add multiple recipients:
// $mail->AddTo("someother2@address.com");
	
// Enter the Subject of your message:
$mail->Subject = "Registration from MAVIA";

//Enter the content of your email message:
$mail->Message = "DETAILS:\n
First name: $firstname
Last name: $lastname
Email: $email
Telephone: $telephone
Age: $age
Gender: $gender
Address $address
City: $city
Zip code: $zip_code
Country: $country
Additional Message: $additional_message
Terms accepted: $terms" . PHP_EOL . PHP_EOL ;

// Optional extras
$mail->ContentType = "text/plain"; // Defaults to "text/plain; charset=iso-8859-1"

// AUTO REPLY===================================================================
$autoreply = new EMail;

// Enter your SMTP server (defaults to "127.0.0.1" or localhost):
$autoreply->Server = "localhost";

// Enter your FULL email address:
$autoreply->Username = 'info@yourdomain.com';

// Enter the password for your email address:
$autoreply->Password = 'YourPassword';

// Enter the email address you wish to send FROM (Name is an optional friendly name):
$autoreply->SetFrom("info@yourdomain.com", "MAVIA");

// Enter the email address you wish to send TO (Name is an optional friendly name):
$autoreply->AddTo("$email");

// You can add multiple recipients:
// $mail->AddTo("someother2@address.com");
	
// Enter the Subject of your message:
$autoreply->Subject = "Thank you";

// Enter the content of your email message:
$autoreply->Message = "Thank you for your time. Your request is successfully submitted. We will reply shortly.Below a summary.\n\n" . $mail->Message . PHP_EOL . PHP_EOL;

// Optional extras
$autoreply->ContentType = "text/plain"; // Defaults to "text/plain; charset=iso-8859-1"

	
$response = NULL;

if (!$mail->Send())
	{
	$response = "Mailer Error: please contact support@mavia.com " . $mail->ErrorInfo;
	}
  else
	{
	$response = "<div id='success'>
							<div class='icon icon--order-success svg'>
									  <svg xmlns='http://www.w3.org/2000/svg' width='72px' height='72px'>
										<g fill='none' stroke='#8EC343' stroke-width='2'>
										  <circle cx='36' cy='36' r='35' style='stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;'></circle>
										  <path d='M17.417,37.778l9.93,9.909l25.444-25.393' style='stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;'></path>
										</g>
									  </svg>
							 </div>
						<h4><span>Request successfully sent!</span>Thank you for your time</h4>
						<small>You will be redirect back in 5 seconds.</small>
						</div>";
	$autoreply->Send();
	}

echo ($response);

/*
=================================================================================
This is the EMail class.
Anything below this should not be edited unless you really know what you're doing.
*/
class EMail
{
  const newline = "\r\n";

  private
    $Port, $Localhost, $skt;

  public
    $Server, $Username, $Password, $ConnectTimeout, $ResponseTimeout,
    $Headers, $ContentType, $From, $To, $Cc, $Subject, $Message,
    $Log;

  function __construct()
  {
    $this->Server = "127.0.0.1";
    $this->Port = 25;
    $this->Localhost = "localhost";
    $this->ConnectTimeout = 30;
    $this->ResponseTimeout = 8;
    $this->From = array();
    $this->To = array();
    $this->Cc = array();
    $this->Log = array();
    $this->Headers['MIME-Version'] = "1.0";
    $this->Headers['Content-type'] = "text/plain; charset=iso-8859-1";
  }

  private function GetResponse()
  {
    stream_set_timeout($this->skt, $this->ResponseTimeout);
    $response = '';
    while (($line = fgets($this->skt, 515)) != false)
    {
 $response .= trim($line) . "\n";
 if (substr($line,3,1)==' ') break;
    }
    return trim($response);
  }

  private function SendCMD($CMD)
  {
    fputs($this->skt, $CMD . self::newline);

    return $this->GetResponse();
  }

  private function FmtAddr(&$addr)
  {
    if ($addr[1] == "") return $addr[0]; else return "\"{$addr[1]}\" <{$addr[0]}>";
  }

  private function FmtAddrList(&$addrs)
  {
    $list = "";
    foreach ($addrs as $addr)
    {
      if ($list) $list .= ", ".self::newline."\t";
      $list .= $this->FmtAddr($addr);
    }
    return $list;
  }

  function AddTo($addr,$name = "")
  {
    $this->To[] = array($addr,$name);
  }

  function AddCc($addr,$name = "")
  {
    $this->Cc[] = array($addr,$name);
  }

  function SetFrom($addr,$name = "")
  {
    $this->From = array($addr,$name);
  }
  function Send()
  {
    $newLine = self::newline;

    //Connect to the host on the specified port
    $this->skt = fsockopen($this->Server, $this->Port, $errno, $errstr, $this->ConnectTimeout);

    if (empty($this->skt))
      return false;

    $this->Log['connection'] = $this->GetResponse();

    //Say Hello to SMTP
    $this->Log['helo']     = $this->SendCMD("EHLO {$this->Localhost}");

    //Request Auth Login
    $this->Log['auth']     = $this->SendCMD("AUTH LOGIN");
    $this->Log['username'] = $this->SendCMD(base64_encode($this->Username));
    $this->Log['password'] = $this->SendCMD(base64_encode($this->Password));

    //Email From
    $this->Log['mailfrom'] = $this->SendCMD("MAIL FROM:<{$this->From[0]}>");

    //Email To
    $i = 1;
    foreach (array_merge($this->To,$this->Cc) as $addr)
      $this->Log['rcptto'.$i++] = $this->SendCMD("RCPT TO:<{$addr[0]}>");

    //The Email
    $this->Log['data1'] = $this->SendCMD("DATA");

    //Construct Headers
    if (!empty($this->ContentType))
      $this->Headers['Content-type'] = $this->ContentType;
    $this->Headers['From'] = $this->FmtAddr($this->From);
    $this->Headers['To'] = $this->FmtAddrList($this->To);
    if (!empty($this->Cc))
      $this->Headers['Cc'] = $this->FmtAddrList($this->Cc);
    $this->Headers['Subject'] = $this->Subject;
    $this->Headers['Date'] = date('r');

    $headers = '';
    foreach ($this->Headers as $key => $val)
      $headers .= $key . ': ' . $val . self::newline;

    $this->Log['data2'] = $this->SendCMD("{$headers}{$newLine}{$this->Message}{$newLine}.");

    // Say Bye to SMTP
    $this->Log['quit']  = $this->SendCMD("QUIT");

    fclose($this->skt);

    return substr($this->Log['data2'],0,3) == "250";
  }
}
?>
<!-- END SEND MAIL SCRIPT -->
</body>
</html>