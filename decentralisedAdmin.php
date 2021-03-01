<html>
   <head>
      <link href="stylesheet/admin.css" rel="stylesheet" type="text/css" />
      <script src="https://cdn.jsdelivr.net/gh/ethereum/web3.js@1.0.0-beta.34/dist/web3.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
      <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
	  <script src="decentralisedAdminScript.js"></script>
      <div id="loadDiv">
            <img id="loading-image" src="images/loading.gif" alt="Loading..." />
      </div>
	  <div id="main">
	  <div id="header">
	  <div id="logo"><img src="../images/logo.png"></img></div>
	  </div>
	  <div id="content">
	  <p id="accountAddr"></p>
	  <script>
		var seconds = 0;
		 var account = web3.currentProvider.selectedAddress;
         $('#accountAddr').html("Your current metamask address : " + account +"<br /> Welcome to the admin page of smart contract, what do you wish to do? </br> ( Note: Please make sure you are the smart contract owner to perform actions on this page to avoid unneccessary gas fees.)");
		 checkRates();
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
			<td><p id="contractRate"></p></td>
			<td><button onclick="updateRateByOwner()">Update!</button></td>
			<td>
			<a href="https://ropsten.etherscan.io/address/0xE6064a31D464d3Ac000B9E43B8aF701175358d5A">Link</a>
			</td>
		</tr>
		<br/>
		</table>
		<p> Decentralised Databases Section </p>
		<table id ="smartTable">
		<tr>
			<th>Update Customer Databases</th>
		</tr>
		<tr>
			<td><input type="file" name="inputfile"
            id="inputfile"> 
    <br> 
      
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
    </script></td>
		</tr>
		<br/>
		</table>
		<!--<table id ="smartTable">
		<tr>
			<th>Token Purchases</th>
			<th>RT Ether to SGD Rates</th>
			<th>RT ETH-energyCoin Rate</th>
			<th>Current Smart Contract Rates</th>
			<th>Update rates on smart contracts</th>
			<th>View on CoinGecko</th>
		</tr>
		<tr>
			<td>ETH Purchasing Price</td>
			<td><?php

  $url = 'https://api.coingecko.com/api/v3/coins/markets?vs_currency=sgd&ids=ethereum';
  $data = file_get_contents($url);
  $priceInfo = json_decode($data);
  $priceData = $priceInfo[0]->current_price;
  
  echo $priceInfo[0]->current_price;

?>
			</td>
			<td><?php echo $priceData/100 ?></td>
			<td><p id="contractRate"></p></td>
			<td><button onclick="updateRateByOwner()">Update!</button></td>
			<td>
			<a href="https://www.coingecko.com/en/coins/ethereum/sgd">Link</a>
			</td>
		</tr>
		<br/>
		</table> -->
	  </div>
	  </div>
	  <div id="footer">
	  <p> A Final Year Project Created by </p>
	  <p>Author: Koh Jun Yao, Denny <
	  <a href="mailto:jkoh081@e.ntu.edu.sg">jkoh081@e.ntu.edu.sg</a>></p>
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