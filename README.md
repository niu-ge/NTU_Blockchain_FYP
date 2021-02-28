# NTU_FYP_ENERGY_ETH_SMARTCONTRACT
**PROJECT OVERVIEW**
This project deploy Ethereum Smart Contract along with Web3.js to provide a web interactive smart contract deployment to provide energy trading transaction platform for microgrid user.

Ethereum smart contracts provides ERC-20 Token called the "energyCoin" in this particular project, which can be used as a token to transact outstanding payment by microgrid user.
Transaction logs will be stored within the smart contract and later to be retrieved to web interactive platform.

Rates in smart contract can be updated in the admin page to renew the most recent rates defined by "EMA Singapore" using web scraping methods using PHP.

In this project, there will be two different nature of smart contract to simulate a energy trading platform using Ethereum Smart Contract.

**1. Ethereum Smart Contracts w/ Centralised Database:**
The centralized database used in this project is PHPMyAdmin. Database will be tabulated with incoming generated/usages/billed/paid values in order to provides values neccessary to interact with smart contract such as outstanding values.

***Simulation explained:***
(Owner) Microgrid's values inserted to database were values obtained by OPAL-RT model which simulate a transmission and data were collected and later were used in the project for a realistic scenario.
(Customer) Customer's usages value were tabulated randomly.

The simulated data used in this simulated could also be replaced by an actual real time smart meter API for data transmission if possible. 

***Functions implemented in centralised database:***
- Able to simulate real-time second by second basis energy transmission within the microgrid owner and its respectively customer.
- Able to calculate and fairly distribute energy generated to each consumer according to their past 15mins usage pattern.

***Advantages:***
- No extra gases fees(transaction cost) is needed to pay in Ether Smart Contract to maintain this type centralised database.
- Application will be flexible/accessible when dealing data within centralised database.

***Disadvantages:***
- Centralised database means that this application is not fully decentralised hence centralised database possess the risk of being maliciously edit by others.


**2. Ethereum Smart Contracts w/ Decentralised Database**
The decentralised database of this smart contract will be stored inside the smart contract itself, by a block of string which can later retrieve for billing purposes.

***Simulation explained:***
A calculated monthly datasheet will be upload monthly to inform the outstanding balances of each customer.
Only customer usages value is needed to stored in the decentralised smart contract to reduce unneccessary costs.

***Functions implemented in decentralised database:***
- String block will be used as database in the smart contract, addition function established within smart contract to achieve the desired outcome of maintain a decentralised database.

***Advantages:***
- Extremely secure and decentralised application, no maliciously editting is allowed in this type of fully decentralised application.

***Disadvantages:***
- Calculations and computation of data values must be done outside the smart contract to save costs hence causing the application to be inflexible.
- High frequency of updating database values is impossible as it might results to unexpectedly high transaction fees while maintain this type of database.


