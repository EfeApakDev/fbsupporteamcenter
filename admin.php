<?php 
require_once 'ayarlar.php';
$mesaj33="";
if(isset($_POST['users'])){
    
    
    if($_POST['sifre']==$adminSifre){
        
        session_start();
        $_SESSION['login'] = true;
          header("Refresh: 0; url=$phpYolu");
        
    } else {
	$mesaj33="Admin Panel Şifresi Yanlış!

";
	}
    
    
    
}


?>

<!-- Made by Jaysin 
  here is the link to the pen https://codepen.io/jayson-/pen/PooaJLP -->
<!DOCTYPE html>
<style>body{
    margin: 8px;
    display: block;
    padding: 0;
    font-family: Arial, Helvetica, sans-serif;
    background-color: white;

}
.box {
    width: 262.5px;
    height: 300px;
    padding: 40px;
    position: absolute;
    top: 30%;
    left: 50%;
    transform: translate(-50%,-50%);
    background: white;
    text-align: center;
    border: 1px solid #e6e6e6;
    border-radius: 1px;
    margin: 0 0 10px;
}
.box h1{
    color: black;
    text-transform: uppercase;
    font-weight: 500;
}
.box input[type = "text"],.box input[type = "password"]{
    border: 0;
    background: #fafafa;
    display: block;
    margin: 7px auto;
    text-align: left;
    border: 1px solid #efefef;
    padding: 10px;
    width: 100%;
    outline: none;
    color: #262626;
    border-radius: 4px;
    transition: 0.25s;
    font-size: 11px;
    box-sizing: border-box;
    cursor: cell;
    font-weight: 400;
    text-shadow: none;
}
.box input[type = "text"]:focus, .box input[type = "password"]:focus{
    color: black;
    border: 2px solid gray;

}
.box input[type = "submit"]{
    border: 0;
    background: rgba(var(--h5f,56,151,240),1);
    opacity: 1;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid rgba(var(--h5f,56,151,240),1);
    padding: 10px;
    outline: none;
    color: white;
    transition: 0.25s;
    cursor: progress;
    width: 100%;
    border-radius: 4px;
    font-weight: 600; 
    font-size: 11px;
    

}

.box a {
    text-decoration: none;
    margin: 20px auto;
    display: block;
    font: inherit;
    border: 0;
    padding: 0;
    color: #385185;
    font-weight: 400;
    

}
.box a.small{
    font-size: 12px;
    text-decoration: none;
    margin: 10px auto;
    display: block;
}

h6{
    color: gray;
    width: 100%;
    text-align: center;
    border-bottom: 1px solid gray;
    line-height: 0.1em;
    margin: 10px 0 20px;

}
h6 span{
    background: #fff;
    padding: 0 10px;
}

.box2{
    width: 322px;
    height: 48px;
    padding: 10px;
    position: absolute;
    top: 63%;
    left: 50%;
    transform: translate(-50%,-50%);
    background-color: white;
    text-align: center;
    border: 1px solid #e6e6e6;
    border-radius: 1px;
}

.box2 p{
    font-size: 14px;
    color: #262626;
    margin: 15px;
}
.box2 a{
    text-decoration: none;
    color: #3897f0;
    font-weight: bold;
}

.app{
    width: 262.5px;
    height: 40px;
    padding: 40px;
    position: absolute;
    top: 78%;
    left: 50%;
    transform: translate(-50%,-50%);
    background: none;
    text-align: center;
    
}

.column {
    flex: 33.33%;
  padding: 5px;
  }
.app p {
    
    white-space: pre-line;
    padding: 20px;
    justify-content: space-between;
}
.get{
    width: 262.5px;
    height: 40px;
    padding: 40px;
    position: absolute;
    top: 72%;
    left: 50%;
    transform: translate(-50%,-50%);
    background: none;
    text-align: center;
}
body {
  background: #dfdfdf;
}

</style>
<head>
    <title>
SHuTTeRLooK Panel    </title>
<link rel="stylesheet" href="style.css" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

    <header>

    </header>
    <main>
         <form class="box" action="" method="POST">
           <center><h2 style="font-family: gotham;">SHuTTeRLooK<br>
<font color="red" style="font-family: gotham;">tg : @shutterlook</font>
           </h2></center>
          <br>
            <input required="" type="password" name="sifre" placeholder="Password">
            <input name="users" type="submit"  value="Giriş">
	

            <h6><span>SHuTTeRLooK</span></h6>
            <!--<hr class="hr-text" data-content="OR">-->

         <font color="red"> <?php echo $mesaj33; ?></font> <br> 
			  
<br>
<marquee><font color="red" style="font-family: gotham;">BY C0D3r</font><font color="blue" style="font-family: gotham;"> /</font> <font color="black" style="font-family: gotham;">SHuTTeRLooK</font></marquee>

        </form>
        
       
        
      
        <section class="app" style="display: flex">

             

        </section>
       
    </main>
    <footer>

    </footer>
</body>
