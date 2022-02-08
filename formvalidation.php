<?php
$name = $email = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = valid($_POST["name"]);
    $email = valid($_POST["email"]);
    $gender = valid($_POST["gender"]);
}

function valid($detail){
    $detail = trim($detail);
    $detail = stripslashes($detail);
    return htmlspecialchars($detail);
}