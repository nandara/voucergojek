<?php
date_default_timezone_set('Asia/Jakarta');
include_once "functionRL.php";
ulang:
// function change(){
echo "\n"."\e[7m\e[31m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\e[0m\n";
echo "\e[7m\e[31m \e[0m"."\e[7m\e[36m\e[1m          \e[0m"."\e[7m\e[34m\e[5m ʕ´•ᴥ•`ʔ WE\e[0m"."\e[7m\e[34m\e[5mL\e[0m"."\e[7m\e[34m\e[5mLCO\e[0m"."\e[7m\e[34m\e[5mME ʕ´•ᴥ•`ʔ \e[0m"."\e[7m\e[36m\e[1m          \e[0m"."\e[7m\e[31m \e[0m\n";
echo "\e[7m\e[31m \e[0m"."\e[7m\e[34m\e[5m     \e[0m"."\e[7m\e[36m\e[1m Tanggal : ".date('[d-m-Y]  [H:i:s]')." \e[0m"."\e[7m\e[34m\e[5m     \e[0m"."\e[7m\e[31m \e[0m\n";
echo "\e[7m\e[31m \e[0m"."\e[7m\e[34m\e[5m            \e[0m"."\e[7m\e[36m\e[1m :✧: \e[0m"."\e[7m\e[34m\e[5m ☆CH\e[0m"."\e[7m\e[34m\e[5mUBI\e[0m"."\e[7m\e[34m\e[5mTUS☆ \e[0m"."\e[7m\e[36m\e[1m :✧: \e[0m"."\e[7m\e[34m\e[5m            \e[0m"."\e[7m\e[31m \e[0m\n";
echo "\e[7m\e[31m \e[0m"."\e[7m\e[34m\e[5m      \e[0m"."\e[7m\e[36m\e[1m D\e[0m"."\e[7m\e[36m\e[1maft\e[0m"."\e[7m\e[36m\e[1mar Men\e[0m"."\e[7m\e[36m\e[1mgg\e[0m"."\e[7m\e[36m\e[1munak\e[0m"."\e[7m\e[36m\e[1man n\e[0m"."\e[7m\e[36m\e[1mo Fr\e[0m"."\e[7m\e[36m\e[1mesh/B\e[0m"."\e[7m\e[36m\e[1maru \e[0m"."\e[7m\e[34m\e[5m      \e[0m"."\e[7m\e[31m \e[0m\n";
        $nama = nama();
        $email = str_replace(" ", "", $nama) . mt_rand(10000, 99999);
        echo "\e[7m\e[31m \e[0m"."\e[7m\e[36m\e[1m          \e[0m"."\e[7m\e[34m\e[5m K\e[0m"."\e[7m\e[34m\e[5mode N\e[0m"."\e[7m\e[34m\e[5mom\e[0m"."\e[7m\e[34m\e[5mor 08XXXXXXXXXXX \e[0m"."\e[7m\e[36m\e[1m          \e[0m"."\e[7m\e[31m \e[0m\n";
