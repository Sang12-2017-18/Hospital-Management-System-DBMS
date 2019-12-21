<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'regDatabase.php';
$labName= $_POST['Labs'];
echo $labName;
$name2=$_POST['Patient'];
$date2=$_POST['TestDate'];
$query2="SELECT Lab_no from Labs where Lab_Name='$labName';";
$lres=mysqli_query($conn,$query2);
if(!$lres) {
    echo "Error Cannot find lab";
    die($conn->error);
}
$lrow=mysqli_fetch_array($lres);
$query3="SELECT P_ID from Patient where Name='$name2';";
$pres1=mysqli_query($conn,$query3);
if(!$pres1) {
    echo "Error cannot find patient";
    die($conn->error);
}
$prow1=mysqli_fetch_array($pres1);
$i1=$lrow['Lab_no'];
echo $i1;
$i2=$prow1['P_ID'];
echo $i2;
$query4="INSERT INTO Lab_Tests_Conducted values($i1,$i2,'$date2');";
if(mysqli_query($conn,$query4) == TRUE) {
    echo "New record created successfully";
    header('Location: welcome.html');
}
 else {
    echo "error" . $conn->error;  
}

