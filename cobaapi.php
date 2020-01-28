<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://webservice.jogjakota.go.id/Monografi/linmas?kel=141002&thn=2019",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: multipart/form-data; boundary=--------------------------223582120226822761598678"
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
