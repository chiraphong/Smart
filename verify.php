<?php
$access_token = 'Hp2UOQhamsXUNEJexD/MFND5SYbRNA7Gxdg5wKf0eAgF58+irTNcEcsAUIvCws2htXM3EjMY6gqVi3FObND2OcblW87bC7DD4T0+i5hGUzpl1RzdrC8HbRI0ONGrFy4u0/l18hdpXPJQ3xckhA6jPgdB04t89/1O/w1cDnyilFU='
$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
