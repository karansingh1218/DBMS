<?php

    if(isset($_POST['submit-registration'])) {

        require 'dbh.inc.php';

        $excercisenumber = $_POST['excercisenumber-id'];
        $membernumber = $_POST['membernumber-id'];
        $building = $_POST['building-id'];
        $roomnumber = $_POST['roomnumber-id'];
        $instructorid = $_POST['instructor-id'];
        $classdate = $_POST['classdate-id'];
        $classstarttime = $_POST['classstart-id'];
        $classregistrationdate = $_POST['classregistration-id'];


        echo $excercisenumber;
        echo $membernumber;
        echo $building;
        echo $roomnumber;
        echo $instructorid ;
        echo $classdate ;
        echo $classstarttime;
        echo $classregistrationdate;

        $sql = "INSERT INTO class_registration (Exercise_Number, Member_Number, Building, Room_Number, InstructorID, Class_Date, Class_Start_Time, Class_Reg_Date  )
                    VALUES ('$excercisenumber', '$membernumber', '$building', '$roomnumber', '$instructorid', '$classdate', '$classstarttime', '$classregistrationdate')";

            if ($conn->query($sql) === TRUE) {
                echo "the external employee has been added to the database";
            }
            
            else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
 
    }
?>
        