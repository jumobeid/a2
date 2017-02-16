<?php
require('formLogic.php');
?>

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
              <input type="radio" name="hereOpt" value="0"> here</label><br>


            <label>
              <input type="radio" name="hereOpt" value="5"> to go</label><br>



      </fieldset>
    <hr>
      <fieldset>
        <legend>Sandwiches</legend>


            <p>Monday</p>


            <input type="radio" name="monday" value=10 > Tomato Mozarella<br>

            <input type="radio" name="monday" value=5 > Chicken Salad<br>



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

            <input type="radio" name="friday" value=11> Dado Wrap<br>

            <input type="radio" name="friday" value=5> Tuna Salad<br>

        <hr>


            <input type="checkbox" name="features[]" value="0.75"<?php if($feCost =='0.75') echo 'CHECKED'?>>
            <label>Gluten Free Bread(75 &cent; extra)</label> <br>

      </fieldset>
        <hr>
      <fieldset>
        <legend>Snak</legend>



            <input type="radio" name="snak" value="4"> Apple<br>

            <input type="radio" name="snak" value="3"> Banana<br>

            <input type="radio" name="snak" value="5"> Potato Chips<br>



      </fieldset>
      <hr>

      <fieldset>
        <legend>Drinks</legend>



            <label for='drink'>Select which drink do you prefere</label>
            <select name='drink' id="drink">
              <option value='0'>Choose one...</option>
              <optgroup label="Black Tea">
                <option value="5" <?php if($dCost == '5') echo 'SELECTED'?>>Hot Black Tea-Keemun</option>
                <option value="5" <?php if($dCost == '5') echo 'SELECTED'?>>Hot Black Tea-Decaf Keemun</option>
                <option value="4" <?php if($dCost == '4') echo 'SELECTED'?>>Iced Black Tea-Keemun</option>
                <option value="4" <?php if($dCost == '4') echo 'SELECTED'?>>Iced Black Tea-DecafKeemun</option>
              </optgroup>
              <optgroup label="Green Tea">
                <option value="6"<?php if($dCost == '6') echo 'SELECTED'?>>Hot Green Tea-Sancha</option>
                <option value="6"<?php if($dCost == '6') echo 'SELECTED'?>>Hot Green Tea-Decaf</option>
                <option value="3"<?php if($dCost == '3') echo 'SELECTED'?>>Iced Green Tea-Sancha</option>
                <option value="3"<?php if($dCost == '3') echo 'SELECTED'?>>Iced Green Tea-Decaf</option>
              </optgroup>
              <optgroup label="Coffee">
                <option value="7"<?php if($dCost == '7') echo 'SELECTED'?>>Hot Coffee</option>
                <option value="7"<?php if($dCost == '7') echo 'SELECTED'?>>Hot Decaf Coffee</option>
                <option value="5"<?php if($dCost == '5') echo 'SELECTED'?>>Iced Coffee</option>
                <option value="5"<?php if($dCost == '5') echo 'SELECTED'?>>Iced Decaf Coffee</option>
              </optgroup>
            </select>

        <hr>



            <input type="checkbox" name="extras[]" value="0.75"<?php if($xCost == '7.5') echo 'checked="checked"'?>>
            <label>Large drink(75 &cent; extra)</label> <br>


      </fieldset>

      <p class="alert alert-info"><br>Thank you <?=$userName?> your total payment is <?=$sTotal?> plus tax</p></p>
      <br><button class="btn btn-primary" name="placeOrder">Place Order</button>

    </form>
    <div class="row">
    </div>
      <div class="col-md-4"></div>
    
  </body>

</html>