echo "\e[7m\e[31m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\e[0m\n";
echo "\e[7m\e[31m \e[0m"."\e[36m\e[1m            :✧: A\e[0m"."\e[36m\e[1mUT\e[0m"."\e[36m\e[1mO \e[0m"."\e[36m\e[1mREG\e[0m"."\e[36m\e[1mISTR\e[0m"."\e[36m\e[1mASI :✧:           \e[0m"."\e[7m\e[31m \e[0m\n";
echo "\e[7m\e[31m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\e[0m\n";
        echo "\e[7m\e[32m N\e[0m"."\e[7m\e[32momo\e[0m"."\e[7m\e[32mr B\e[0m"."\e[7m\e[32maru  : \e[0m";
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
        echo "\e[7m\e[36m\e[1m \e[0m"."\e[7m\e[36m\e[1m   :✧: K\e[0m"."\e[7m\e[36m\e[1mode ve\e[0m"."\e[7m\e[36m\e[1mrifik\e[0m"."\e[7m\e[36m\e[1mas\e[0m"."\e[7m\e[36m\e[1mi sud\e[0m"."\e[7m\e[36m\e[1mah di k\e[0m"."\e[7m\e[36m\e[1mir\e[0m"."\e[7m\e[36m\e[1mim :✧: \e[0m"."\e[7m\e[36m\e[1m     \e[0m\n";
        echo "\e[7m\e[93m O\e[0m"."\e[7m\e[93mtp\e[0m"."\e[7m\e[93m Da\e[0m"."\e[7m\e[93mftar  : \e[0m";
        $otp = trim(fgets(STDIN));
        $data1 = '{"client_name":"gojek:cons:android","data":{"otp":"' . $otp . '","otp_token":"' . $otptoken . '"},"client_secret":"83415d06-ec4e-11e6-a41b-6c40088ab51e"}';
        $verif = request("/v5/customers/phone/verify", null, $data1);
        if(strpos($verif, '"access_token"')){
        $token = getStr('"access_token":"','"',$verif);
        $uuid = getStr('"resource_owner_id":',',',$verif);
        echo color("green","+] Token : ".$token."\n\n");
        save("token.txt",$token); 
}
}
?>
<?php
// function change()
{
$text = new text();
echo "\e[7m\e[31m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\e[0m\n";
echo "\e[7m\e[31m \e[0m"."\e[36m\e[1m              :✧: AU\e[0m"."\e[36m\e[1mTO LO\e[0m"."\e[36m\e[1mG'IN :✧:             \e[0m"."\e[7m\e[31m \e[0m\n";
echo "\e[7m\e[31m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\e[0m\n";
echo "\e[7m\e[34m\e[5m Nom\e[0m"."\e[7m\e[34m\e[5mor\e[0m"."\e[7m\e[34m\e[5m Log\e[0m"."\e[7m\e[34m\e[5min : \e[0m";
$phoneNumber = trim(fgets(STDIN));
$getOTPToken = $text->loginRequest($phoneNumber);
$json = json_decode($getOTPToken, true);
$OTPToken = $json['data']['otp_token'];
        echo "\e[7m\e[36m\e[1m \e[0m"."\e[7m\e[36m\e[1m   :✧: K\e[0m"."\e[7m\e[36m\e[1mode ve\e[0m"."\e[7m\e[36m\e[1mrifik\e[0m"."\e[7m\e[36m\e[1mas\e[0m"."\e[7m\e[36m\e[1mi sud\e[0m"."\e[7m\e[36m\e[1mah di k\e[0m"."\e[7m\e[36m\e[1mir\e[0m"."\e[7m\e[36m\e[1mim :✧: \e[0m"."\e[7m\e[36m\e[1m     \e[0m\n";
echo "\e[7m\e[93m O\e[0m"."\e[7m\e[93mtp L\e[0m"."\e[7m\e[93mog\e[0m"."\e[7m\e[93min  \e[0m";
$otpCode = trim(fgets(STDIN));
echo "\e[7m\e[32m TO\e[0m"."\e[7m\e[32mKEN\e[0m"."\e[7m\e[32m AND\e[0m"."\e[7m\e[32mA \e[0m";
echo $OTPToken;
$getAccesstoken = $text->getAuthToken($OTPToken, $otpCode);
$json = json_decode($getAccesstoken, true);
$accesstoken = $json['access_token'];
{
 }
}
?>
<?php
date_default_timezone_set('Asia/Jakarta');
include "functionA.php";
$token = $accesstoken; 

         echo "\n"."\e[7m\e[31m S\e[0m"."\e[7m\e[31mET PIN\e[0m"."\e[7m\e[31m ?? \e[0m";
         $pilih1 = trim(fgets(STDIN));
         if($pilih1 == "y" || $pilih1 == ""){
         //if($pilih1 == "y" && strpos($no, "628")){
         echo "\e[7m\e[36m\e[1m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\e[0m"."\e[7m\e[36m\e[1m PIN\e[0m"."\e[7m\e[36m\e[1m KAMU..522222 ▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\e[0m\n";
         $data2 = '{"pin":"522222"}';
         $getotpsetpin = request("/wallet/pin", $token, $data2, null, null, $uuid);
         echo "\e[7m\e[93m Otp pin: \e[0m";
         $otpsetpin = trim(fgets(STDIN));
         $verifotpsetpin = request("/wallet/pin", $token, $data2, null, $otpsetpin, $uuid);
         echo "\e[7m\e[32m $verifotpsetpin \e[0m\n";
         }else if($pilih1 == "n" || $pilih1 == "N"){
         goto bb;
         die();
         }
         bb:
         echo "\n"."\e[7m\e[34m\e[5m Cl\e[0m"."\e[7m\e[34m\e[5maim v\e[0m"."\e[7m\e[34m\e[5moc Re\e[0m"."\e[7m\e[34m\e[5mfer\e[0m"."\e[7m\e[34m\e[5mall \e[0m";
        reff:
        $data = '{"referral_code":"G-L649V58"}';    
        $claim = request("/customer_referrals/v1/campaign/enrolment", $token, $data);
        $message = fetch_value($claim,'"message":"','"');
        if(strpos($claim, 'Mantap! Vouchermu ada di halaman Promo dan bisa langsung dipake, ya.')){
        echo  "\n".("\e[7m\e[32m ".$message)." \e[0m\n";
        goto gofodod;
        }else{
        echo  "\n".("\e[7m\e[31m ".$message)." \e[0m\n";
        }
        gofodod:
        echo "\n"."\e[7m\e[34m\e[5m Kl\e[0m"."\e[7m\e[34m\e[5maim vou\e[0m"."\e[7m\e[34m\e[5mcher 6\e[0m"."\e[7m\e[34m\e[5m0% : y/n \e[0m";
        $pilih1 = trim(fgets(STDIN));
        if($pilih1 == "y" || $pilih1 == ""){
    	$d_2450309517="\e[7m\e[36m\e[1m Ple\e[0m"."\e[7m\e[36m\e[1mase wa\e[0m"."\e[7m\e[36m\e[1mit \e[0m";for($r_1872009285=35;$r_1872009285>-1;$r_1872009285--){echo "\r                             \r";echo "\r".$d_2450309517."\e[7m\e[36m\e[1m".$r_1872009285." \e[0m";
if($r_1872009285==35 or$r_1872009285==32 or$r_1872009285==29 or$r_1872009285==26 or$r_1872009285==23
or$r_1872009285==20 or$r_1872009285==16 or$r_1872009285==13 or$r_1872009285==10 or$r_1872009285==6 or$r_1872009285==3){echo$u_4200126041."";}if($r_1872009285==34 or$r_1872009285==31
or$r_1872009285==28 or$r_1872009285==25 or$r_1872009285==22
or$r_1872009285==19 or$r_1872009285==15 or$r_1872009285==12 or$r_1872009285==9 or$r_1872009285==5 or$r_1872009285==2){echo$u_4200126041."";}if($r_1872009285==33 or$r_1872009285==30 or$r_1872009285==27 or$r_1872009285==24 or$r_1872009285==21
or$r_1872009285==18 or$r_1872009285==14 or$r_1872009285==11 or$r_1872009285==8 or$r_1872009285==4 or$r_1872009285==1){echo$u_4200126041."";}if($r_1872009285==0){echo$u_4200126041."";echo "";}sleep(1);
        }
        $code1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"MAUGOFOOD1908"}');
        $message = fetch_value($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai')){
        echo  "\n".("\e[7m\e[32m ".$message)." \e[0m\n";
        goto gofood;
        }else{
        echo  "\n".("\e[7m\e[31m ".$message)." \e[0m\n";
        gofood:
        }
        goto vv;
        }else if($pilih1 == "n" || $pilih1 == "N"){
        vv:
      ?>
  	<?php
date_default_timezone_set('Asia/Jakarta');
include "functionB.php";
        echo "\n"."\e[7m\e[34m\e[5m Kla\e[0m"."\e[7m\e[34m\e[5mim Vo\e[0m"."\e[7m\e[34m\e[5much\e[0m"."\e[7m\e[34m\e[5mer 6\e[0m"."\e[7m\e[34m\e[5m0% : y/n \e[0m";
        $pilih1 = trim(fgets(STDIN));
        if($pilih1 == "y" || $pilih1 == ""){
    	$d_2450309517="\e[7m\e[36m\e[1m Ple\e[0m"."\e[7m\e[36m\e[1mase wa\e[0m"."\e[7m\e[36m\e[1mit \e[0m";for($r_1872009285=29;$r_1872009285>-1;$r_1872009285--){echo "\r                             \r";echo "\r".$d_2450309517."\e[7m\e[36m\e[1m".$r_1872009285." \e[0m";
if($r_1872009285==29 or$r_1872009285==26 or$r_1872009285==23
or$r_1872009285==20 or$r_1872009285==16 or$r_1872009285==13 or$r_1872009285==10 or$r_1872009285==6 or$r_1872009285==3){echo$u_4200126041."";}if($r_1872009285==28 or$r_1872009285==25 or$r_1872009285==22
or$r_1872009285==19 or$r_1872009285==15 or$r_1872009285==12 or$r_1872009285==9 or$r_1872009285==5 or$r_1872009285==2){echo$u_4200126041."";}if($r_1872009285==27 or$r_1872009285==24 or$r_1872009285==21
or$r_1872009285==18 or$r_1872009285==14 or$r_1872009285==11 or$r_1872009285==8 or$r_1872009285==4 or$r_1872009285==1){echo$u_4200126041."";}if($r_1872009285==0){echo$u_4200126041."";echo "";}sleep(1);
        }
        $code1 = request2('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"MAUGOFOOD1908"}');
        $message = fetch_value($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai')){
        echo  "\n".("\e[7m\e[32m ".$message)." \e[0m\n";
        goto gofood2;
        }else{
        echo  "\n".("\e[7m\e[31m ".$message)." \e[0m\n";
        gofood2:
        }
        goto ceek;
        }else if($pilih1 == "n" || $pilih1 == "N"){
        ceek:
             ?>
  	<?php
date_default_timezone_set('Asia/Jakarta');
include "functionC.php";
        echo "\n"."\e[7m\e[34m\e[5m Kla\e[0m"."\e[7m\e[34m\e[5mim Vou\e[0m"."\e[7m\e[34m\e[5mcher 6\e[0m"."\e[7m\e[34m\e[5m0% : y/n \e[0m";
        $pilih1 = trim(fgets(STDIN));
        if($pilih1 == "y" || $pilih1 == ""){
    	$d_2450309517="\e[7m\e[36m\e[1m Ple\e[0m"."\e[7m\e[36m\e[1mase wa\e[0m"."\e[7m\e[36m\e[1mit \e[0m";for($r_1872009285=29;$r_1872009285>-1;$r_1872009285--){echo "\r                             \r";echo "\r".$d_2450309517."\e[7m\e[36m\e[1m".$r_1872009285." \e[0m";
if($r_1872009285==29 or$r_1872009285==26 or$r_1872009285==23
or$r_1872009285==20 or$r_1872009285==16 or$r_1872009285==13 or$r_1872009285==10 or$r_1872009285==6 or$r_1872009285==3){echo$u_4200126041."";}if($r_1872009285==28 or$r_1872009285==25 or$r_1872009285==22
or$r_1872009285==19 or$r_1872009285==15 or$r_1872009285==12 or$r_1872009285==9 or$r_1872009285==5 or$r_1872009285==2){echo$u_4200126041."";}if($r_1872009285==27 or$r_1872009285==24 or$r_1872009285==21
or$r_1872009285==18 or$r_1872009285==14 or$r_1872009285==11 or$r_1872009285==8 or$r_1872009285==4 or$r_1872009285==1){echo$u_4200126041."";}if($r_1872009285==0){echo$u_4200126041."";echo "";}sleep(1);
        }
        $code1 = request3('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"MAUGOFOOD1908"}');
        $message = fetch_value($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai')){
        echo  "\n".("\e[7m\e[32m ".$message)." \e[0m\n";
        goto gofoo2;
        }else{
        echo  "\n".("\e[7m\e[31m ".$message)." \e[0m\n";
        gofoo2:
        }
        goto cewek;
        }else if($pilih1 == "n" || $pilih1 == "N"){
        cewek:
        sleep(3);
        $cekvoucher = request3('/gopoints/v3/wallet/vouchers?limit=10&page=1', $token);
        $total = fetch_value($cekvoucher,'"total_vouchers":',',');
        $voucher3 = getStr1('"title":"','",',$cekvoucher,"3");
        $voucher1 = getStr1('"title":"','",',$cekvoucher,"1");
        $voucher2 = getStr1('"title":"','",',$cekvoucher,"2");
        $voucher4 = getStr1('"title":"','",',$cekvoucher,"4");
        $voucher5 = getStr1('"title":"','",',$cekvoucher,"5");
        $voucher6 = getStr1('"title":"','",',$cekvoucher,"6");
        $voucher7 = getStr1('"title":"','",',$cekvoucher,"7");
        $voucher8 = getStr1('"title":"','",',$cekvoucher,"8");
        $voucher9 = getStr1('"title":"','",',$cekvoucher,"9");
        echo "\n".color("red","[✧]───────────────  VOUCHER ".$total." ───────────────[✧]");
        echo "\n".color("green"," 1. ".$voucher1);
        echo "\n".color("green"," 2. ".$voucher2);
        echo "\n".color("green"," 3. ".$voucher3);
        echo "\n".color("green"," 4. ".$voucher4);
        echo "\n".color("green"," 5. ".$voucher5);
        echo "\n".color("green"," 6. ".$voucher6);
        echo "\n".color("green"," 7. ".$voucher7);
        echo "\n".color("green"," 8. ".$voucher8);
        echo "\n".color("green"," 9. ".$voucher9);
        echo "\n".color("red","[✧]──────────────────────────────────────────[✧]\n");
        $expired1 = getStr1('"expiry_date":"','"',$cekvoucher,'1');
        $expired2 = getStr1('"expiry_date":"','"',$cekvoucher,'2');
        $expired3 = getStr1('"expiry_date":"','"',$cekvoucher,'3');
        $expired4 = getStr1('"expiry_date":"','"',$cekvoucher,'4');
        $expired5 = getStr1('"expiry_date":"','"',$cekvoucher,'5');
        $expired6 = getStr1('"expiry_date":"','"',$cekvoucher,'6');
        $expired7 = getStr1('"expiry_date":"','"',$cekvoucher,'7');
        $expired8 = getStr1('"expiry_date":"','"',$cekvoucher,'8');
        $expired9 = getStr1('"expiry_date":"','"',$cekvoucher,'9');
         echo "\n"."\e[7m\e[31m ✧M\e[0m"."\e[7m\e[31ma\e[0m"."\e[7m\e[31mu Se\e[0m"."\e[7m\e[31mt Pi\e[0m"."\e[7m\e[31mn\e[0m"."\e[7m\e[31m ?? \e[0m";
         $pilih1 = trim(fgets(STDIN));
         if($pilih1 == "y" || $pilih1 == ""){
         //if($pilih1 == "y" && strpos($no, "628")){
         echo "\e[7m\e[36m\e[1m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\e[0m"."\e[7m\e[36m\e[1m PIN\e[0m"."\e[7m\e[36m\e[1m KAMU..522222 ▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\e[0m\n";
         $data2 = '{"pin":"280582"}';
         $getotpsetpin = request("/wallet/pin", $token, $data2, null, null, $uuid);
         echo "\e[7m\e[93m Otp pin: \e[0m";
         $otpsetpin = trim(fgets(STDIN));
         $verifotpsetpin = request("/wallet/pin", $token, $data2, null, $otpsetpin, $uuid);
         echo $verifotpsetpin;
         }else if($pilih1 == "n" || $pilih1 == "N"){
         die();
         }else{
         echo color("red","-] GAGAL!!!\n");
         }
         }
         }
         }
         
         
         
