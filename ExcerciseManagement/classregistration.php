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
<body>
<div class="header-registration">
    <form action="includes/classregistration.inc.php" method = "post">
        <fieldset>
            <legend>Class Registration</legend>
                Excercise Number: <br>
                <input type="text" name="excercisenumber-id" value="1"><br>
                Member Number: <br>
                <input type="text" name="membernumber-id" value="2"><br>
                Building: <br>
                <input type="text" name="building-id" value="2"><br>
                Room Number: <br>
                <input type="text" name="roomnumber-id" value="90"><br>
                Instructor ID: <br>
                <input type="text" name="instructor-id" value="100"><br>
                Class Date: <br>
                <input type="text" name="classdate-id" value="2019-10-20"><br>
                Class Start Time: <br>
                <input type="text" name="classstart-id" value="10:20:00"><br>
                Class Registration Date: <br>
                <input type="text" name="classregistration-id" value="2019-10-20"><br>
                Guests: <br>
                <input type="text" name="guest-id" value="John"><br>
                <button type="submit" name = "submit-registration">Submit</button>               
        </fieldset>         
    </form>

</div>   
</body>
</html>
