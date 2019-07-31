<?php

    if(isset($_POST['submit-all'])) {

        require 'dbh.inc.php';

        $sql = "SELECT * FROM Employees";
        $result = $conn->query($sql);

        if ($result !== FALSE){
            echo "Retrieved Employee Details from the Database";
            echo "<br><br>";
            echo '<h1> Employee Database </h1>';
            while ($row = $result->fetch_assoc()) {
                $field1name = $row['excercisetype'];
                $field2name = $row['firstname'];
                $field3name = $row['hourlyrate'];
                $field4name = $row['hoursperweek'];
                $field5name = $row['lastname'];
                
                echo '<tr>
                            <td>'.$field1name. '</td>
                            <td>'.$field2name.'</td>
                            <td>'.$field3name.'</td>
                            <td>'.$field4name.'</td>
                            <td>'.$field5name.'</td>
                        </tr>';
                echo '<br>';
            }
            $result->free();
        }
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            
        }

    }
    $conn->close();
?>