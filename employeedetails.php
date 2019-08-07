<?php
    require "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<h1> Employee Details </h1>
<body>
    <form action="includes/employeedetails.inc.php" method="post">
        <!-- Retrieve Employee Details: <button type="submit" name="retrieve-employee" value="Submit">Submit</button> -->
        internal employees<input type="submit" name="internal-employee" value="Submit">
        <br><br>
        external employees<input type="submit" name = "external-employee" value="Submit">
    </form>

</body>
</html>
