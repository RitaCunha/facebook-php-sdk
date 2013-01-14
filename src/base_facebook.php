<?php 
require_once 'src/facebook.php';
 
$app_id = "YOUR_APP_ID_HERE";
$app_secret = "APP_SECRET_HERE";
 
 
 
$facebook = new Facebook(array(
  'appId' => $app_id,
	'secret' => $app_secret,
	'cookie' => true
	));
 
$signed_request = $facebook->getSignedRequest();   // create the signed object
 
 
$locale = $signed_request['user']['locale'];  //grab the locale information
 
//write the logic based on the language found
switch ($localte) {
	case 'de_DE':
		//your german content goes here
		break;
	case 'fr_FR'
		//  your french content goes here
	break;
 
	default: //en_US
		//your english content goes here
		break;
