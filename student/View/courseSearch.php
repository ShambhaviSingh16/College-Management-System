<?php

$name = $_REQUEST['name'];

$con = mysqli_connect('localhost', 'root', '', 'College_management_system');
$sql = "select * from course where course_name like '%{$name}%'";
$result = mysqli_query($con, $sql);

$response = "<table border=1 width='100%' cellspacing = 0 >
                    <tr align = 'center'>
                    <th>Course Name</th>
                    <th>Department</th>
                    <th>Description</th>
                    </tr>";

while ($row = mysqli_fetch_assoc($result)) {
    $response .= "<tr align = 'center'>
              <td>{$row['course_name']}</td>
              <td>{$row['class']}</td>
              <td>{$row['description']}</td>
                        </tr>";
}

$response .= "</table>";

echo $response;

?>