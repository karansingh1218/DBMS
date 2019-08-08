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
    <form action="includes/addemployee.inc.php" method = "post">
        <fieldset>
            <legend>Personal Information</legend>
                Instructor ID: <br>
                <input type="text" name="instructor-id" ><br>
                Instructor Name: <br>
                <input type="text" name="instructor-name" value="Doe"><br>
                Instructor Type: <br>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
                <input type="radio" name="choose" value='yes'>External
                <input type="radio" name="choose" value='no'>Internal<br><br>
                <!-- external employee -->
                <input type="text" id="external_wages" name = "external-wages-hour" placeholder = "Hourly Rate"><br><br>
                <!-- Internal Employee -->
                <input type="text" id="internal-salary" name = "salary" placeholder = "Enter Salary"><br><br>
                <script>
                $('input[name="choose"]').click(function(e) {

                    if (e.target.value === 'yes') {
                        $('#external_wages').show();
                    } else if (e.target.value === 'no'){
                        $('#internal-salary').show();
                    } else {
                        $('#internal-salary').hide();
                        $('#external_wages').hide();
                    }
                })
                    $('#external_wages').hide();
                    $('#internal-salary').hide();
                </script>
                <button type="submit" name = "submit-userprofile"> Submit</button>               
        </fieldset>         
    </form>

</div>   
</body>
</html>
