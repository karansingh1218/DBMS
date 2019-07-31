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
                <input type="text" name="instructor-id" value="John"><br>
                Instructor Name: <br>
                <input type="text" name="instructor-name" value="Doe"><br>
                Instructor Type: <br>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
                <input type="radio" name="choose" value='yes'>External
                <input type="radio" name="choose" value='no'>Internal<br><br>
                <input type="text" id="external-hours" name = "hours-per-week" placeholder = "Enter Number Of Hours"><br><br>
                <input type="text" id="external-wages" name = "hourly-rate" placeholder = "Enter Hourly Rate"><br>
                <input type="text" id="internal-wages" name = "salary" placeholder = "Enter Salary"><br><br>
                <script>
                $('input[name="choose"]').click(function(e) {

                    if (e.target.value === 'yes') {
                        $('#external-hours').show();
                        $('#external-wages').show();
                    } else if (e.target.value === 'no'){
                        $('#internal-wages').show();
                    } else {
                        $('#external-hours').hide();
                        $('#external-wages').hide();
                        $('#internal-wages').hide();
                    }
                })
                    $('#external-hours').hide();
                    $('#external-wages').hide();
                    $('#internal-wages').hide();
                </script>
                <button type="submit" name = "submit-userprofile"> Submit</button>               
        </fieldset>         
    </form>

</div>   
</body>
</html>
