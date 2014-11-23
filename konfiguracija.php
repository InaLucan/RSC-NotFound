<?php



//lokalno
$server="localhost";
$baza = "notfound";
$user = "notfound";
$pass = "notfound";
$putanja = "/notfound/Hackathon/";


$con=new PDO("mysql:host=" . $server . ";dbname=" . $baza,$user,$pass);
$con->exec("set names utf8;");

session_start();
//server
// $server="localhost";
// $baza="tjakopec_seminar";
// $korisnik="vjezba";
// $lozinka="vjezba";
// $putanja="/OMS20122013/tjakopec/BPII/seminar/";
