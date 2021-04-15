var address ="0x95940e25ef5E143aB26e15999c843896Cf5B48C2";
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
		"name": "destroy",
		"outputs": [],
		"stateMutability": "nonpayable",
		"type": "function"
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
			},
			{
				"internalType": "uint256",
				"name": "planNo",
				"type": "uint256"
			},
			{
				"internalType": "string",
				"name": "planString",
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
	},
	{
		"inputs": [
			{
				"internalType": "string",
				"name": "dataBlock",
				"type": "string"
			}
		],
		"name": "updateMonthlyConsumerDB",
		"outputs": [],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "string",
				"name": "dataBlock",
				"type": "string"
			}
		],
		"name": "updateMonthlyOwnerDB",
		"outputs": [],
		"stateMutability": "nonpayable",
		"type": "function"
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
		"inputs": [],
		"name": "customerDataString",
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
		"name": "getCustomerDB",
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
		"name": "getOwnerDB",
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
		"name": "getTokenRate",
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
		"name": "negaWattString",
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
		"name": "ownerDataString",
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
		"name": "pricePlan",
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
		"name": "subscriptionAdd",
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
		"name": "tempString",
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
		"name": "tokenPrice",
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
	}
];

function getBalance(x){
				$.ajax({  
                url:"getBalance.php",  
                method:"POST",  
                data:{address:x},  
                dataType:"text",  
                success:function(data)  
                { 
				balance = data;
				$('#owing').html("Outstanding balances: "+ balance/1000 + " kWh ");
                }  
				})
}
function getSubscriptionType(){
				$.ajax({  
                url:"getSubscription.php",  
                method:"POST",  
                data:{address:account},  
                dataType:"text",  
                success:function(data)  
                { 
				var subscriptionText;
				subscriptionValue = data*1000;
				//console.log(subscription);
				if(subscriptionValue == 0){
					subscriptionText = "PAYU Plan"
				}else{
					subscriptionText = subscriptionValue + " kWh Denergy Plan."
				}
				$('#subscription').html("Subscription Plan: "+ subscriptionText + "");
                }  
				})
}
function updateSQLPurchase(x,y,z){
		var address1 = x;
		var paid1 =y;
		var subscription1 = z;
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
        data:{address:address1, usages:0, tempUsages:0, billed:0, paid:paid1,dateTime:datetime1,subscriptionType:subscription1},  
        dataType:"text",  
        success:function(data)  
        {  
        }  
        })
}
function myPurchase(x, y, z, a, b) {
    var contract;
    var noOfKWh = x;
	var subscription1 = a;
	var subText = b;
    var currentdate = new Date();
    var dateTime = "[" + currentdate.getDate() + "/" +
        (currentdate.getMonth() + 1) + "/" +
        currentdate.getFullYear() + " @ " +
        currentdate.getHours() + ":" +
        currentdate.getMinutes() + ":" +
        currentdate.getSeconds() + "]";
    var wattString = y;
    var accountAddress = z;
	const web3 = new Web3(window.web3.currentProvider);
		web3.eth.getAccounts(function(error, accounts) {
		account = accounts[0];
		contract = new web3.eth.Contract(abi, address);
		contract.methods.buyKWH(noOfKWh, dateTime, wattString, accountAddress, subscription1, subText).send({
            from: account
        }).then(function() {
			updateSQLPurchase(accountAddress,wattString,subText);
            getWallet(account);
			getBalance();
            //alert("Payment Success!, Redirect to homepage.");
            //window.location.href = "index.html";
        })
		    billingLoad = 0;
	});
}

function purchaseLog() {
var account;
var accountAddr;
var contract;
var currentdate = new Date();
var dateTime = "[" + currentdate.getDate() + "/" +
											(currentdate.getMonth() + 1) + "/" +
											currentdate.getFullYear() + " @ " +
											currentdate.getHours() + ":" +
											currentdate.getMinutes() + ":" +
											currentdate.getSeconds() + "]";
const web3 = new Web3(window.web3.currentProvider);
web3.eth.getAccounts(function(error, accounts) {
account = accounts[0];
contract = new web3.eth.Contract(abi, address);
contract.methods.getPurchasedLog().call().then(function(purchaseLog) {
            $('#pLog').html(purchaseLog);
			$('#updateTime').html("Last updated: " + dateTime.toString());
        })
});
}
function purchaseLogForDB() {
    var contract;
    var logForDB;
    $(document).ready(function() {
        web3 = new Web3(web3.currentProvider);
        contract = new web3.eth.Contract(abi, address);
        contract.methods.getPurchasedLog().call().then(function(purchaseLog) {
            $('#pLog').html(purchaseLog);
        })
    })
}
function getWallet(x){
	var balance =0;
	var subscriptionValue = 0;
			var msgAdd = x;
			var roundoff18 = 0;
			var tokenInst = new web3.eth.Contract(abi,address);


			tokenInst.methods.balanceOf(msgAdd).call().then(function (bal) {
			roundoff18 = parseInt(bal)/1000000000000000000;
			console.log(roundoff18);
			$('#coinBalance').html("Token Balances: "+roundoff18+" eneC");
			})
}