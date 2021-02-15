# NTU_Blockchain_FYP

This project deploy Ethereum Smart Contract along with Web3.js to provide a web interactive smart contract deployment to provide energy trading transaction platform for microgrid user.

Ethereum smart contracts provides ERC-20 Token called the "energyCoin" in this particle project, which can be used as a token to transact outstanding payment by microgrid user.
Transaction logs were also updated inside the smart contract in "String" which can be extracted to view logs directly interacting with smart contract without the needs to access the "Etherscan".

Rates in smart contract can be updated in the admin.php to renew the most recent rates defined by "EMA Singapore" using PHP web scrapping code.

Smart Contracts w/ Centralised Database:
The centralized database used in this project is PHPMyAdmin. Database will be tabulated with incoming generated/usages/billed/paid values in order to provides values neccessary to interact with smart contract such as outstanding values.

Fully Decentralised Smart Contract:
The decentralised simple database existed in the smart contracts can be used to extract daily/monthly data values, this approach of slightly costly in order to achieve the goal of being fully decentralized.

