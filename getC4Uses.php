<?php  
 $connect = mysqli_connect("localhost", "root", "", "microgriddb");  
 $tempUsagesOutput1 = 0;
 $sql =  "SELECT * FROM `microgriddb`.`customerlog` WHERE `address` = '0x3075BC64d402b33d9dBb06af020d948C492b0359\r'";
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