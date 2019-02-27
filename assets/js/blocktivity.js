function read_wp($x) {														// read web page (address)

$fil = fopen ($x, 'r') ;
	if  ($fil == false) 
		{ 
		echo 'Error reading the page<br>'; 
		}    
	else   
		{
		global $rec;
		$rec = ''; while (!feof ($fil)) 
			{ 
			$rec.= fgets ($fil, 1024); 
			}
		}	
$rec = preg_replace('/\s+/', '', $rec);									// removing spaces 
}

// **********************************************   <BLOCKTIVITY>   ************************************************************

function gauge($x){
global $gauge_return;
if ($x == "x"){$gauge_return = '<td class="line_cell"><img class="inline icon2"  src="design/gauge/gauge_no_data.png"><div class="tooltip"><span class="exposant">&#9432;</span><span class="tooltiptext">(no data)</span></div></td>';}	
else{
if ($x < 1){$gauge_return = '<td class="line_cell"><img class="inline icon2"  src="design/gauge/gauge01.png"><div class="tooltip"><span class="exposant">&#9432;</span><span class="tooltiptext">'.$x.'<span class="exposant">%</span></span></div></td>';}	
if ($x >= 1 AND $x < 10){$gauge_return = '<td class="line_cell"><img class="inline icon2"  src="design/gauge/gauge02.png"><div class="tooltip"><span class="exposant">&#9432;</span><span class="tooltiptext">'.$x.'<span class="exposant">%</span></span></div></td>';}	
if ($x >= 10 AND $x < 25){$gauge_return = '<td class="line_cell"><img class="inline icon2"  src="design/gauge/gauge03.png"><div class="tooltip"><span class="exposant">&#9432;</span><span class="tooltiptext">'.$x.'<span class="exposant">%</span></span></div></td>';}	
if ($x >= 25 AND $x < 33){$gauge_return = '<td class="line_cell"><img class="inline icon2"  src="design/gauge/gauge04.png"><div class="tooltip"><span class="exposant">&#9432;</span><span class="tooltiptext">'.$x.'<span class="exposant">%</span></span></div></td>';}	
if ($x >= 33 AND $x < 41){$gauge_return = '<td class="line_cell"><img class="inline icon2"  src="design/gauge/gauge05.png"><div class="tooltip"><span class="exposant">&#9432;</span><span class="tooltiptext">'.$x.'<span class="exposant">%</span></span></div></td>';}	
if ($x >= 41 AND $x < 50){$gauge_return = '<td class="line_cell"><img class="inline icon2"  src="design/gauge/gauge06.png"><div class="tooltip"><span class="exposant">&#9432;</span><span class="tooltiptext">'.$x.'<span class="exposant">%</span></span></div></td>';}	
if ($x >= 50 AND $x < 58){$gauge_return = '<td class="line_cell"><img class="inline icon2"  src="design/gauge/gauge07.png"><div class="tooltip"><span class="exposant">&#9432;</span><span class="tooltiptext">'.$x.'<span class="exposant">%</span></span></div></td>';}	
if ($x >= 58 AND $x < 66){$gauge_return = '<td class="line_cell"><img class="inline icon2"  src="design/gauge/gauge08.png"><div class="tooltip"><span class="exposant">&#9432;</span><span class="tooltiptext">'.$x.'<span class="exposant">%</span></span></div></td>';}	
if ($x >= 66 AND $x < 75){$gauge_return = '<td class="line_cell"><img class="inline icon2"  src="design/gauge/gauge09.png"><div class="tooltip"><span class="exposant">&#9432;</span><span class="tooltiptext">'.$x.'<span class="exposant">%</span></span></div></td>';}	
if ($x >= 75 AND $x < 84){$gauge_return = '<td class="line_cell"><img class="inline icon2"  src="design/gauge/gauge10.png"><div class="tooltip"><span class="exposant">&#9432;</span><span class="tooltiptext">'.$x.'<span class="exposant">%</span></span></div></td>';}	
if ($x >= 84 AND $x < 94){$gauge_return = '<td class="line_cell"><img class="inline icon2"  src="design/gauge/gauge11.png"><div class="tooltip"><span class="exposant">&#9432;</span><span class="tooltiptext">'.$x.'<span class="exposant">%</span></span></div></td>';}	
if ($x >= 94 AND $x <= 100){$gauge_return = '<td class="line_cell"><img class="inline icon2"  src="design/gauge/gauge12.png"><div class="tooltip"><span class="exposant">&#9432;</span><span class="tooltiptext">'.$x.'<span class="exposant">%</span></span></div></td>';}	
}
return $gauge_return;
}

