var address ="0x14a3CA00f184425b0fc55198063F178AE16ed12b";
var abi = [
	{
		"inputs": [],
		"stateMutability": "nonpayable",
		"type": "constructor"
	},
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": true,
				"internalType": "address",
				"name": "tokenOwner",
				"type": "address"
			},
			{
				"indexed": true,
				"internalType": "address",
				"name": "spender",
				"type": "address"
			},
			{
				"indexed": false,
				"internalType": "uint256",
				"name": "tokens",
				"type": "uint256"
			}
		],
		"name": "Approval",
		"type": "event"
	},
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": true,
				"internalType": "address",
				"name": "from",
				"type": "address"
			},
			{
				"indexed": true,
				"internalType": "address",
				"name": "to",
				"type": "address"
			},
			{
				"indexed": false,
				"internalType": "uint256",
				"name": "tokens",
				"type": "uint256"
			}
		],
		"name": "Transfer",
		"type": "event"
	},
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": false,
				"internalType": "string",
				"name": "accessDeniedText",
				"type": "string"
			}
		],
		"name": "accessDeniedTextEvent",
		"type": "event"
	},
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": false,
				"internalType": "string",
				"name": "exceedLoadText",
				"type": "string"
			}
		],
		"name": "exceedLoadTextEvent",
		"type": "event"
	},
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": false,
				"internalType": "string",
				"name": "insufficientText",
				"type": "string"
			}
		],
		"name": "insufficientTextEvent",
		"type": "event"
	},
	{
		"inputs": [],
		"name": "accessDeniedText",
		"outputs": [
			{
				"internalType": "string",
				"name": "",
				"type": "string"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "owner",
				"type": "address"
			},
			{
				"internalType": "address",
				"name": "delegate",
				"type": "address"
			}
		],
		"name": "allowance",
		"outputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "delegate",
				"type": "address"
			},
			{
				"internalType": "uint256",
				"name": "numTokens",
				"type": "uint256"
			}
		],
		"name": "approve",
		"outputs": [
			{
				"internalType": "bool",
				"name": "",
				"type": "bool"
			}
		],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "availableLoadinKW",
		"outputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "tokenOwner",
				"type": "address"
			}
		],
		"name": "balanceOf",
		"outputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "uint256",
				"name": "noOfWatts",
				"type": "uint256"
			},
			{
				"internalType": "string",
				"name": "dateTime",
				"type": "string"
			},
			{
				"internalType": "string",
				"name": "wattString",
				"type": "string"
			},
			{
				"internalType": "string",
				"name": "buyerAddress",
				"type": "string"
			}
		],
		"name": "buyKWH",
		"outputs": [
			{
				"internalType": "bool",
				"name": "",
				"type": "bool"
			}
		],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "decimals",
		"outputs": [
			{
				"internalType": "uint8",
				"name": "",
				"type": "uint8"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "destroy",
		"outputs": [],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "uint256",
				"name": "currentRate",
				"type": "uint256"
			}
		],
		"name": "energyInit",
		"outputs": [],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "energyOwner",
		"outputs": [
			{
				"internalType": "address payable",
				"name": "",
				"type": "address"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "exceedLoadText",
		"outputs": [
			{
				"internalType": "string",
				"name": "",
				"type": "string"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "getAvailableLoad",
		"outputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "getCurrentRate",
		"outputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "getLogForDB",
		"outputs": [
			{
				"internalType": "string",
				"name": "",
				"type": "string"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "getPurchasedKW",
		"outputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "getPurchasedLog",
		"outputs": [
			{
				"internalType": "string",
				"name": "",
				"type": "string"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "insufficientText",
		"outputs": [
			{
				"internalType": "string",
				"name": "",
				"type": "string"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "invalidLog",
		"outputs": [
			{
				"internalType": "string",
				"name": "",
				"type": "string"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "logForDB",
		"outputs": [
			{
				"internalType": "string",
				"name": "",
				"type": "string"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "name",
		"outputs": [
			{
				"internalType": "string",
				"name": "",
				"type": "string"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "pricePerKW",
		"outputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "purchasedKW",
		"outputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "purchasingLog",
		"outputs": [
			{
				"internalType": "string",
				"name": "",
				"type": "string"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "purchasingLogSubString",
		"outputs": [
			{
				"internalType": "string",
				"name": "",
				"type": "string"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "symbol",
		"outputs": [
			{
				"internalType": "string",
				"name": "",
				"type": "string"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "totalSupply",
		"outputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "receiver",
				"type": "address"
			},
			{
				"internalType": "uint256",
				"name": "numTokens",
				"type": "uint256"
			}
		],
		"name": "transfer",
		"outputs": [
			{
				"internalType": "bool",
				"name": "",
				"type": "bool"
			}
		],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "owner",
				"type": "address"
			},
			{
				"internalType": "address",
				"name": "buyer",
				"type": "address"
			},
			{
				"internalType": "uint256",
				"name": "numTokens",
				"type": "uint256"
			}
		],
		"name": "transferFrom",
		"outputs": [
			{
				"internalType": "bool",
				"name": "",
				"type": "bool"
			}
		],
		"stateMutability": "nonpayable",
		"type": "function"
	}
];
			function getBalance(){
				$.ajax({  
                url:"getBalance.php",  
                method:"POST",  
                data:{address:account},  
                dataType:"text",  
                success:function(data)  
                { 
				balance = data;
                }  
				})
				$('#owing').html(balance);
			}
			function getAccountInfo(x){
			var balance = 0;
			$('#accountAddr').html("WALLET ADDRESS: "+x);
			}
	function updateSQLPurchase(x,y){
		var address1 = x+"\r";
		var paid1 =y;
		var currentdate = new Date(); 
						var datetime1 =  currentdate.getDate() + "/"
								+ (currentdate.getMonth()+1)  + "/" 
								+ currentdate.getFullYear() + " @ "  
								+ currentdate.getHours() + ":"  
								+ currentdate.getMinutes() + ":" 
								+ currentdate.getSeconds();	
		$.ajax({  
        url:"customer1Insert.php",  
        method:"POST",  
        data:{address:address1, usages:0, tempUsages:0, billed:0, paid:paid1,dateTime:datetime1},  
        dataType:"text",  
        success:function(data)  
        {  
        }  
        })
	}
     function myPurchase(x,y,z){
         var contract;
         var noOfKWh = x;
		 var currentdate = new Date(); 
		 var dateTime =  "["+currentdate.getDate() + "/"
								+ (currentdate.getMonth()+1)  + "/" 
								+ currentdate.getFullYear() + " @ "  
								+ currentdate.getHours() + ":"  
								+ currentdate.getMinutes() + ":" 
								+ currentdate.getSeconds()+"]";
		 var wattString = y;
		 var accountAddress = z;
         //alert(document.getElementById("noOfKWh").value);
                  $(document).ready(function(){
                    web3 = new Web3(web3.currentProvider);
         contract = new web3.eth.Contract(abi, address);
         contract.methods.buyKWH(noOfKWh,dateTime,wattString, accountAddress).send({from:account}).then(function(){
		 getWallet(account);
		 updateSQLPurchase(account,wattString);
		 })
                     // contract.methods.getPurchasedKW().call().then(function(purchasedKW){
                       //   $('#purchasedKWH').html("Current overall purchased load: "+purchasedKW+" KWh");
                      //})
                  })
         billingLoad = 0;
         }
         function purchaseLog(){
         var contract;
         var purchaseLogHTMl;
                   $(document).ready(function(){
                       web3 = new Web3(web3.currentProvider);
         
                       contract = new web3.eth.Contract(abi, address);
                       contract.methods.getPurchasedLog().call().then(function(purchaseLog){
					    $('#pLog').html(purchaseLog);
                       })
                   })
		 }
		 function purchaseLogForDB(){
                   var contract;
         var logForDB;
                   $(document).ready(function(){
                       web3 = new Web3(web3.currentProvider);
         
                       contract = new web3.eth.Contract(abi, address);
                       contract.methods.getPurchasedLog().call().then(function(purchaseLog){
					    $('#pLog').html(purchaseLog);
                       })
                   })
		 }
		 function getWallet(x){
			var msgAdd = x;
			var roundoff18 = 0;
			var tokenInst = new web3.eth.Contract(abi,address);


			tokenInst.methods.balanceOf(msgAdd).call().then(function (bal) {
			roundoff18 = parseInt(bal)/1000000000000000000;
			console.log(roundoff18);
			$('#coinBalance').html(roundoff18+"eneC");
			})
		 }