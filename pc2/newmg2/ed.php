﻿<?php
function HTMLEncode($sHTML){
			$sHTML = urlencode($sHTML);
			return $sHTML;
		}

function randomkeys($length)
{
 $pattern='1234567890';
 for($i=0;$i<$length;$i++)
 {
   $key .= $pattern{mt_rand(0,9)}; 
 }
 return $key;
}



function message($value,$url=""){ //默认返回上一页
	header("Content-type: text/html; charset=utf-8");
	$js  ='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>message</title>
</head>

<body>';
	$js  .= "<script type=\"text/javascript\" language=\"javascript\">\r\n";
	$js .= "alert(\"".$value."\");\r\n";
	if($url) $js .= "window.location.href=\"$url\";\r\n";
	else $js .= "window.history.go(-1);\r\n";
	$js .= "</script>\r\n";
$js.="</body></html>";
	echo $js;
	exit;
}
session_start();
if(!isset($_SESSION["uid"]) || !isset($_SESSION["username"])){
	header("Location:/index.php");
	exit();
}
session_start();
if($_SESSION["username"]==''){
	header("Location: /index.php");
	exit;
}

include_once("../newmg2/config.php");


include_once("../app/member/class/user.php");

include_once("../newmg2/api.class.php");

$uid	=	$_SESSION["userid"];
$loginid=	$_SESSION["uid"];


$userinfo		=	user::getinfo($uid);
$username  = $userinfo['user_name'];

//echo randomnames(6);exit;
/*$uid	=	@$_SESSION['uid'];
$loginid=	@$_SESSION['user_login_id'];
$username  = @$_SESSION['username'];
$userinfo		=	user::getinfo($uid);
$query	=	$mysqli->query("select * from k_user");
$t		=	$query->num_rows;*/

//print_r($userinfo);exit;
//$sql = "select * from user_users where username='$username'";
//$result2 = $mysqlit0->query($sql);
//$rows=$result2->fetch_array();

//$act=trim($_POST['act']);
				$agusername  = $userinfo["mg_username"];//ag帐号
                $bbinapi = new BBIN_TZH($comId, $comKey,$gamePlatform);
				//echo $agusername;exit;
				//判断AG帐号是为空，没有则添加
				if($agusername==""){//start
									
                                    $agusername = $top_pre.randomnames(6);
									//$agusername = 'b2'.$agusername;
									//echo $agusername;exit;
									//echo $bbinapi->GameUserRegister($agusername, $agpassword);exit;
                                    if(!$bbinapi->GameUserRegister($agusername, $agpassword)){ // 创建失败
                                       echo "<script>alert('请联系管理员开通AG账号');</script>";
                                       exit;
                                    }  else {
                                    $sql = "update user_list set mg_username = '$agusername',mg_password = '$agpassword' where user_name = '$username'";
                                    $mysqli->query($sql);
									//echo $agusername.$agpassword;
									//exit;
                                    }         
				
				}
				
				


