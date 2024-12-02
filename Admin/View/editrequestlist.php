<?php
$title = "Edit Request List";
include_once('../model/studentModel.php');
$UsersList = alleditUserList();
?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    <?php echo $title; ?>
  </title>
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
      padding: 10px;
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
      position: fixed;
      bottom: 0;
      width: 100%;
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
    <form class="table-responsive" id="inform" action="../Controller/editRequestCheckStudent.php"
      onsubmit="return validation()" method="post">
      <fieldset>
        <legend>EDIT REQUEST</legend>
        <table border="1" width="100%" cellspacing="0">
          <tr align="center">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Gender</th>
            <th>DOB</th>
            <th>Present Address</th>
            <th>Action</th>
          </tr>

          <tbody>
            <?php foreach ($UsersList as $user): ?>
              <tr>
                <td>
                  <?php echo $user['id']; ?>
                </td>
                <td>
                  <?php echo $user['name']; ?>
                </td>
                <td>
                  <?php echo $user['email']; ?>
                </td>
                <td>
                  <?php echo $user['mobile']; ?>
                </td>
                <td>
                  <?php echo $user['gender']; ?>
                </td>
                <td>
                  <?php echo $user['dob']; ?>
                </td>
                <td>
                  <?php echo $user['p_address']; ?>
                </td>
                <td><a href='editrequestStudent.php?id=<?php echo $user['id']; ?>'>View</a></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </fieldset>
      <!-- Error messages -->
      <div id="error_message"></div>
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