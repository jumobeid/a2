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
              <input type="radio" name="hereOpt" value="0"<?php $hCost = (isset($_POST['hereOpt']) ? $_POST['hereOpt'] : "");?>> here</label><br>


            <label>
              <input type="radio" name="hereOpt" value="5"<?php $hCost = (isset($_POST['hereOpt']) ? $_POST['hereOpt'] : "");?>> to go</label><br>

             <?php $ChCost= (float)$hCost; ?>

      </fieldset>
    <hr>
      <fieldset>
        <legend>Sandwiches</legend>


            <p>Monday</p>


            <input type="radio" name="monday" value=10 > Tomato Mozarella<br>

            <input type="radio" name="monday" value=5> Chicken Salad<br>



            <br><p>Tuesday</p>

            <input type="radio" name="tuesday" value=5> Greek Salad Wrap<br>

            <input type="radio" name="tuesday" value=11> Dado Wrap<br>




            <br><p>Wednesday</p>


            <input type="radio" name="wednesday" value=5> Red Papper Hummus<br>

            <input type="radio" name="wednesday" value=9> Roasted Turkey<br>




            <br><p>Thursday</p>

            <input type="radio" name="thursday" value=6> Carrot Ginger Hummus<br>

            <input type="radio" name="thursday" value=9> Roasted Turkey<br>




            <br><p>Friday</p>

            <input type="radio" name="friday" value=11  <?php $fCost = (isset($_POST['friday']) ? $_POST['friday'] : "");?>> Dado Wrap<br>

            <input type="radio" name="friday" value=5  <?php $fCost = (isset($_POST['friday']) ? $_POST['friday'] : "");?>> Tuna Salad<br>
          <?php  $CfCost=(float)$fCost;?>
        <hr>


            <input type="checkbox" name="features[]" value=.75 <?php $feCost = (isset($_POST['features']) ? $_POST['features'] : "");?>>
            <label>Gluten Free Bread(75 &cent; extra)</label> <br>
           <?php $CfeCost=(float)$feCost;?>
      </fieldset>
        <hr>
      <fieldset>
        <legend>Snak</legend>



            <input type="radio" name="snak" value="4"  <?php $sCost = (isset($_POST['snak']) ? $_POST['snak'] : "");?>> Apple<br>

            <input type="radio" name="snak" value="3" <?php $sCost = (isset($_POST['snak']) ? $_POST['snak'] : "");?>> Banana<br>

            <input type="radio" name="snak" value="5" <?php $sCost = (isset($_POST['snak']) ? $_POST['snak'] : "");?>> Potato Chips<br>

           <?php
          $CsCost= (float)$sCost;?>





      </fieldset>
      <hr>

      <fieldset>
        <legend>Drinks</legend>



            <p>Drink</p>



            <select>
              <optgroup label="Black Tea">
                <option value="hotkeemun">Hot Black Tea-Keemun</option>
                <option value="hotdecafkeemun">Hot Black Tea-Decaf Keemun</option>
                <option value="icedkeemun">Iced Black Tea-Keemun</option>
                <option value="iceddecafkeemun">Iced Black Tea-DecafKeemun</option>
              </optgroup>
              <optgroup label="Green Tea">
                <option value="hotsancha">Hot Green Tea-Sancha</option>
                <option value="hotdecaf">Hot Green Tea-Decaf</option>
                <option value="icedsancha">Iced Green Tea-Sancha</option>
                <option value="iceddecaf">Iced Green Tea-Decaf</option>
              </optgroup>
              <optgroup label="Coffee">
                <option value="hotcoffee">Hot Coffee</option>
                <option value="hotdecafcoffee">Hot Decaf Coffee</option>
                <option value="icedcoffee">Iced Coffee</option>
                <option value="iceddecafcoffee">Iced Decaf Coffee</option>
              </optgroup>
              <optgroup label="Bubble Tea">
                <option value="bubbletea">Bubble Tea (&#36;1.5 extra) </option>
              </optgroup>
            </select>

        <hr>



            <input type="checkbox" name="extras[]" value=.75 <?php $xCost = (isset($_POST['extras']) ? $_POST['extras'] : "");?>>
            <label>Large drink(75 &cent; extra)</label> <br>
            <?php
            $CxCost= (float)$xCost;?>

      </fieldset>
      <?php
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        array_push($total, $ChCost, $CfCost,$ChCost,$CfeCost,$CxCost);
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
