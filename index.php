<?php
echo "<h1>TEST AUTH</h1>";

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