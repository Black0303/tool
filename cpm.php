<?php 


 	set_time_limit(0);
  	error_reporting(0);
  	date_default_timezone_set('Asia/Jakarta');
	system('clear');


/* START COLOR */
$res="\033[0m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";
/* END COLOR */

$false = "{$abu2}[{$red}x{$abu2}]{$red2}";
$true = "{$abu2}[{$green}+{$abu2}]{$green2}";
$pentung = "{$abu2}[{$yellow}!{$abu2}]{$yellow2}";
$titik = "{$abu2}[{$res}•{$abu2}]{$green2}";


$banner = "
{$putih}\r{$lblue2}               
  ____   ____ _______   _    _          _____ _  ________ _____  
 |  _ \ / __ \__   __| | |  | |   /\   / ____| |/ /  ____|  __ \ 
 | |_) | |  | | | |    | |__| |  /  \ | |    | ' /| |__  | |__) |
 |  _ <| |  | | | |    |  __  | / /\ \| |    |  < |  __| |  _  / 
 | |_) | |__| | | |    | |  | |/ ____ \ |____| . \| |____| | \ \ 
 |____/ \____/  |_|    |_|  |_/_/    \_\_____|_|\_\______|_|  \_\
                                                                 
                                                                 
{$putih}    {$green2} {$putih}[ {$red} I  n  d  o  n  e  s  i  a  {$abu2}{$putih}  M  e  r  d  e  k  a {$red} ]{$green2}     {$putih}   
{$putih}\n";

echo $banner;
$date = date("Y-m-d");
echo  "TOOL-TOOL TERMUX HACKER WORK  ".$date."\n\n";

echo " {$putih}[ 1 ] Bot Checker Visitor\n";
echo " {$res}[ 2 ] Bot Admin-Finder\n";
echo " {$abu2}[ 3 ] SQLMAP\n";
echo " {$red}[ 4 ] WEBDAV\n";
echo " {$green}[ 5 ] WPSCAN\n";
echo " {$yellow}[ 6 ] MBF V2\n";
echo " {$blue}[ 7 ] FB TARGET\n";
echo " {$purple}[ 8 ] CLAIM MONNY\n";
echo " {$lblue}[ 9 ] JOOMSCAN\n";
echo " {$putih2}[ 10 ] SPAM E-MAIL\n";
echo " {$red2}[ 11 ] SPAM WA\n";
echo " {$green2}[ 12 ] SPAM NOMER\n";
echo " {$yellow2}[ 13 ] BinGoo\n";
echo " {$blue2}[ 14 ] Request Tool Bot{$putih}\n";

$pil = readline(" Select Tool Bot: ");





	if ( $pil == 1 ) {
		echo " {$putih}[ x ]{$green2}Step by Step Install Tool{$putih}[ x ]\n";
		echo "  {$lblue}pkg install git\n";
		echo "  pkg install php\n";
		echo "  pkg install php-curl\n";
		echo "  copy dan paste link https://semawur.com/6CB7xktLR0U Di Browser\n";
		echo "  git clone 'link github' \n";
		echo "  cd antix-visitor\n";
		echo "  php antix.php\n{$putih}";
	}elseif ($pil == 2 ) {
		echo " {$putih}[ x ]{$green2}Step by Step Install Tool{$putih}[ x ]\n";
		echo "  {$lblue}pkg install git\n";
		echo "  pkg install php\n";
		echo "  pkg install php-curl\n";
		echo "  copy dan paste link https://semawur.com/0caimEb1 Di Browser\n";
		echo "  git clone 'link github' \n";
		echo "  cd adm-finder  \n";
		echo "  php antix.php\n{$putih}";
	}elseif ($pil == 3 ) {
		echo " {$putih}[ x ]{$green2}Step by Step Install Tool{$putih}[ x ]\n";
		echo "  {$lblue}pkg install git\n";
		echo "  pkg install python2\n";
		echo "  Buka link di Chrome https://semawur.com/G8E77qNaMh2\n";
		echo "  git clone 'link github' \n";
		echo "  cd sqlmap\n";
		echo "  python2 sqlmap.py{$putih}\n";
	}elseif ($pil == 4) {
		echo " {$putih}[ x ]{$green2}Step by Step Install Tool{$putih}[ x ]\n";
		echo "  {$lblue}pkg install git\n";
		echo "  pkg install python2\n";
		echo "  pkg install curl\n";
		echo "  Buka link di Chrome https://semawur.com/FmxbfU\n";
		echo "  curl -k -O 'link pastebin' \n";
		echo "  python2 webdav.py{$putih}\n";
	}elseif ($pil == 5) {
		echo " {$putih}[ x ]{$green2}Open Browser https://semawur.com/hHyVR{$putih}[ x ]\n";
	}elseif ($pil == 6) {
		echo " {$putih}[ x ]{$green2}Open Browser https://semawur.com/eNTa0g{$putih}[ x ]\n";
	}elseif ($pil == 7) {
		echo " {$putih}[ x ]{$green2}Open Browser https://semawur.com/ZpJutp{$putih}[ x ]\n";
	}elseif ($pil == 8) {
		echo " {$putih}[ x ]{$green2}Open Browser https://semawur.com/h2AIRWbLOD{$putih}[ x ]\n";
	}elseif ($pil == 9) {
		echo " {$putih}[ x ]{$green2}Open Browser https://semawur.com/OafjIlBKjc1{$putih}[ x ]\n";
	}elseif ($pil == 10) {
		echo " {$putih}[ x ]{$green2}Open Browser https://semawur.com/dhYeQ3foro{$putih}[ x ]\n";
	}elseif ($pil == 11) {
		echo " {$putih}[ x ]{$green2}Open Browser https://semawur.com/BmKz{$putih}[ x ]\n";
	}elseif ($pil == 12) {
		echo " {$putih}[ x ]{$green2}Open Browser https://semawur.com/9tUKj9L{$putih}[ x ]\n";
	}elseif ($pil == 13) {
		echo " {$putih}[ x ]{$green2}Open Browser https://semawur.com/vUXDtj{$putih}[ x ]\n";
	}elseif ($pil == 14) {
		echo " {$putih}[ x ]{$green2}WA me: 088230610525 {$putih}[ x ]\n";
	}else{
		echo "Anda Memasukkan Kata Yang Tidak Valid\n";
	}
	





 ?>