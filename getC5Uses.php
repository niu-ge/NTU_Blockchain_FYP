<?php  
 $connect = mysqli_connect("localhost", "root", "", "microgriddb2");  
 $tempUsagesOutput1 = 0;
 $sql =  "SELECT * FROM `customerlog` WHERE `address` = '0x9c8cBB88f1a8552FF683ffdDAF598f6D9D0115Fd'";
 
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