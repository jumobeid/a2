<?php
require('formLogic.php');
?>

<!-- this is the markup document that should contains a form
     that represents the choices available on the
     Dado Tea Lunch Special paper form -->
<!--http://character-code.com/currency-html-codes.php-->
<!--w3schools.com-->
<!-- remember to use action="http://cscis12.dce.harvard.edu/echo" for the form element -->
<!DOCTYPE html >
<html>

  <head lang="en">
    <meta charset="utf-8">
    <title>Dado Tea Lunch Special</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/form.css">


  </head>

  <body>
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
    <h1 style="color:#781010">Dado Tea Lunch Special</h1>

    <p>Monday through Friday
      <br> 11am- 3am


    <p> Includes sandwich,snack,and drink.</p>
    <form action="index.php" method="POST">

      <fieldset>
        <legend>Order Information</legend>


            <label for="form-name">Name:</label>
            <input type="text" name="userName" id="form-name" value="<?=sanitize($userName)?>" required><br>




            <label>
              <input type="radio" name="hereOpt" value="0"<?php if(isset($_POST['hereOpt'])){
                                                            echo "CHECKED";
                                                            $hCost = $_POST['hereOpt'];

                                                            }?>> here</label><br>


            <label>
              <input type="radio" name="hereOpt" value="5"<?php if(isset($_POST['hereOpt'])){
                                                            echo "CHECKED";
                                                            $hCost = $_POST['hereOpt'];

                                                            }?>> to go</label><br>

             <?php $ChCost= (float)$hCost; ?>

      </fieldset>
    <hr>
      <fieldset>
        <legend>Sandwiches</legend>


            <p>Monday</p>


            <input type="radio" name="monday" value=10 <?php
                                                        if(isset($_POST['monday'])){
                                                        echo "CHECKED";
                                                        $mCost = $_POST['monday'];

                                                        }?>> Tomato Mozarella<br>

            <input type="radio" name="monday" value=5 <?php if(isset($_POST['monday'])){
                                                        echo "CHECKED";
                                                        $mCost = $_POST['monday'];

                                                        }?>> Chicken Salad<br>
                                                        <?php
            $CmCost= (float)$mCost;?>


            <br><p>Tuesday</p>

            <input type="radio" name="tuesday" value=5<?php if(isset($_POST['tuesday'])){
                                                        echo "CHECKED";
                                                        $mCost = $_POST['tuesday'];

                                                        }?>> Greek Salad Wrap<br>

            <input type="radio" name="tuesday" value=11<?php  if(isset($_POST['tuesday'])){
                                                        echo "CHECKED";
                                                        $tCost = $_POST['tuesday'];

                                                        }?>> Dado Wrap<br>
            <?php
            $CtCost= (float)$tCost;?>



            <br><p>Wednesday</p>


            <input type="radio" name="wednesday" value=5<?php if(isset($_POST['wednesday'])){
                                                        echo "CHECKED";
                                                        $wCost = $_POST['wednesday'];

                                                        }?>> Red Papper Hummus<br>

            <input type="radio" name="wednesday" value=9<?php if(isset($_POST['wednesday'])){
                                                        echo "CHECKED";
                                                        $wCost = $_POST['wednesday'];

                                                        }?>> Roasted Turkey<br>
            <?php
            $CwCost= (float)$wCost;?>



            <br><p>Thursday</p>

            <input type="radio" name="thursday" value=6<?php if(isset($_POST['thursday'])){
                                                        echo "CHECKED";
                                                        $thCost = $_POST['thursday'];

                                                        }?>> Carrot Ginger Hummus<br>

            <input type="radio" name="thursday" value=9<?php if(isset($_POST['thursday'])){
                                                        echo "CHECKED";
                                                        $thCost = $_POST['thursday'];

                                                        }?>> Roasted Turkey<br>
            <?php
            $CthCost= (float)$thCost;?>



            <br><p>Friday</p>

            <input type="radio" name="friday" value=11  <?php if(isset($_POST['friday'])){
                                                        echo "CHECKED";
                                                        $fCost = $_POST['friday'];

                                                        }?>> Dado Wrap<br>

            <input type="radio" name="friday" value=5  <?php if(isset($_POST['friday'])){
                                                        echo "CHECKED";
                                                        $fCost = $_POST['friday'];

                                                        }?>> Tuna Salad<br>
          <?php  $CfCost=(float)$fCost;?>
        <hr>


            <input type="checkbox" name="features[]" value=0.75 <?php $feCost = (isset($_POST['features']) ? $_POST['features'] : "");?><?php if(isset($_POST['features'])) echo "CHECKED";?>>
            <label>Gluten Free Bread(75 &cent; extra)</label> <br>
           <?php  if(!empty($feCost)){
           $CfeCost=bcadd($feCost[0],'0',2);}?>
      </fieldset>
        <hr>
      <fieldset>
        <legend>Snak</legend>



            <input type="radio" name="snak" value="4"  <?php $sCost = (isset($_POST['snak']) ? $_POST['snak'] : "");if(isset($_POST['snak'])) echo "CHECKED";?>> Apple<br>

            <input type="radio" name="snak" value="3" <?php $sCost = (isset($_POST['snak']) ? $_POST['snak'] : "");if(isset($_POST['snak'])) echo "CHECKED";?>> Banana<br>

            <input type="radio" name="snak" value="5" <?php $sCost = (isset($_POST['snak']) ? $_POST['snak'] : "");if(isset($_POST['snak'])) echo "CHECKED";?>> Potato Chips<br>

           <?php
           $CsCost= (float)$sCost;?>





      </fieldset>
      <hr>

      <fieldset>
        <legend>Drinks</legend>



            <p>Drink</p>



            <select name='drink'>
              <optgroup label="Black Tea">
                <option value="5">Hot Black Tea-Keemun</option>
                <option value="5">Hot Black Tea-Decaf Keemun</option>
                <option value="4">Iced Black Tea-Keemun</option>
                <option value="4">Iced Black Tea-DecafKeemun</option>
              </optgroup>
              <optgroup label="Green Tea">
                <option value="6">Hot Green Tea-Sancha</option>
                <option value="6">Hot Green Tea-Decaf</option>
                <option value="3">Iced Green Tea-Sancha</option>
                <option value="3">Iced Green Tea-Decaf</option>
              </optgroup>
              <optgroup label="Coffee">
                <option value="7">Hot Coffee</option>
                <option value="7">Hot Decaf Coffee</option>
                <option value="5">Iced Coffee</option>
                <option value="5">Iced Decaf Coffee</option>
              </optgroup>
            </select>

        <hr>



            <input type="checkbox" name="extras[]" value="0.75" <?php $xCost = (isset($_POST['extras']) ? $_POST['extras'] : "");?><?php if(isset($_POST['extras'])) echo "CHECKED";?>>
            <label>Large drink(75 &cent; extra)</label> <br>
            <?php
            //dump($xCost[0]);
            if(!empty($feCost)){
            $CxCost= bcadd($xCost[0],'0',2);}
            //echo $CxCost;?>

      </fieldset>
      <?php
      if ($reqResults) {
        array_push($total, $ChCost, $CmCost, $CtCost, $CwCost,$CthCost,$CfCost,$CfeCost,$CsCost,$CxCost,$dCost);
        $sTotal=  array_sum($total);
        }
        ?>
      <p class="alert alert-info"><br>Thank you <?=$userName?> your total payment is <?=$sTotal?> plus tax</p></p>
      <br><button class="btn btn-primary" name="placeOrder">Place Order</button>

    </form>
    <div class="row">
    </div>
      <div class="col-md-4"></div>
    
  </body>

</html>
