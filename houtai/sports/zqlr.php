<?php
session_start();
header("Expires: Mon, 26 Jul 1970 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); 
header("Cache-Control: no-cache, must-revalidate");      
header("Pragma: no-cache");
header("Content-type: text/html; charset=utf-8");


$C_Patch=$_SERVER['DOCUMENT_ROOT'];
include_once($C_Patch."/app/member/include/address.mem.php");

include_once($C_Patch."/app/member/include/config.inc.php");

include_once($C_Patch."/app/member/common/function.php");

include_once("../class/admin.php");

include_once("../common/login_check.php"); 

check_quanxian("手工录入体育比分");

$val	=	explode("|||",$_POST["value"]);
$mid	=	intval($val[3]);

if($mid){
	 $sql			=	"select Match_Master,match_name,Match_Guest from bet_match where Match_ID='$mid' limit 1";
	 $query			=	$mysqli->query($sql);
	 $rows			=	$query->fetch_array();
	 
	 $match_name	=	$rows["match_name"];
	 $Match_Master	=	$rows["Match_Master"];
	 $Match_Guest	=	$rows["Match_Guest"];
	 $Match_Date	=	$val[2];
	 
	 $sql			=	"select Match_ID from bet_match where match_name='$match_name' and Match_Master='$Match_Master' and Match_Guest='$Match_Guest' and Match_Date like ('%".$Match_Date."%')";
	 $query			=	$mysqli->query($sql);
	 $mid			=	"";
	 while($rows	=	$query->fetch_array()){
	 	$mid .= $rows["Match_ID"].",";
	 }
	 $mid			=	rtrim($mid,",");
	 $value			=	"";
	 
	 $type			=	$val[4];
	 if($type == 'sb'){ //上半场
	 	$MB_Inball_HR	=	$val[0];
     	$TG_Inball_HR	=	$val[1];
	 	$sql			=	"update bet_match set mb_inball_hr='$MB_Inball_HR',tg_inball_hr='$TG_Inball_HR' where match_id in($mid)";
		$mysqli->query($sql);
		$q				=	$mysqli->affected_rows;

		
//保存所有上半场单式注单比分
		$sql			=	"select id from k_bet where lose_ok=1 and (point_column in ('match_bmdy','match_bgdy','match_bhdy','match_bho','match_bao','match_bdpl','match_bxpl') or point_column like 'match_hr_bd%') and `status`=0 and match_id in($mid) order by id desc"; //单式
		$result			=	$mysqli->query($sql);
		$bid			=	"";
		while($rows		=	$result->fetch_array()){
			$bid		.=	$rows["id"].",";
		}
		$bid			=	rtrim($bid,",");
		if($bid != ""){
			$sql		=	"update k_bet set MB_Inball='$MB_Inball_HR',TG_Inball='$TG_Inball_HR' where id in($bid)";
			$mysqli->query($sql);
		}
		
		//保存所上半场有串关注单比分
		$sql			=	"select id from k_bet_cg where `status`=0 and match_id in($mid) and bet_info like('%上半场%') order by id desc";
		$result_cg		=	$mysqli->query($sql); //串关
		$bid			=	"";
		while($rows		=	$result_cg->fetch_array()){
			$bid		.=	$rows["id"].",";
		}
		if($bid != ""){
			$bid		=	rtrim($bid,",");
			$sql		=	"update k_bet_cg set mb_inball='$MB_Inball_HR',tg_inball='$TG_Inball_HR' where id in($bid)";
			$mysqli->query($sql);
		}
			admin::insert_log($_SESSION["login_name"],get_ip(),$bj_time_now,"编辑了足球赛事ID为[".$mid."]的上半:[".$MB_Inball_HR.":".$TG_Inball_HR."]比分",session_id(),"",$bj_time_now);

		
		
		
		echo 2;
		exit;
	 }else{ //保存全场
	 	$MB_Inball		=	$val[0];
     	$TG_Inball		=	$val[1];
	 	$sql			=	"update bet_match set mb_inball='$MB_Inball',tg_inball='$TG_Inball' where match_id in($mid)";
		$mysqli->query($sql);
		
		$q				=	$mysqli->affected_rows;

//保存所有全场单式注单比分
		$sql			=	"select id from k_bet where lose_ok=1 and `status`=0 and match_id in($mid) and not bet_info like('%上半%') order by id desc ";
		$result			=	$mysqli->query($sql); //单式
		$bid			=	"";
		while($rows		=	$result->fetch_array()){
		   $bid			.=	$rows["id"].",";
		}
		if($bid != ""){ //全场
			$bid	=	rtrim($bid,",");
			$sql	=	"update k_bet set MB_Inball='$MB_Inball',TG_Inball='$TG_Inball' where id in($bid)";
			$mysqli->query($sql);
		}
		
		//保存全场有串关注单比分
		$sql		=	"select id from k_bet_cg where `status`=0 and match_id in($mid) and not bet_info like('%上半%') order by id desc";
		$result_cg	=	$mysqli->query($sql); //串关
		$bid		=	"";
		while($rows	=	$result_cg->fetch_array()) {
		    $bid	.=	$rows["id"].",";
		}
		if($bid != ""){
			$bid	=	rtrim($bid,",");
			$sql	=	"update k_bet_cg set mb_inball='$MB_Inball',tg_inball='$TG_Inball' where id in($bid)";
			$mysqli->query($sql);
		}
		admin::insert_log($_SESSION["login_name"],get_ip(),$bj_time_now,"编辑了足球赛事ID为[".$mid."]的全场:[".$MB_Inball.":".$TG_Inball."]比分",session_id(),"",$bj_time_now);

		
		echo 1;
		exit;
	 }
}else{
	echo 3;
	exit;
}
?>