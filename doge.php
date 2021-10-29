<?php 
set_time_limit(0);

/*
 CREDIT : ZOLDYK - J3F LAB - ERLANGGA LAB
 CONTACT : zoldykman@gmail.com 
*/
$url = 'http://getdogecoin.website/mining/faucet.php?address=D6pVnZAU85SYJ5PBVAbEVEF2Q3uReVeXs7&currency=DOGE&key=2a8d1d959c77810adc25317926ee7be1';
$ch = curl_init();
curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
curl_setopt_array($ch,array(
    CURLOPT_URL => 'http://getdogecoin.website/mining/',
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_COOKIEJAR => 'a.txt',
    CURLOPT_COOKIEFILE => 'a.txt'
    ));
$ros = curl_exec($ch);
curl_setopt_array($ch,array(
    CURLOPT_URL => $url,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_COOKIEJAR => 'a.txt',
    CURLOPT_COOKIEFILE => 'a.txt'
    ));
    
    
$url = "http://japakar.com/doge/faucet.php?address=D6pVnZAU85SYJ5PBVAbEVEF2Q3uReVeXs7&currency=DOGE&key=33b5306d0180b4999b962949811ee1e8";
curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
curl_setopt_array($ch,array(
    CURLOPT_URL => 'http://japakar.com/doge/',
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_COOKIEJAR => 'a.txt',
    CURLOPT_COOKIEFILE => 'a.txt'
    ));
$ros = curl_exec($ch);
curl_setopt_array($ch,array(
    CURLOPT_URL => $url,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_COOKIEJAR => 'a.txt',
    CURLOPT_COOKIEFILE => 'a.txt'
    ));
$res =  curl_exec($ch);
echo $res;
?>