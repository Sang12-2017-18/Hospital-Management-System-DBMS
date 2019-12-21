<html>
    <head> <title> Doctor availability </title>
        <link rel="stylesheet" type="text/css" href="FormPages/OutStyle.css">
    </head>
    <body topmargin="100px">
    <center>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'regDatabase.php';
$dname1= htmlspecialchars($_POST["Doctor"]);
$query1="SELECT From_Time,To_Time from Doctor where Dname='$dname1';";
$dres=mysqli_query($conn,$query1);
if(!$dres) {
    echo "Error";
    die($conn->error);
}
$drow=mysqli_fetch_array($dres);
echo "<table> <tr>";
echo "<td class=\"c3\"> From-Time: </td> <td class=\"c4\">" . $drow['From_Time'] . '</td>';
echo "</tr> <tr>";
echo "<td class=\"c3\"> To-Time: </td> <td class=\"c4\">" . $drow['To_Time'] . '</td>';
echo "</tr> </table>"
?>
        <br>
        <a href="./welcome.html"> Go back </a>
    </center>
    </body>
</html>

