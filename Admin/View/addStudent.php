<?php
$js = "../Script/addStuValidation.js";
?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add Student</title>
  <link href="../../Home/Resources/bu logo..png" rel="icon">
  <script type="text/javascript" src="../Script/addStuValidation.js"></script>
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
      color: white;
      font-weight: bold;
      margin-bottom: 20px;
      padding: 0;
      background: #de0404;
      text-align: center;
      font-size: 18px;
      transition: all 0.5s ease;
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
    function validation() {
      var id = document.getElementById("id").value;
      var name = document.getElementById("name").value;
      var email = document.getElementById("email").value;
      var mobile = document.getElementById("mobile").value;
      var password = document.getElementById("password").value;
      var repass = document.getElementById("repass").value;
      var dob = document.getElementById("dob").value;
      var roll = document.getElementById("roll").value;
      var error_message = document.getElementById("error_message");

      // Reset error message
      error_message.innerHTML = "";

      // Validate ID
      if (id.trim() === "") {
        error_message.innerHTML = "ID is required";
        return false;
      }
      // Validate NAME
      if (name.trim() === "") {
        error_message.innerHTML = "NAME is required";
        return false;
      }

      // Validate EMAIL
      if (email.trim() === "") {
        error_message.innerHTML = "Email is required";
        return false;
      }
      // Validate MOBILE
      if (mobile.trim() === "") {
        error_message.innerHTML = "Mobile is required";
        return false;
      }

      // Validate Password
      if (password.trim() === "") {
        error_message.innerHTML = "Password is required";
        return false;
      }
      // Validate REPASS
      if (repass.trim() === "") {
        error_message.innerHTML = "RePass is required";
        return false;
      }

      // Validate DOB
      if (dob.trim() === "") {
        error_message.innerHTML = "DOB is required";
        return false;
      }
      // Validate ROLL
      if (roll.trim() === "") {
        error_message.innerHTML = "Roll is required";
        return false;
      }

      return true;
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
    <a href="addStudent.php">Add Student</a>
    <a href="viewStudent.php">View Student</a>
    <a href="editrequestlist.php">Edit Request</a>
    <a href="leaveRequest.php">Student's Leave Request list</a>
    <a href="../Controller/logout.php">Logout</a>
  </div>

  <span style="font-size:30px;cursor:pointer" onmouseover="openNav()">&#9776;</span>

  <div id="content">
    <form class="registration-form" id="inform" action="../Controller/regCheckStudent.php"
      onsubmit="return validation()" method="post">
      <fieldset>
        <legend>REGISTRATION</legend>
        <table align="center">
          <div id="error_message"></div>
          </tr>
          <tr>
            <td>Id</td>
            <td>:<input type="text" id="id" name="id" value="" onblur="validateField(this)" required></td>
          </tr>
          <tr>
            <td>Name</td>
            <td>:<input type="text" id="name" name="name" placeholder="Enter Full Name *" onblur="validateField(this)"
                required></td>
          </tr>
          <tr>
            <td>Email</td>
            <td>:<input type="email" id="email" name="email" value="" onblur="validateField(this)" required></td>
          </tr>
          <tr>
            <td>Mobile No</td>
            <td>:<input type="text" id="mobile" name="mobile" value="" onblur="validateField(this)" required></td>
          </tr>

          <tr>
            <td>Password</td>
            <td>:<input type="password" id="password" name="password" value="" onblur="validateField(this)" required>
            </td>
          </tr>
          <tr>
            <td>Confirm Password</td>
            <td>:<input type="password" id="repass" name="repass" value="" onblur="validateField(this)" required></td>
          </tr>
          <tr>
            <td>Gender</td>
            <td>
              :<input type="radio" name="gender" value="male">Male
              <input type="radio" name="gender" value="female">Female
              <input type="radio" name="gender" value="other">Other
            </td>

          </tr>
          <tr>
            <td>Date of Birth</td>
            <td>:<input type="date" id="dob" name="dob" value="" onblur="validateField(this)" required></td>
          </tr>
          <tr>
            <td>Present Address</td>
            <td>:<input type="text" id="p_address" name="p_address" value="" required></td>
          </tr>
          <tr>
            <td>Class</td>
            <td>:<select id="classE" name="class" required>
                <option value="BCA">BCA</option>
                <option value="Bsc">Bsc</option>
                <option value="B.Com">B.Com</option>
                <option value="BA">BA</option>
                <option value="MCA">MCA</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Section</td>
            <td>:<select id="section" name="section" required>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Roll No</td>
            <td>:<input type="text" id="roll" name="roll" value="" onblur="validateField(this)" required></td>
          </tr>

        </table>
        <center>
          <input type="submit" id="submit" name="submit" value="Submit">
          <input type="reset" id="reset" name="reset" value="Reset">
        </center>
      </fieldset>
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
    // Attach validation listeners
    function attachValidationListeners() {
      const form = document.getElementById("inform");
      const errorMessages = form.getElementsByClassName("error-message");

      for (let i = 0; i < form.elements.length; i++) {
        const element = form.elements[i];
        if (element.tagName === "INPUT" || element.tagName === "SELECT") {
          element.addEventListener("blur", () => {
            const errorMessage = document.getElementById(element.id + "-error");
            const isValid = validateField(element, errorMessage);
            showErrorMessagePopup(isValid, errorMessage);
          });
        }
      }
    }

    // Call the function to attach validation listeners
    document.addEventListener("DOMContentLoaded", attachValidationListeners);

  </script>

  <div class="footer">
    &copy; The Oxford College of Science
  </div>

</body>

</html>