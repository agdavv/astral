<?php
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

    if(empty($druzynaNazwa) || empty($druzynaFanpage) || empty($druzynaLogo) || empty($ceoEmail) || empty($ceoDiscord) || empty($ceoEmail) || empty($steamKapitan) || empty($steamGracz2) || empty($steamGracz2) || empty($steamGracz3) || empty($steamGracz4) || empty($steamGracz5)){
        header("location: ../index.php?error=emptyfields");
        exit();
    }else{
        $sql = "
            INSERT INTO users (druzynaNazwa,druzynaFanpage,druzynaLogo,ceoEmail,ceoDiscord,steamKapitan,steamGracz2,steamGracz3,steamGracz4,steamGracz5,steamStandIn1,steamStandIn2,steamTrener,steamCeo) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $statement = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($statement, $sql)){
            header("location: ../index.php?error=sqlerror");
            exit();
        }else{

            mysqli_stmt_bind_param($statement, "ssssssssssssss", $druzynaNazw ,$druzynaFanp ,$druzynaLogo ,$ceoEmail ,$ceoDiscord ,$steamKapita ,$steamGracz2 ,$steamGracz3 ,$steamGracz4 ,$steamGracz5 ,$steamStandI ,$steamStandI ,$steamTrener ,$steamCeo);
            mysqli_stmt_execute($statement);
            header("location: ../index.php?signup=success");
            exit();
        }
    }
    mysqli_stmt_close($statement);
    mysqli_close($conn);
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