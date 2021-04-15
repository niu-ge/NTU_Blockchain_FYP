var address = "0x2c6047F2F3c1Ea16334A97879e413434a9191f8f";
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
var balance = 0;
var subscription = 0;

function getBalance() {
    var stringData = "";
    var usagesValue = 0;
	var subscriptionValue = 0;
    var stringArray = [];
    var usagesArrayValue = 3;
	var subscriptionArrayValue = 4;
    var addressArrayValue = 2;
    var totalMonthUsages = 0;
    var i;
    var contract;
    const web3 = new Web3(window.web3.currentProvider);
	web3.eth.getAccounts(function(error, accounts) {
		account = accounts[0].toLowerCase();
		console.log(account);
		contract = new web3.eth.Contract(abi, address);
		contract.methods.getCustomerDB().call().then(function(customerDataString) {
            stringData = customerDataString;
            console.log(stringData);
            stringArray = stringData.replace(/\n/g, ",").split(",");
            for (i = 0; i <= stringArray.length - 4; i = i + 4) {
                var capAddress = stringArray[addressArrayValue + i];
				var caplessAddress = capAddress.toLowerCase();
                if (caplessAddress == account.toLowerCase()) {
					subscriptionValue = parseInt(stringArray[subscriptionArrayValue+i]);
                    usageValue = parseInt(stringArray[usagesArrayValue + i]);
                    //console.log(usageValue);
                    //console.log(stringArray[usagesArrayValue+i]);
                    if (Number.isNaN(usageValue) == false) {
                        balance += usageValue;
                    }
                }
            }
			$('#owing').html("Outstanding Balances: "+ (balance/1000).toString()+" kWh ");
			subscription = subscriptionValue;
			if(subscriptionValue.toString() == "0"){
				subscriptionValue = " Your current subscription plan is under 'PAYU' Scheme ";
			}else{
			subscriptionValue = " Your current subscription plan is  under " + (subscriptionValue/1000).toString() + "kWh Denergy Plan";
			}
			$('#subscription').html(subscriptionValue);
            return balance;
	});
})
}

function getAccountInfo(x) {
    $('#accountAddr').html("WALLET ADDRESS: " + x);
}

function myPurchase(x, y, z, a, b) {
    var contract;
    var noOfKWh = x;
	var subscription = a;
	var subText = b;
	console.log("c watt: " + noOfKWh.toString());
	console.log("s watt: " + subscription.toString());
	console.log("s t watt: " + subText.toString());
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
		contract.methods.buyKWH(noOfKWh, dateTime, wattString, accountAddress, subscription, subText).send({
            from: account
        }).then(function() {
            getWallet(account);
            alert("Payment Success!, Redirect to homepage.");
            window.location.href = "index.html";
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

function getWallet(x) {
    var msgAdd = x;
    var roundoff18 = 0;
    var tokenInst = new web3.eth.Contract(abi, address);
    tokenInst.methods.balanceOf(msgAdd).call().then(function(bal) {
        roundoff18 = parseInt(bal) / 1000000000000000000;
        console.log(roundoff18);
        $('#coinBalance').html("You are currently holding " + roundoff18 + "eneC");
    })
}