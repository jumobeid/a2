<?php
require('formLogic.php');?>

<?php
$sCost =0;
$sTotal=0;

if(isset($_POST['snak'])) {
	$snak = $_POST['snak'];
}
else {
	$snak = 'No day was selected';
}


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
      <br><?=$sTotal?> plus tax</p>

    <p> Includes sandwich,snack,and drink.</p>
    <form action="index.php" method="POST">

      <fieldset>
        <legend>Order Information</legend>


            <label for="form-name">Name:</label>
            <input type="text" name="userName" id="form-name" value="<?=sanitize($userName)?>" required><br>




            <label>
              <input type="radio" name="hereOpt" value="here"> here</label><br>


            <label>
              <input type="radio" name="togoOpt" value="togo"> to go</label><br>



      </fieldset>
    <hr>
      <fieldset>
        <legend>Sandwiches</legend>


            <p>Monday</p>


            <input type="radio" name="TomatoMozerella" value="tomatomozerella"> Tomato Mozarella<br>

            <input type="radio" name="chickenSalad" value="chickensalad"> Chicken Salad<br>



            <br><p>Tuesday</p>

            <input type="radio" name="greekSalad" value="greeksalad"> Greek Salad Wrap<br>

            <input type="radio" name="dadoWrap" value="dotowrap"> Dado Wrap<br>




            <br><p>Wednesday</p>


            <input type="radio" name="redPapperhummus" value="redpapperhummus"> Red Papper Hummus<br>

            <input type="radio" name="roastedTurkey" value="roastedturkey"> Roasted Turkey<br>




            <br><p>Thursday</p>

            <input type="radio" name="carrotGinger" value="carrotginger"> Carrot Ginger Hummus<br>

            <input type="radio" name="roastedTurkey" value="roastedturkey"> Roasted Turkey<br>




            <br><p>Friday</p>

            <input type="radio" name="dadoWrap" value="dotorap"> Dado Wrap<br>

            <input type="radio" name="tunaSalad" value="tunasalad"> Tuna Salad<br>

        <hr>


            <input type="checkbox" name="features[]" value="glutenfree"> Gluten Free Bread(75 &cent; extra) <br>
        </ul>
      </fieldset>
        <hr>
      <fieldset>
        <legend>Snak</legend>



            <input type="radio" name="snak" value="apple"  <?php if($snak == 'apple') $sCost=3;?>> Apple<br>

            <input type="radio" name="snak" value="banana" <?php if($snak == 'banana') $sCost=4;?>> Banana<br>

            <input type="radio" name="snak" value="potatochips"<?php if($snak == 'potatochips') $sCost=5;?>> Potato Chips<br>

            <?php

            $total = array(2, 4, 6, 8);
            $here = 0;
            $toGo= 5;

            array_push($total, $here, $toGo,$sCost);

            $sTotal=  array_sum($total);


             ?>


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



            <input type="checkbox" name="extras[]" value="largedrink"> Large drink(75 &cent; extra) <br>


      </fieldset>

      <br><button class="btn btn-primary" name="placeOrder">Place Order</button>

    </form>
    <div class="row">
    </div>
      <div class="col-md-4"></div>
    
  </body>

</html>
