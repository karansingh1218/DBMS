<!DOCTYPE html>
<html>
<head>
    <title> Table with database </title>
</head>
<body>
<!-- <table>
    
    <tr>
        <th>Year_</th>
        <th>Month_</th>
        <th>InstructorID </th>
        <th>Salary</th>
        <th>Fed_Tax</th>
        <th>State_Tax</th>
        <th>Other_Tax</th>
        <th>Net_Pay</th>
    </tr>

    <tr>
        <th>Year_</th>
        <th>Month_</th>
        <th>InstructorID </th>
        <th>Hours</th>
        <th>Wage</th>
        <th>Fed_Tax</th>
        <th>State_Tax</th>
        <th>Other_Tax</th>
        <th>Net_Pay</th>
    </tr> -->
<?php

    if(isset($_POST['internal-employee'])) {

        echo "<table>
    <tr>
        <th>Year_</th>
        <th>Month_</th>
        <th>InstructorID </th>
        <th>Salary</th>
        <th>Fed_Tax</th>
        <th>State_Tax</th>
        <th>Other_Tax</th>
        <th>Net_Pay</th>
    </tr> ";

        require 'dbh.inc.php';

        $sql = "SELECT * FROM employee_pay";
        $result = $conn->query($sql);

        if ($result !== FALSE){
            echo '<h1> Employee Database </h1>';
            while ($row = $result->fetch_assoc()) {
                $field1name = $row['Year_'];
                $field2name = $row['Month_'];
                $field3name = $row['InstructorID'];
                $field4name = $row['Salary'];
                $field5name = $row['Fed_Tax'];
                $field6name = $row['State_Tax'];
                $field7name = $row['Other_Tax'];
                $field8name = $row['Net_Pay'];
                echo '<tr>
                            <td>'.$field1name. '</td>
                            <td>'.$field2name.'</td>
                            <td>'.$field3name.'</td>
                            <td>'.$field4name.'</td>
                            <td>'.$field5name.'</td>
                            <td>'.$field6name.'</td>
                            <td>'.$field7name.'</td>
                            <td>'.$field8name.'</td>
                        </tr>';
                echo '<br>';
            }
            $result->free();
            echo"</table>";
        }
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            
        }

    }
    if(isset($_POST['external-employee'])) {

        echo "<table>
    <tr>
        <th>Year_</th>
        <th>Month_</th>
        <th>InstructorID </th>
        <th>Hours</th>
        <th>Wage</th>
        <th>Fed_Tax</th>
        <th>State_Tax</th>
        <th>Other_Tax</th>
        <th>Net_Pay</th>
    </tr> ";

        require 'dbh.inc.php';

        $sql = "SELECT * FROM external_pay";
        $result = $conn->query($sql);

        if ($result !== FALSE){
            echo '<h1> Employee Database </h1>';
            while ($row = $result->fetch_assoc()) {
                $field1name = $row['Year_'];
                $field2name = $row['Month_'];
                $field3name = $row['InstructorID'];
                $field4name = $row['Hours'];
                $field5name = $row['Wage'];
                $field6name = $row['Fed_Tax'];
                $field7name = $row['State_Tax'];
                $field8name = $row['Other_Tax'];
                $field9name = $row['Net_Pay'];
                echo '<tr>
                            <td>'.$field1name. '</td>
                            <td>'.$field2name.'</td>
                            <td>'.$field3name.'</td>
                            <td>'.$field4name.'</td>
                            <td>'.$field5name.'</td>
                            <td>'.$field6name.'</td>
                            <td>'.$field7name.'</td>
                            <td>'.$field8name.'</td>
                            <td>'.$field9name.'</td>
                        </tr>';
                echo '<br>';
            }
            $result->free();
            echo"</table>";
        }
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            
        }

    }
    $conn->close();
?>