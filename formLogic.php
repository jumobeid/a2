<?php
require('tools.php');
require('Form.php');
require('Price.php');


$form = new DWA\Form($_POST);
$price = new DWA\Price();

$hCost=0;
$mCost=0;
$tCost=0;
$wCost=0;
$thCost=0;
$fCost=0;
$feCost=0;
$sCost=0;
$xCost=0;
$dCost=0;
$sTotal=0;

$cCfeCost=0;
$aCxCost=0;

$today = date("l");
$serve=false;
//for testing
//$today="Friday";

//check if we can server you today
$daysWeek = array("Monday", "Tuesday", "Wednesday", "Thursday","Friday");
if (in_array($today, $daysWeek)) {
    $serve= true;
}


$userName=(isset($_POST['userName'])) ? $_POST['userName']:'';
//if the menu appreared
if ($serve){
            if(isset($_POST['hereOpt'])){

                    $hCost=$form->get('hereOpt');
                    $price->addValue($hCost);
                    $price->pushValue($price->items,$hCost);
             }


            if(isset($_POST['monday'])){

                    $mCost=$form->get('monday');
                    $price->addValue($mCost);
                    $price->pushValue($price->items,$mCost);
            }

            if(isset($_POST['tuesday'])){
                     $tCost=$form->get('tuesday');
                     $price->addValue($tCost);
                     $price->pushValue($price->items,$tCost);
            }

            if(isset($_POST['wednesday'])){
                     $wCost=$form->get('wednesday');
                     $price->addValue($wCost);
                     $price->pushValue($price->items,$wCost);
            }

            if(isset($_POST['thursday'])){
                    $thCost=$form->get('thursday');
                    $price->addValue($thCost);
                    $price->pushValue($price->items,$thCost);

            }

            if(isset($_POST['friday'])){
                    $fCost=$form->get('friday');
                    $price->addValue($fCost);
                    $price->pushValue($price->items,$fCost);
            }


            if(isset($_POST['features'])){

                    $feCost = $_POST['features'];
            }
            $setFeatures =$form->isChosen('features');
            //$setFeatures =(isset($_POST['features']))? true :false;

            if(!empty($feCost)){
              $cCfeCost=bcadd($feCost[0],'0',2);
              $price->addValue($cCfeCost);
              $price->pushValue($price->items,$cCfeCost);
}

            if(isset($_POST['snak'])){

                    $sCost = $_POST['snak'];
                    $price->addValue($sCost);
                    $price->pushValue($price->items,$sCost);

            }

            if(isset($_POST['extras'])){

                    $xCost = $_POST['extras'];
            }
             $setExtras =$form->isChosen('extras');
          //  $setExtras =(isset($_POST['extras']))? true :false;
            //dump($xCost[0]);
            //initilize string
            if(!empty($xCost)){
              $aCxCost= bcadd($xCost[0],'0',2);
              $price->addValue($aCxCost);
              $price->pushValue($price->items,$aCxCost);}
            //echo $CxCost;

            if(isset($_POST['drink'])){

                    $dCost = $_POST['drink'];
                    $price->addValue($dCost);
                    $price->pushValue($price->items,$dCost);

            }
}


if($form->isSubmitted()) {

  $errors = $form->validate(
  [
      'userName' => 'required|alpha'
  ]
  );
  //array_push($total, $ChCost, $CmCost, $CtCost, $CwCost,$CthCost,$CfCost,$CfeCost,$CsCost,$CxCost,$dCost);
  $sTotal=  array_sum($price->items);
  //$sTotal=  array_sum($total);
  }
