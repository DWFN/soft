<?php
include_once("../service/SO_Service.php");
$SO = new SO_Service();
$result = $SO->REG();
echo json_encode($result);
