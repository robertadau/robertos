<?php
if(!empty($_POST["Siųsti žinutę"])) {
    $vardas = $_POST["vardas"];
    $pastoAdresas = $_POST["pastoAdresas"];
    $zinutesTema = $_POST["zinutesTema"];
    $content = $_POST["content"];

    $toEmail = "superGlobals.php";
    $mailHeaders = "From: " . $vardas . "<". $pastoAdresas .">\r\n";
    if(mail($pastoAdresas, $zinutesTema, $content, $mailHeaders)) {
        $zinutesTema = "Your contact information is received successfully.";
        $type = "success";
    }
}
require_once "superGlobals.php";
?>
