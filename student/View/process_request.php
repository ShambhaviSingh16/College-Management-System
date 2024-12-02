<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $isbn = $_POST["isbn"];
    $title = $_POST["title"];


    $request_directory ="../../Librarian/student_request.php";
    $request_data = "id: $id, Roll isbn: $isbn, title: $title\n";
    
    $file_path = "../../Librarian/student_request.php";
    file_put_contents($file_path, $request_data, FILE_APPEND);

    echo "Book request sent successfully!";
    header('location: ../../Librarian/View/bookrequest.php');
}
?>


<!---  ---------requestforbook.php--------
id have to check from databse and here i am using the new form -------
---------------------------new code----------------------------

<!DOCTYPE html>
<html>
<head>
    <title>Student Module - Book Request</title>
</head>
<body>
    <h2>Book Request Form</h2>
    <form action="process_request.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="roll_number">Roll Number:</label>
        <input type="text" id="roll_number" name="roll_number" required><br><br>

        <label for="book_title">Book Title:</label>
        <input type="text" id="book_title" name="book_title" required><br><br>

        <input type="submit" value="Submit Request">
    </form>
</body>
</html>




-----------------------------------------------------old requestforbooks.php----------------------

  <div class="content" id="content">
    <form class="registration-form" id="inform" action="" method="post">
      <fieldset>
        <legend>Request for Books </legend>
        <table align="center">
          <tr>
            <td colspan="2">
              <center>
                <div id="error_messege">
                </div>
              </center>
            </td>
          </tr>
          <tr>
            <td>Id</td>
            <td><input type="text" name="STUDENT ID" value=""> </td>
          </tr>
          <tr>
            <td>Book Name</td>
            <td><input type="text" onkeyup="ajax()" name="name" id="name"> </td>
          </tr>
        </table>
        <hr>
        <center>
          <input type="submit" name="Request" value="Request">
        </center>
</fieldset>
      <div id="error_message"></div>
    </form>
  </div>

---->