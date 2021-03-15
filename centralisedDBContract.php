<html lang="en">
<head>
  <title>Denergy Centralised DB Smart Contract</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="stylesheet/main3.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/gh/ethereum/web3.js@1.0.0-beta.34/dist/web3.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>	
  <script src="testScript.js"></script>

</head>
<body>
<div id="wrapper">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="t" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><img src="../images/logo.png"></img></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Admin<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="decentralisedAdmin.php">Decentralised DB Smart Contract Administration</a></li>
            <li><a href="centralisedAdmin.php">Centralised DB Smart Contract Administration</a></li>
          </ul>
        </li>
		<li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Contracts<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="decentralisedContract.php">Decentralised DB Contract</a></li>
            <li><a href="centralisedDBContract.php">Centralised DB Contract</a></li>
          </ul>
        </li>
        <li><a href="centralisedSimulation.php">Transmission Simulation</a></li>
      </ul>
    </div>
  </div>
</nav>
<div id="loadDiv">
            <img id="loading-image" src="images/loading.gif" alt="Loading..." />
</div>
<div id="main">
            <div id="chartDiv">
               <h2>WELCOME TO DENERGY,</h2>
               <h3>A DECENTRALIZED ENERGY TRADING MARKET BASED ON ETHEREUM SMART CONTRACT</h3>
               <p> [CENTRALISED DATABASE VERSION]</p>
               <div class="infoDiv">
                  <p>ACCOUNT INFORMATION:</p>
               </div>
               <p id="accountAddr"></p>
               <script>
                  var account = web3.currentProvider.selectedAddress;
                  getAccountInfo(account);
                  getBalance();
               </script>
               <div class="infoDiv">
                  <p>ERC-20 TOKENS - [energyCoin] INFORMATION:</p>
               </div>
               <div id ="coinDiv">
                  <table>
                     <tr>
                        <th>
                           <p id="coinBalance"></p>
                        </th>
                        <th><img src="../images/eCoin.png"></img></th>
                     </tr>
                  </table>
               </div>
               <div id ="coinDesc">
                  <p id="crytoRates">Token Details: 1 energyCoin(eC) is equivalent to SGD$100</p>
               </div>
               <div class="infoDiv">
                  <p>CHARGING RATES INFORMATION: </p>
               </div>
               <p id="rate">Rates dated on <?php $data_scrapped = file_get_contents('https://www.ema.gov.sg/Residential_Electricity_Tariffs.aspx');
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
               <div class="infoDiv">
                  <p>BILLING INFORMATION: </p>
               </div>
               <p>Based on current records, you currently has an outstanding balances of</p>
               <p id ="owing"></p>
               <p>in Watts</p>
               <div id="buttonWrap">
                  <button data-type="square" onclick="myPurchase(balance,String(balance),account)">Proceed to settle bills with smart contract</button>
                  <span class="preloader"></span>
               </div>
               <br/>
               <div id="tLog">
                  <div class="infoDiv">
                     <p>SMART CONTRACT TRANSACTION LOG: </p>
                  </div>
                  <div id="pBlock">
                     <p id="pLog"></p>
                  </div>
               </div>
               <script>
                  var seconds = 0;
                  function incrementSeconds() {
                  	seconds += 1;
                  purchaseLog();
                  if(seconds == 3){
                  getWallet(account);
                  }
                  getBalance();
                  getETHUSD();
                  }
                  var cancel = setInterval(incrementSeconds, 1000);
               </script>
            </div>
			</div>
            <div id="footer">
               <p> A Final Year Project Created by </p>
               <p>Author: Koh Jun Yao, Denny
                  <a href="mailto:jkoh081@e.ntu.edu.sg">jkoh081@e.ntu.edu.sg</a>>
               </p>
            </div>
         </div>
	  <script>
		if(account != null){
            $(document).ready(function() {
            $('#loadDiv').hide();
            });
            document.getElementById("main").style.display = 'block';
		 }else{
			 alert("Loading failed!, failure to detect metamask account logged on, please make sure metamask is logged on in this site");
		 }
         </script>
</body>
</html>
