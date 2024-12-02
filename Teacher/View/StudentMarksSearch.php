<?php

$name = $_REQUEST['name'];

$con = mysqli_connect('localhost', 'root', '', 'College_management_system');
$sql = "select * from student where name like '%{$name}%'";
$result = mysqli_query($con, $sql);


        $response = "<table border=1 width='100%' cellspacing = 0 >
					<tr align = 'center'>
            <th>ID</th>
            <th>Name</th>
            <th>Class</th>
            <th>Section</th>
            <th>Roll</th>
            <th>Marks</th>
            <th>Marks Update</th>
            <th>Marks Delete</th>
					</tr>";

        while ($row = mysqli_fetch_assoc($result)) {
          $response .= "<tr align = 'center'>
              <td>{$row['id']}</td>
		      	  <td>{$row['name']}</td>
              <td>{$row['class']}</td>
              <td>{$row['section']}</td>
              <td>{$row['roll']}</td>
              <td>{$row['marks']}</td>
              <td> <a href='Marks.php?id={$row['id']}'> Update </a> </td>
              <td> <a href='DeleteMarks.php?id={$row['id']}'> Delete </a> </td>
						</tr>";
        }

        $response .= "</table>";

        echo $response;

        ?>
       