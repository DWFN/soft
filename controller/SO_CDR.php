<?php
include_once("../service/SO_Service.php");
$SS = $_GET["SS"];
$SO = new SO_Service();
$result = $SO->CDR($SS);
echo json_encode($result);