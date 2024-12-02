<?php



$name = $_REQUEST['name'];

$con = mysqli_connect('localhost', 'root', '', 'College_management_system');
$sql = "select * from teacher where id like '%{$name}%'";
$result = mysqli_query($con, $sql);

$response = "<table border=1 width='100%' cellspacing = 0 >
					<tr align = 'center'>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Gender</th>
            <th>DOB</th>
            <th>Subject</th>
            <th>Action</th>
					</tr>";

while ($row = mysqli_fetch_assoc($result)) {
  $response .= "<tr align = 'center'>
              <td>{$row['id']}</td>
							<td>{$row['name']}</td>
              <td>{$row['email']}</td>
              <td>{$row['mobile']}</td>
              <td>{$row['gender']}</td>
              <td>{$row['dob']}</td>
              <td>{$row['subject']}</td>
              <td> <a href='editTeacher.php?id={$row['id']}'> Edit </a> | <a href='deleteTeacher.php?id={$row['id']}'> Delete </a>  </td>
						</tr>";
}

$response .= "</table>";

echo $response;

?>