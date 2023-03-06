<?php

$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];

if ( $text == "" ) {

	 $response  = "What do you want to \n";
	 $response .= "1. Create Account \n";
	 $response .= "2. Visit account";

}else if ( $text == "1" ) {
  $response = "Fill in details\n";
  $response .= "1. Name \n";
  $response .= "2. Location";
  
}else if($text == "2") {
  $response = "END Your phone number is $phoneNumber and name is $name";
 
}else if($text == "1*1") {
  $response = "Please enter your name \n";

  $name  = // user enters the name;
  $response = "END Your name is $name";
 
}else if ( $text == "1*2" ) {
   $response = "Please enter your location \n";
   
	 $location  = // user enters the location;
	 $response = "END Your location is $location";
}
header('Content-type: text/plain');
echo $response;

?>