//*************************************************************************************************  Extraction data from API
//***************************************************************************************************************************
	
read_wp("http://www.blocktivity.info/blocktivity_own_api.html");

		$starting_string = '{"id":"bitcouille","name":"Bitcouille","symbol":"B==D","rank":"25","price_usd":"1.06223","price_btc":"0.00018161","volume_24h_usd":"1058240.0","market_cap_usd":"259009597.0","available_supply":"243835702.0","total_supply":"260809796.0","percent_change_1h":"-2.37","percent_change_24h":"4.0","percent_change_7d":"-11.97","last_updated":"1508025261"}';
		// We start with a false coin API so the script run ok with the first one (BTC)
		$rec = $starting_string . $rec;
		
		// extraction of the column names (token symbol)
		$needle = '{Symbols:';
		$symbol_string = substr($rec,strpos($rec,$needle)+9, 200);		
		$needle = '}';		
		$symbol_string = substr($symbol_string,0,strpos($symbol_string,$needle));
		$symbol = explode(";", $symbol_string);

		for ($i = 0 ; $i<count($symbol) ; $i++) 
			{	
			$needle = '"'.$symbol[$i].'"';
			$token_string = substr($rec,strpos($rec,$needle)-60, 600);		
			$needle = '"last_updated"';		
			$token_string = substr($token_string,0,strpos($token_string,$needle));							// block de texte du token
			
			$needle = 'id';																					// id CMC
			$name_id[$i] = substr($token_string,strpos($token_string,$needle)+5, 30);
			$needle = 'name';
			$name_id[$i] = substr($name_id[$i],0,strpos($name_id[$i],$needle)-3);
		
			$needle = 'name';																				//  complete name
			$name_c[$i] = substr($token_string,strpos($token_string,$needle)+7, 30);
			$needle = 'symbol';
			$name_c[$i] = substr($name_c[$i],0,strpos($name_c[$i],$needle)-3);
		
			$needle = 'price_usd';																			// Price USD
			$price_usd[$i] = substr($token_string,strpos($token_string,$needle)+12, 40);
			$needle = 'price_btc';			
			$price_usd[$i] = substr($price_usd[$i],0,strpos($price_usd[$i],$needle)-3);
			if ($price_usd[$i] > 99.999){$price_usd[$i] = number_format($price_usd[$i]);}
			elseif ($price_usd[$i] < 1){$price_usd[$i] = number_format($price_usd[$i],4);}	
			else {$price_usd[$i] = number_format($price_usd[$i],2);}

			$needle = 'market_cap_usd';																		// market capitalisation 
			$market_cap_usd[$i] = substr($token_string,strpos($token_string,$needle)+17, 40);
			$needle = 'avai';			
			$market_cap_usd[$i] = substr($market_cap_usd[$i],0,strpos($market_cap_usd[$i],$needle)-3);																					// To be used in the MC projection
			$market_cap_usd_mom[$i] = $market_cap_usd[$i];
			$market_cap_usd[$i] /= 1000000000;
			if ($market_cap_usd[$i] > 10){$market_cap_usd[$i] = number_format($market_cap_usd[$i]);}
			elseif ($market_cap_usd[$i] < 1){$market_cap_usd[$i] = number_format($market_cap_usd[$i],3);}	
			else {$market_cap_usd[$i] = number_format($market_cap_usd[$i],1);}

			}
			
// 1> max Tx/sec proven, 2> xxx, 3 ... will be used as I need more specific data available in the script. 

