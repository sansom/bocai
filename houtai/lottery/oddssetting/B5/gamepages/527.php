<?php

$odds1 = odds_lottery_normal::getOddsByPart($lottery_name,"仟拾定位","part1");
$odds2 = odds_lottery_normal::getOddsByPart($lottery_name,"仟拾定位","part2");

echo '
document.getElementById("Game").innerHTML = \'<form id="formB5" name="D3_018" action="/member/quickB5_act.php" method="post" onsubmit="return false">\'+
\'<input type="hidden" name="gid" value="343390"/>\'+
\'<input type="hidden" name="MyRtype" value="527"/>\'+
\'<input type="hidden" name="gtype" value="'.$gType.'"/>\'+
\'<input type="hidden" name="gold_gmax" value="5000"/>\'+
\'<input type="hidden" name="gold_gmin" value="1"/>\'+
\'<input type="hidden" name="SC" value="50000"/>\'+
\'<input type="hidden" name="SO" value="5000"/>\'+
\'<input type="hidden" name="Maxcredit" value="1"/>\'+
\'<input type="hidden" id="D3type" name="D3type" value="A"/>\'+
\'<div class="InfoBar">\'+
    \'<div class="Range" style="display:none">\'+
        \'<span class="On"><input type="radio" name="jjomj" value="0" checked="checked"/> 000~199</span>\'+
        \'<span><input type="radio" name="jjomj" value="2"/>200~399</span>\'+
        \'<span><input type="radio" name="jjomj" value="4"/>400~599</span>\'+
        \'<span><input type="radio" name="jjomj" value="6"/>600~799</span>\'+
        \'<span><input type="radio" name="jjomj" value="8"/>800~999</span>\'+
        \'</div>\'+
    \'<input type="hidden" name="Start" value="0"/>\'+
    \'</div>\'+
\'<div class="round-table">\'+
\'<table class="GameTable">\'+
\'<tr class="title_line">\'+
    \'<td>号码</td>\'+
    \'<td>赔率</td>\'+
    
    \'<td>号码</td>\'+
    \'<td>赔率</td>\'+
    
    \'<td>号码</td>\'+
    \'<td>赔率</td>\'+
    
    \'<td>号码</td>\'+
    \'<td>赔率</td>\'+
    
    \'<td>号码</td>\'+
    \'<td>赔率</td>\'+
    
    \'</tr>\'+
\'<tr>\'+
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-00">\'+
            \'00\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h0"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-01">\'+
            \'01\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h1"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-02">\'+
            \'02\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h2"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-03">\'+
            \'03\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h3"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-04">\'+
            \'04\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h4"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'</tr>\'+
\'<tr>\'+\'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-05">\'+
            \'05\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h5"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-06">\'+
            \'06\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h6"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-07">\'+
            \'07\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h7"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-08">\'+
            \'08\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h8"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-09">\'+
            \'09\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h9"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'</tr>\'+
\'<tr>\'+\'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-10">\'+
            \'10\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h10"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-11">\'+
            \'11\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h11"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-12">\'+
            \'12\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h12"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-13">\'+
            \'13\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h13"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-14">\'+
            \'14\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h14"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'</tr>\'+
\'<tr>\'+\'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-15">\'+
            \'15\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h15"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-16">\'+
            \'16\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h16"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-17">\'+
            \'17\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h17"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-18">\'+
            \'18\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h18"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-19">\'+
            \'19\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h18"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'</tr>\'+
\'<tr>\'+\'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-20">\'+
            \'20\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h20"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-21">\'+
            \'21\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h21"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-22">\'+
            \'22\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h22"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-23">\'+
            \'23\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h23"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-24">\'+
            \'24\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h24"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'</tr>\'+
\'<tr>\'+\'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-25">\'+
            \'25\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h25"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-26">\'+
            \'26\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h26"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-27">\'+
            \'27\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h27"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-28">\'+
            \'28\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h28"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-29">\'+
            \'29\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h29"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'</tr>\'+
\'<tr>\'+\'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-30">\'+
            \'30\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h30"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-31">\'+
            \'31\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h31"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-32">\'+
            \'32\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h32"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-33">\'+
            \'33\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h33"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-34">\'+
            \'34\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h34"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'</tr>\'+
