<?php

// Get cURL resource
$curl = curl_init();

// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://localhost/laravel-api-starter/public/api/clinics?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vbG9jYWxob3N0L2xhcmF2ZWwtYXBpLXN0YXJ0ZXIvcHVibGljL2FwaS9sb2dpbiIsImlhdCI6MTQ0NjAxOTUwMSwiZXhwIjoxNDQ3MjI5MTAxLCJuYmYiOjE0NDYwMTk1MDEsImp0aSI6IjQ3OGUzYTZmMTQwYjMzNjJiZjFjNWI2YjM1NjEwNGMxIiwic3ViIjoxfQ.vCc7CJV6BwYFUm-nkRsLR-L4O8_u2IsD0zW-PrfkoQM',
    CURLOPT_USERAGENT => 'Sample cURL Request'
));

// Send the request & save response to $resp
$response = curl_exec($curl);
//echo $response;

$result = json_decode($response);
//var_dump($decode);

if (count($result->data)>0){
	foreach ($result->data as $clinic) {
		# code...

		echo '<p>';
		echo 'Nama Hospital adalah '.$clinic->FullName ;
		echo '<br />';
		echo 'Kod Hospital ialah '.$clinic->facilitycode;
		echo '<br />';
		echo 'Negeri '.$clinic->State;
		echo '<p>';
	}
}
//echo json_decode($response);

// Close request to clear up some resources
curl_close($curl);
?>