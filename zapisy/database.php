<?php

$servername = "localhost";
$dbUsername = "u655902916_Astral";
$dbPassword = "Astralqwe1";
$dbName = "u655902916_Astral";

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

if(!$conn) {
    var_dump("hey");
    die("Connection Failed: ".mysqli_connect_error());
}