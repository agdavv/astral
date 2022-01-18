<?php
var_dump("hey");

    $druzynaNazwa       = $_POST['druzynaNazwa'];
    $druzynaFanpage     = $_POST['druzynaFanpage'];
    $druzynaLogo        = $_POST['druzynaLogo'];
    $ceoEmail           = $_POST['ceoEmail'];
    $ceoDiscord         = $_POST['ceoDiscord'];
    $steamKapitan       = $_POST['steamKapitan'];
    $steamGracz2        = $_POST['steamGracz2'];
    $steamGracz3        = $_POST['steamGracz3'];
    $steamGracz4        = $_POST['steamGracz4'];
    $steamGracz5        = $_POST['steamGracz5'];
    $steamStandIn1      = $_POST['steamStandIn1'];
    $steamStandIn2      = $_POST['steamStandIn2'];
    $steamTrener        = $_POST['steamTrener'];
    $steamCeo           = $_POST['steamCeo'];

    if(empty($druzynaNazwa) || empty($druzynaFanpage) || empty($druzynaLogo) || empty($ceoEmail) || empty($ceoDiscord) || empty($ceoEmail) || empty($steamKapitan) || empty($steamGracz2) || empty($steamGracz2) || empty($steamGracz3) || empty($steamGracz4) || empty($steamGracz5)){
        header("location: ../index.html?error=emptyfields");
        exit();
    }
var_dump($druzynaNazwa);