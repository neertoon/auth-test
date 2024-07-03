<?php
echo "<h1>TEST AUTH</h1>";
echo "<a href=\"/.auth/logout\">Sign out</a><br /><br />";


echo "<pre>";
var_export('phpinput');
var_export(file_get_contents('php://input'));
echo "</pre>";
echo "<br>";
echo "<pre>";
var_export('POST');
var_export($_POST);
echo "</pre>";
echo "<br>";
echo "<pre>";
var_export('GET');
var_export($_GET);
echo "</pre>";
echo "<br>";
echo "<pre>";
var_export('COOKIE');
var_export($_COOKIE);
echo "</pre>";
echo "<br>";
echo "<pre>";
var_export('SERVER');
var_export($_SERVER);
echo "</pre>";
echo "<br>";

echo "<br />KONIEC";

$url = 'https://mbrzozowski-auth-test.azurewebsites.net/.auth/me';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0)");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_TIMEOUT, 20);
$rt = curl_exec($ch);
$info = curl_getinfo($ch);
echo $info["http_code"];

echo "<br>";
echo "<pre>";
var_export('TOKEN');
var_export($rt);
echo "</pre>";
echo "<br>";