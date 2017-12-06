<?php
$access_token = '5kD/TTinWQOMZGiPGTtVAprFyL2dlbB+8Tbwk8/fEdjR1P0b+V3AajhbCOeY483GtXM3EjMY6gqVi3FObND2OcblW87bC7DD4T0+i5hGUzpb8/40H8i9j3xULCvkjN/muneEV/Z0VIO3PBFPyPHtvQdB04t89/1O/w1cDnyilFU='
$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
