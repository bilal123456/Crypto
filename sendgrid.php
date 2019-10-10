<?php 


$email = "bilalraza203@gmail.com";
$name = "Muhammad Bilal";
$body = "doneu";
$subject = "test";

$headers = array(

	"Authorization: Bearer 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",
	'Content-Type: application/json',
	



);

$data = array(

	'personalizations' => array(
		array(
			"to" => array(
				array(
					"email" => $email,
					"name" => $name,

				)
			)
		)
	),
	"from" => array(
		"email" => "bilalraza203@gmail.com"
	),
	"subject" => $subject,
	"content" => array(
		array(
			"type" => "text/html",
			"value" => $body
		)
	)

);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.sendgrid.com/v3/mail/send");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
echo $response;
curl_close($ch);
//print_r($response);
echo $response;



?>