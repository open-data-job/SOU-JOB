
<?php
/**
 * php网视频教学
 * 
 */
$cookiefile = tempnam('./temp', 'cookie');

$login_url="http://192.168.84.3:9090/cgcSims/selectList.do";

$post_fields='hiddenType=&isHost=&beginTime=2018-03-08&endTime=2018-03-15&type=2&client=192.168.84.1&roomId=7928&roomName=1912&building=';

$ch = curl_init($login_url);			// 初始化
curl_setopt($ch, CURLOPT_HEADER, 0 );      
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);            // 执行之后不直接打印出来
curl_setopt($ch, CURLOPT_POST, 1);       
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields); 
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookiefile);    
// curl_exec($ch);
// curl_close($ch);

// $url = "http://192.168.84.3:9090/cgcSims/selectList.do";	// 设置访问网页的URL

// $ch = curl_init($url);
// curl_setopt($ch, CURLOPT_HEADER, 0 );      
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);            // 执行之后不直接打印出来
// curl_setopt($ch, CURLOPT_COOKIEJAR, $cookiefile);  
$contents = curl_exec($ch);
// echo $contents;
// 

// var_dump($m\);
curl_close($ch);


?>