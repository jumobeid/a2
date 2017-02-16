<?php
require('tools.php');
$hCost=0;
$ChCost=0;
$mCost=0;
$CmCost=0;
$tCost=0;
$CtCost=0;
$wCost=0;
$CwCost=0;
$thCost=0;
$CthCost=0;
$fCost=0;
$CfCost=0;
$feCost=(float)0.00;
$CfeCost=(float)0.00;
$sCost=0;
$CsCost=0;
$xCost=(float)0.00;
$CxCost=(float)0.00;
$sTotal=0;
$dCost=0;
$total = array();


$reqResults=$_SERVER['REQUEST_METHOD'] == 'POST';


$userName=(isset($_POST['userName'])) ? $_POST['userName']:'';

if(isset($_POST['drink'])){
        echo 'SELECTED';
        $dCost = $_POST['drink'];
}
?>
