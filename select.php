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
	  $generatedOutput += (float)$row["generated"];
	  $usagesOutput += (float)$row["usages"];
	  $balanceOutput += (float)$row["available"];
          
 }
 } 
 echo "Generated(W): ","<font color='green'>".$generatedOutput."</font>","W <br/> Own Usages(W): ","<font color='red'>".$usagesOutput,"</font>","W <br /> Available for sales(W): ","<font color='green'>".$balanceOutput."</font>","W ";  
 ?>