<?php

    function tax_calc_internal($salary) {

        $federaltaxpercentage= 10;
        $statetaxpercentage = 5;
        $othertaxpercentage = 3;
        $totaltaxpercentage = $federaltaxpercentage + $statetaxpercentage + $othertaxpercentage;

        $totaltax = $totaltaxpercentage / 100;

        $taxedsalary = $salary * $totaltax;
        $netsalary = $salary - $taxedsalary;

        return $netsalary;
    }

    function salarycalculator($hourlyrate, $hoursperweek) {

        $weekly = $hourlyrate * $hoursperweek;
        $monthly = $weekly * 4;
        $yearly = $monthly * 12;

        return $yearly;
    }

    function tax_calc_external($yearly) {

        $federaltaxpercentage = 10;
        $statetaxpercentage   = 5;
        $othertaxpercentage   = 3;
        $totaltaxpercentage   = $federaltaxpercentage + $statetaxpercentage + $othertaxpercentage;
        $totaltax             = $totaltaxpercentage / 100;
        $taxedsalary          = $yearly * $totaltax;
        $netsalary            = $yearly - $taxedsalary;
        
        return $netsalary;
    }

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
            $untaxedsalary       = salarycalculator($hourlyrate, $hoursperweek);
            
            $externaltaxedsalary = tax_calc_external($untaxedsalary);

            echo "untaxed salary  ". $untaxedsalary . "<b>";
            echo "taxed salary ". $externaltaxedsalary ."<b>";

            $sql = "INSERT INTO Nonsalary (instructorID, instructor_name, hoursperweek, hourlyrate, salary, taxedsalary)
                    VALUES ('$instructorid', '$instructorname', '$hoursperweek', '$hourlyrate', '$untaxedsalary', '$externaltaxedsalary')";

            if ($conn->query($sql) === TRUE) {
                echo "the external employee has been added to the database";
            }
            
            else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        else {

            //ADD SQL STATEMENT FOR WHATEVER DATA THAT IS SAID FOR NO
            $untaxedsalary = $salary;

            $internaltaxedsalary = tax_calc_internal($salary);

            $sql = "INSERT INTO Salary (instructorID, instructor_name, salary, taxedsalary)
                    VALUES ( '$instructorid', '$instructorname', '$untaxedsalary', '$internaltaxedsalary')";
            
            if ($conn->query($sql) === TRUE) {
                echo " The internal employee has been added to the database";
            }

            else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
?>
