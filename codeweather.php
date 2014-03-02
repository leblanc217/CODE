<?php
//To add more conditions to the query, just lengthen the url string

$id = $_GET['id'];

$basicurl=sprintf("http://dd.weatheroffice.ec.gc.ca/citypage_weather/xml/".$id."_e.xml");

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $basicurl);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER , 1); 
$xml_response =curl_exec($ch);
curl_close($ch);

$xml = simplexml_load_string($xml_response);



echo $xml->currentConditions->temperature . "," . $xml->currentConditions->iconCode . "," . $xml->location->region ;

//echo $xml_response;

?>
