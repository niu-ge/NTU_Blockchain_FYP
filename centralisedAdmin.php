<html lang="en">
<head>
  <title>Denergy Centralised Database Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="stylesheet/admin.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <script src="https://cdn.jsdelivr.net/gh/ethereum/web3.js@1.0.0-beta.34/dist/web3.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
      <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
	  <script src="centralisedAdminScript.js"></script>  
</head>
<body>
<div id="wrapper">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
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
<div id="content">
<h3>CENTRALISED DATABASE SMART CONTRACT ADMIN PAGE.</h3>
<br/>
<br/>
<br/>
<br/>
<p id="accountAddr"></p>
            <script>
               var account = web3.currentProvider.selectedAddress;
                     $('#accountAddr').html("Your current metamask address : " + account +"<br /> Welcome to the admin page of smart contract, what do you wish to do? <br/><br/><br/><br/> <p style='color:red;font-size:12px;'>( Note: Please make sure you are the smart contract owner to perform actions on this page to avoid unneccessary gas fees.)</p>");
            </script>
            <br/>
            <br/>
            <br/>
            <div id="energyTable">
               <p style="text-align:center"> Current available smart contracts associated with "DEnergy" Web Interface</p>
               <table id ="smartTable">
                  <tr>
                     <th>Energy Company Name</th>
                     <th>Rates and Charges</th>
                     <th>Current Smart Contract Rates</th>
                     <th>Update rates on smart contracts</th>
                     <th>View on Etherscan</th>
                  </tr>
                  <tr>
                     <td>DEnergy Microgrid Smart Contract</td>
                     <td>Rates dated on <?php $data_scrapped = file_get_contents('https://www.ema.gov.sg/Residential_Electricity_Tariffs.aspx');
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
                        ?>
                     </td>
                     <td>
                        <p id="contractRate"></p>
                     </td>
                     <td><button onclick="updateRateByOwner()">Update!</button></td>
                     <td>
                        <a href="https://ropsten.etherscan.io/address/0x14a3CA00f184425b0fc55198063F178AE16ed12b">Link</a>
                     </td>
                  </tr>
                  <br/>
               </table>
</div>
</div>
</div>
	  <div id="footer">
	  <p> A Final Year Project Created by </p>
	  <p>Author: Koh Jun Yao, Denny <
	  <a href="mailto:jkoh081@e.ntu.edu.sg">jkoh081@e.ntu.edu.sg</a>></p>
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
