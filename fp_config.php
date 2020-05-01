<?php
error_reporting(0);
$config = array(
	Coin		=>	"DOGE",	//Coin you Want Use Dice, Example BTC, DASH, LTC, DOGE, ETH, DGB, BCH
	
	Cookie		=>	"__cfduid=d2917c701967f1a6c7c7ee41763c1f2e31588062258; _ga=GA1.2.438094256.1588062260; session_token=542605d2667a3eacce2cfec9289a78a551927185d6c19a2ba3a7506f8ef09ec8; _gid=GA1.2.445500414.1588220048; faucetpay=990c59dmrpei6305gf2k7830pc; remember_me=215731%3A4b7a1e104cf76a294e830aa0048be8d24ef5d240b2d9f473c7671fe63f841e22%3Adf39294d507f184577214d259e63f663fac64957780bdba71d492ac3afa4bfc8; cookieconsent_status=dismiss; sc_is_visitor_unique=rx12149426.1588307055.335AAEE6BA114F1E67494F760D40F1E3.5.4.4.4.4.4.2.1.1",	//Your Cookie For Login Script
	Name		=>	"FaucetPay Dice, by: RBS Terra",
	Base_Bet	=>	"0.001",	//Base Bet For Frist Roll, Example 0.00000001
	
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
	Stop_Profit =>	"25", //Stop If Profit to Target, Example 100.00
	
	//Reset Next if Win 
	Roll_win	=>	"4"	//If Win Bet Change for How Much Roll, Example 1, 2, 3, 4, 5, etc.
	);
$json = json_encode($config);
	
	
	