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
    <form action="includes/addsection.inc.php" method = "post">
        <fieldset>
            <legend>Personal Information</legend>
                Building: <br>
                <input type="text" name="building-id" value="d"><br>
                Room Number: <br>
                <input type="text" name="roomnumber-id" value="2"><br>
                Excercise Number: <br>
                <input type="text" name="excercise-id" value="2"><br>
                Instructor ID: <br>
                <input type="text" name="instructor-id" value="90"><br>
                Duration: <br>
                <input type="text" name="duration-id" value="100"><br>
                Class Date: <br>
                <input type="text" name="classdate-id" value="2019-10-20"><br>
                Start Time: <br>
                <input type="text" name="starttime-id" value="10:20:00"><br>
                <button type="submit" name = "submit-section">Submit</button>               
        </fieldset>         
    </form>

</div>   
</body>
</html>
