<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Teacher Registration</title>
  <link href="../../Home/Resources/bu logo..png" rel="icon">
  <style>
    body {
      font-family: "Lato", sans-serif;
      margin: 0;
      padding: 0;
      background-color: #edf1e5;
    }

    /* Add custom styles for your header and footer */

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

    footer {
      background-color: #111;
      color: #fff;
      padding: 20px;
      text-align: center;
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


    #error_messege {
      color: White;
      font-weight: bold;
      margin-bottom: 20px;
      padding: 0px;
      background: #de0404;
      text-align: center;
      font-size: 18px;
      transition: all 0.5s ease;
    }

    .success {
      color: green;
      font-size: 12px;
    }
  </style>
  <script src="../Script/RegCheck(script).js"></script>
</head>

<body>
  <div class="header">
    <div class="header-logo">
    </div>
    <div class="header-title">
      <h1>The Oxford College of Science</h1>
    </div>
    <div class="header-right">
      <a href="iindex.html">Back</a>
    </div>
  </div>

  <div id="content">
    
      <form    class="registration-form"  method="post" id="RegistrationForm" action="../Controller/RegCheck.php" onsubmit="return Registration()"> 
      <fieldset>
        <legend>Teacher Registration</legend>
        <table align="center">
          <tr>
            <td colspan="2">
              <center>
                <div id="error_messege"></div>
              </center>
            </td>
          </tr>
          <tr>
            <td>Name:</td>
            <td><input type="text" id="uname" name="uname" value=""></td>
          </tr>
          <tr>
            <td>Email:</td>
            <td><input type="email" id="email" name="email" value=""></td>
          </tr>
          <tr>
            <td>Mobile No.:</td>
            <td><input type="text" id="mobile" name="mobile" value=""></td>
          </tr>
          <tr>
            <td>ID:</td>
            <td><input type="text" id="id" name="ID" value=""></td>
          </tr>
          <tr>
            <td>Password:</td>
            <td><input type="password" id="password" name="password"></td>
          </tr>
          <tr>
            <td>Confirm Password:</td>
            <td><input type="password" id="repass" name="confirm"></td>
          </tr>
          <tr>
            <td colspan="2" style="text-align: center;">
              <fieldset>
                <legend>Gender</legend>
                <input type="radio" id="gender" name="gender" value="male">Male
                <input type="radio" id="gender" name="gender" value="female">Female
                <input type="radio" id="gender" name="gender" value="other">Other
              </fieldset>
            </td>
          </tr>
          <tr>
            <td colspan="2" style="text-align: center;">
              <fieldset>
                <legend>Date of Birth</legend>
                <input type="date" id="dob" name="dob" value="">
              </fieldset>
            </td>
          </tr>
        </table>
        <center><input type="submit" name="submit" value="Submit">
          <input type="reset" name="reset" value="Reset">
        </center>
      </fieldset>
      <!-- Error messages -->
      <div id="error_message"></div>
    </form>
  </div>

  <div class="footer">
    &copy; The Oxford College of Science
  </div>

</body>

</html>