<?php
$server="localhost";
$baza = "notfound";
$user = "notfound";
$pass = "notfound";
$putanja = "/notfound/Hackathon/MOB/";

$con=new PDO("mysql:host=" . $server . ";dbname=" . $baza,$user,$pass);
$con->exec("set names utf8;");

session_start();
