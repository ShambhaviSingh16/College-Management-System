<?php

$name = $_REQUEST['name'];

$con = mysqli_connect('localhost', 'root', '', 'College_management_system');
$sql = "select * from leave_request where name like '%{$name}%'";
$result = mysqli_query($con, $sql);

$response = "<table border=1 width='100%' cellspacing = 0 >
					<tr align = 'center'>
            <th>ID</th>
            <th>Name</th>
            <th>Leave From</th>
            <th>Leave To</th>
            <th>Status</th>
            <th>Action</th>
					</tr>";

while ($row = mysqli_fetch_assoc($result)) {
  $response .= "<tr align = 'center'>
              <td>{$row['id']}</td>
			        <td>{$row['name']}</td>
              <td>{$row['leave_from']}</td>
              <td>{$row['leave_to']}</td>
              <td>{$row['action']}</td>
              <td> <a href='LeaveAction.php?id={$row['sl']}'> Action </a> </td>
						</tr>";
}

$response .= "</table>";

echo $response;

?>