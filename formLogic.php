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
$today = date("l");
//$today="Tuesday";

$reqResults=$_SERVER['REQUEST_METHOD'] == 'POST';


$userName=(isset($_POST['userName'])) ? $_POST['userName']:'';

if(isset($_POST['hereOpt'])){

        $hCost = $_POST['hereOpt'];
}
$ChCost= (float)$hCost;

if(isset($_POST['monday'])){

        $mCost = $_POST['monday'];
}
$CmCost= (float)$mCost;

if(isset($_POST['tuesday'])){

         $mCost = $_POST['tuesday'];
}
$CtCost= (float)$tCost;

if(isset($_POST['wednesday'])){

         $wCost = $_POST['wednesday'];
}
$CwCost= (float)$wCost;

if(isset($_POST['thursday'])){

        $thCost = $_POST['thursday'];
}
$CthCost= (float)$thCost;

if(isset($_POST['friday'])){

        $fCost = $_POST['friday'];
}
$CfCost=(float)$fCost;


if(isset($_POST['features'])){

        $feCost = $_POST['features'];
}
$setFeatures =(isset($_POST['features']))? true :false;

if(!empty($feCost)){
$CfeCost=bcadd($feCost[0],'0',2);}

if(isset($_POST['snak'])){

        $sCost = $_POST['snak'];
}
$CsCost= (float)$sCost;

if(isset($_POST['extras'])){

        $xCost = $_POST['extras'];
}
$setExtras =(isset($_POST['extras']))? true :false;
//dump($xCost[0]);
//initilize string
if(!empty($xCost)){
$CxCost= bcadd($xCost[0],'0',2);}
//echo $CxCost;

if(isset($_POST['drink'])){

        $dCost = $_POST['drink'];
}

if ($reqResults) {
  array_push($total, $ChCost, $CmCost, $CtCost, $CwCost,$CthCost,$CfCost,$CfeCost,$CsCost,$CxCost,$dCost);
  $sTotal=  array_sum($total);
  }
