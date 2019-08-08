<!DOCTYPE html>
<html>
<head>
    <title> Avaiable Section Details </title>
</head>
<body>

<?php

    if(isset($_POST['current-section'])) {

        echo "<table>
    <tr>
        <th>Building</th>
        <th>Room_Number</th>
        <th>Excercise_Number </th>
        <th>InstructorID</th>
        <th>Duration</th>
        <th>Class_Date</th>
        <th>Class_Start_Time</th>
    </tr> ";

        require 'dbh.inc.php';

        $sql = "SELECT * from section ss
        WHERE (ss.Building,ss.Room_Number,ss.Exercise_Number,ss.InstructorID,ss.Class_Date,ss.Class_Start_Time) NOT IN (
        SELECT f.Building,f.Room_Number,f.Exercise_Number,f.InstructorID,f.Class_Date,f.Class_Start_Time
        FROM 
        (SELECT c.Building,c.Room_Number,c.Exercise_Number,c.InstructorID,c.Class_Date,c.Class_Start_Time,sum(c.Guests)+count(c.InstructorID) sumg
        FROM class_registration c,section s
        WHERE c.Class_Date=s.Class_Date
        AND c.Building=s.Building
        AND s.Room_Number=c.Room_Number
        AND s.InstructorID=c.InstructorID
        AND c.Class_Start_Time=s.Class_Start_Time
        GROUP BY c.Building,c.Room_Number,c.Exercise_Number,c.InstructorID,c.Class_Date,c.Class_Start_Time
        ) f,room
        WHERE sumg>=room.Capacity
        AND f.Room_Number=room.Room_Number
        AND f.Building=room.Building);
        ";

        // $sql = "SELECT * FROM employee_pay";
        $result = $conn->query($sql);

        if ($result !== FALSE){
            echo '<h1> Employee Database </h1>';
            while ($row = $result->fetch_assoc()) {
                $field1name = $row['Building'];
                $field2name = $row['Room_Number'];
                $field3name = $row['Exercise_Number'];
                $field4name = $row['InstructorID'];
                $field5name = $row['Duration'];
                $field6name = $row['Class_Date'];
                $field7name = $row['Class_Start_Time'];
                echo '<tr>
                            <td>'.$field1name. '</td>
                            <td>'.$field2name.'</td>
                            <td>'.$field3name.'</td>
                            <td>'.$field4name.'</td>
                            <td>'.$field5name.'</td>
                            <td>'.$field6name.'</td>
                            <td>'.$field7name.'</td>
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