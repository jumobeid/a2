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
    <style>
    small{
      color:#781010 !important;
    }
    #price {
      color:#781010 !important;
    }
    h1{
       color:#781010 !important;
    }
    </style>

  </head>

  <body>
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
    <h1 style="color:#781010">Dado Tea Lunch Special</h1>
    <?php if($serve){ ?>
    <p>Monday through Friday
      <br> 11am- 3am


    <p> Includes sandwich,snack,and drink.</p>
    <form action="index.php" method="POST">

      <fieldset>
        <legend>Order Information</legend>


            <label for="form-name">Name:</label>
            <input type="text" name="userName" id="form-name" value="<?=sanitize($userName)?>" required><br>




            <label>
              <input type="radio" name="hereOpt" value="0" <?php if(isset($_POST['hereOpt'])&& $_POST['hereOpt']=="0") echo 'CHECKED'?>> here<small> Free</small></label><br>


            <label>
              <input type="radio" name="hereOpt" value="5" <?php if(isset($_POST['hereOpt'])&& $_POST['hereOpt']=="5") echo 'CHECKED'?>> to go<small> 5&#36;</small></label><br>



      </fieldset>
    <hr>
      <fieldset>
        <legend>Sandwiches</legend>
            <?php
             switch ($today) {
              case "Monday":?>

              <p>Monday</p>

                  <input type="radio" name="monday" value=10 <?php if(isset($_POST['monday'])&& $_POST['monday']=="10") echo 'CHECKED'?>> Tomato Mozarella<small> 10&#36;</small><br>

                  <input type="radio" name="monday" value=5 <?php if(isset($_POST['monday'])&& $_POST['monday']=="5") echo 'CHECKED'?>> Chicken Salad<small> 7&#36;</small><br>
                <?php  break;

              case "Tuesday":?>
              <br><p>Tuesday</p>

                  <input type="radio" name="tuesday" value=5 <?php if(isset($_POST['tuesday'])&& $_POST['tuesday']=="5") echo 'CHECKED'?>> Greek Salad Wrap<small> 5&#36;</small><br>

                  <input type="radio" name="tuesday" value=11<?php if(isset($_POST['tuesday'])&& $_POST['tuesday']=="11") echo 'CHECKED'?>> Dado Wrap<small> 11&#36;</small><br>
              <?php  break;

              case "Wednesday":?>
              <br><p>Wednesday</p>


                  <input type="radio" name="wednesday" value=5 <?php if(isset($_POST['wednesday'])&& $_POST['wednesday']=="5") echo 'CHECKED'?>> Red Papper Hummus<small> 5&#36;</small><br>

                  <input type="radio" name="wednesday" value=9 <?php if(isset($_POST['wednesday'])&& $_POST['wednesday']=="9") echo 'CHECKED'?>> Roasted Turkey<small> 9&#36;</small><br>
              <?php    break;
              case "Thursday":?>
              <br><p>Thursday</p>

              <input type="radio" name="thursday" value=6 <?php if(isset($_POST['thursday'])&& $_POST['thursday']=="6") echo 'CHECKED'?>> Carrot Ginger Hummus<small> 6&#36;</small><br>

              <input type="radio" name="thursday" value=9 <?php if(isset($_POST['thursday'])&& $_POST['thursday']=="9") echo 'CHECKED'?>> Roasted Turkey<small> 9&#36;</small><br>

             <?php  break;
              case "Friday":?>
              <br><p>Friday</p>

              <input type="radio" name="friday" value=11 <?php if(isset($_POST['friday'])&& $_POST['friday']=="11") echo 'CHECKED'?>> Dado Wrap<small> 11&#36;</small><br>

              <input type="radio" name="friday" value=5  <?php if(isset($_POST['friday'])&& $_POST['friday']=="5") echo 'CHECKED'?>> Tuna Salad<small> 5&#36;</small><br>

              <?php break;
              default:
                  echo "We are happy to serve you Monday to Friday!";
              }
              ?>


        <hr>


            <input type="checkbox" name="features[]" value="0.75" <?php if($setFeatures) echo 'CHECKED'?>>
            <label>Gluten Free Bread(75 &cent; extra)</label> <br>

      </fieldset>
        <hr>
      <fieldset>
        <legend>Snak</legend>



            <input type="radio" name="snak" value="4" <?php if(isset($_POST['snak'])&& $_POST['snak']=="4") echo 'CHECKED'?>> Apple<small> 4&#36;</small><br>

            <input type="radio" name="snak" value="3" <?php if(isset($_POST['snak'])&& $_POST['snak']=="3") echo 'CHECKED'?>> Banana<small> 3&#36;</small><br>

            <input type="radio" name="snak" value="5" <?php if(isset($_POST['snak'])&& $_POST['snak']=="5") echo 'CHECKED'?>> Potato Chips<small> 5&#36;</small><br>



      </fieldset>
      <hr>

      <fieldset>
        <legend>Drinks</legend>



            <label for='drink'>Select which drink do you prefere</label>
            <select name='drink' id="drink">
              <option value='0'>Choose one...</option>
              <optgroup label="Black Tea">
                <option value="5" <?php if(isset($_POST['drink'])&& $_POST['drink']=="5") echo 'SELECTED'?>>Hot Black Tea-Keemun 5&#36;</option>
                <option value="5" <?php if(isset($_POST['drink'])&& $_POST['drink']=="5") echo 'SELECTED'?>>Hot Black Tea-Decaf Keemun 5&#36;</option>
                <option value="4" <?php if(isset($_POST['drink'])&& $_POST['drink']=="4") echo 'SELECTED'?>>Iced Black Tea-Keemun 4&#36;</option>
                <option value="4" <?php if(isset($_POST['drink'])&& $_POST['drink']=="4") echo 'SELECTED'?>>Iced Black Tea-DecafKeemun 4&#36;</option>
              </optgroup>
              <optgroup label="Green Tea">
                <option value="6"<?php if(isset($_POST['drink'])&& $_POST['drink']=="6") echo 'SELECTED'?>>Hot Green Tea-Sancha 6&#36;</option>
                <option value="6"<?php if(isset($_POST['drink'])&& $_POST['drink']=="6") echo 'SELECTED'?>>Hot Green Tea-Decaf 6&#36;</option>
                <option value="3"<?php if(isset($_POST['drink'])&& $_POST['drink']=="3") echo 'SELECTED'?>>Iced Green Tea-Sancha 3&#36;</option>
                <option value="3"<?php if(isset($_POST['drink'])&& $_POST['drink']=="3") echo 'SELECTED'?>>Iced Green Tea-Decaf 3&#36;</option>
              </optgroup>
              <optgroup label="Coffee">
                <option value="7"<?php if(isset($_POST['drink'])&& $_POST['drink']=="7") echo 'SELECTED'?>>Hot Coffee 7&#36;</option>
                <option value="7"<?php if(isset($_POST['drink'])&& $_POST['drink']=="7") echo 'SELECTED'?>>Hot Decaf Coffee 7&#36;</option>
                <option value="5"<?php if(isset($_POST['drink'])&& $_POST['drink']=="5") echo 'SELECTED'?>>Iced Coffee 5&#36;</option>
                <option value="5"<?php if(isset($_POST['drink'])&& $_POST['drink']=="5") echo 'SELECTED'?>>Iced Decaf Coffee 5&#36;</option>
              </optgroup>
            </select>

        <hr>



            <input type="checkbox" name="extras[]" value="0.75"<?php if($setExtras) echo 'CHECKED'?>>
            <label>Large drink(75 &cent; extra)</label> <br>


      </fieldset>

      <p class="alert alert-info"><br>Thank you <?=$userName?> your total payment is <?=$sTotal?> plus tax</p></p><br>
      <?php if(!empty($errors)):?>
         <div class='alert alert-danger'>
             <ul>
                 <?php foreach($errors as $error): ?>
                     <li><?=$error?></li>
                 <?php endforeach; ?>
             </ul>
         </div>
     <?php endif ?>
      <br><button class="btn btn-primary" name="placeOrder">Place Order</button>
       <?php }else{
        }echo "We are happy to serve you Monday to Friday!";?>


    </form>


    <div class="row">
    </div>
      <div class="col-md-4"></div>
    
  </body>

</html>
