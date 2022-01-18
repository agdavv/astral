<?php

$servername = "localhost";
$dbUsername = "Astral";
$dbPassword = "Astralqwe1";
$dbName = "Astral";

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

if(!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
}