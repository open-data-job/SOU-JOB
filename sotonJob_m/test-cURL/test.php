<?php 
	$curl = curl_init("www.baidu.com");
	curl_exec($curl);
	curl_close($curl);
 ?>