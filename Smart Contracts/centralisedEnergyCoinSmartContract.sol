pragma solidity ^0.6.0;
interface IERC20 {
    function totalSupply() external view returns (uint256);
    function balanceOf(address account) external view returns (uint256);
    function allowance(address owner, address spender) external view returns (uint256);
    function transfer(address recipient, uint256 amount) external returns (bool);
    function approve(address spender, uint256 amount) external returns (bool);
    function transferFrom(address sender, address recipient, uint256 amount) external returns (bool);
    event Transfer(address indexed from, address indexed to, uint256 value);
    event Approval(address indexed owner, address indexed spender, uint256 value);
}
contract energyCoin is IERC20 {
    address payable public energyOwner = msg.sender;
    string public accessDeniedText = "Field are not updated, following function only available to contract owner";
    string public exceedLoadText = "Insufficient Load is available for your purchases";
    string public insufficientText = "Insufficient Tokens is available for your purchases";
    uint public purchasedKW;
    uint public pricePerKW = 0;
    uint public availableLoadinKW;
    string public purchasingLog="";
    string public purchasingLogSubString="";
    string public logForDB="";
    string public invalidLog="";
    string public constant name = "energyCoin";
    string public constant symbol = "eneC";
    uint8 public constant decimals = 18;
    event Approval(address indexed tokenOwner, address indexed spender, uint tokens);
    event accessDeniedTextEvent(string accessDeniedText);
    event exceedLoadTextEvent(string exceedLoadText);
    event insufficientTextEvent(string insufficientText);
    event Transfer(address indexed from, address indexed to, uint tokens);
    mapping(address => uint256) balances;
    mapping(address => mapping (address => uint256)) allowed;
    uint256 totalSupply_ = 1000000000000000000000;
    using SafeMath for uint256;
   constructor() public {
    balances[msg.sender] = totalSupply_;
    }
    function energyInit(uint256 currentRate) public{ // Constructor
        if (msg.sender != energyOwner) { emit accessDeniedTextEvent(accessDeniedText); return; }
        pricePerKW = currentRate;
    }
    function totalSupply() public override view returns (uint256) {
    return totalSupply_;
    }
    function balanceOf(address tokenOwner) public override view returns (uint256) {
        return balances[tokenOwner];
    }
    function transfer(address receiver, uint256 numTokens) public override returns (bool) {
        require(numTokens <= balances[msg.sender]);
        balances[msg.sender] = balances[msg.sender].sub(numTokens);
        balances[receiver] = balances[receiver].add(numTokens);
        emit Transfer(msg.sender, receiver, numTokens);
        return true;
    }
    function approve(address delegate, uint256 numTokens) public override returns (bool) {
        allowed[msg.sender][delegate] = numTokens;
        emit Approval(msg.sender, delegate, numTokens);
        return true;
    }
    function allowance(address owner, address delegate) public override view returns (uint) {
        return allowed[owner][delegate];
    }
    function transferFrom(address owner, address buyer, uint256 numTokens) public override returns (bool) {
        require(numTokens <= balances[owner]);
        require(numTokens <= allowed[owner][msg.sender]);
        balances[owner] = balances[owner].sub(numTokens);
        allowed[owner][msg.sender] = allowed[owner][msg.sender].sub(numTokens);
        balances[buyer] = balances[buyer].add(numTokens);
        emit Transfer(owner, buyer, numTokens);
        return true;
    }
     function buyKWH(uint256 noOfWatts, string memory dateTime, string memory wattString, string memory buyerAddress) public returns (bool) {{
        address contractAddr = address(this);
        uint256 numTokens = (noOfWatts * pricePerKW) * 1000000000;
        require (balances[msg.sender] >= numTokens);
        purchasedKW = purchasedKW + noOfWatts;
        purchasingLogSubString =string(abi.encodePacked(dateTime,buyerAddress," has accounted for ",wattString));
        purchasingLog = string(abi.encodePacked(purchasingLog,purchasingLogSubString,"W by using the smart contract. <br/>"));
        logForDB = string(abi.encodePacked(logForDB,buyerAddress,"-",wattString,","));
        balances[msg.sender] = balances[msg.sender].sub(numTokens);
        balances[contractAddr] = balances[contractAddr].add(numTokens);
        emit Transfer(msg.sender, contractAddr, numTokens);

        return true;
    }
     }
     function destroy() public { // so funds not locked in contract forever
      address payable receiver = energyOwner;
      if(msg.sender == receiver){
      selfdestruct(receiver); // send funds to energyOwner
      }
     }

    function getAvailableLoad() public view returns (uint)
    {
        return availableLoadinKW;
    }
    function getCurrentRate() public view returns (uint)
    {
        return pricePerKW;
    }
    function getPurchasedKW() public view returns (uint)
    {
        return purchasedKW;
    }
    function getPurchasedLog() public view returns (string memory)
    {
        return purchasingLog;
    }
    function getLogForDB() public view returns (string memory)
    {
        return logForDB;
    }
}
library SafeMath {
    function sub(uint256 a, uint256 b) internal pure returns (uint256) {
      assert(b <= a);
      return a - b;
    }
    function add(uint256 a, uint256 b) internal pure returns (uint256) {
      uint256 c = a + b;
      assert(c >= a);
      return c;
    }
}
