<?php  
 $connect = mysqli_connect("localhost", "root", "", "microgriddb2");  
 $usagesOutput1 = 0;
 $tempUsagesOutput1 = 0;
 $billedOutput1 = 0;
 $outstandingOutput1 = 0;
 $paidOutput1 = 0;

 $sql =  "SELECT * FROM `customerlog` WHERE `address` ='".$_POST["address"]."'";

 
 $result = mysqli_query($connect, $sql);  
 
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = 

mysqli_fetch_array($result))  
      {  
	  $usagesOutput1 += (int)$row["usages"];
	  $tempUsagesOutput1 += (int)$row["tempUsages"];
	  $billedOutput1 += (int)$row["billed"];
	  $paidOutput1 += (int)$row["paid"];
	  $subscriptionType1 = (int)$row["subscriptionType"];
      $outstandingAmount = $billedOutput1 - $paidOutput1;
 }
 } 
 echo $subscriptionType1;
 ?>