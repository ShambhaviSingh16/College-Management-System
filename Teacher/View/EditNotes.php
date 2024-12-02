<?php
session_start();
require_once('../Model/DatabaseConnection.php');
$Id = $_GET['id'];
$User = getNotesById($Id);
$_SESSION['id'] = $Id;
if (isset($_COOKIE['flag'])) {
  ?>

  <!DOCTYPE html>
  <html>

  <head>
    <title>Change Password</title>
    <link href="../../Home/Resources/bu logo..png" rel="icon">
    <script type="text/javascript" src="<?php echo $js; ?>"></script>
    <style>
      body {
        font-family: "Lato", sans-serif;
        margin: 0;
        padding: 0;
        background-color: #edf1e5;
        transition: background-color .5s;
      }

      .registration-form {
        text-align: center;
        margin: 50px auto;
        width: fit-content;
      }




      .registration-form td {
        padding: 10px;
      }

      .registration-form input {
        margin-bottom: 10px;
      }

      /* Header */
      .header {
        background-color: #111;
        color: #fff;
        padding: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
      }

      .header-logo {
        display: inline-block;
        vertical-align: middle;
      }

      .header-logo img {
        height: 59px;
      }

      .header-title {
        display: inline-block;
        vertical-align: middle;
        margin-left: 10px;
      }

      .header-title h1 {
        margin: 0;
        font-size: 24px;
      }

      .header-right {
        display: flex;
        align-items: center;
      }

      .header-right a {
        color: #fff;
        text-decoration: none;
        margin-right: 10px;
      }

      .sidebar {
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #111;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
        bottom: 0;
      }

      .sidebar a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s;
      }

      .sidebar a:hover {
        color: #f1f1f1;
      }

      .sidebar .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
        cursor: pointer;
      }

      .content img {
        height: 150px;
        width: 150px;
        border-radius: 50%;
        margin-bottom: 15px;
        transition: transform 0.3s ease;
      }

      .content img:hover {
        transform: scale(1.17);
      }

      .header:hover+.sidebar,
      .sidebar:hover {
        width: 250px;
      }

      .header:hover+.sidebar+.content,
      .sidebar:hover+.content {
        margin-left: 250px;
      }

      .footer {
      background-color: black;
      color: #fff;
      padding: 20px;
      text-align: center;
      position: absolute;
      bottom: 0;
      width: 100%;
    }

      @media screen and (max-height: 450px) {
        .sidenav {
          padding-top: 15px;
        }

        .sidenav a {
          font-size: 18px;
        }
      }

      /* Additional Styling */
      /* Customize the form field styles */
      input[type="password"] {
        width: 180px;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        transition: border-color 0.3s ease;
      }

      input[type="password"]:focus {
        border-color: #555;
      }

      /* Style the Submit button */
      input[type="submit"] {
        background-color: #111;
        color: white;
        border: none;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }

      input[type="submit"]:hover {
        background-color: #333;
      }

      /* Style the legend */
      fieldset {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
      }

      legend {
        font-size: 24px;
        font-weight: bold;
        color: #333;
      }

      /* Validation styles */
      #error_message {
        color: #de0404;
        font-weight: bold;
        margin-bottom: 20px;
        padding: 0;
        text-align: center;
        font-size: 18px;
        transition: all 0.5s ease;
      }

      .success-message {
        color: green;
        font-size: 12px;
      }
    </style>
    <script src="../Script/FileUploadCheck(script).js"></script>
  </head>

  <body>
    <div class="header">
      <div class="header-logo">
      </div>
      <div class="header-title">
        <h1>The Oxford College of Science</h1>
      </div>
      <div class="header-right">
        <a href="../Controller/Logout.php">Logout</a>
      </div>
    </div>
    <div class="sidebar" id="mySidenav" onmouseleave="closeNav()">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="TeacherDashboard.php">Dashboard</a>
      <a href="ViewProfile.php">View Profile</a>
      <a href="StudentList.php">View Student's Profile</a>
      <a href="Attendance.php">Student Attendance</a>
      <a href="Schedule.php">Class Schedule</a>
      <a href="NoticeBoard.php">Notice Board</a>
      <a href="ViewCollegeNotice.php">College Notice</a>
      <a href="UploadNotes.php">Upload Notes</a>
      <a href="ViewUploadedNotes(Student).php">See Student Notes</a>
      <a href="StudentListMarks.php">Student Marks</a>
      <a href="LeaveRequest.php">Student Leave Request</a>
      <a href="BookHistory.php">Book History</a>
      <a href="ChangePass.php">Reset Password</a>
      <a href="../Controller/Logout.php">Logout</a>

    </div>
    <span style="font-size:30px;cursor:pointer" onmouseover="openNav()">&#9776;</span>

    <div class="content" id="content">
      <form class="registration-form" name="Upload" action="../Controller/EditNotesCheck.php" method="post"
        enctype="multipart/form-data" onsubmit="return FileUpload()">
        <fieldset>
          <legend>NOTES UPDATE</legend>
          <table align="center">
            
            <tr>
              <td>Notes</td>
              <td>: <input type="file" name="photo"></td>
            </tr>
            <tr>
              <td>Time</td>
              <td>:<input type="text" name="time" disabled value="<?php echo $User['time']; ?>"></td>
            </tr>
          </table>
          <hr>
          <center>
            <input type="submit" name="submit" value="Submit">
          </center>
        </fieldset>
      </form>
    </div>

    <div class="footer">
      &copy; The Oxford College of Science
    </div>

    <script type="text/javascript">
      // Additional validation logic goes here
      function validation() {
        var currentPassword = document.getElementById("cpas").value;
        var newPassword = document.getElementById("npass").value;
        var retypeNewPassword = document.getElementById("rnpass").value;

        if (currentPassword === "") {
          document.getElementById("error_message").innerHTML = "Please enter your current password.";
          return false;
        }

        if (newPassword === "") {
          document.getElementById("error_message").innerHTML = "Please enter a new password.";
          return false;
        }

        if (newPassword !== retypeNewPassword) {
          document.getElementById("error_message").innerHTML = "New passwords do not match.";
          return false;
        }

        return true;
      }
    </script>
  </body>

  </html>


  <?php

} else {
  header('location: LoginPage.php');
}

?>