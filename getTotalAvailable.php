<?php  
 $connect = mysqli_connect("localhost", "root", "", "microgriddb2");  
 $generatedOutput = 0;
 $usagesOutput = 0;
 $balanceOutput = 0;
 $sql = "SELECT * FROM ownerlog";
 
 $result = mysqli_query($connect, $sql);  
 
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = 

mysqli_fetch_array($result))  
      {  
	  $generatedOutput += (int)$row["generated"];
	  $usagesOutput += (int)$row["usages"];
	  $balanceOutput += (int)$row["available"];
          
 }
 } 
 echo $balanceOutput;  
 ?>