<?php
error_reporting(0);
$config = array(
	Coin		=>	"DOGE",	//Coin you Want Use Dice, Example BTC, DASH, LTC, DOGE, ETH, DGB, BCH
	
	Cookie		=>	"Cookie: "__cfduid=d2917c701967f1a6c7c7ee41763c1f2e31588062258; _ga=GA1.2.438094256.1588062260; session_token=1321e9077e7dd33dd13efa6e97dc69396acf4711b363944bcb90f221b82398fb; _gid=GA1.2.445500414.1588220048; cookieconsent_status=dismiss; cf_clearance=489becfae46473720946d194f02accbab86f10ba-1588347812-0-150; remember_me=215731%3Ad3db0a34daab56d57d7dd6ad790aef8cc9806835a4e4de6430cffc29bf4859e0%3A3b6a530f24c088de991f93c304808f0b3daf2ae17d5c7e255b957bbd6bb1d790; faucetpay=7d7d29bf3p0clphu65nm0o57vo; _gat_gtag_UA_154633790_1=1; sc_is_visitor_unique=rx12149426.1588349571.335AAEE6BA114F1E67494F760D40F1E3.10.9.7.5.5.5.3.2.2",	//Your Cookie For Login Script
	Name		=>	"FaucetPay Dice, by: RBS Terra",
	Base_Bet	=>	"0.01",	//Base Bet For Frist Roll, Example 0.00000001
	
	//Your Win Chance Want use ,Example Min 1 and Max 94
	Min_winChance	=>	"20", //Win Chance Minimum 1
	Max_winChance	=>	"60", //Win Chance Maximum 94
	
	//Change Bet if Lose or If Win, Using Percent
	if_lose		=>	"110", //Change Bet If Lose, Example 100 for 2x Bet if Lose
	if_win		=>	"25", //Change Bet if Win, Example 20 for 0.2x Bet if Win
	
	//Choise 1 for HI ,2 for Low, 3 for Random
	Bet_on		=>	"3", //Only Write 1, 2, or 3
	
	//Refresh to Base Bet if Profit
	Refresh		=>	"0.001", //Refresh if Profit, Example 0.001
	Stop_Profit =>	"1", //Stop If Profit to Target, Example 100.00
	
	//Reset Next if Win 
	Roll_win	=>	"4"	//If Win Bet Change for How Much Roll, Example 1, 2, 3, 4, 5, etc.
	);
$json = json_encode($config);
	
	
	