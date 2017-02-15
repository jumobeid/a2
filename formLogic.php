<?php
require('tools.php');
$ChCost=0;
$CfCost=0;
$CsCost=0;
$sTotal=0;

$total = array();


$haveResults=$_SERVER['REQUEST_METHOD'] == 'POST';


$userName=(isset($_POST['userName'])) ? $_POST['userName']:'';


?>