\'<tr>\'+\'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-35">\'+
            \'35\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h35"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-36">\'+
            \'36\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h36"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-37">\'+
            \'37\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h37"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-38">\'+
            \'38\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h38"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-39">\'+
            \'39\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h39"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'</tr>\'+
\'<tr>\'+\'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-40">\'+
            \'40\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h40"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-41">\'+
            \'41\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h41"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-42">\'+
            \'42\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h42"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-43">\'+
            \'43\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h43"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-44">\'+
            \'44\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h44"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'</tr>\'+
\'<tr>\'+\'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-45">\'+
            \'45\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h45"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-46">\'+
            \'46\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h46"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-47">\'+
            \'47\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h47"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-48">\'+
            \'48\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h48"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-49">\'+
            \'49\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds1["h49"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'</tr>\'+
\'<tr>\'+\'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-50">\'+
            \'50\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h0"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-51">\'+
            \'51\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h1"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-52">\'+
            \'52\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h2"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-53">\'+
            \'53\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h3"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-54">\'+
            \'54\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h4"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'</tr>\'+
\'<tr>\'+\'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-55">\'+
            \'55\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h5"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-56">\'+
            \'56\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h6"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-57">\'+
            \'57\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h7"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-58">\'+
            \'58\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h8"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-59">\'+
            \'59\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h9"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'</tr>\'+
\'<tr>\'+\'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-60">\'+
            \'60\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h10"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-61">\'+
            \'61\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h11"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-62">\'+
            \'62\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h12"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-63">\'+
            \'63\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h13"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-64">\'+
            \'64\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h14"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'</tr>\'+
\'<tr>\'+\'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-65">\'+
            \'65\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h15"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-66">\'+
            \'66\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h16"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-67">\'+
            \'67\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h17"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-68">\'+
            \'68\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h18"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-69">\'+
            \'69\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h19"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'</tr>\'+
\'<tr>\'+\'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-70">\'+
            \'70\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h20"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-71">\'+
            \'71\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h21"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-72">\'+
            \'72\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h22"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-73">\'+
            \'73\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h23"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-74">\'+
            \'74\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h24"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'</tr>\'+
\'<tr>\'+\'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-75">\'+
            \'75\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h25"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-76">\'+
            \'76\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h26"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-77">\'+
            \'77\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h27"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-78">\'+
            \'78\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h28"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-79">\'+
            \'79\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h29"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'</tr>\'+
\'<tr>\'+\'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-80">\'+
            \'80\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h30"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-81">\'+
            \'81\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h31"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-82">\'+
            \'82\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h32"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-83">\'+
            \'83\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h33"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-84">\'+
            \'84\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h34"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'</tr>\'+
\'<tr>\'+\'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-85">\'+
            \'85\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h35"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-86">\'+
            \'86\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h36"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-87">\'+
            \'87\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h37"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-88">\'+
            \'88\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h38"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-89">\'+
            \'89\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h39"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'</tr>\'+
\'<tr>\'+\'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-90">\'+
            \'90\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h40"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-91">\'+
            \'91\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h41"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-92">\'+
            \'92\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h42"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-93">\'+
            \'93\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h43"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-94">\'+
            \'94\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h44"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'</tr>\'+
\'<tr>\'+\'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-95">\'+
            \'95\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h45"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-96">\'+
            \'96\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h46"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-97">\'+
            \'97\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h47"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-98">\'+
            \'98\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h48"].'"/>\'+
        \'</td>\'+
    
    \'\'+
    \'<td class="num" style="width:30px">\'+
        \'<label for="527-99">\'+
            \'99\'+
            \'</label>\'+
        
        \'</td>\'+
    \'<td class="odds">\'+
        \'<input name="aOdds[]" value="'.$odds2["h49"].'"/>\'+
        \'</td>\'+
    

    \'</tr>\'+
\'</table>\'+
\'</div>\'+
\'<div id="SendB5">\'+
    \'<button id="btn-save-odds" onclick="saveB5OddsByPart()" class="order">保存</button>\'+
    \'</div>\'+
\'</form>\';
document.getElementById("c_rtype").innerHTML = "仟拾定位";
document.getElementById("sRtype").value = "527";
if (document.getElementById("memberTop")) {
var h1 = document.getElementById("memberTop").getElementsByTagName("h1")[0];
h1.innerHTML = "仟拾定位";
}

$("#YearNum").text("'.$qishu.'");
(self.GameB5.install) && self.GameB5.install();
';