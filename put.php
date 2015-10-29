<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://localhost/laravel-api-starter/public/api/clinics/909090093",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "PUT",
  CURLOPT_POSTFIELDS => "FullName=Klinik%20Desa%20keluarga&facilitycode=909090093&State=01",
  CURLOPT_HTTPHEADER => array(
    "authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vbG9jYWxob3N0L2xhcmF2ZWwtYXBpLXN0YXJ0ZXIvcHVibGljL2FwaS9sb2dpbiIsImlhdCI6MTQ0NjAxOTUwMSwiZXhwIjoxNDQ3MjI5MTAxLCJuYmYiOjE0NDYwMTk1MDEsImp0aSI6IjQ3OGUzYTZmMTQwYjMzNjJiZjFjNWI2YjM1NjEwNGMxIiwic3ViIjoxfQ.vCc7CJV6BwYFUm-nkRsLR-L4O8_u2IsD0zW-PrfkoQM",
    "cache-control: no-cache",
    "content-type: application/x-www-form-urlencoded",
    "postman-token: 40a1f967-6609-927b-aeec-d9b4f3776306"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

$result = json_decode($response);
var_dump($result);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}