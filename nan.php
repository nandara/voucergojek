<?php
echo color("green","[+] Token GOJEK Kamu Disini : ");
$token = trim(fgets(STDIN));
$secret = ''.$token.'';
$header = array();
$header[] = 'Content-Type: application/json';
$header[] = 'X-AppVersion: 3.46.2';
$header[] = "X-UniqueId: ".time()."57".mt_rand(1000,9999);
$header[] = 'X-Location: id_ID';
$header[] ='Authorization: Bearer '.$token;
$header[] = 'pin:'.$pin.'';
//CHECKER DETAIL AKUN
$info = curl('https://api.gojekapi.com/v1/chat/profile', null, $header);
    $verifs = json_decode($info[0]);
         $akun = $verifs->data->name;
         $nope = $verifs->data->phone;
   echo "\n";
   echo color("yellow","nama : ".$akun." \n");
   echo color("yellow","nomer : 0".$nope." \n");
//CHECKER SALDO GOPAY
$detail = curl('https://api.gojekapi.com/wallet/profile/detailed', null, $header);
         $saldoo = json_decode($detail[0]);
                $saldo = $saldoo->data->balance;
                    echo color("yellow","Sisa Saldo Gopay = $saldo \n");
//CHECKER VOUCHER YANG ADA
$detail_voucher = curl('https://api.gojekapi.com/gopoints/v3/wallet/vouchers?limit=10&page=1', null, $header);
     $vouchers = json_decode($detail_voucher[0]);
     $total_voucher = $vouchers->voucher_stats->total_vouchers;
     $nama_voucher = $vouchers->data[0]->title;
 $batas_voucher = $vouchers->data[0]->expiry_date;
 $nama_voucher1 = $vouchers->data[1]->title;
 $batas_voucher1 = $vouchers->data[1]->expiry_date;
 $nama_voucher2 = $vouchers->data[2]->title;
 $batas_voucher2 = $vouchers->data[2]->expiry_date;
 $nama_voucher3 = $vouchers->data[3]->title;
 $batas_voucher3 = $vouchers->data[3]->expiry_date;
 $nama_voucher4 = $vouchers->data[4]->title;
 $batas_voucher4 = $vouchers->data[4]->expiry_date;
 $nama_voucher5 = $vouchers->data[5]->title;
 $batas_voucher5 = $vouchers->data[5]->expiry_date;
 $nama_voucher6 = $vouchers->data[6]->title;
 $batas_voucher6 = $vouchers->data[6]->expiry_date;
 $nama_voucher7 = $vouchers->data[7]->title;
 $batas_voucher7 = $vouchers->data[7]->expiry_date;
 $nama_voucher8 = $vouchers->data[8]->title;
 $batas_voucher8 = $vouchers->data[8]->expiry_date;
 $nama_voucher9 = $vouchers->data[9]->title;
 $batas_voucher9 = $vouchers->data[9]->expiry_date;
 $nama_voucher10 = $vouchers->data[10]->title;
 $batas_voucher10 = $vouchers->data[10]->expiry_date;
 $nama_voucher11 = $vouchers->data[11]->title;
 $batas_voucher11 = $vouchers->data[11]->expiry_date;
 $nama_voucher12 = $vouchers->data[12]->title;
 $batas_voucher12 = $vouchers->data[12]->expiry_date;
 $nama_voucher13 = $vouchers->data[13]->title;
 $batas_voucher13 = $vouchers->data[13]->expiry_date;
 $nama_voucher14 = $vouchers->data[14]->title;
 $batas_voucher14 = $vouchers->data[14]->expiry_date;
       if ($vouchers->success == true) {
       echo "
";
       echo color("blue","Kamu Punya " . $total_voucher . " Voucher GOJEK
");
       echo "
";
       if ($total_voucher == 1) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
    } else {
    }
    if ($total_voucher == 2) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
    } else {
    }
    if ($total_voucher == 3) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher2 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher2 . '';
        echo "
";
    } else {
    }
    if ($total_voucher == 4) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher2 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher2 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher3 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher3 . '';
        echo "
";
    } else {
    }
    if ($total_voucher == 5) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher2 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher2 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher3 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher3 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher4 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher4 . '';
        echo "
";
    } else {
    }
    if ($total_voucher == 6) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher2 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher2 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher3 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher3 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher4 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher4 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher5 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher5 . '';
        echo "
";
    } else {
    }
    if ($total_voucher == 7) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher2 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher2 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher3 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher3 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher4 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher4 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher5 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher5 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher6 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher6 . '';
        echo "
