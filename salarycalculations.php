<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<h1> Add Employee Information </h1>
<div class="salary-calculation">
    <form action="includes/addemployee.inc.php" method = "post">
        <fieldset>
            <legend>Personal Information</legend>
                First Name: <br>
                <input type="text" name="firstname" value="John"><br>
                Last name: <br>
                <input type="text" name="lastname" value="Doe"><br>
                Exercise Type: <br>
                <input type="text" name="exercise-type"><br>
                Hourly Rate: <br>
                <input type="text" name="hourly-rate"><br>
                Hours Per Week: <br>
                <input type="text" name="hours-per-week"><br><br>
                <input type="submit" name="submit-userprofile" value="Submit">
        </fieldset>         
    </form>
</div>   
</body>
</html>
