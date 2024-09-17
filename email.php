<?php

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => 'https://mob2.temp-mail.org/mailbox',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_SSL_VERIFYHOST => false,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_HTTPHEADER => [
    'User-Agent: 3.48',
    'Accept: application/json',
  ],
]);

$response = curl_exec($curl);
curl_close($curl);

$json=json_decode($response,true);
$token=$json['token'];
$mailbox=$json['mailbox'];

?>