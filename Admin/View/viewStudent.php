<?php
$title = "View Student";
$js = "../script/StudentSearch.js";
include_once('../model/studentModel.php');
session_start();
	if(!isset($_COOKIE['flag']))
	{
    header('location: adminlogin.php');
  }
$UsersList = allUserList();
?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>View Student</title>
  <link href="../../Home/Resources/bu logo..png" rel="icon">
  <style>
    body {
      font-family: "Lato", sans-serif;
      margin: 0;
      padding: 0;
      background-color: #edf1e5;
      transition: background-color 0.5s;
    }

    /* Header */
    .header {
      background-color: #111;
      color: #fff;
      padding: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 104%;
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
  margin-right: 100px;
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
      border-collapse: collapse;
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

    .content a:hover {
      /* Add the following style to change the background color on hover */
      color: rgb(79, 106, 141);
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
      width: 104%;
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

    @media screen and (max-height: 450px) {
      .sidenav {
        padding-top: 15px;
      }

      .sidenav a {
        font-size: 18px;
      }
    }
  </style>
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
    <a href="dashboard.php">Dashboard</a>
    <a href="addStudent.php">Add Student</a>
    <a href="viewStudent.php">View Student</a>
    <a href="editrequestlist.php">Edit Request</a>
    <a href="leaveRequest.php">Student's Leave Request list</a>
    <a href="../Controller/logout.php">Logout</a>

  </div>
  <span style="font-size:30px;cursor:pointer" onmouseover="openNav()">&#9776;</span>

  <div class="content" id="content">
    <form class="table-responsive" id="inform" action="../Controller/updateCheckStudent.php"
      onsubmit="return validation()" method="post">
      <fieldset>
        <legend>STUDENT LIST</legend>
        <script type="text/javascript" src="../script/StudentSearch.js"></script>
        <center>
          <div class="search-container">
          <input type="text" name="name" id="name" onkeyup="ajax()" />
									<input type="button" name="" value="Search">
								</center>
								<div id="myh1" class="">
        <br>
        <?php
								echo "<table border=1 width = '100%' cellspacing = 0>
          <tr align='center'>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Gender</th>
            <th>DOB</th>
            <th>Present Address</th>
            <th>Class</th>
            <th>Section</th>
            <th>Roll</th>
            <th>Action</th>
          </tr>";
          for ($i = 0; $i < count($UsersList); $i++) {
            echo "<tr align = 'center'>
                <td>{$UsersList[$i]['id']}</td>
                <td>{$UsersList[$i]['name']}</td>
                <td>{$UsersList[$i]['email']}</td>
                <td>{$UsersList[$i]['mobile']}</td>
                <td>{$UsersList[$i]['gender']}</td>
                <td>{$UsersList[$i]['dob']}</td>
                <td>{$UsersList[$i]['p_address']}</td>
                <td>{$UsersList[$i]['class']}</td>
                <td>{$UsersList[$i]['section']}</td>
                <td>{$UsersList[$i]['roll']}</td>
                <td><a href='editStudent.php?id={$UsersList[$i]['id']}' > Edit </a> | 
                    <a href='deleteStudent.php?id={$UsersList[$i]['id']}'> Delete </a>
                   
                </td>
            </tr>";
          }
          echo "</table>";
          ?>
        </table>
      </fieldset>
    </form>
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