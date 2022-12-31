<?php

$conn=mysqli_connect("localhost","root","","employeesinfo");

$id=$_POST["id"];
$fullname=$_POST["fullname"];
$EmployeeNo=$_POST["EmployeeNo"];
$gender=$_POST["gender"];
$county=$_POST["county"];




$sql="INSERT INTO `employeesinfo` (`id`, `fullname`, `EmployeeNo`, `gender`, `county`) VALUES (NULL, ' $id', '$fullname', '$EmployeeNo', '$gender', '$county'')";

$query=mysqli_query($conn,$sql);

if($query){
    ?>
   <script>
   window.alert("Data ia saved sucessfully");
   window.location.href="../index.html";
   window.history.go(-1);
   </script>
   
   
   
   <?php
}else{
    ?>
    <script>
        window.alert("Failed! Could not insert");
        window.location.href="../index.html";
        window.history.go(-1);
    </script>
    
    
    <?php
}