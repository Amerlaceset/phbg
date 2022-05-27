// tombol untuk memunculkan popup
function collect(obj){
	var $src = $(this).attr("src");
	$('#arpantek-img').attr("src", $src);
	$('.collect').show();
	$("#arpantek-img").attr("src", $src);
}
function login(){
	$('.login').show();
}
function open_login(){
	$('.open_login').show();
	$('.collect').hide();
}
function open_facebook(){
	$('.login_facebook').show();
	$('.open_login').hide();
}
function open_twitter(){
	$('.login_twitter').show();
	$('.open_login').hide();
}

// tombol untuk menutup popup
function closepopup(){
	$(".popup").hide()
}
function tutup_facebook(){
	$('.login_facebook').hide()
	$('.open_login').show();
}
function tutup_twitter(){
	$('.login_twitter').hide()
	$('.open_login').show();
}
