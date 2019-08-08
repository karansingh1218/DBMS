<?php

    if(isset($_POST['submit-section'])) {

        require 'dbh.inc.php';

        $building = $_POST['building-id'];
        $roomnumber = $_POST['roomnumber-id'];
        $excercisenumber = $_POST['excercise-id'];
        $instructorid = $_POST['instructor-id'];
        $duration = $_POST['duration-id'];
        $classdate = $_POST['classdate-id'];
        $starttime = $_POST['starttime-id'];

        echo $building;
        echo $roomnumber;
        echo $excercisenumber;
        echo $instructorid;
        echo $duration;
        echo $classdate;
        echo $starttime;

        $sql = "INSERT INTO section (Building, Room_Number, Exercise_Number, InstructorID, Duration, Class_Date, Class_Start_Time )
                    VALUES ('$building', '$roomnumber', '$excercisenumber', '$instructorid', '$duration', '$classdate', '$starttime')";

            if ($conn->query($sql) === TRUE) {
                echo "the external employee has been added to the database";
            }
            
            else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }









        // if ($instructortype === 'yes') {

        //     // ADD SQL STATEMENT FOR WHATEVER DATA THAT SAID IT IS YES
        //     $untaxedsalary       = salarycalculator($hourlyrate, $hoursperweek);
            
        //     $externaltaxedsalary = tax_calc_external($untaxedsalary);

        //     echo "untaxed salary  ". $untaxedsalary . "<b>";
        //     echo "taxed salary ". $externaltaxedsalary ."<b>";

        //     $sql = "INSERT INTO Nonsalary (instructorID, instructor_name, hoursperweek, hourlyrate, salary, taxedsalary)
        //             VALUES ('$instructorid', '$instructorname', '$hoursperweek', '$hourlyrate', '$untaxedsalary', '$externaltaxedsalary')";

        //     if ($conn->query($sql) === TRUE) {
        //         echo "the external employee has been added to the database";
        //     }
            
        //     else {
        //         echo "Error: " . $sql . "<br>" . $conn->error;
        //     }
        // }
        // else {

        //     //ADD SQL STATEMENT FOR WHATEVER DATA THAT IS SAID FOR NO
        //     $untaxedsalary = $salary;

        //     $internaltaxedsalary = tax_calc_internal($salary);

        //     $sql = "INSERT INTO Salary (instructorID, instructor_name, salary, taxedsalary)
        //             VALUES ( '$instructorid', '$instructorname', '$untaxedsalary', '$internaltaxedsalary')";
            
        //     if ($conn->query($sql) === TRUE) {
        //         echo " The internal employee has been added to the database";
        //     }

        //     else {
        //         echo "Error: " . $sql . "<br>" . $conn->error;
        //     }
        // }
    }
?>
