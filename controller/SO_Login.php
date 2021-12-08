<?php
include_once("../service/SO_Service.php");
$user = $_GET["user"];
$pwd = $_GET["pwd"];

$SO = new SO_Service();
$result = $SO->Login($user,$pwd);
$Drresult = $SO->DrLogin($user,$pwd);
if ($result == null && $Drresult != null){
    session_start();
    $_SESSION["user"]= ['user' => $user, 'pwd' => $pwd];
    echo json_encode($Drresult);
}else if($result != null && $Drresult == null){
    session_start();
    $_SESSION["user"]= ['user' => $user, 'pwd' => $pwd];
    echo json_encode($result);
}else{
    echo json_encode(null);
}