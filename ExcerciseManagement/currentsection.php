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
<h1> Current Section Details </h1>
<body>
    <form action="includes/currentsection.inc.php" method="post">
        <!-- Retrieve Employee Details: <button type="submit" name="retrieve-employee" value="Submit">Submit</button> -->
        Current Sections<input type="submit" name="current-section" value="Submit">
    </form>

</body>
</html>