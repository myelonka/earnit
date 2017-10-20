<?php

$url = $_SERVER['REQUEST_URI'];
$strings = explode('/', $url);
$current = end($strings);
$current = substr($current, 0, strpos($current, "?"));

$dbname = 'earnit';
$dbuser = 'root';
$dbpass = '';
$dbserver = 'localhost';

?>