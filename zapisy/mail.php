<?php
    $eol = "\r\n";
    $to = "astralwars@hajdecki.com"; // replace this mail with yours
    $filenameee =  $_FILES['file']['name'];
    $fileName = $_FILES['file']['tmp_name']; 
    
    $content = file_get_contents($fileName);
    $content = chunk_split(base64_encode($content));

    $body = "--" . $eol;
    $body .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
    $body .= "Content-Transfer-Encoding: 8bit" . $eol;

    $body .= "--" . $eol;
    $body .= "Content-Type: application/octet-stream; name=\"" . $filenameee . "\"" . $eol;
    $body .= "Content-Transfer-Encoding: base64" . $eol;
    $body .= "Content-Disposition: attachment" . $eol;
    $body .= $content . $eol;
    $body .= "--" . "--";
    //$from =   "aa";  //$_SERVER['PHP_SELF']." ".$_POST["emailceo"];
    //$fname =  "aa";  //$_POST["name"];
    $email =  "aa";  //$_POST["email"];
    //$lname =  "aa";  //$_POST["subject"];
    $headers ="aa";  //"From: $from";
    //$message ="aa";  //$_POST["message"];

    //$body = "User Message \n";
    //$body .= " \n\n\t Name: ".$name;
    //$body .= " \n\n\t Email: ".$email;
    //$body .= " \n\n\t Subject: ".$subject;
    //$body .= " \n\n\t Message: ".$message;

    if(mail($to, $subject, $body, $headers)){
        echo '<label class="success">Sent your <b>e-mail.</b></label>';
    }else{
        echo '<label class="error">Something went wrong! please try again.</label>';
    }