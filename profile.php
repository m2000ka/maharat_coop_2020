<?php


$access_token = 'RPXIgVgL/IdmR6hgyeSW/SYA8n3KmlA9o1e6WZ4/ZM4GyfqhhQzpU72G1d6PsQQXPgORyt1MK5SDJ6aFfwFDdufMOvRsTzmRKXhjyoI+XwnTruvPMaM0350j8CRy7SRAiE6SOyEDqqvFvX4KV3POTAdB04t89/1O/w1cDnyilFU=";

$userId = 'Ua1e2ee461076f985febb6f4963ef73f2';

/// $strAccessToken = "RPXIgVgL/IdmR6hgyeSW/SYA8n3KmlA9o1e6WZ4/ZM4GyfqhhQzpU72G1d6PsQQXPgORyt1MK5SDJ6aFfwFDdufMOvRsTzmRKXhjyoI+XwnTruvPMaM0350j8CRy7SRAiE6SOyEDqqvFvX4KV3POTAdB04t89/1O/w1cDnyilFU=";
//// $arrPostData['to'] = "Ua1e2ee461076f985febb6f4963ef73f2";

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

