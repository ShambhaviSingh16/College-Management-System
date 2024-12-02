<?php
session_start();
require_once('../Model/adminModel.php');
if (isset($_COOKIE['flag'])) {
  ?>

  <!DOCTYPE html>
  <html>

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link href="../../Home/Resources/bu logo..png" rel="icon">
    <link href="../../Home/Resources/bu logo..png" rel="icon">
    <style>
      body {
        font-family: "Lato", sans-serif;
        margin: 0;
        padding: 0;
        background-color: #edf1e5;
        transition: background-color .5s;
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

      #main {
        transition: margin-left 0.3s ease;
        padding: 20px;
        color: #edf1e5;

      }

      .content {
        margin-left: 0;
        padding: 0px;
        transition: margin-left 0.3s ease;
        background-color: #edf1e5;
      }

      .content table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 0;
      }

      .content td {
        padding: 23px;
        text-align: center;
      }

      .content a {
        color: #333;
        text-decoration: none;
        font-weight: bold;
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
        background-color: #111;
        color: #fff;
        padding: 20px;
        text-align: center;
        
      }

      @media screen and (max-height: 450px) {
        .sidenav {
          padding-top: 15px;
        }

        .sidenav a {
          font-size: 18px;
        }
      }
    </style>

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

    <div id="mySidenav" class="sidebar" onmouseleave="closeNav()">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="Dashboard.php">Dashboard</a>
      <a href="viewProfile.php">View Profile</a>
      <a href="EditProfile.php">Edit Profile</a>
      <a href="ChangePassword.php">Change Password</a>
      <a href="../Controller/logout.php">Logout</a>
    </div>

    <span style="font-size:30px;cursor:pointer" onmouseover="openNav()">&#9776;</span>

    <div class="main">
      <div class="content" id="content">
        <table id="box" border="0" width="100%" cellspacing="0">
          <tr>
            <td align="center">
              <a href="addTeacher.php"><img height="100px" width="100px" src="../Resources/Teacher.jpg" alt=""></a>
              <br>
              <a href="addTeacher.php">Teacher</a>
            </td>

            <td align="center">
              <a href="addStudent.php"><img height="100px" width="100px" src="../Resources/student.jpg" alt=""></a>
              <br>
              <a href="addStudent.php">Student</a>
            </td>

            <td align="center">
              <a href="addLibrarian.php"><img height="100px" width="100px" src="../Resources/librarian.jpg" alt=""></a>
              <br>
              <a href="addLibrarian.php">Librarian</a>
            </td>
          </tr>

          <tr>
            <td align="center">
              <a href="postNotice.php"><img height="100px" width="100px" src="../Resources/notice.jpg" alt=""></a>
              <br>
              <a href="postNotice.php">Notice Board</a>
            </td>

            <td align="center">
              <a href="libraryBook.php"><img height="100px" width="100px" src="../Resources/libraryBook.jpg" alt=""></a>
              <br>
              <a href="libraryBook.php">Library Book Details</a>
            </td>
            <td align="center">
              <a href="leaveRequest.php"><img height="100px" width="100px" src="../Resources/leaverequest.png" alt=""></a>
              <br>
              <a href="leaveRequest.php">Leave Request list</a>
            </td>
          </tr>
          <tr>
            <td align="center"></td>

            <td align="center">
              <a href="addCourse.php"><img height="100px" width="100px" src="../Resources/course.jpg" alt=""></a>
              <br>
              <a href="addCourse.php">Courses</a>
            </td>

            <td align="center"></td>
          </tr>
        </table>
      </div>
    </div>

    <script>
      function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("content").style.marginLeft = "250px";
        document.body.style.backgroundColor = "#edf1e5";
      }

      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("content").style.marginLeft = "0";
        document.body.style.backgroundColor = "#edf1e5";
      }
    </script>

    <div class="footer">
      &copy; The Oxford College of Science
    </div>

    </body>

  </html>

  <?php
} else {
  header('location: adminlogin.php');
}
?>