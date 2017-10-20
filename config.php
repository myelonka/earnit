<?php

$url = $_SERVER['REQUEST_URI'];
$strings = explode('/', $url);
$current = end($strings);

$dbname = 'earnit';
$dbuser = 'root';
$dbpass = '';
$dbserver = 'localhost';

?>