";
    } else {
    }
    if ($total_voucher == 8) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher2 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher2 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher3 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher3 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher4 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher4 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher5 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher5 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher6 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher6 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher7 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher7 . '';
        echo "
";
    } else {
    }
    if ($total_voucher == 9) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher2 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher2 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher3 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher3 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher4 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher4 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher5 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher5 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher6 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher6 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher7 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher7 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher8 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher8 . '';
        echo "
";
    } else {
    }
    if ($total_voucher == 10) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher2 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher2 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher3 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher3 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher4 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher4 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher5 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher5 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher6 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher6 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher7 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher7 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher8 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher8 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher9 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher9 . '
';
        echo "
";
    } else {
    }
    if ($total_voucher == 11) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher2 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher2 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher3 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher3 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher4 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher4 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher5 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher5 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher6 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher6 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher7 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher7 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher8 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher8 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher9 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher9 . '
';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher10 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher10 . '
';
        echo "
";
    } else {
    }
    if ($total_voucher == 12) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher2 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher2 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher3 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher3 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher4 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher4 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher5 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher5 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher6 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher6 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher7 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher7 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher8 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher8 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher9 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher9 . '
';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher10 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher10 . '
';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher11 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher11 . '
';
        echo "
";
    } else {
    }
    if ($total_voucher == 13) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher2 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher2 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher3 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher3 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher4 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher4 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher5 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher5 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher6 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher6 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher7 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher7 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher8 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher8 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher9 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher9 . '
';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher10 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher10 . '
';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher11 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher11 . '
';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher12 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher12 . '
';
        echo "
";
    } else {
    }
    if ($total_voucher == 14) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher2 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher2 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher3 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher3 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher4 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher4 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher5 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher5 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher6 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher6 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher7 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher7 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher8 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher8 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher9 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher9 . '
';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher10 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher10 . '
';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher11 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher11 . '
';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher12 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher12 . '
';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher13 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher13 . '
';
        echo "
";
    } else {
    }
    if ($total_voucher == 15) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher2 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher2 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher3 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher3 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher4 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher4 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher5 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher5 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher6 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher6 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher7 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher7 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher8 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher8 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher9 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher9 . '
';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher10 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher10 . '
';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher11 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher11 . '
';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher12 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher12 . '
';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher13 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher13 . '
';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher14 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher14 . '
';
        echo "
";
  }
  }
 echo "\n".color("nevy","Mau Cek Paylater?: y/n ");
        $pilihan = trim(fgets(STDIN));
        if($pilihan == "y" || $pilihan == "Y"){
        echo color("red","===========(CHECK PAYLATER)===========")."\n";
        sleep (5);
 $paylater = curl('https://api.gojekapi.com/paylater/v1/user/profile', null, $header);
 $duit = json_decode($paylater[0]);
 $status = $duit->data->credit_nonfraud_eligible;
 $money = $duit->data->credit_limit;
    echo "\n".color("yellow","Status = ".$status." \n");
   echo color("yellow","Limit Tersedia = Rp".$money." \n");
 $transaksi = curl('https://api.gojekapi.com/paylater/v1/user/transactions', null, $header);
 $data = json_decode($transaksi[0]);
  if ($data->success == true) {
 $status1 = $data->transactions[0]->amount;
 $status2 = $data->transactions[0]->description;
    echo "\n".color("red","HUTANG = ".$status1." \n");
   echo color("red","TRANSAKSI DI = ".$status2." \n");
}else if($pilihan == "n" || $pilihan == "N"){
         die();
         }else{
echo "".color("red","AKUN BELUM UPGRADE \n");
}
}
//CHECKER AKHIR
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

function curl($url, $fields = null, $headers = null)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        if ($fields !== null) {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        }
        if ($headers !== null) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }
        $result   = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
        return array(
            $result,
            $httpcode
        );
	}
function color($color = "default" , $text)
    {
        $arrayColor = array(
            'grey'      => '1;30',
            'red'       => '1;31',
            'green'     => '1;32',
            'yellow'    => '1;33',
            'blue'      => '1;34',
            'purple'    => '1;35',
            'nevy'      => '1;36',
            'white'     => '1;0',
        );  
        return "\033[".$arrayColor[$color]."m".$text."\033[0m";
    }
function fetch_value($str,$find_start,$find_end) {
	$start = @strpos($str,$find_start);
	if ($start === false) {
		return "";
	}
	$length = strlen($find_start);
	$end    = strpos(substr($str,$start +$length),$find_end);
	return trim(substr($str,$start +$length,$end));
}
