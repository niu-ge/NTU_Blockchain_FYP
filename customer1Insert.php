<?php  
 $connect = mysqli_connect("localhost", "root", "", "microgriddb");  
 $sql = "INSERT INTO customerlog(address, usages, tempUsages, billed, paid,dateTime) VALUES('".$_POST["address"]."', '".$_POST["usages"]."','".$_POST["tempUsages"]."', '".$_POST["billed"]."', '".$_POST["paid"]."', '".$_POST["dateTime"]."')";    
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Inserted';  
 }  
 ?>