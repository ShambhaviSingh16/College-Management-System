<?php

$name = $_REQUEST['name'];

$con = mysqli_connect('localhost', 'root', '', 'College_management_system');
$sql = "select * from student where name like '%{$name}%'";
$result = mysqli_query($con, $sql);

        $response = "<table border=1 width='100%' cellspacing = 0 >
					<tr align = 'center'>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Gender</th>
            <th>Date of Birth</th>
            <th>Class</th>
            <th>Section</th>
            <th>Roll</th>
            <th>Present Address</th>
            <th>Profile View</th>
					</tr>";

        while ($row = mysqli_fetch_assoc($result)) {
          $response .= "<tr align = 'center'>
              <td>{$row['id']}</td>
			  <td>{$row['name']}</td>
              <td>{$row['email']}</td>
              <td>{$row['mobile']}</td>
              <td>{$row['gender']}</td>
              <td>{$row['dob']}</td>
              <td>{$row['class']}</td>
              <td>{$row['section']}</td>
              <td>{$row['roll']}</td>
              <td>{$row['p_address']}</td>
              <td> <a href='StudentProfile.php?id={$row['id']}'> Profile View </a> </td>
						</tr>";
        }

        $response .= "</table>";

        echo $response;

        ?>
        