<?php
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$kodepromo = "KEJUTANGOMART";
$Phonemodel = generateRandomString(5);
$XUniqueid = generateRandomString(16);
echo '#################################';
echo "\r\n";
echo '# Copyright : @ilyasa48 | SGB-Team #';
echo "\r\n";
echo '#################################';
echo "\r\n";
echo 'Indonesia : 62822xxxxxxxx'; 
echo "\r\n";
echo 'US : 1509xxxxxxx'; 
echo "\r\n";
echo 'Masukkan Nomor HP dengan Kode Negara : '; 
$phone_number = trim(fgets(STDIN)); 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.gojekapi.com/v5/customers');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{
	"name": "Froid Code",
	"email": "'.generateRandomString(10).'@gmail.com",
	"phone": "+'.$phone_number.'",
	"signed_up_country": "ID"
}');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
$headers = array();
$headers[] = 'X-Appversion: 3.24.0';
$headers[] = 'X-Uniqueid: '.$XUniqueid.'';
$headers[] = 'X-Platform: Android';
$headers[] = 'X-Appid: com.gojek.app';
$headers[] = 'Accept: application/json';
$headers[] = 'X-Session-Id: 626abb77-81ae-4e3c-afa6-9c7302640fe5';
$headers[] = 'D1: DD:78:69:F0:F4:43:D9:2F:2A:9A:F8:C6:63:36:8F:E4:8F:29:45:EC:A1:7D:DE:C0:05:96:58:91:F6:32:43:1B';
$headers[] = 'X-Phonemodel: Android,SM-'.$Phonemodel.'';
$headers[] = 'X-Pushtokentype: FCM';
$headers[] = 'X-Deviceos: Android,5.1.1';
$headers[] = 'User-Uuid: ';
$headers[] = 'X-Devicetoken: ';
$headers[] = 'Authorization: Bearer';
$headers[] = 'Accept-Language: en-ID';
$headers[] = 'X-User-Locale: en_ID';
$headers[] = 'X-Location: 33.985805,-118.2541117';
$headers[] = 'X-Location-Accuracy: 3.0';
$headers[] = 'Content-Type: application/json; charset=UTF-8';
$headers[] = 'Host: api.gojekapi.com';
$headers[] = 'User-Agent: okhttp/3.10.0';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);
$json_data = json_decode($result);
if($json_data->success == 0){
	echo $json_data->errors[0]->message;
	echo "\r\n";
	exit();
}
$otp_token = $json_data->data->otp_token;
otp_ulang:
echo 'Masukkan OTP : '; 
$otp = trim(fgets(STDIN)); 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.gojekapi.com/v5/customers/phone/verify');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{
	"client_name": "gojek:cons:android",
	"data": {
		"otp": "'.$otp.'",
		"otp_token": "'.$otp_token.'"
	},
	"client_secret": "83415d06-ec4e-11e6-a41b-6c40088ab51e"
}');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
$headers = array();
$headers[] = 'X-Appversion: 3.24.0';
$headers[] = 'X-Uniqueid: '.$XUniqueid.'';
$headers[] = 'X-Platform: Android';
$headers[] = 'X-Appid: com.gojek.app';
$headers[] = 'Accept: application/json';
$headers[] = 'X-Session-Id: 626abb77-81ae-4e3c-afa6-9c7302640fe5';
$headers[] = 'D1: DD:78:69:F0:F4:43:D9:2F:2A:9A:F8:C6:63:36:8F:E4:8F:29:45:EC:A1:7D:DE:C0:05:96:58:91:F6:32:43:1B';
$headers[] = 'X-Phonemodel: Android,SM-'.$Phonemodel.'';
$headers[] = 'X-Pushtokentype: FCM';
$headers[] = 'X-Deviceos: Android,5.1.1';
$headers[] = 'User-Uuid: ';
$headers[] = 'X-Devicetoken: ';
$headers[] = 'Authorization: Bearer';
$headers[] = 'Accept-Language: en-ID';
$headers[] = 'X-User-Locale: en_ID';
$headers[] = 'X-Location: 33.985805,-118.2541117';
$headers[] = 'X-Location-Accuracy: 3.0';
$headers[] = 'Content-Type: application/json; charset=UTF-8';
$headers[] = 'Host: api.gojekapi.com';
$headers[] = 'User-Agent: okhttp/3.10.0';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);
$json_data = json_decode($result);
if($json_data->success == 0){
	echo $json_data->errors[0]->message;
	echo "\r\n";
	goto otp_ulang;
}
$access_token = $json_data->data->access_token;
$push_token = generateRandomString(11).':APA91bE9VM_oE6YN9Yzrt5gzkiWF4Xfm8vMA4Myg8_U7vjSsVszE663wBVFiY4vAojMYU_yPgBh-eaKHk0agKVVDlXhpmyzOuHh6CwlaoBKgiouYrBO12RVD16bevUhMNNMJ_oWgNgBu';
$device_id = generateRandomString(16);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.gojekapi.com/v4/customers/device');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"push_token_type":"FCM","application_id":"com.gojek.app","push_token":"'.$push_token.'","device_id":"'.$device_id.'"}');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
$headers = array();
$headers[] = 'X-Appversion: 3.24.0';
$headers[] = 'X-Uniqueid: '.$XUniqueid.'';
$headers[] = 'X-Platform: Android';
$headers[] = 'X-Appid: com.gojek.app';
$headers[] = 'Accept: application/json';
$headers[] = 'X-Session-Id: 626abb77-81ae-4e3c-afa6-9c7302640fe5';
$headers[] = 'D1: DD:78:69:F0:F4:43:D9:2F:2A:9A:F8:C6:63:36:8F:E4:8F:29:45:EC:A1:7D:DE:C0:05:96:58:91:F6:32:43:1B';
$headers[] = 'X-Phonemodel: Android,SM-'.$Phonemodel.'';
$headers[] = 'X-Pushtokentype: FCM';
$headers[] = 'X-Deviceos: Android,5.1.1';
$headers[] = 'User-Uuid: 627548103';
$headers[] = 'X-Devicetoken: ';
$headers[] = 'Authorization: Bearer '.$access_token.'';
$headers[] = 'Accept-Language: en-ID';
$headers[] = 'X-User-Locale: en_ID';
$headers[] = 'X-Location: 33.985805,-118.2541117';
$headers[] = 'X-Location-Accuracy: 3.0';
$headers[] = 'Content-Type: application/json; charset=UTF-8';
$headers[] = 'Host: api.gojekapi.com';
$headers[] = 'User-Agent: okhttp/3.10.0';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);
$json_data = json_decode($result);
if($json_data->success == 0){
	echo $json_data->errors[0]->message;
	echo "\r\n";
	exit();
}
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.gojekapi.com/go-promotions/v1/promotions/enrollments');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{
	"promo_code": "'.$kodepromo.'"
}');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
$headers = array();
$headers[] = 'X-Appversion: 3.24.0';
$headers[] = 'X-Uniqueid: '.$XUniqueid.'';
$headers[] = 'X-Platform: Android';
$headers[] = 'X-Appid: com.gojek.app';
$headers[] = 'Accept: application/json';
$headers[] = 'X-Session-Id: 626abb77-81ae-4e3c-afa6-9c7302640fe5';
$headers[] = 'D1: DD:78:69:F0:F4:43:D9:2F:2A:9A:F8:C6:63:36:8F:E4:8F:29:45:EC:A1:7D:DE:C0:05:96:58:91:F6:32:43:1B';
$headers[] = 'X-Phonemodel: Android,SM-'.$Phonemodel.'';
$headers[] = 'X-Pushtokentype: FCM';
$headers[] = 'X-Deviceos: Android,5.1.1';
$headers[] = 'User-Uuid: 627548103';
$headers[] = 'X-Devicetoken: '.$push_token.'';
$headers[] = 'Authorization: Bearer '.$access_token.'';
$headers[] = 'Accept-Language: en-ID';
$headers[] = 'X-User-Locale: en_ID';
$headers[] = 'X-Location: 33.985805,-118.2541117';
$headers[] = 'X-Location-Accuracy: 3.0';
$headers[] = 'Content-Type: application/json; charset=UTF-8';
$headers[] = 'Host: api.gojekapi.com';
$headers[] = 'User-Agent: okhttp/3.10.0';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);
$json_data = json_decode($result);
if($json_data->success == 0){
	echo $json_data->errors[0]->message;
	echo "\r\n";
	exit();
}
echo $json_data->data->message;
