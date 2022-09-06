<?php
//error_reporting(0);

$num1 = $_REQUEST["number"]; //get number from get request
$msg1 = $_REQUEST["message"]; // get message from get requst

$num = ltrim($num1, '0');  //to remove 0 from 11 digit number

$msg = urlencode($msg1); //to convert data into urlencode

$ch = curl_init();

$url = "https://ignoredhaxor.xyz/ultrasms/api/send?api_key=LolyourKey&number=" . $num . "&message=" . $msg;

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);


//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
//  echo $resp;


$status = (json_decode($resp)->success);

if ($status == 1) {
    echo 'sms sent successfull';
} else {
    echo 'sms sent faild';
}

?>