<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$servername = "localhost";
$username = "root";
$password = "!2019sang@#";
$dbname="Hospital-Management-System";

// Create connection
$conn = new mysqli($servername,$username,$password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to database";
$name=$_POST["patientname"];
$ageP=$_POST["age"];
$sex=$_POST["gender"];
$addr=$_POST["address"];
$phone=$_POST["phoneno"];
$weight=$_POST["weight"];
$sql="INSERT INTO Patient(Name,Age,Weight,Gender,Phone_number,Address) values('$name',$ageP,'$weight','$sex','$phone','$addr');";

if(mysqli_query($conn,$sql) == TRUE) {
    echo "New record created successfully";
    header('Location: welcome.html');
}
 else {
    echo "error" . $conn->error;  
}

mysqli_close($conn);



