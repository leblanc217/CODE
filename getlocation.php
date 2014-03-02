<?php

$lng = $_GET['lng'];
$lat = $_GET['lat'];



//To add more conditions to the query, just lengthen the url string
$basicurl=sprintf("https://maps.googleapis.com/maps/api/geocode/xml?latlng=".$lat.",".$lng.
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



echo $xml->result->formatted_address;


//echo $xml_response;

//echo $basicurl;

?>
