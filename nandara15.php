<?php
date_default_timezone_set('Asia/Jakarta');
include "function15.php";
echo "\e[95m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
echo "\e[96m_________________   WARNING !!!!!!!!  _________________ \n";
echo "\e[96m          INI SCRIB GOJEK INI GRATIS BRO                \n";
echo "\e[96m           JADI GUNAKANLAH DENGAN BIJAK                 \n";
echo "\e[96m          SCRIB INI TIDAK DI JUAL BELIKAN               \n";
echo "\e[96m              SUBCRIBE CHANNEL YOUTUTBE :               \n";
echo "\e[96m                    RAMZ TUTORIAL                       \n";
echo "\e[96m       BIAR BISA MAKIN SEMANGAT BIKIN KONTENNYA         \n";
echo "\e[96m ********\e[95m".date('[d-m-Y] [H:i:s]')."\e[96m********\n";
echo "\e[95m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
echo "\e[96m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
echo "\e[93m            \e[96m BERDOA DULU SEBELUM CLAIM \e[93m \n";
echo "\e[96m  ==============================================\n";
echo "\e[96m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
echo color("white","Token: ");
$token = trim(fgets(STDIN));
echo "\n".color("white","Claim?: y/n ");
        $pilihan = trim(fgets(STDIN));
        if($pilihan == "y" || $pilihan == "Y"){
        echo color("red","▬▬▬▬▬▬▬▬▬▬▬▬VOUCHER 15+10+5▬▬▬▬▬▬▬▬▬▬▬▬");
        echo "\n".color("white","Claim A..");
        echo "\n".color("white","Please wait");
        for($a=1;$a<=3;$a++){
        echo color("white",".");
        sleep(1);
        }
        $code1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"PESANGOFOOD0607"}');
        $message = fetch_value($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai')){
        echo "\n".color("green"," Message: ".$message);
        }else{
        echo "\n".color("white"," Message: ".$message);
        sleep(1);
        $cekvoucher = request('/gopoints/v3/wallet/vouchers?limit=10&page=1', $token);
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
        $voucher11 = getStr1('"title":"','",',$cekvoucher,"11");
        $voucher12 = getStr1('"title":"','",',$cekvoucher,"12");
        $voucher13 = getStr1('"title":"','",',$cekvoucher,"13");
        $voucher14 = getStr1('"title":"','",',$cekvoucher,"14");
        $voucher15 = getStr1('"title":"','",',$cekvoucher,"15");
        echo "\n".color("white"," Total voucher ".$total." : ");
        echo "\n".color("white"," 1. ".$voucher1);
        echo "\n".color("white"," 2. ".$voucher2);
        echo "\n".color("white"," 3. ".$voucher3);
        echo "\n".color("white"," 4. ".$voucher4);
        echo "\n".color("white"," 5. ".$voucher5);
        echo "\n".color("white"," 6. ".$voucher6);
        echo "\n".color("white"," 7. ".$voucher7);
        echo "\n".color("white"," 8. ".$voucher8);
        echo "\n".color("white"," 9. ".$voucher9);
        echo "\n".color("white"," 10. ".$voucher10);
        echo "\n".color("white"," 11. ".$voucher11);
        echo "\n".color("white"," 12. ".$voucher12);
        echo "\n".color("white"," 13. ".$voucher13);
        echo "\n".color("white"," 14. ".$voucher14);
        echo "\n".color("white"," 15. ".$voucher15);
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
        $expired11 = getStr1('"expiry_date":"','"',$cekvoucher,'11');
        $expired12 = getStr1('"expiry_date":"','"',$cekvoucher,'12');
        $expired13 = getStr1('"expiry_date":"','"',$cekvoucher,'13');
        $expired14 = getStr1('"expiry_date":"','"',$cekvoucher,'14');
        $expired15 = getStr1('"expiry_date":"','"',$cekvoucher,'15');
         }
  }
