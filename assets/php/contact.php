<!DOCTYPE html>
<html>
<head>
<title>Submission - Invisible reCAPTCHA</title>
</head>
<body>
<?php
// Checks if form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    function post_captcha($user_response) {
        $fields_string = '';
        $fields = array(
            'secret' => '6Le9iXoUAAAAANS6S4ofL9mIT92NraGBliRvIrq1',
            'response' => $user_response
        );
        foreach($fields as $key=>$value)
        $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }

    // Call the function post_captcha
    $res = post_captcha($_POST['g-recaptcha-response']);

    if (!$res['success']) {
        // What happens when the reCAPTCHA is not properly set up
        echo 'reCAPTCHA error: Check to make sure your keys match the registered domain and are in the correct locations. You may also want to doublecheck your code for typos or syntax errors.';
    } else {
        // If CAPTCHA is successful...
		
		

        // Paste mail function or whatever else you want to happen here!

/*
|--------------------------------------------------------------------------
| Configure your contact form
|--------------------------------------------------------------------------
|
| Set value of '$reciever' to email address that want to receive inquiries.
| Also, '$default_subject' is the subject that you'll see in your inbox.
|
*/
$reciever = "info@bitshares.org";
$default_subject = "Bitshares - Inquery from " . strip_tags($_POST['name']);



/*
|--------------------------------------------------------------------------
| Sending email
|--------------------------------------------------------------------------
|
| This part of code is responsible to send the email. So you don't need to
| change anything here. Just make sure you have a mailserver on your host.
|
*/

if ( isset($_POST['email']) && isset($_POST['message']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {

  // detect & prevent header injections
  $test = "/(content-type|bcc:|cc:|to:)/i";
  foreach ( $_POST as $key => $val ) {
    if ( preg_match( $test, $val ) ) {
      exit;
    }
  }

  $subject = $_POST['subject'];
  if ($subject == "") {
    $subject = $default_subject;
  }

  $msg = nl2br($_POST['message']);

  $headers = "From: " . strip_tags($_POST['name']) . '<'. strip_tags($_POST['email']) .'>' . "\r\n";
  $headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
  
  mail( $reciever, $subject , $msg, $headers );
}		

    }
} else { ?>
    
<!-- FORM GOES HERE -->
				

<?php } ?>
</body>
</html>