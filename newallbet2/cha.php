<?php
session_start();
unset($mysqli);
$mysqli	=	new MySQLi("localhost","root","LOVEbaby1218!@#$","yl66y");
$mysqli->query("set names utf8");

include_once("../newallbet2/config.php");


include_once("../app/member/class/user.php");

include_once("../newallbet2/api.class.php");

$uid	=	$_SESSION["userid"];
$loginid=	$_SESSION["uid"];
$userinfo		=	user::getinfo($uid);

$callback	= $_GET["callback"];
$agusername=$userinfo['ab_username'];
$username = $userinfo['user_name'];

if(!empty($agusername)){
	
        $bbinapi = new BBIN_TZH($comId,$comKey,$apiKey);
		$balance = $bbinapi->GetBalance($agusername, $agpassword);
		//echo $balance;exit;
	if($balance!==false)
        {
          $json["general"] = sprintf("%.2f",$balance);	
            $sql = "update user_list set ab_money ='$balance' where username='$username'";
           $mysqli->query($sql);
        }
            else {
            $json["general"] =0 ;	
            }
	//echo json_encode($json);
//	echo $callback."(".json_encode($json).");";
//	exit; 
	
}else{
	$json["general"]="0.00";
}
//echo $callback."(".json_encode($json).");";
//	exit;
        
         if(isset($_GET['type'])) {
           $ag_money =  $json["general"];}
            else {
            //echo  $json["general"];
			echo json_encode($json);
            }
	exit;
?>
