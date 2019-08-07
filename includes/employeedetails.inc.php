<!DOCTYPE html>
<html>
<head>
    <title> Table with database </title>
</head>
<body>
<table>
    <tr>
        <th>InstructorID</th>
        <th>instructor_name</th>
        <th>salary </th>
        <th>taxedsalary</th>
    </tr>
<?php

    if(isset($_POST['internal-employee'])) {

        require 'dbh.inc.php';

        $sql = "SELECT * FROM Salary";
        $result = $conn->query($sql);

        if ($result !== FALSE){
            echo '<h1> Employee Database </h1>';
            while ($row = $result->fetch_assoc()) {
                $field1name = $row['instructorID'];
                $field2name = $row['instructor_name'];
                $field3name = $row['salary'];
                $field4name = $row['taxedsalary'];
                echo '<tr>
                            <td>'.$field1name. '</td>
                            <td>'.$field2name.'</td>
                            <td>'.$field3name.'</td>
                            <td>'.$field4name.'</td>
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