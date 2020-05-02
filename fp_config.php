<?php
error_reporting(0);
$config = array(
	Coin		=>	"DOGE",	//Coin you Want Use Dice, Example BTC, DASH, LTC, DOGE, ETH, DGB, BCH
	
	Cookie		=>	"Cookie: "__cfduid=d2917c701967f1a6c7c7ee41763c1f2e31588062258; _ga=GA1.2.438094256.1588062260; _gid=GA1.2.445500414.1588220048; cookieconsent_status=dismiss; cf_clearance=489becfae46473720946d194f02accbab86f10ba-1588347812-0-150; faucetpay=12oq4ksjcqmc9e3mfgaqmgt2da; source=40184; remember_me=215731%3A8949f2167e7e909d25890f0e5e4f1282b9d43f081927bc8df11325b9a95e54de%3Ac019ea14179e5da20a0d89112b8559d99cb93f7729815c26907674580f3267fb; session_token=d109f2aa7e3480f5d3790f4fc7992d3397934fdab3ab92d08fd1c8aba5b7d0e4; sc_is_visitor_unique=rx12149426.1588423103.335AAEE6BA114F1E67494F760D40F1E3.14.13.9.7.6.6.4.3.3",	//Your Cookie For Login Script
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
	Stop_Profit =>	"100", //Stop If Profit to Target, Example 100.00
	
	//Reset Next if Win 
	Roll_win	=>	"4"	//If Win Bet Change for How Much Roll, Example 1, 2, 3, 4, 5, etc.
	);
$json = json_encode($config);
	
	
	