<?php

$servername = "localhost";
$dbUsername = "u655902916_Astral";
$dbPassword = "Astralqwe1";
$dbName = "u655902916_Astral";

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

if(!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
}