﻿<?php
$C_Patch=$_SERVER['DOCUMENT_ROOT'];
include_once($C_Patch."/app/member/cache/website.php");
?>
    <link href="css/bcss.css" rel="stylesheet" type="text/css" />
    <link href="/cl/tpl/commonFile/css/standard.css" rel="stylesheet" type="text/css" />

    <style type="text/css">
        body{
            margin-left: 0px;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
            font-size: 12px;
            color: #ffffff;
        }
    </style>

    <script language="javascript" src="/js/jquery-1.7.1.js"></script>
    <script src="/cl/js/common.js"></script>
<!--    <script language="javascript" type="text/javascript" src="/js/DD_belatedPNG.js"></script>-->
    <script language="javascript" type="text/javascript">

//        var Sys = {};
//        var ua = navigator.userAgent.toLowerCase();
//        if (window.ActiveXObject)
//            Sys.ie = ua.match(/msie ([\d.]+)/)[1]
//        else if (document.getBoxObjectFor)
//            Sys.firefox = ua.match(/firefox\/([\d.]+)/)[1]
//        else if (window.MessageEvent && !document.getBoxObjectFor)
//            Sys.chrome = ua.match(/chrome\/([\d.]+)/)[1]
//        else if (window.opera)
//            Sys.opera = ua.match(/opera.([\d.]+)/)[1]
//        else if (window.openDatabase)
//            Sys.safari = ua.match(/version\/([\d.]+)/)[1];



        function myfun()
        {
//            var isChrome = window.navigator.userAgent.indexOf("Chrome") !== -1;
//            if(Sys.ie && document.body.clientWidth>1000){
//                var left_blank = (document.body.clientWidth-1000)/2;
//                $("#footer").css('margin-left', left_blank.toString()+'px');
//            }
            //以下进行测试
//        if(Sys.ie) document.write('IE: '+Sys.ie);
//        if(Sys.firefox) document.write('Firefox: '+Sys.firefox);
//        if(Sys.chrome) 1=1;
//        if(Sys.opera) document.write('Opera: '+Sys.opera);
//        if(Sys.safari) document.write('Safari: '+Sys.safari);
        }
        /*用window.onload调用myfun()*/
//        window.onload=myfun;//不要括号
//
//        jQuery(window).resize(myfun);

    </script>
<body style="background:transparent;">
<center>
<div id="page-footer">
            <div class="fo_01">
              <div class="fo_01_r" style="text-align:center;">
                <div>&nbsp;
<a id="dlhz" class="js-article-color nLink" href="javascript:click_url('/app/member/help/dlhz1.php');">关于我们</a> |
<a id="dlhz" class="js-article-color nLink" href="javascript:click_url('/app/member/help/dlhz2.php');">联系我们</a> |
<a id="dlhz" class="js-article-color nLink" href="javascript:click_url('/app/member/help/dlhz3.php');">合作伙伴</a> |
<a id="dlhz" class="js-article-color nLink" href="javascript:click_url('/app/member/help/dlhz4.php');">存款帮助</a> |
<a id="dlhz" class="js-article-color nLink" href="javascript:click_url('/app/member/help/dlhz5.php');">取款帮助</a> |
<a id="dlhz" class="js-article-color nLink" href="javascript:click_url('/app/member/help/dlhz6.php');">常见问题</a>
                </div>
              </div>
              <div class="fo_01_l"> <img src="/imgs/copy.png" alt=""> </div>
              <div class="clear"></div>
            </div>
            <div class="fo_02">
                <div>
                    <h3>信息中心</h3>
                    <p>
                        注册<br />
                        <?=$web_site['web_name']?>致力于为客户提供高品质、高赔率的在线娱乐投注游戏，定期还推出各类存款红利及返水优惠，欢迎您加入。
                    </p>
                    <p>
                        合作伙伴<br />
                        今天加入<?=$web_site['web_name']?>的合作伙伴计划，开始介绍新客户，每月您将获取丰厚的酬金。
                    </p>
                </div>
                <div>
                    <h3>产品介绍</h3>
                    <p>
                        真人娱乐城<br />
                      <?=$web_site['web_name']?>真人娱乐城拥有多个最受欢迎的真人娱乐场，您可以饱览整个游戏大厅和靓丽美女荷官。游戏众多，如真人百家乐，真人骰宝，真人21点，真人龙虎以及真人轮盘，通过现场视频，您能感受到现场投注的乐趣，或者您也可以选择容易上手的线上老虎机，就有机会获得我们的超级累计大奖。
                    </p>
                </div>
                <div>
                    <h3>优惠信息</h3>
                    <p>
                        优惠活动<br />
                       <?=$web_site['web_name']?>为新客户定制各类优惠活动，老客户可享有现金返水及再次存款红利优惠。
                    </p>
                    <p>
                        帮助中心<br />
                        您可以通过我们的在线客服或者帮助中心获得有关开户、存款、提款及游戏玩法等各方面的帮助。
                    </p>
                </div>
                <div>
                    <h3>投注资料</h3>
                    <p>
                        投注记录<br />
                        通过游戏系统，您可以随时随地查询一切投注纪录。
                    </p>
                    <p>
                        责任博彩<br />
                        我们积极推行负责任博彩，并极力拒绝未成年玩家使用我们的软件进行网上娱乐。游戏之前，请您遵守自己当地法律。
                    </p>
                </div>
                  
            </div>
            <p style="width:100%; text-align:center;color:#e5ce77;font-size: 12px;margin-top:10px;">
                &copy;2010-2016 澳门永利赌场. All rights reserved | 18+
            </p>
          </div>
</center>
</body>
</html>