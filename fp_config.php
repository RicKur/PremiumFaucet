<?php
error_reporting(0);
$config = array(
	Coin		=>	"DOGE",	//Coin you Want Use Dice, Example BTC, DASH, LTC, DOGE, ETH, DGB, BCH
	
	Cookie		=>	"Cookie: "__cfduid=d64c919923ed7c3dde6ab39712b0d42a11586978055;_ga=GA1.2.373608274.1586978056;cookieconsent_status=dismiss;source=40184;cf_clearance=6ec62262bf193f87117bd2e7801a454139e2c0da-1588338308-0-150;_gid=GA1.2.1842275688.1588338311;session_token=de900e1aaa16bdcfda8e63c01e54a7a2a0bac17ef53aa617a62878a8c1306f02;faucetpay=9opvq4o3l2edkmii3o6a5hdtef;remember_me=215731%3Adff32fccd67aeff1c286292123f5d134e4d0e2e75c884ac483e401b43c710468%3Aff0732d502484e668d3fe75a2974f5160059f6ba41baaa318f94e92a55253f49;_gat_gtag_UA_154633790_1=1;sc_is_visitor_unique=rx12149426.1588422411.6668C6ACAD6D4FB3202B31652F3BB932.16.10.10.8.6.4.3.3.2",	//Your Cookie For Login Script
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
	
	
	