<?php
error_reporting(0);

function head(){
$head.="     |-+-+-+-+-+-+-+-+-+-+-+|  \r\n";
$head.="     |hiroyuki48  hiroyuki48|  \r\n";
$head.="     |hiroy|   |uk|   |i48hi|  \r\n";
$head.="     |royuk|   |i4|   |8hiro|  \r\n";
$head.="     |yuki4|   |__|   |8hiro|  \r\n";
$head.="     |yuki4|          |8hiro|  Tool  :\r\n"; 
$head.="     |yuki4|    __    |8hiro|  BOT Auto Bet BitSler\r\n";
$head.="     |yuki4|   |8h|   |iroyu|  \r\n";
$head.="     |ki48h|   |ir|   |oyuki|  \r\n";
$head.="     |48hir|   |oy|   |uki48|  \r\n";
$head.="     |hiroyuki48  hiroyuki48|  Develop : HIROYUKI48\r\n";
$head.="     |-+-+-+-+-+-+-+-+-+-+-+|  \r\n";
echo $head;
}
head();
echo "Masukan Bet in Satoshi:";
$bet = trim(fgets(STDIN));
if(!$bet){
	echo "Masukan BET";
}
if(isset($bet)){
while(true) {
require_once("bit.config.php");
$bet1 = $bet;
$c = curl_init();
curl_setopt($c, CURLOPT_URL, "$api?bet=$bet1&user=$user&token=$token&choose=$pilihan");
curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
curl_setopt($c, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($c, CURLOPT_FOLLOWLOCATION,true);
$result = curl_exec($c);
curl_close($c);
#print_r($result);
$json = json_decode($result);
$win = json_decode($result)->return->amount_return;
$win = $win * 100000000;
$time = $json->time;
$result_coin = $json->result_coins;
$choose = $json->choose_coins;
$amount = $json->bet;
$newbanlace = $json->balance;
$stat = $json->status;
$error = $json->error;
#echo $result;
if($error == 2){
echo "\33[1;31m($time) $stat! RESULT $result_coin | CHOOSE $choose | BET: $amount | BALANCE: $newbanlace\e[95m\n";
sleep(0);
}elseif($error == 1){
echo "\33[1;33m$stat! \e[95m\n";
exit();
}else {
echo "\33[1;32m($time) $stat! RESULT $result_coin | CHOOSE $choose | BET: $amount | BALANCE: $newbanlace\e[95m\n";
}
}
}
?>
  
