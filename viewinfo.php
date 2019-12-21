<html>
    <head> <title> Table </title> 
        <link rel="stylesheet" type="text/css" href="FormPages/OutStyle.css">
    </head>
    <body>
    <center>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'regDatabase.php';
$name1=$_POST["Patient"];
$query="SELECT * From Patient where Name='$name1';";

if(mysqli_query($conn, $query) == TRUE)
{ 
    $pres=mysqli_query($conn,$query);
    $prow=mysqli_fetch_array($pres);
    echo '<br>';
    echo '<table>';
    echo '<tr>';
    echo "<td class=\"c1\"> Patient id: </td> <td class=\"c2\">". $prow['P_ID'] . '</td>' ;
    echo '</tr>';
    echo "<tr>";
    echo "<td class=\"c1\"> Age: </td> <td class=\"c2\">". $prow['Age'] . '</td>' ;
    echo "</tr>";
    echo "<tr>";
    echo "<td class=\"c1\"> Weight: </td> <td class=\"c2\">". $prow['Weight'] . '</td>' ;
    echo "</tr> <tr>";
    echo "<td class=\"c1\"> Gender: </td> <td class=\"c2\">". $prow['Gender'] . '</td>' ;
    echo "</tr> <tr>";
    echo "<td class=\"c1\"> Address: </td> <td class=\"c2\">". $prow['Address'] . '</td>';
    echo "</tr> <tr>";
    echo "<td class=\"c1\"> Phone number: </td> <td class=\"c2\">". $prow['Phone_number'] . '</td>' ;
    echo "</tr>";
    echo "</table>";
}

else {
    echo "Error:" . $conn->error ;
}

?>
        <br>
        <a href="./welcome.html"> Go back </a>
    </center>
    </body>
</html>

