<?php
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		
		$url = 'https://covid19-api.org/api/status?date=2020-03-25'.$name;
		
		$client = curl_init($url);
		curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
		$response = curl_exec($client);
		
		$result = json_decode($response);
		
		echo $result->data; 
	}
   ?>