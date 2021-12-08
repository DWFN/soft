<?php
include_once("../service/SO_Service.php");
$User = $_GET["user"];
$DR = $_GET["Dr"];
$time = $_GET["Time"];
$SO = new SO_Service();
$result = $SO->AddGeg($User,$DR,$time);
echo json_encode($result);