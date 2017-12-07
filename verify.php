<?php
$access_token = '8auxoYNmwKKiI0DqQwDHmVIP+r/Bef6dZbTdnPPNY46xKD51B1sQbcHsEOeIYZr0IkjdLRzyNNfQ+QuADbqU4rK9qErTtQi1QwOy+aQHkuGgkYDWZK32SDWrcfsQhQoKmhgqMrt+SXNOHkKNs/n46QdB04t89/1O/w1cDnyilFU=';
$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
