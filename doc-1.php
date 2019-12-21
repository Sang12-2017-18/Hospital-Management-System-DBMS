<html>
    <head>
        <title> Doctor availability </title>
        <link rel="stylesheet" type="text/css" href="FormPages/regStyle.css">
    </head>
    <body>
   <?php include 'regDatabase.php' ?>
    <div class="container">
<form class="signup" action="Doctoravail.php" method="POST">
    <div class="header">
            <h3>Check Doctor Availability</h3>
    </div>
    <div class="sep"></div>
    <div class="inputs">
        <label>Enter Doctor name:</label><br>
    <?php
          $sql=mysqli_query($conn,"SELECT Dname from Doctor;");  
          echo "<select class=\"sel1\" name=\"Doctor\"> Doctor ";
          while ($row = mysqli_fetch_array($sql)) {
          $doctor=$row['Dname'];
          print"<option value=\"$row[0]\"> $doctor </option>";
          }
          echo "</select>"
?>
    <input id="submit1" type="submit" value="submit">
    </div>
</form>
    </div>
    </body>
</html>