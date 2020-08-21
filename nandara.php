<?php
###Ini Copyright###
###https://github.com/osyduck/Gojek-Register###
//Added triple functions claim
//Recoded by ahsan.id
include ("function.php");
function nama()
	{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://ninjaname.horseridersupply.com/indonesian_name.php");
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	$ex = curl_exec($ch);
	// $rand = json_decode($rnd_get, true);
	preg_match_all('~(&bull; (.*?)<br/>&bull; )~', $ex, $name);
	return $name[2][mt_rand(0, 14) ];
	}
function register($no)
	{
	$nama = nama();
	$email = str_replace(" ", "", $nama) . mt_rand(100, 999);
	$data = '{"name":"' . nama() . '","email":"' . $email . '@gmail.com","phone":"+' . $no . '","signed_up_country":"ID"}';
	$register = request("/v5/customers", "", $data);
	//print_r($register);
	if ($register['success'] == 1)
		{
		return $register['data']['otp_token'];
		}
	  else
		{
		return false;
		}
	}
function verif($otp, $token)
	{
	$data = '{"client_name":"gojek:cons:android","data":{"otp":"' . $otp . '","otp_token":"' . $token . '"},"client_secret":"83415d06-ec4e-11e6-a41b-6c40088ab51e"}';
	$verif = request("/v5/customers/phone/verify", "", $data);
	if ($verif['success'] == 1)
		{
		return $verif['data']['access_token'];
		}
	  else
		{
		return false;
		}
	}
	function login($no)
	{
	$nama = nama();
	$email = str_replace(" ", "", $nama) . mt_rand(100, 999);
	$data = '{"phone":"+'.$no.'"}';
	$register = request("/v4/customers/login_with_phone", "", $data);
	print_r($register);
	if ($register['success'] == 1)
		{
		return $register['data']['login_token'];
		}
	  else
		{
		return false;
		}
	}
function veriflogin($otp, $token)
	{
	$data = '{"client_name":"gojek:cons:android","client_secret":"83415d06-ec4e-11e6-a41b-6c40088ab51e","data":{"otp":"'.$otp.'","otp_token":"'.$token.'"},"grant_type":"otp","scopes":"gojek:customer:transaction gojek:customer:readonly"}';
	$verif = request("/v4/customers/login/verify", "", $data);
	if ($verif['success'] == 1)
		{
		return $verif['data']['access_token'];
		}
	  else
		{
		return false;
		}
	}
function claim($token)
	{
	$data = '{"promo_code":"G-N42CQ7B"}';
	$claim = request("/go-promotions/v1/promotions/enrollments", $token, $data);
	if ($claim['success'] == 1)
		{
		return $claim['data']['message'];
		}
	  else
		{
		return false;
		}
	}
function claim1($token)
	{
	$data1 = '{"promo_code":"COBAGOFOOD2206"}';
	$claim1 = request("/go-promotions/v1/promotions/enrollments", $token, $data1);
	if ($claim1['success'] == 1)
		{
		return $claim1['data']['message'];
		}
	  else
		{
		return false;
		}
	}
function claim2($token)
	{
	$data2 = '{"promo_code":"COBAGOFOOD0508"}';
	$claim2 = request("/go-promotions/v1/promotions/enSCANPRAMUKArollments", $token, $data2);
	if ($claim2['success'] == 1)
		{
		return $claim2['data']['message'];
		}
	  else
		{
		return false;
		}
	}
function claim3($token)
	{
	$data3 = '{"promo_code":"COBAGOFOOD0508"}';
	$claim3 = request("/go-promotions/v1/promotions/enrollments", $token, $data3);
	if ($claim3['success'] == 1)
		{
		return $claim3['data']['message'];
		}
	  else
		{
		return false;
		}
	}
function claim4($token)
	{
	$data4 = '{"promo_code":"PESANGOFOOD0508"}';
	$claim4 = request("/go-promotions/v1/promotions/enrollments", $token, $data4);
	if ($claim4['success'] == 1)
		{
		return $claim2['data']['message'];
		}
	  else
		{
		return false;
		}
	}
