<?php
	$title= "Update teacher";
	$js = "../Script/editValidation.js";
  session_start();
	if(!isset($_COOKIE['flag']))
	{
    header('location: adminlogin.php');
  }
include_once('../model/teacherModel.php');
$id = $_GET['id'];
$updatemyinfo = getUserbyid($id);
$_SESSION['id'] = $id;

?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Update Teacher</title>
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

    .registration-form {
      text-align: center;
      margin: auto;
      width: fit-content;
    }

    .registration-form td {
      padding: 10px;
    }

    .registration-form input {
      margin-bottom: 10px;
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

    /* Additional Styling */
    /* Customize the form field styles */
    input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type="date"] input[type="radio"] {
      width: 180px;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
      transition: border-color 0.3s ease;
    }

    input[type="radio"] {
      width: 40px;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
      transition: border-color 0.3s ease;
    }

    input[type="text"]:focus,
    input[type="email"]:focus,
    input[type="password"]:focus,
    input[type="date"]:focus {
      border-color: #555;
    }

    input[type="radio"] {
      margin-right: 0px;
    }

    /* Style the Submit and Reset buttons */
    input[type="submit"],
    input[type="reset"] {
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

    input[type="submit"]:hover,
    input[type="reset"]:hover {
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

    @media screen and (max-height: 450px) {
      .sidenav {
        padding-top: 15px;
      }

      .sidenav a {
        font-size: 18px;
      }
    }
  </style>
  <!-- Include JavaScript file for form validation -->
  <script src="../Script/editValidation.js"></script>
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

  <div id="mySidenav" class="sidebar" onmouseleave="closeNav()">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="Dashboard.php">Dashboard</a>
    <a href="addTeacher.php">Add Teacher</a>
    <a href="viewTeacher.php">View Teacher</a>
    <a href="../Controller/logout.php">Logout</a>

  </div>

  <span style="font-size:30px;cursor:pointer" onmouseover="openNav()">&#9776;</span>
  <div id="content">
    <form class="registration-form" id="inform" action="../controller/updateCheckTeacher.php" onsubmit="return validation()" method="post">
      <fieldset>
        <legend>Update Information</legend>
        <table align="center">
          <tr>
            <td colspan="2">
              <center>
                <div id="error_messege">
                </div>
              </center>
          </tr>
          <tr>
            <td>Id</td>
            <td>:<input type="text" id="id" name="id" disabled value="<?php echo $updatemyinfo['id']; ?>"></td>
          </tr>
          <tr>
            <td>Name</td>
            <td>:<input type="text" id="name" name="name" value="<?php echo $updatemyinfo['name']; ?>"
                placeholder="Enter Full Name"></td>
          </tr>
          <tr>
            <td>Email</td>
            <td>:<input type="email" id="email" name="email" value="<?php echo $updatemyinfo['email']; ?>"></td>
          </tr>
          <tr>
            <td>Mobile No</td>
            <td>:<input type="text" id="mobile" name="mobile" value="<?php echo $updatemyinfo['mobile']; ?>"></td>
          </tr>


          <tr>
            <td>Gender</td>
            <td>
              :<input type="radio" id="genderMale" name="gender" <?php if ($updatemyinfo['gender'] == "male") { ?>
                  checked="true" <?php } ?> value="male">Male
              <input type="radio" id="genderFemale" name="gender" <?php if ($updatemyinfo['gender'] == "female") { ?>
                  checked="true" <?php } ?> value="female">Female
              <input type="radio" id="genderOther" name="gender" <?php if ($updatemyinfo['gender'] == "other") { ?>
                  checked="true" <?php } ?> value="other">Other

            </td>
          </tr>
          <tr>
            <td>Date of Birth</td>
            <td>:<input type="date" id="dob" name="dob" value="<?php echo $updatemyinfo['dob']; ?>"></td>
          </tr>
          <tr>
            <td>Subject</td>
            <td>:<select id="subject" name="subject">
                <option <?php if ($updatemyinfo['subject'] == "Data Structure") { ?> selected="true" <?php } ?>
                  value="Data Structure">Data Structure</option>
                <option <?php if ($updatemyinfo['subject'] == "Computer Science") { ?> selected="true" <?php } ?>
                  value="Computer Science">Computer Science</option>
                <option <?php if ($updatemyinfo['subject'] == "Mechanical") { ?> selected="true" <?php } ?>
                  value="Mechanical">Mechanical</option>
                <option <?php if ($updatemyinfo['subject'] == "Management") { ?> selected="true" <?php } ?>
                  value="Management">Management</option>
                <option <?php if ($updatemyinfo['subject'] == "Bussiness") { ?> selected="true" <?php } ?>
                  value="Bussiness">Bussiness</option>
                <option <?php if ($updatemyinfo['subject'] == "Civil") { ?> selected="true" <?php } ?> value="Civil">Civil
                </option>
              </select>
            </td>
          </tr>
        </table>
        <hr>
        <center>
        <input type="submit" name="update" value="Update">

        </center>
      </fieldset>
      <!-- Error messages -->
      <div id="error_message"></div>
    </form>
  </div>

  <script>
    function openNav() {
      document.getElementById("sidebar").style.width = "250px";
      document.getElementById("content").style.marginLeft = "250px";
      document.body.style.backgroundColor = "#edf1e5";
    }

    function closeNav() {
      document.getElementById("sidebar").style.width = "0";
      document.getElementById("content").style.marginLeft = "0";
      document.body.style.backgroundColor = "#edf1e5";
    }
  </script>

  <div class="footer">
    &copy; The Oxford College of Science
  </div>

</body>

</html>