<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Denergy Centralised DB Smart Contract</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src="decentralisedTestScript.js"></script>
		<script src="https://cdn.jsdelivr.net/gh/ethereum/web3.js@1.0.0-beta.34/dist/web3.js"></script>
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.html">Denergy Microgrid</a></h1>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<div class="inner">
							<h2>Menu</h2>
							<ul class="links">
								<li><a href="index.html">Home</a></li>
								<li><a href="dAdminPage.php">Decentralised DB Admin</a></li>
								<li><a href="cAdminpage.php">Centralised DB Admin</a></li>
								<li><a href="cContractPage.php">Centralised DB Contract</a></li>
								<li><a href="dContractPage.php">Decentralised DB Contract</a></li>
							</ul>
							<a href="#" class="close">Close</a>
						</div>
					</nav>

				<!-- Wrapper -->
					<section id="wrapper">
						<header>
							<div class="inner">
								<h2>Decentralised Database Smart Contract</h2>
								<p>Smart contract interactive web page for Denergy customers.</p>
							</div>
						</header>

						<!-- Content -->
							<div class="wrapper">
								<div class="inner">

									<section>
									<h3 class="major">Decentralised Database Smart Contracts Information</h3>
									<p id="accountAddr"></p>
									<p id="rates"></p>
									<p id="coinBalance"></p>
									<p id="subscription"></p>
									<p id="owing"></p>
									
									<p> EMA Tariffs rated as per on <?php $data_scrapped = file_get_contents('https://www.ema.gov.sg/Residential_Electricity_Tariffs.aspx');
									  $the_start = explode('<div class="tarrif-date">',$data_scrapped);
									  $the_end = explode('<div class="tarrif-rates">',$the_start[1]);
									  $text = str_replace(array("</div>", "</span>","<br />"), '', $the_end[0]);
									  echo $text;
									   ?> :<?php 
									  $data_scrapped = file_get_contents('https://www.ema.gov.sg/Residential_Electricity_Tariffs.aspx');
									  $the_start = explode('<div class="tarrif-rates">',$data_scrapped);
									  $the_end = explode('<div class="tarrif-link">',$the_start[1]);
									  $text = str_replace(array("<span>", "</span>","<br />","</p>","</div>"), '', $the_end[0]);
									  echo $text;
									  $string = $text;
									  $int = intval(preg_replace('/[^0-9]+/', '', $string), 10);
									  echo "<script>var rate = $int;</script>";
									  ?></p>
									  <p>* PLEASE ENSURE SMART CONTRACT TARIFFS IS IN SYNC WITH EMA RATES, IF NOT PLEASE INFORM CONTRACT ADMININSTRATOR</p> 
									</section>
									<section>
										<h3 class="major">All Transactions Records of Smart Contract</h3>
										<h4 id="pLog"></h4>
										<p id="updateTime"></p>
									</section>

									<section>
										<h3 class="major">Payment Section</h3>
										<button data-type="square" onclick="myPurchase(balance,String(balance),account, subscription, String(subscription))">Proceed to settle bills with smart contract</button>

									</section>

					</section>
					<script>
						/*var account;
						var accountAddr;
						getBalance();
						purchaseLog();
						const web3 = new Web3(window.web3.currentProvider);
						web3.eth.getAccounts(function(error, accounts) {
						account =accounts[0];
						 $('#accountAddr').html("Walllet Address detected  as " + account);
						 getWallet(account);
						});
						var seconds = 0;
						function incrementSeconds() {
						seconds += 1;
						if(seconds % 60 == 0){
						getWallet(account);
						purchaseLog();
						}
						if(seconds % 300 == 0){
						getBalance();
						}
							
						}
						var cancel = setInterval(incrementSeconds, 1000);
						*/
						function incrementSeconds() {
						seconds += 1;
						if(seconds % 60 == 0){
						getWallet(account);
						purchaseLog();
						}
						if(seconds % 300 == 0){
						getBalance();
						}
						}
						var accounts;
						var account;
						var seconds = 0;
									window.addEventListener('load', async () => {
										// Modern dapp browsers...
										if (window.ethereum) {
											window.web3 = new Web3(ethereum);
											try {
												await ethereum.enable();
												accounts= await web3.eth.getAccounts();
												var option={from: accounts[0] };
												account = accounts[0];
												document.getElementById("accountAddr").innerHTML = account;
												getBalance();
												getWallet(account);
												purchaseLog();
												var cancel = setInterval(incrementSeconds, 1000);
											} catch (error) {
												// User denied account access...
											}
										}
										// Legacy dapp browsers...
										else if (window.web3) {
											window.web3 = new Web3(web3.currentProvider);
											// Acccounts always exposed
											web3.eth.sendTransaction({/* ... */});
										}
										// Non-dapp browsers...
										else {
											console.log('Non-Ethereum browser detected. You should consider trying MetaMask!');
										}
									});
               </script>
				<!-- Footer -->
					<section id="footer">
						<div class="inner">
							<h2> Smart Contract Used in P2P Transaction FYP by Denny Koh
						</div>
					</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>