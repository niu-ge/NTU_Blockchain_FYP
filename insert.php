<?php  
 $connect = mysqli_connect("localhost", "root", "", "microgriddb2");  
 $sql = "INSERT INTO ownerlog(generated, usages, available, dateTime) VALUES('".$_POST["generated"]."', '".$_POST["demand"]."', '".$_POST["balance"]."', '".$_POST["datetime"]."')";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Inserted';  
 }  
 ?>