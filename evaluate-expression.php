<?php

if(isset($_GET['expression'])) {
	$expression = $_GET['expression'];
	$curl = curl_init();

	curl_setopt_array($curl, [
		CURLOPT_URL => "https://evaluate-expression.p.rapidapi.com/?expression=".urlencode($expression),
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_HTTPHEADER => [
			"X-RapidAPI-Host: evaluate-expression.p.rapidapi.com",
			"X-RapidAPI-Key: 8ac05a8a70mshe1146118ca4c93bp19d6e9jsnc540a4ab923d"
		],
	]);

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);

	if ($err) {
		echo "cURL Error #:" . $err;
	} else {
		echo '<div style="text-align: center;"><h1>The result of the expression '.$expression.' is: '.$response.'</h1></div>';
	}
}
?>
