<html>
<head>
    <title>Book Appointment</title>
    <link rel="stylesheet" type="text/css" href="FormPages/regStyle.css">
</head>
<body>
    <div class="container">
<?php include 'regDatabase.php' ?>
<form class="signup" action="regApt.php" method="POST">
    <div class="header">
            <h3>Book Appointment</h3>
    </div>
    <div class="sep"></div>
    <div class="inputs">
    <label> Patient Name: </label>
        <?php
          $sql2=mysqli_query($conn,"SELECT Name from Patient;");  
          echo "<select class=\"sel1\" name=\"Patient\"> Patient ";
          while ($row = mysqli_fetch_array($sql2)) {
          $pid=$row['Name'];
          echo "<option value=$pid> $pid </option>";
          }
          echo "</select>"
        ?>
<br>
<label>
Doctor name:
</label>
<?php
          $sql=mysqli_query($conn,"SELECT Dname from Doctor;");  
          echo "<select class=\"sel1\" name=\"Doctor\"> Doctor ";
          while ($row = mysqli_fetch_array($sql)) {
          $doctor=$row['Dname'];
          print"<option value=\"$row[0]\"> $doctor </option>";
          }
          echo "</select>"
?>
<br>
<label>
    Date: 
</label>
<input type="date"
name="Date"><br>
<label>
Time:
</label>
<input type="text"
name="TimeApp"><br>
    <input id="submit1" type="submit" value="submit">
    </div>
</form>
    </div>
</body>
</html>