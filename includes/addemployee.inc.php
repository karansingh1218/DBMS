<?php

    if(isset($_POST['submit-userprofile'])) {
        require 'dbh.inc.php';

        $instructorid = $_POST['instructor-id'];
        $instructorname = $_POST['instructor-name'];
        $hoursperweek = $_POST['hours-per-week'];
        $hourlyrate = $_POST['hourly-rate'];
        $salary = $_POST['salary'];
        $instructortype = $_POST['choose'];

        if ($instructortype === 'yes') {

            // ADD SQL STATEMENT FOR WHATEVER DATA THAT SAID IT IS YES

            echo 'Yes';
        }
        else {

            //ADD SQL STATEMENT FOR WHATEVER DATA THAT IS SAID FOR NO
            echo 'No';
        }

        $sql = "INSERT INTO Employees (firstname, lastname, 
                                      excercisetype, hourlyrate, hoursperweek ) 
                VALUES ('$firstname', '$lastname', '$excercisetype', '$hourlyrate', '$hoursperweek')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created succesfully";
        }
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
?>
