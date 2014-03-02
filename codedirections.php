<?php

$location = $_GET['location'];
$direction = $_GET['direction'];

//To add more conditions to the query, just lengthen the url string
$basicurl=sprintf("http://maps.google.com/maps/api/directions/xml?origin=".$location."&destination=".$direction.
					"&sensor=false&units=metric");
	
		$basicurl = str_replace(" ","%20",$basicurl);		
		//$basicurl = str_replace("","%27",$basicurl);			
	
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $basicurl);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER , 1); 
$xml_response =curl_exec($ch);
curl_close($ch);

$xml = simplexml_load_string($xml_response);



echo $xml->route->leg->duration->text . ",," . $xml->route->leg->distance->text . ",," . $xml->route->leg->start_location->lat . ",," . $xml->route->leg->start_location->lng . ",," .  $xml->status;


//echo $xml_response;

//echo $basicurl;

?>
