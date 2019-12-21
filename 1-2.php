<html>
    <head><title>Schedule Lab Test</title>
        <link rel="stylesheet" type="text/css" href="FormPages/regStyle.css">
    </head>
    <body>
        <?php include 'regDatabase.php' ?>
    <div class="container">
<form class="signup" action="labTest.php" method="POST">
    <div class="header">
            <h3>Schedule Lab Test</h3>
    </div>
    <div class="sep"></div>
    <div class="inputs">
    <label>Lab Name:</label> 
    <?php
          $sql3=mysqli_query($conn,"SELECT Lab_Name from Labs;");  
          echo "<select class=\"sel1\" name=\"Labs\"> Labs ";
          while ($row3 = mysqli_fetch_array($sql3)) {
          $lname=$row3['Lab_Name'];
          echo "<option value=\"$row3[0]\"> $lname </option>";
          }
          echo "</select>"
?>
<br>
<label>
Patient Name:
</label>
<?php
          $sql4=mysqli_query($conn,"SELECT Name from Patient;");  
          echo "<select class=\"sel1\" name=\"Patient\"> Patient ";
          while ($row = mysqli_fetch_array($sql4)) {
          $pid=$row['Name'];
          echo "<option value=$pid> $pid </option>";
          }
          echo "</select>"
?>
<br>
<label>
Date:
</label>
<input type="date"
name="TestDate">
<br>
<input id="submit1" type="submit" value="submit">
</form>
    </div>
    </body>
</html>