echo "Choose Login or Register? Login = 1 & Register = 2: ";
$type = trim(fgets(STDIN));
if($type == 2){
echo "It's Register Way\n";
echo "Input 62 For ID and 1 For US Phone Number\n";
echo "Enter Number: ";
$nope = trim(fgets(STDIN));
$register = register($nope);
if ($register == false)
	{
	echo "Failed to Get OTP, Use Unregistered Number!\n";
	}
  else
	{
	echo "Enter Your OTP: ";
	// echo "Enter Number: ";
	$otp = trim(fgets(STDIN));
	$verif = verif($otp, $register);
	if ($verif == false)
		{
		echo "Failed to Registering Your Number!\n";
		}
	  else
		{
		echo "jeda 5 detik\n";
		sleep(5);
		echo "Ready to Claim\n";
		$claim = claim($verif);
		if ($claim == false)
			{
			echo "Failed to Claim Voucher, Try to Claim Manually\n";
			}
		  else
			{
			echo $claim . "\n";
		}
echo "ready to claim 1\n";
echo "jeda 10 detik\n";
sleep(10);
 $claim1 = claim1($verif);
if (!$claim1)  {
echo "Failed to Claim Voucher, Try to Claim Manually\n";
			}
		  else
			{
			echo $claim1 . "\n";
			}
echo "ready to claim 2\n";
echo "jeda 10 detik\n";
sleep(10);
 $claim2 = claim2($verif);
if (!$claim2)  {
echo "Failed to Claim Voucher, Try to Claim Manually\n";
			}
		  else
			{
			echo $claim2 . "\n";
			}
		  echo "ready to claim 3\n";
echo "jeda 10 detik\n";
sleep(10);
 $claim3 = claim3($verif);
if (!$claim3)  {
echo "Failed to Claim Voucher, Try to Claim Manually\n";
			}
		  else
			{
			echo $claim3 . "\n";
			}
echo "ready to claim 4\n";
echo "jeda 10 detik\n";
sleep(10);
 $claim4 = claim4($verif);
if (!$claim4)  {
echo "Failed to Claim Voucher, Try to Claim Manually\n";
			}
		  else
			{
			echo $claim4 . "\n";
			}
	}
 }
}else if($type == 1){
echo "It's Login Way\n";
echo "Input 62 For ID and 1 For US Phone Number\n";
echo "Enter Number: ";
$nope = trim(fgets(STDIN));
$login = login($nope);
if ($login == false)
	{
	echo "Failed to Get OTP!\n";
	}
  else
	{
	echo "Enter Your OTP: ";
	// echo "Enter Number: ";
	$otp = trim(fgets(STDIN));
	$verif = veriflogin($otp, $login);
	if ($verif == false)
		{
		echo "Failed to Login with Your Number!\n";
		}
	  else
		{
		echo "Ready to Claim\n";
		$claim = claim($verif);
		if ($claim == false)
			{
			echo "Failed to Claim Voucher, Try to Claim Manually\n";
			}
		  else
			{
			echo $claim . "\n";
			}
echo "ready to claim 1\n";
echo "jeda 10 detik\n";
sleep(10);
 $claim1 = claim1($verif);
if (!$claim1)  {
echo "Failed to Claim Voucher, Try to Claim Manually\n";
			}
		  else
			{
			echo $claim1 . "\n";
			}
echo "ready to claim 2\n";
echo "jeda 10 detik\n";
sleep(10);
 $claim2 = claim2($verif);
if (!$claim2)  {
echo "Failed to Claim Voucher, Try to Claim Manually\n";
			}
		  else
			{
			echo $claim2 . "\n";
			}
		  echo "ready to claim 3\n";
echo "jeda 10 detik\n";
sleep(10);
 $claim3 = claim3($verif);
if (!$claim3)  {
echo "Failed to Claim Voucher, Try to Claim Manually\n";
			}
		  else
			{
			echo $claim3 . "\n";
			}
echo "ready to claim 43\n";
echo "jeda 10 detik\n";
sleep(10);
 $claim4 = claim4($verif);
if (!$claim4)  {
echo "Failed to Claim Voucher, Try to Claim Manually\n";
			}
		  else
			{
			echo $claim4 . "\n";
			}
		}
	}	
}
?>
