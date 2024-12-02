<?php

$name = $_REQUEST['name'];

$con = mysqli_connect('localhost', 'root', '', 'College_management_system');
$sql = "select * from book_info where title like '%{$name}%'";
$result = mysqli_query($con, $sql);

$response = "<table border=1 width='100%' cellspacing = 0 >
                    <tr align = 'center'>
                    <th>ISBN</th>
                    <th>TITLE</th>
                    <th>AUTHOR</th>
                    <th>EDTION</th> 
                    </tr>";

while ($row = mysqli_fetch_assoc($result)) {
    $response .= "<tr align = 'center'>
              <td>{$row['isbn']}</td>
              <td>{$row['title']}</td>
              <td>{$row['author']}</td>
              <td>{$row['edition']}</td>
                        </tr>";
}

$response .= "</table>";

echo $response;

?>