<?php  
 $connect = mysqli_connect("localhost", "root", "", "microgriddb");  
 $usagesOutput1 = 0;
 $billedOutput1 = 0;
 $tempUsagesOutput1 = 0;
 $outstandingOutput1 = 0;
 $paidOutput1 = 0;
 $sql =  "SELECT * FROM `microgriddb`.`customerlog` WHERE `address` = '0x3075BC64d402b33d9dBb06af020d948C492b0359\r'";
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
	  $outstandingOutput1 = $billedOutput1 - $paidOutput1;
          
 }
 } 

 echo "Full Usage(W): ","<font color='green'>".$usagesOutput1."</font>","W <br/> Past 15mins Usages(W):","<font color='green'>".$tempUsagesOutput1."</font>","W <br/> Billed (W): ","<font color='green'>".$billedOutput1."</font>","W <br /> Outstanding(W): ","<font color='red'>".$outstandingOutput1."</font>","W ";  
 ?>