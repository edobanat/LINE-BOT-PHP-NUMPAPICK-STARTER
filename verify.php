<?php
$access_token = 'PLLJDnSZpycZRR2EgNuDTXD6AHKgqFnW/fTpGBR0HPTfmyqKRR14TmA7cVWnQn3+5l7eKY9E1eCnrpI9Ru39LwvAGkf8pR0YTf+HTGmrnWZfzG5moffQ9cZz20MDuy7eb+UGevw8JhQOG8qP7SZcEQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
