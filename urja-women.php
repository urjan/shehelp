<?php
$post_data = array(
    'From' => "09243422233",
    'To' => "9481952197",
    'CallerId' => "09243422233",
    'Url' => "http://my.exotel.in/exoml/start/<flow_id>",
    'TimeLimit' => "5",
    'TimeOut' => "10",
    'CallType' => "trans"

);
 
$exotel_sid = "msrit2"; // Your Exotel SID
$exotel_token = "c57baa90340debe5f3e79ac1a971312ee20562e8  "; // Your exotel token
 
$url = "https://".$exotel_sid.":".$exotel_token."@twilix.exotel.in/v1/Accounts/".$exotel_sid."/Sms/Send";
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FAILONERROR, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
 
$http_result = curl_exec($ch);
$error = curl_error($ch);
$http_code = curl_getinfo($ch ,CURLINFO_HTTP_CODE);
 
curl_close($ch);
 
print "Response = ".print_r($http_result);
?>