<?php
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		
		$url = 'https://covid19-api.org/api/status'.$name;
		
		$client = curl_init($url);
		curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
		$response = curl_exec($client);
		
		$result = json_decode($response);
		
		echo $result->data; 
	}
   ?>