<?php


$name = $_REQUEST['name'];

$con = mysqli_connect('localhost', 'root', '', 'College_management_system');
$sql = "select * from book_info where title like '%{$name}%'";
$result = mysqli_query($con, $sql);

$response = "<table border=1 width='100%' cellspacing = 0 >
					<tr align = 'center'>
            <th>ISBN</th>
            <th>Title</th>
            <th>Author</th>
            <th>Edition</th>
			<th>categories</th>
			<th>Book Copy</th>
					</tr>";

while ($row = mysqli_fetch_assoc($result)) {
	$response .= "<tr align = 'center'>
              <td>{$row['isbn']}</td>
							<td>{$row['title']}</td>
              <td>{$row['author']}</td>
              <td>{$row['edition']}</td>
							<td>{$row['categories']}</td>
							<td>{$row['bookcopy']}</td>

						</tr>";
}

$response .= "</table>";

echo $response;

?>