<?php

  $grecaptcha_secretKey = ""; // Put your Google ReCaptcha v3 secret key here
  $admin_mail = ''; // Put your admin email here
  $mailchimp_key = ''; // Put your MailChimp API key here
  $mailchimp_list_id = ''; // put your MailChimp list ID here

  // This is default message which will be showed if no actions where done
  $result = array(
    'status' => 'Please contact website administrator.'
  );

  /*
  * Check the Google ReCaptcha v3 and validate if this is not a robot
  */
  if(isset($_GET['g-recaptcha-response']) && $grecaptcha_secretKey){

    $ip = $_SERVER['REMOTE_ADDR'];
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $grecaptcha_secretKey . "&response=" . $_GET['g-recaptcha-response'] . "&remoteip=" . $ip);
    $responseKeys = json_decode($response , true);
    // It looks like this is a robot
    if (!isset($responseKeys['score']) || $responseKeys['score'] < 0.5) {
      $responseKeys['status'] = 'recaptcha-problem';
      echo json_encode($responseKeys);
      exit();
    }
  }

  /*
  * Send email to the administrator
  */
  $email = $_GET['EMAIL']; // Get email address from form
  $id = md5(strtolower($email)); // Encrypt the email address
  if ($admin_mail) {
    $message = isset($_GET['MESSAGE']) ? $_GET['MESSAGE'] : 'Contact Form action'; //Get message from form
    $message = wordwrap($message, 70, "\r\n");
    mail($admin_mail, 'Contact form', $message,
     "From: "  . $email . "\r\n"
     . "Reply-To: "  . $email . "\r\n"
     . "X-Mailer: PHP/" . phpversion()
    );
    $result['status'] = 'Thank you for contacting us.';
  }

  /*
  * Connect to mailchimp and add a new subscriber
  */
  include('./MailChimp.php');
  // namespace defined in MailChimp.php
  use \DrewM\MailChimp\MailChimp;    
  if ($mailchimp_key) { 
  	$MailChimp = new MailChimp($mailchimp_key);
    // setup the merge fields
  	$mergeFields = array(
      'FNAME' => isset($_GET['FNAME']) ? $_GET['FNAME'] : '',
      'LNAME' => isset($_GET['LNAME']) ? $_GET['LNAME'] : '' ,
      'PHONE' => isset($_GET['PHONE']) ?  $_GET['PHONE'] : '',
      'ADDRESS' => isset($_GET['ADDRESS']) ?  $_GET['ADDRESS'] : ''
    );
  	// remove empty merge fields
    $mergeFields = array_filter($mergeFields);
  	$result = $MailChimp->put("lists/$mailchimp_list_id/members/$id", array(
    	'email_address'     => $email,
      'status'            => 'subscribed',
      //'merge_fields'      => $mergeFields, 
    	'update_existing'   => true, // YES, update old subscribers!
    ));
    $result['status'] = $result['status'] == 'subscribed' ? 'Thanks for subscribing!' : ('MailChimp error: ' . $result['status']);
  }

  // Show any extra messages, like errors
  $result['status'] .= ob_get_contents();
  ob_end_clean();

  /*
  * Give respond to the javascript function
  */
	echo json_encode($result);