if($_GET["action"]=="save" && ($_POST["trtype"]=="1")){
	
$sql = "select * from user_list where user_id='$uid'";
$result = $mysqli->query($sql);
$row=$result->fetch_array();
$conver=htmlEncode(doubleval($_POST["p3_Amt"]));//转换金额$_POST['conver'];
if(($conver<0)||($conver>$row["money"])){
echo "<script>alert('金额错误，请重新输入。');</script>";
echo "<script>history.go(-1);</script>";
exit;
}else{

$mysqli->autocommit(FALSE);
		$mysqli->query("BEGIN"); //事务开始
		try{
			$pay_value	=	0-$conver; //把金额置成带符号数字	
			$trtype = $_POST["trtype"];
			
			if($_POST["trtype"]=="1"){
				$about="体育/彩票账户->MG大厅";
				
				
				
				//
				
				$agusername = $userinfo['mg_username'];
				$opCredit = $pay_value;//trim($_POST['opCredit']);
			$result = $bbinapi->TransferIn($agusername, $password, $conver);
			//echo $result;exit;
                        //var_dump($result);exit;	
			if($result===true){
					echo "转入成功";
				}else{
					if(strpos($result,'信用额度不足')>0){
						$result0 = '信用额度不足';
					echo "转入失败,".$result;exit("<script>alert('信用额度不足！');history.back();</script>");
					}else{
					echo "转入失败,";exit("<script>alert('".$result."！');history.back();</script>");
					}
				}
				
			}else{
				//$trtype = 9;//5转真人，6转至T0
			}
			
			 $sql		=	"update user_list set money=money+$pay_value where user_id='$uid'";
			$mysqli->query($sql);// or die($sql);
			$q1			=	$mysqli->affected_rows;
			
			$status=2;
			$order		=	date("YmdHis")."_".$_SESSION['username'];
			
			$status=1;
			
			 /*$sql		=	"insert into k_money(uid,m_value,status,m_order,pay_card,pay_num,pay_address,pay_name,about,assets,balance,`type`) values($uid,$pay_value,$status,'$order','".$row["pay_card"]."','".$row["pay_num"]."','".$row["pay_address"]."','".$row["pay_name"]."','$about',".$row["money"].",".($row["money"]+$pay_value).",'5')";*/
			
			$change_money = $pay_value;//$_POST["change_money"];
			$change_money = intval($change_money);
			//if(is_int($change_money) && $change_money>0){}
			$assets = $row["money"];
			$balance = $assets-$change_money;
			$datereg=	date("YmdHis").randomkeys(4);
			$sql = "INSERT INTO `money_log` (`user_id`,`order_num`,`about`,`update_time`,`type`,`order_value`,`assets`,`balance`) VALUES ('$uid','$datereg','$about',now(),'真人转账','$change_money','$assets','$balance');";



			$mysqli->query($sql) or die($sql);
			$q2		=	$mysqli->affected_rows;
			//echo "q1 = $q1;q2 = $q2";
			//exit($sql);
			if($q1==1 && $q2==1){
				$mysqli->commit(); //事务提交
					message('转换申请已经提交转换。','ed.php');

			}else{
				$mysqli->rollback(); //数据回滚
				message("由于网络堵塞，本次申请提款2失败。\\n请您稍候再试，或联系在线客服。");
			}
		}catch(Exception $e){
			$mysqli->rollback(); //数据回滚
			message("由于网络堵塞，本次申请提款失败。\\n请您稍候再试，或联系在线客服。");
		}

//$sql="update k_user set conver=conver+".$conver.",money=money-".$conver." where uid='$uid'";
//$mysqli->query($sql);
echo "<script>alert('转换成功');</script>";
echo "<script>location.href='ed.php';</script>";
exit;
}
	
}



