<?php
var_dump($_POST);exit;
if(isset($_POST['zapisy-guzik'])) {

    require 'database.php';

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


    $sql = "
        INSERT INTO users (druzynaNazwa,druzynaFanpage,druzynaLogo,ceoEmail,ceoDiscord,steamKapitan,steamGracz2,steamGracz3,steamGracz4,steamGracz5,steamStandIn1,steamStandIn2,steamTrener,steamCeo) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $statement = mysqli_stmt_init($conn);

}
else{
    header("location: ../index.php?a");
    exit();
}



/*
,druzynaNazwa,druzynaFanpage,druzynaLogo,ceoEmail,ceoDiscord,steamKapitan,steamGracz2,steamGracz3,steamGracz4,steamGracz5,steamStandIn1,steamStandIn2,steamTrener,steamCeo
*/
/*
$druzynaNazw ,$druzynaFanp ,$druzynaLogo ,$ceoEmail    ,$ceoDiscord  ,$steamKapita ,$steamGracz2 ,$steamGracz3 ,$steamGracz4 ,$steamGracz5 ,$steamStandI ,$steamStandI ,$steamTrener ,$steamCeo       
*/