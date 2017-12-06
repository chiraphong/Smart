<?php
$access_token = 'WlBuMy2FZL9jwdXovCDHUDG3y7KXw5fZ4IdkLpXwMl+LuGeCKFAsOd1cTSKl8A6ItXM3EjMY6gqVi3FObND2OcblW87bC7DD4T0+i5hGUzoJ4YgrBxaz5AGdWi00AOBPGjkxLm6MBhFrZLF2lHlOtwdB04t89/1O/w1cDnyilFU='
  $url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
