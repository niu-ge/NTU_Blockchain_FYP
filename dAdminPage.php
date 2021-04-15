<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Denergy - Decentralised DB Admin</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src="decentralisedAdminScript.js"></script>
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
								<h2>Denergy Microgrid Decentralised Database Admininstrator Page</h2>
								<p>Please only invoke smart contract function in this page if only you are the smart contract of Denergy Microgrid</p>
							</div>
						</header>

						<!-- Content -->
							<div class="wrapper">
								<div class="inner">

									<h3 class="major">Detected Metamask Address</h3>
									<p id="accountAddr">Morbi mattis mi consectetur tortor elementum, varius pellentesque velit convallis. Aenean tincidunt lectus auctor mauris maximus, ac scelerisque ipsum tempor. Duis vulputate ex et ex tincidunt, quis lacinia velit aliquet. Duis non efficitur nisi, id malesuada justo. Maecenas sagittis felis ac sagittis semper. Curabitur purus leo donec vel dolor at arcu tincidunt bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce ut aliquet justo. Donec id neque ipsum. Integer eget ultricies odio. Nam vel ex a orci fringilla tincidunt. Aliquam eleifend ligula non velit accumsan cursus. Etiam ut gravida sapien.</p>
									<script>
									var accounts;
									window.addEventListener('load', async () => {
										// Modern dapp browsers...
										if (window.ethereum) {
											window.web3 = new Web3(ethereum);
											try {
												await ethereum.enable();
												accounts= await web3.eth.getAccounts();
												var option={from: accounts[0] };
												accounts = accounts[0];
												document.getElementById("accountAddr").innerHTML = accounts;
												checkRates();
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
									/*var account;
									var accountAddr;
									const web3 = new Web3(window.web3.currentProvider);
									web3.eth.getAccounts(function(error, accounts) {
									document.getElementById("accountAddr").innerHTML = accounts;
									});
									checkRates(); */
									</script>
									<h3 class="major">Current Smart Contract Base Tariffs</h3>
									<p id ="contractRate"></p>
									<h3 class="major">Current Tariffs Stated By Energy Market Authority</h3>
									<p>Rates dated on <?php $data_scrapped = file_get_contents('https://www.ema.gov.sg/Residential_Electricity_Tariffs.aspx');
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
									<section class="features">
										<article>
											<a href="#" class="image"><img src="images/sync.png" alt="" /></a>
											<h3 class="major">Sync Smart Contracts Tariffs with Energy Market Authority</h3>
											<p>CLICK TO UPDATE YOUR SMART CONTRACT TARIFFS TO SYNC WITH EMA TARIFFS</p>
											<button style="margin: 5%; padding : 0% 5% 0 5%;" onclick="updateRates()">Update!</button>
										</article>
										<article>
											<a href="#" class="image"><img src="images/upload.jpg" alt="" /></a>
											<h3 class="major">Upload Monthly Consumer Data</h3>
											<p>CLICK TO UPLOAD MONTHLY CONSUMER LOAD CONSUMPTION</p>
											<input type="file" name="inputfile" id="inputfile"></input>
											<script type="text/javascript"> 
        document.getElementById('inputfile') 
            .addEventListener('change', function() { 
              
            var fr=new FileReader(); 
            fr.onload=function(){ 
               var data=fr.result;
			   updateCustomerDB(data);
            } 
              
            fr.readAsText(this.files[0]); 
        }) 
    </script>
										</article>
									</section>

								</div>
								
							</div>

					</section>

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