$coin_data[0] = array("14000", "x1", "x2", "x3", "x4");						// bts > max Tx, 
$coin_data[1] = array("14000", "x1", "x2", "x3", "x4");						// steem
$coin_data[2] = array("6.8", "x1", "x2", "x3", "x4");						// btc 6.8tx/sec
$coin_data[3] = array("20", "x1", "x2", "x3", "x4");						// eth 20tx/sec
$coin_data[4] = array("28", "x1", "x2", "x3", "x4");						// bch
$coin_data[5] = array("28", "x1", "x2", "x3", "x4");						// ltc
$coin_data[6] = array("14", "x1", "x2", "x3", "x4");						// dash
$coin_data[7] = array("100", "x1", "x2", "x3", "x4");						// xmr
$coin_data[8] = array("20", "x1", "x2", "x3", "x4");						// etc
$coin_data[9] = array("7", "x1", "x2", "x3", "x4");							// zec (somewhere between 6.67 and 26.67 transactions per second.)
$coin_data[10] = array("33", "x1", "x2", "x3", "x4");						// doge		
$coin_data[11] = array("14000", "x1", "x2", "x3", "x4");					// ppy
$coin_data[12] = array("14000", "x1", "x2", "x3", "x4");					// golos
$coin_data[13] = array("14000", "x1", "x2", "x3", "x4");				    // eos
//echo $coin_data[13][0].'</br>'; 		
			
//********************************************************************************************************  Average on 7 days 

$needle = '7daysaverage:';
$average_string = substr($rec,strpos($rec,$needle)+13, 200);
$needle = '}';		
$average_string = substr($average_string,0,strpos($average_string,$needle));
$array_tx_average = explode(";", $average_string);	
	
//*****************************************************************************************************  Order by activity 

//*********************** A) Activity 

$needle = 'Activity:';
$string_activity = substr($rec,strpos($rec,$needle)+9, 200);		
$needle = '}';		
$string_activity = substr($string_activity,0,strpos($string_activity,$needle));
$tx = explode(";", $string_activity);

//*********************** B) Order 

$needle = 'Orderedbyactivity:';
$string_activity_order = substr($rec,strpos($rec,$needle)+18, 200);		
$needle = '}';		
$string_activity_order = substr($string_activity_order,0,strpos($string_activity_order,$needle));
$new_order_tx = explode(";", $string_activity_order);

//*****************************************************************************************************  Highest Tx / day 

$needle = 'Maxactivity:';
$string_max_activity = substr($rec,strpos($rec,$needle)+12, 200);		
$needle = '}';		
$string_max_activity = substr($string_max_activity,0,strpos($string_max_activity,$needle));
$highval = explode(";", $string_max_activity);

//*****************************************************************************************************  LAST DATA REFRESH 

$needle = 'Date:';
$time = substr($rec,strpos($rec,$needle)+5, 30);
$needle = '}';	
$time = substr($time,0,strpos($time,$needle));
$time = str_replace("Time:", "", $time);
$time = str_replace("/", " / ", $time);
$time = str_replace("}", "", $time);

//********************************************************************************************************  AVI & CUI indexes 

//****************************************************************** Activity Valuation Index (AVI)
for ($i = 0 ; $i<count($symbol) ; $i++){
$ratio_btc_btc = $tx[2]/$market_cap_usd_mom[2];
$ratio_btc_btc = 1/$ratio_btc_btc;
$index_avi[$i] = $tx[$i]/$market_cap_usd_mom[$i];
$index_avi[$i] *= $ratio_btc_btc;
//echo "$index_avi[$i]</br></br>";
	if ($index_avi[$i] > 1){$index_avi[$i] = number_format($index_avi[$i]);}
	else {$index_avi[$i] = number_format($index_avi[$i],1);}
$count += 1;
}

//****************************************************************** Capacity Utilizatioin Index (CUI)
for ($i = 0 ; $i<count($symbol) ; $i++){
if(is_numeric($coin_data[$i][0])) {
	$tx_max_day[$i] = $coin_data[$i][0]*60*60*24;
	$index_cui[$i] = ($tx[$i]/$tx_max_day[$i])*100;
	$index_cui[$i] = number_format($index_cui[$i],2);}
else{$index_cui[$i] = "x";}
//echo "$index_cui[$i]</br>";
}
//echo "$index_cui[13]</br>";

//********************************************************************************************************  Unconfirmed Tx 

//******************************************************************  BTC

