<?php
require("config.php");
function hash1($length = 8) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}
function hash2($length = 4) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}
function hash3($length = 4) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}
function hash4($length = 4) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}
function hash5($length = 12) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}
function deviceid($length = 16) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyz', ceil($length/strlen($x)) )),1,$length);
}
function mac($length = 15) {
    return substr(str_shuffle(str_repeat($x='0123456789', ceil($length/strlen($x)) )),1,$length);
}
$banner = "\033[0;31m        ######  ####### ######  #     # ###
        #     # #       #     # ##   ##  #
        #     # #       #     # # # # #  #
        ######  #####   ######  #  #  #  #
        #     # #       #   #   #     #  #
        #     # #       #    #  #     #  #
        ######  ####### #     # #     # ###
\033[0;32m======================================================
\033[1;32mAuthor By \033[1;31m :\033[1;0m Kadal15 \033[1;30m        | \033[1;32mSuntik Refferall Bermi
\033[1;32mChannel Yt \033[1;31m:\033[1;0m JeJaka Tutorial\033[1;30m | \033[1;31mTake Your Own Risk

";
echo $banner;
sleep(1);
echo "\033[1;32mEnter Refferall Code \033[1;31m:\033[1;0m ";
$reff = trim(fgets(STDIN));
echo "\n\n\n\033[1;33m======================================================\n";
while(True){
   sleep(1);
   $us = array_rand($user);
   $a = array_rand($prox);
   $proxy = $prox[$a];
   $random = array_rand($nama);
   $no = rand(1,10000);
   $noo = rand(1,10000);
   $email = $nama[$random].$no;
   $pass = $nama[$random].$noo;
   $hash = hash1()."-".hash2()."-".hash3()."-".hash4()."-".hash5();
   $ua = array("accept-language: id-ID","user-agent: ".$user[$us],"content-type: application/json; charset=UTF-8");
   $url = "https://api.bermi.tv/put_users";
   $ch = curl_init();
   echo "\033[1;32mMengaktifkan Proxy\033[1;0m $proxy"."\n";
   sleep(1);
   echo "\033[1;32mTry To Register ";
   curl_setopt($ch, CURLOPT_URL, $url);
   echo "\033[1;0m.";
   sleep(1);
   curl_setopt($ch, CURLOPT_PROXY, $proxy);
   curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
   echo ".";
   sleep(1);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($ch, CURLOPT_POST, 1);
   echo ".";
   sleep(1);
   curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
   curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
   echo ".";
   sleep(1);
   $data1 = array("campaign" => "none",
   "device_id" => deviceid(),
   "email" => $email."@gmail.com",
   "install_source" => "organic",
   "mac" => mac(),
   "password" => $pass,
   "user_hash" => $hash,
   "username" => $email);
   $data = json_encode($data1, true);
   echo ".";
   sleep(1);
   curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
   echo ".";
   sleep(1);
   curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
   echo ".";
   sleep(1);
   curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie.txt');
   echo ".";
   sleep(1);
   $result = curl_exec($ch);
   curl_close($ch);
   echo ".";
   sleep(1);
   echo ".";
   sleep(1);
   echo ".";
   sleep(1);
   echo ".";
   sleep(1);
   echo ".";
   sleep(1);
   echo ".";
   sleep(1);
   echo ".";
   sleep(1);
   echo ".\n";
   $json = json_decode($result, true);
   if ($json["status"] == true){
      sleep(1);
      echo "\033[1;32mEmail  \033[1;31m   :\033[1;0m ".$json["data"]["email"]."\n";
      sleep(1);
      echo "\033[1;32mPassword \033[1;31m :\033[1;0m ".$pass."\n";
      sleep(1);
      echo "\033[1;32mUser Hash\033[1;31m :\033[1;0m ".$json["data"]["user_hash"]."\n";
      sleep(1);
      echo "\033[1;32mCity \033[1;31m     :\033[1;0m ".$json["data"]["address_city"]."\n";
      sleep(1);
      $link = "https://api.bermi.tv/claim_referral";
      $url1 = "https://api.bermi.tv/login_user";
      echo "\033[1;32mTry To Login ";
      $ch = curl_init();
      echo "\033[1;0m.";
      sleep(1);
      curl_setopt($ch, CURLOPT_URL, $url1);
      echo ".";
      sleep(1);
      curl_setopt($ch, CURLOPT_PROXY, $proxy);
      echo ".";
      sleep(1);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      echo ".";
      sleep(1);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      echo ".";
      sleep(1);
      curl_setopt($ch, CURLOPT_POST, 1);
      echo ".";
      sleep(1);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
      echo ".";
      sleep(1);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
      echo ".";
      sleep(1);
      $sign = array("email" => $json["data"]["email"],"password" => $pass);
      echo ".";
      sleep(1);
      $signin = json_encode($sign, true);
      echo ".";
      sleep(1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $signin);
      echo ".";
      sleep(1);
      curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
      echo ".";
      sleep(1);
      curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie.txt');
      echo ".";
      sleep(1);
      $result1 = curl_exec($ch);
      echo ".";
      sleep(1);
      echo ".";
      sleep(1);
      echo ".";
      sleep(1);
      echo ".";
      sleep(1);
      echo ".";
      sleep(1);
      echo ".\n";
      sleep(1);
      curl_close($ch);
      echo "\033[1;32mMemulai Menyuntikan Reff";
      sleep(1);
      $ch = curl_init();
      echo " \033[1;0m.";
      sleep(1);
      curl_setopt($ch, CURLOPT_URL, $link);
      curl_setopt($ch, CURLOPT_PROXY, $proxy);
      echo ".";
      sleep(1);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, 1);
      echo ".";
      sleep(1);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
      echo ".";
      sleep(1);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
      $data3 = array("invited_by" => $reff,"user_hash" => $json["data"]["user_hash"]);
      $data2 = json_encode($data3, true);
      echo ".";
      sleep(1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data2);
      echo ".";
      sleep(1);
      curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie.txt');
      $res = curl_exec($ch);
      echo ".\n";
      sleep(1);
      curl_close($ch);
      $json2 = json_decode($res, true);
      if($json2["status"] == true){
         echo "\033[1;32mSuccsess\n";
         sleep(1);
         echo "\033[1;33m======================================================\n";
      }else{
         echo "\033[1;31mFiled\n";
         sleep(1);
         echo "\033[1;33m======================================================\n";
      }
      sleep(30);
   }else{
      echo "\033[1;31mFiled To Register\n";
      echo "\033[1;33m======================================================\n";
      sleep(10);
   }
}