//真人(普通厅)->体育/彩票账户
//真人(VIP厅)->体育/彩票账户
if($_GET["action"]=="save" && ( $_POST["trtype"]=="2")){
	
$sql = "select * from user_list where user_id='$uid'";
$result = $mysqli->query($sql);
$row=$result->fetch_array();

$conver=htmlEncode(doubleval($_POST["p3_Amt"]));//转换金额$_POST['conver'];
if($conver<0){
echo "<script>alert('金额错误，请重新输入。');</script>";
echo "<script>history.go(-1);</script>";
exit;
}else{

$mysqli->autocommit(FALSE);
		$mysqli->query("BEGIN"); //事务开始
		try{
			$pay_value	=	$conver; //把金额置成带符号数字
			
			
			
			$trtype = $_POST["trtype"];//7 T0转至体育时时彩
			$status=1;//AG直接转换到体育时时彩
			
			
				
				$agusername = $userinfo['mg_username'];
				
				$result = $bbinapi->TransferOut($agusername, $password, $pay_value);
				if($result===true){
					echo "转入成功";
				}else{
					//echo "转入失败";
                                        exit("<script>alert('".$result."！');location.href='ed.php';</script>");
				}

				
				
				
				
				
			
			
			$sql		=	"update user_list set money=money+$pay_value where user_id='$uid'";
			$mysqli->query($sql);//or die($sql);
			$q1			=	$mysqli->affected_rows;
			
			$about = "MG大厅->体育/彩票账户";
			$order		=	date("YmdHis")."_".$_SESSION['username'];			
			/*$sql		=	"insert into k_money(uid,m_value,status,m_order,pay_card,pay_num,pay_address,pay_name,about,assets,balance,`type`) values($uid,$pay_value,$status,'$order','".$row["pay_card"]."','".$row["pay_num"]."','".$row["pay_address"]."','".$row["pay_name"]."','$about',".$row["money"].",".($row["money"]+$pay_value).",7)";*/
			
			$change_money = $pay_value;//$_POST["change_money"];
			$change_money = intval($change_money);
			//if(is_int($change_money) && $change_money>0){}
			$assets = $row["money"];
			$balance = $assets+$change_money;
			$datereg=	date("YmdHis").randomkeys(4);
			$sql = "INSERT INTO `money_log` (`user_id`,`order_num`,`about`,`update_time`,`type`,`order_value`,`assets`,`balance`) VALUES ('$uid','$datereg','$about',now(),'真人转账','$change_money','$assets','$balance');";



			$mysqli->query($sql);// or die($sql);
			$q2		=	$mysqli->affected_rows;
			
			if($q1==1 && $q2==1){
				$mysqli->commit(); //事务提交
				if($trtype=="7"){//start 6
						
				}//end 6
				else{
				
					message('转换申请成功。','ed.php');
				}
			}else{
				$mysqli->rollback(); //数据回滚
				message("由于网络堵塞，本次申请提款2失败。\\n请您稍候再试，或联系在线客服。");
			}
		}catch(Exception $e){
			$mysqli->rollback(); //数据回滚
			message("由于网络堵塞，本次申请提款失败。\\n请您稍候再试，或联系在线客服。");
		}


echo "<script>alert('转换成功');</script>";
echo "<script>location.href='ed.php';</script>";
exit;
}
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>额度转换</title>

<script language="javascript" src="/js/jquery-1.7.1.js"></script> 

<link href="../css/css_1.css" rel="stylesheet" type="text/css" />
<style >
body{
background:url(images/open_01.png);
background-repeat:no-repeat;
color:#fff;
text-align:left;
}
table{
	margin:auto;
}
</style>
</head> 
<body >

<table border="0" cellspacing="10" cellpadding="0" width="600">
    <form action="ed.php?action=save" id="agform" method="post" name="form1">
    <tr>
        <td align="right" style="color:#ff0000;"><b>主钱包转账：</b></td>
        <td>
		   <!-- <a href="../ag/ed.php" style="color:#0093BF;"><b>Ag环亚游戏大厅转账</b></a> -->
			
            <a href="../Sports.php?index=/user/cha_ckonline" style="color:#FFF;" target="_blank"><b>查询财务记录</b></a>
        </td>
    </tr>
    <tr>
        <td align="right">
            用户账号：
        </td>
        <td>
            <?php echo $_SESSION["username"]; ?>        </td>
    </tr>
    <tr>
        <td align="right">
            体育/彩票账户余额：
        </td>
        <td>
            <?php echo $userinfo['money'];?>        </td>
    </tr>
    <tr>
        <td align="right">
            AG娱乐大厅余额：
        </td>
        <td id="general">
            加载中... 
        </td>
    </tr>
    <tr>
        <td align="right" width="150">
            转账选择：
        </td>
        <td>
            <select name="trtype" id="trtype">
                <option value="1">主钱包/体育/彩票账户->AG大厅</option>
                <option value="2">AG大厅->主钱包/体育/彩票账户</option>
            </select>
        </td>
    </tr>
    <tr>
        <td align="right">
            转账金额：
        </td>
        <td>
            <input type="text" name="p3_Amt" id="p3_Amt" onkeyup="if(isNaN(value))execCommand('undo')" />
        </td>
    </tr>
    <tr>
        <td align="right"></td>
        <td>
            <input type="submit" value="确认转账" />
        </td>
    </tr>
    </form>
</table>


 
 <script language="javascript">
	function AG_money(){
			 $.get("/newmg2/cha.php?callback=?",function(data){
				 data = eval('('+data+')');
				 //alert(data);
						$("#general").html(data.general);
                                                //$("#general").html(1);
                                               
				  }
			);
			setTimeout("AG_money()",10000);
	}

	function ag_change(bbmoney,bbtype){
		$('#p3_Amt').val(bbmoney);
		if(bbtype){
			$('#trtype').val(1);
		}else{
			$('#trtype').val(2);
		}
		$('#agform').submit();
	}

$(document).ready(function(){
	AG_money();
});
	
</script>
 <script type="text/javascript" language="javascript" src="/js/left_mouse.js"></script>
</body> 
</html>