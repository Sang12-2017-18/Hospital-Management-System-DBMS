<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'regDatabase.php';
$name=$_POST["Patient"];
$dname= htmlspecialchars($_POST["Doctor"]);
$dateapp=$_POST["Date"];
$time1=strtotime($_POST["TimeApp"]);
$timeapp=date('H:i:s',$time1);
$qu1="SELECT P_ID from Patient where Name='$name'";
$res1= mysqli_query($conn,$qu1);
if ($res1->num_rows == 0) {
    die("Cannot book Patient");
}
$qu2="SELECT Dno from Doctor where Dname='$dname'";
$res2= mysqli_query($conn,$qu2);
$row1=mysqli_fetch_array($res1);
if ($res2->num_rows == 0) {
    die("Cannot book Doctor");
}
$row2=mysqli_fetch_array($res2);
$ins1= $row1['P_ID'];
$ins2= $row2['Dno'];
$sql1="INSERT INTO Patient_Appointment(P_ID,Dno,Date,Time) values($ins1,'$ins2','$dateapp','$timeapp');";

if(mysqli_query($conn,$sql1) == TRUE) {
    echo "New record created successfully";
    header('Location: welcome.html');
}
 else {
    echo "error" . $conn->error;  
}