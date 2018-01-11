<?php

session_start();
if (!isset($_SESSION['salys'])) $_SESSION['salys'] = [];
$_SESSION['salys'][] = $_POST;
//var_export($_SESSION);
header('location: 01-11_11-last-front.html');
?>