$needle = 'unconf_tx_btc';
$unconfirmed_btc = substr($rec,strpos($rec,$needle)+16, 10);		
$needle = '"}';		
$unconfirmed_btc = substr($unconfirmed_btc,0,strpos($unconfirmed_btc,$needle));	

//echo $unconfirmed_btc.'</br>';

//******************************************************************  ETH

$needle = 'unconf_tx_eth';
$unconfirmed_eth = substr($rec,strpos($rec,$needle)+16, 10);		
$needle = '"}';		
$unconfirmed_eth = substr($unconfirmed_eth,0,strpos($unconfirmed_eth,$needle));	

//echo $unconfirmed_eth.'</br>';

//*********************************************************************************   Writting Main table ordered by activity

$table_text = "";
for ($i = 0 ; $i<count($symbol) ; $i++){

$act = $new_order_tx[$i];
$count = $i+1;

//*******************************************************  Prepa data url

//$prepa_url = '?token_id='.$name_id[$act].'&token_name='.$name_c[$act].'&token_symbol='.$symbol[$act].'&token_activity='.number_format($tx[$act]).'&token_activity_av='.number_format($array_tx_average[$act]);
$prepa_url = '?&token_symbol='.$symbol[$act].'&token_name='.$name_c[$act];
//echo $prepa_url.'</br>';

//*******************************************************  EXCEPTIONS : If unconfirmed transactions or momentarily hiding coin

if($symbol[$act] == "BTC")
{
	if($unconfirmed_btc > 7500){
		$prepa_gauge = '<td class="line_cell"><img class="inline icon2"  src="design/gauge/gauge_ut.png"><div class="tooltip"><span class="exposant">&#9432;</span><span class="tooltiptext"> 100% blockchain capacity + '.number_format($unconfirmed_btc).' Unconfirmed Transactions</span></div></td>';;
		}
	else{$prepa_gauge = gauge($index_cui[$act]);}
}
elseif($symbol[$act] == "ETH")
{
	if($unconfirmed_eth > 7500){
		$prepa_gauge = '<td class="line_cell"><img class="inline icon2"  src="design/gauge/gauge_ut.png"><div class="tooltip"><span class="exposant">&#9432;</span><span class="tooltiptext"> 100% blockchain capacity + '.number_format($unconfirmed_eth).' Unconfirmed Transactions</span></div></td>';;
		}
	else{$prepa_gauge = gauge($index_cui[$act]);}
}
elseif($symbol[$act] == "PPY")		// Not enough Tx for the moment but will be active in blocktivity soon
{
continue;
}
else{$prepa_gauge = gauge($index_cui[$act]);}

//***************************************************   Writting Main table 

$table_text .= '<tr class="font_size_row">';
$table_text .= '<td class="line_cell">'.$count.'</td>';
//*$table_text .= '<td class="line_cell line_1_cell"><img class="icon" id="'.$name_c[$act].'" src="design/icon/'.$symbol[$act].'.png" alt="cc"></td>';**/
$table_text .= '<td class="line_cell line_1_cell"><div class="icon '.$symbol[$act].'" id="'.$name_c[$act].'"></div></td>';
$table_text .= '<td class="line_cell text_align_left bold"><a href="coin_page.php'.$prepa_url.'">'.$symbol[$act].' </a><div class="tooltip"><span class="exposant_symbol">&#9432;</span><span class="tooltiptext">'.$name_c[$act].'</span></div></td>';
$table_text .= '<td class="line_cell bold">'.number_format($tx[$act]).'<span class="exposant w3-text-blue-grey">Op </span></td>';
$table_text .= '<td class="line_cell">'.number_format($array_tx_average[$act]).'<span class="exposant w3-text-blue-grey">Op </span></td>';
$table_text .= '<td class="line_cell">'.number_format($highval[$act]).'<span class="exposant w3-text-blue-grey">Op </span></td>';
$table_text .= '<td class="line_cell bold"><span class="exposant w3-text-blue-grey">$ </span>'.$market_cap_usd[$act].'<span class="w3-text-blue-grey"> B</span></td>';
$table_text .= '<td class="line_cell">'.$index_avi[$act].'</td>';
$table_text .= $prepa_gauge;
}