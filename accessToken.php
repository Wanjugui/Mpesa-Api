<?php
$consumerKey = "UvOr9dFPt11i2Fj0g4KHkIC2v7RtewtE";
$consumerSecret = "b13eE3tdUOYVHLIR";
$access_token_url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
$headers = ['content- Type:application/jason; charset=utf8'];
$curl = curl_init($access_token_url);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($curl, CURLOPT_HEADER, FALSE);
curl_setopt($curl, CURLOPT_USERPWD, $consumerKey . ':' . $consumerSecret);
$result = curl_exec($curl);
$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
echo $result;
//$result = json_decode($result);
//echo $access_token = $result->access_token;
curl_close($curl);