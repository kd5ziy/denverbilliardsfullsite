<?php

$url = 'http://denverbilliardclub.com';
if($_SERVER['PATH_INFO']) {
	$url .= $_SERVER['PATH_INFO'];
}

$hCurl = curl_init($url);
curl_exec($hCurl);
curl_close($hCurl);
