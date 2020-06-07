<?php 


include 'login.php';



			
	// include 'data.php';

			
			
			// $data = 'nickName=Hacker';



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
{$putih}\r{$red}               
              █████╗ ███╗   ██╗████████╗██╗██╗  ██╗     
             ██╔══██╗████╗  ██║╚══██╔══╝██║╚██╗██╔╝  
             ███████║██╔██╗ ██║   ██║   ██║ ╚███╔╝   
 {$putih}            ██╔══██║██║╚██╗██║   ██║   ██║ ██╔██╗   
             ██║  ██║██║ ╚████║   ██║   ██║██╔╝ ██╗  
             ╚═╝  ╚═╝╚═╝  ╚═══╝   ╚═╝   ╚═╝╚═╝  ╚═╝    
              {$purple}[ LINK: https://github.com/km37id/]
{$putih}    {$green2} {$putih}[ {$red} I  n  d  o  n  e  s  i  a  {$abu2}{$putih}  M  e  r  d  e  k  a {$red} ]{$green2}     {$putih}   
{$putih}\n";

echo $banner;
echo "{$green2}	Tool  : {$putih}Bot Puppy\n";
echo "{$green2}	Wa    : {$putih}088230610525\n";
echo "{$green2}	Author: {$putih}Kemet_ID\n\n";




$ch = curl_init();
							curl_setopt($ch, CURLOPT_URL, 'http://puppyworldapp.com/invite');
						  	curl_setopt($ch, CURLOPT_HTTPHEADER, array($ua .
						  		'Content-Type: application/json' ,
						  		'Content-Type: application/x-www-form-urlencoded',$bearer
						  	));
							curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
							curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
							curl_setopt($ch, CURLOPT_TIMEOUT, 10);
							curl_setopt($ch, CURLOPT_POST, 1);
							curl_setopt($ch, CURLOPT_POSTFIELDS, 'inviteId=35784');
							$out = curl_exec($ch);
							$out = json_decode($out,true);
							curl_close($ch);
					for ($i=0; $i <= 10; $i++){
						
						
								$ch = curl_init();
							curl_setopt($ch, CURLOPT_URL, 'http://puppyworldapp.com/lottery/do');
						  	curl_setopt($ch, CURLOPT_HTTPHEADER, array($ua,
						  		'Content-Type: application/json' ,
						  		'Content-Type: application/x-www-form-urlencoded',$bearer
						  	));
							curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
							curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
							curl_setopt($ch, CURLOPT_TIMEOUT, 10);
							curl_setopt($ch, CURLOPT_POST, 1);
							// curl_setopt($ch, CURLOPT_POSTFIELDS, 'nickName=Syaiful Hadi');
							$out = curl_exec($ch);
							$out = json_decode($out,true);
							echo "{$green2} [ = ] Mundut {$putih}Pidio\n";
							

					}

while (1) {
	
for ($k=0; $k <= 15 ; $k=$k+1){

	for ($i=0; $i <= 15 ; $i=$i+2){
		

$ch = curl_init();
							curl_setopt($ch, CURLOPT_URL, 'http://puppyworldapp.com/dog/merge');
						  	curl_setopt($ch, CURLOPT_HTTPHEADER, array($ua .
						  		'Content-Type: application/json' ,
						  		'Content-Type: application/x-www-form-urlencoded',$bearer
						  	));
							curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
							curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
							curl_setopt($ch, CURLOPT_TIMEOUT, 10);
							curl_setopt($ch, CURLOPT_POST, 1);
							curl_setopt($ch, CURLOPT_POSTFIELDS, 'p1='.$k.'&p2='.$i.'');
							$out = curl_exec($ch);
							$out = json_decode($out,true);
							curl_close($ch);
							// print_r($out);
							echo "{$purple} [ = ] Njodohno {$putih}Anjing\n";


	}
}

	for ($n=0; $n <= 15 ; $n++) { 
		$ch = curl_init();
							curl_setopt($ch, CURLOPT_URL, 'http://puppyworldapp.com/dog/buy');
						  	curl_setopt($ch, CURLOPT_HTTPHEADER, array($ua .
						  		'Content-Type: application/json' ,
						  		'Content-Type: application/x-www-form-urlencoded',$bearer
						  	));
							curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
							curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
							curl_setopt($ch, CURLOPT_TIMEOUT, 10);
							curl_setopt($ch, CURLOPT_POST, 1);
							curl_setopt($ch, CURLOPT_POSTFIELDS, 'tempId=1010');
							$out = curl_exec($ch);
							$out = json_decode($out,true);
							curl_close($ch);
							// print_r($out);sleep(2);
							echo "{$lblue2} [ = ] Tumbas {$putih}  Anjing\n";
	}
echo "\n{$red2}        Loading Untuk Mengulangi{$putih}";sleep(1);echo ".";sleep(1);echo ".";sleep(1);echo ".";sleep(1);echo ".";sleep(1);echo ".";sleep(1);echo ".";sleep(1);echo ".";sleep(1);echo "Done\n\n{$putih}";sleep(1);
}



 ?>