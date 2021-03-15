<html lang="en">
<head>
  <title>Denergy Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="stylesheet/home.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
  
<div class="container">
  <p>DENERGY, A SMART CONTRACT WEB APPLICATION USED IN P2P ENERGY TRADING</p>
</div>
 <div id="footer">
	  <p> A Final Year Project Created by </p>
	  <p>Author: Koh Jun Yao, Denny <
	  <a href="mailto:jkoh081@e.ntu.edu.sg">jkoh081@e.ntu.edu.sg</a>></p>
	  </div>
</div>
</body>
</html>
