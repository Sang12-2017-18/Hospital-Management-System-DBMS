<html>
    <head>
        <title>View Patient History</title>
        <link rel="stylesheet" type="text/css" href="FormPages/regStyle.css">
    </head>
    <body>
        <?php include 'regDatabase.php' ?>
        <div class="container">
<form class="signup" action="viewinfo.php" method="POST">
    <div class="header">
            <h3>View Patient Information</h3>
    </div>
    <div class="sep"></div>
    <div class="inputs">
        <label>Patient name:</label>
        <br>
	<?php
          $sql=mysqli_query($conn,"SELECT Name from Patient;");  
          echo "<select class=\"sel1\" name=\"Patient\"> Patient ";
          while ($row = mysqli_fetch_array($sql)) {
          $pid=$row['Name'];
          echo "<option value=$pid> $pid </option>";
          }
          echo "</select>"
        ?>
    <input id="submit1" type="submit" value="submit">
    </div>
</form>
        </div>
    </body>
</html>