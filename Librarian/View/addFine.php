<?php
$title = "Add Fine";
include_once('../Model/usersmodel.php');
session_start();
	if(!isset($_SESSION['flag']))
	{
		header('location: librarianLogin.php');
	}
$studentroll = $_GET['id'];
$_SESSION['studentroll'] = $studentroll;
$assignlatefine = viewIssuedInfo($studentroll);
?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add Fine</title>
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
      height: 50px;
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
      color: White;
      font-weight: bold;
      margin-bottom: 20px;
      padding: 0px;
      background: #de0404;
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
  <script>
    function addfine() {
      var Returndate = document.getElementById('returndate').value;
      var Returnstatus = document.getElementById('returnstatus').value;
      var Fine = document.getElementById('fine').value;
      var msg = "";

      if (Returndate == "") {
        msg += "please fill up Return Date";
        returndate.className = "error";
      }
      if (Returnstatus == "") {
        msg += "Select Return Status";
        returnstatus.className = "error";
      }
      if (Fine == "") {
        msg += "Add fine";
        fine.className = "error";
      }
      if (msg == "") {
        return true;
      }
      else {
        document.getElementById('msg1').innerHTML = "please fill up Return Date";
        document.getElementById('msg2').innerHTML = "Select Return Status";
        document.getElementById('msg3').innerHTML = "please Add fine";
        return false;

      }
    }

    function validation() {
      var Returndate = document.getElementById('returndate').value;
      var Returnstatus = document.getElementById('returnstatus').value;
      var Fine = document.getElementById('fine').value;
      if (Returndate != "") {
        document.getElementById('msg1').innerHTML = "";
        document.getElementById('returndate').className = "success";
      }
      if (Returnstatus != "") {
        document.getElementById('msg2').innerHTML = "";
        document.getElementById('returnstatus').className = "success";
      }
      if (Fine != "") {
        document.getElementById('msg3').innerHTML = "";
        document.getElementById('fine').className = "success";
      }


    }
  </script>
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
    <a href="viewLibrarianProfile.php">View Profile</a>
    <a href="collegenotice.php">Notice</a>
    <a href="addnewbook.php">Add New Book</a>
    <a href="allBooksInfo.php">All Book Information</a>
    <a href="viewStudentsList.php">View Students List</a>  
    <a href="studentLibraryAcc.php">Create Student Library Account</a>
    <a href="viewAllStudentsLibProfile.php">View Student Library Account</a>
    <a href="bookrequest.php">Student Book Request</a>
    <a href="issueNewBook.php">Add Issue Book</a>
    <a href="issuedBookHistory.php">Issue Book History</a>
    <a href="searchBookInfo.php">searchBookInfo</a>
    <a href="changeLibrarianPassword.php">Change Password</a>
    <a href="../Controller/logout.php">Logout</a>
  </div>
  <span style="font-size:30px;cursor:pointer" onmouseover="openNav()">&#9776;</span>

  <div id="content">
    <form class="registration-form" id="inform" action="../Controller/updateFine.php" onsubmit="return addfine()"
      method="post">
      <fieldset>
        <legend>ADD FINE</legend>
        <table align="center">
          <tr>
            <td colspan="2">
              <center>
                <div id="error_messege">
                </div>
              </center>
          </tr>
          <tr>
            <th>Student Id</th>
            <th>Issued Date</th>
            <th>Return Date</th>
            <th>Return Status</th>
            <th>Fine</th>
          </tr>
          <tr>
            <td>
              <?php echo $assignlatefine['id']; ?>
            </td>
            <td>
              <?php echo $assignlatefine['issuesdate']; ?>
            </td>
            <td>
              <input type="date" name="returndate" id="returndate" value="" onkeyup="validation()">
              <div id="msg1"></div>
            </td>
            <td>
              <select name="returnstatus" id="returnstatus" onkeyup="validation()">
                <option value="0" selected>0</option>
                <option value="1">1</option>
              </select>
              <div id="msg2"></div>
            </td>
            <td>
              <input type="number" name="fine" id="fine" value="" onkeyup="validation()">
              <div id="msg3"></div>
            </td>
            <td>
              <input type="submit" name="addFine" value="Add Fine">
            </td>
          </tr>
          <tr>
        </table>
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