<?php
session_start();
header("Expires: Mon, 26 Jul 1970 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
include "../app/member/include/address.mem.php";
include "../app/member/include/config.inc.php";

$gType = $_GET["gtype"];
$rType = $_GET["rtype"];

echo '
document.getElementById("login-username").innerHTML = "'.$_SESSION["username"].'";
document.getElementById("bet-credit").innerHTML = "'.$_SESSION["user_money"].'";
var Left = document.getElementById("message_box");
Left.innerHTML = "  <div class=\"inner\">\n      <div class=\"msg-title\">\n         ������最新消息                 </div>\n      <div class=\"msg-text\">\n                      \n              <form name=\"layoutform\" action=\"/member/orderB3_act.php\" method=\"post\">\n                  <input type=\"hidden\" name=\"gtype\" value=\"'.$gType.'\" />\n        </form>\n      </div>\n    </div>\n    <div class=\"footer\"></div>\n  ";
Left.style.display = "none";';
exit;