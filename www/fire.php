<?php
	$accessToken = "{{spark_access_token}}";
	$deviceId = "{{spark_device_id}}";

	$fire = "https://api.spark.io/v1/devices/" . $deviceId . "/fire";

	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, $fire);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, "access_token=" . $accessToken);

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	$server_output = curl_exec ($ch);

	curl_close ($ch);
?>
