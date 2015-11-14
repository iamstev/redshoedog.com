<?php

/* TEST FOR SUBMISSION */ if(empty($_GET)){print'<p style="font-family:arial;">Nothing to see here, move along.</p>';exit;}

/* ROOT SETTINGS */ require($_SERVER['DOCUMENT_ROOT'].'/root_settings.php');

/* FORCE HTTPS FOR THIS PAGE */ if($use_https === TRUE){if(!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == ""){header("Location: https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);exit;}}

/* GET KEYS TO SITE */ require($path_to_keys);

/* LOAD FUNC-CLASS-LIB */
	require_once('classes/drill/Client.php');
//

ob_start();


$go = TRUE;

// 2. CHECK NAME AND EMAIL
if($go){
	$email = $_GET['email'];
	$firstname = $_GET['firstname'];
	$lastname = $_GET['lastname'];
}


// 3. CLEAN INPUT and SEND MAIL
if($go){

	$comment = $_GET['comment'];

	$headers = array("Reply-To"=> $email);
	$args = array(
		'key' => $apikey['mandrill'],
		'message' => array(
			"html" => "<p>Firstname: ".$firstname."<br/>Lastname: ".$lastname."<br/>Email: ".$email."</p><p>".$comment."</p>",
/*			"text" => "",			*/
			"from_email" => "no-reply@redshoedog.com",
			"from_name" => "Dog.bot",
			"subject" => "Red Shoe Dog (Ticket #".time()." )",
			"to" => $apikey['contact_email'],
			"headers" =>$headers,
			"track_opens" => true,
			"track_clicks" => false,
			"auto_text" => true
		)
	);

	$mandrill = new \Gajus\Drill\Client($apikey['mandrill']);
    $r = $mandrill->api('messages/send', $args);

	if($r['status']== 'error'){
		$json = array(
				'error' => '1',
				'msg' => 'There was an error sending your message, please try again. (ref: madrill error)'
			);
	}else{
		$json = array(
				'error' => '0',
				'msg' => 'Your message has been sent. Thank you.'
			);
	}

}

header('Cache-Control: no-cache, must-revalidate');
header('Content-type: application/json');
print json_encode($json);
ob_end_flush();

?>
