<?php 


  
$p="hiddenType=&isHost=0&beginTime=2018-03-08&endTime=2018-03-15&type=2&client=192.168.84.1&roomId=7930&roomName=1914++++++++++++++++&building=";//Post信息（必须的）  
$ch = curl_init();  
// 2. 设置选项，包括URL  
$reffer = 'http://192.168.84.3:9090/cgcSims/selectList.do';  
//保持疑问？？？
curl_setopt($ch, CURLOPT_REFERER, $reffer);       //伪造Referer 请求头中有 复制下来就行了  
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.3; WOW64; rv:39.0) Gecko/20100101 Firefox/39.0"); //伪造user-agent请求头也有  
curl_setopt($ch,CURLOPT_URL, "http://192.168.84.3:9090/cgcSims/selectList.do");//这里填的是登录地址了(就是表单登录时action="xxx"提交的地址)  
// curl_setopt($ch,CURLOPT_COOKIEFILE, $CookieFile);//发送第一步保存好的Cookie  
curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);  
curl_setopt($ch,CURLOPT_POST, 1);//采用POST传值方式  
curl_setopt($ch,CURLOPT_POSTFIELDS, $p);  //提交Post信息  
curl_setopt($ch,CURLOPT_FOLLOWLOCATION,true);  //防止重定向 不填可能会跳转页面  
$s = curl_exec($ch);  
curl_close($ch);  

 ?>