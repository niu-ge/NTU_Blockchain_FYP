<?php  
 $connect = mysqli_connect("localhost", "root", "", "microgriddb2");  
 $tempUsagesOutput1 = 0;
  $sql =  "SELECT * FROM `customerlog` WHERE `address` = '0x1A339DDBCD788Fda03312788d25b514Ad72aE209'";
 
 
 $result = mysqli_query($connect, $sql);  
 
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = 

mysqli_fetch_array($result))  
      {  
	  $tempUsagesOutput1 += (int)$row["tempUsages"];
          
 }
 } 
 echo $tempUsagesOutput1;
 ?>