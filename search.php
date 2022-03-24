<?php

// $url = 'https://web.chelaile.net.cn/api/bus/query!nSearch.action?' . $_SERVER['QUERY_STRING'];
$url = 'https://cdn.web.chelaileapp.cn/api/bus/query!nSearch.action?' . $_SERVER['QUERY_STRING'];

$header = [
    'Connection' => 'Keep-Alive',
    'Charset' => 'UTF-8',
    'Content-Type' => 'text',
    'Accept-Encoding' => 'gzip,compress,br,deflate',
    'Referer' => 'https://servicewechat.com/wx71d589ea01ce3321/543/page-frame.html',
];
$header = array_map(function ($key, $value) { return $key . ':' . $value; }, array_keys($header), $header);
// curl
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE); 
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($curl, CURLOPT_ENCODING, 'gzip,deflate');
$output = curl_exec($curl);
curl_close($curl);
echo $output;
