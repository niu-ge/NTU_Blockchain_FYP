<?php  
 $connect = mysqli_connect("localhost", "root", "", "microgriddb");  
 $tempUsagesOutput1 =0;
 $sql =  "SELECT * FROM `microgriddb`.`customerlog` WHERE `address` = '0x4446321EF654F9fe36a92D7ffa49584A8FD70f0a\r'";

 
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