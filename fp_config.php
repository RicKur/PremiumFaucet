<?php
error_reporting(0);
$config = array(
	Coin		=>	"DOGE",	//Coin you Want Use Dice, Example BTC, DASH, LTC, DOGE, ETH, DGB, BCH
	
	Cookie		=>	"__cfduid=d2917c701967f1a6c7c7ee41763c1f2e31588062258; _ga=GA1.2.438094256.1588062260; session_token=1321e9077e7dd33dd13efa6e97dc69396acf4711b363944bcb90f221b82398fb; _gid=GA1.2.445500414.1588220048; cookieconsent_status=dismiss; cf_clearance=cd546c1cc845c24c7601ac3ddcb03f3f1060d810-1588345278-0-150; faucetpay=1lnj3q2nvvu8l3mtfs0v1krpk8; remember_me=215731%3A18dfc2b61ec5d70dc71a63abc48375eaca178def9eab2ab4cfcda4a7cd6ab056%3Ad97c6144a44fe032bfcdc101e47f568868f1aab1d3db736275a2235a417a3cfb; sc_is_visitor_unique=rx12149426.1588345339.335AAEE6BA114F1E67494F760D40F1E3.10.9.7.5.5.5.3.2.2",	//Your Cookie For Login Script
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
	
	
	