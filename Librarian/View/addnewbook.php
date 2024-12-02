<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add new book</title>
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
  <script>
    function addNewBook() {
      var Isbn = document.getElementById('isbn').value;
      var Booktitle = document.getElementById('booktitle').value;
      var Categories = document.getElementById('categories').value;
      var Author = document.getElementById('author').value;
      var Bookcopy = document.getElementById('bookcopy').value;
      var Edition = document.getElementById('edition').value;
      var Bookfile = document.getElementById('bookfile').value;
      var msg = "";

      if (Isbn == "") {
        msg += "please fill up ISBN";
        isbn.className = "error";
      }
      if (Booktitle == "") {
        msg += "enter booktitle";
        booktitle.className = "error";
      }
      if (Categories == "") {
        msg += "select categories";
        categories.className = "error";
      }
      if (Author == "") {
        msg += "write author name";
        author.className = "error";
      }
      if (Bookcopy == "") {
        msg += "enter bookcopy no";
        bookcopy.className = "error";
      }
      if (Edition == "") {
        msg += "please fill up edition field";
        edition.className = "error";
      }
      if (Bookfile == "") {
        msg += "upload bookfile";
        bookfile.className = "error";
      }
      if (msg == "") {
        return true;
      }
      else {
        document.getElementById('msg1').innerHTML = "please fill up the isbn";
        document.getElementById('msg2').innerHTML = "enter booktitle";
        document.getElementById('msg3').innerHTML = "select categories";
        document.getElementById('msg4').innerHTML = "write author name";
        document.getElementById('msg5').innerHTML = "enter bookcopy no";
        document.getElementById('msg6').innerHTML = "please upload bookfile";
        document.getElementById('msg7').innerHTML = "upload bookfile";
        return false;

      }
    }

    function validation() {
      var Isbn = document.getElementById('isbn').value;
      var Booktitle = document.getElementById('booktitle').value;
      var Categories = document.getElementById('categories').value;
      var Author = document.getElementById('author').value;
      var Bookcopy = document.getElementById('bookcopy').value;
      var Edition = document.getElementById('edition').value;
      var Bookfile = document.getElementById('bookfile').value;
      if (Isbn != "" && Isbn.length == 9) {
        document.getElementById('msg1').innerHTML = "";
        document.getElementById('isbn').className = "success";
      }
      if (Booktitle != "" && Booktitle.length >= 12) {
        document.getElementById('msg2').innerHTML = "";
        document.getElementById('booktitle').className = "success";
      }
      if (Categories != "") {
        document.getElementById('msg7').innerHTML = "";
        document.getElementById('categories').className = "success";
      }
      if (Author != "") {
        document.getElementById('msg3').innerHTML = "";
        document.getElementById('author').className = "success";
      }
      if (Bookcopy != "") {
        Author
        document.getElementById('msg4').innerHTML = "";
        document.getElementById('bookcopy').className = "success";
      }
      if (Edition != "") {
        document.getElementById('msg5').innerHTML = "";
        document.getElementById('edition').className = "success";
      }
      if (Bookfile != "") {
        document.getElementById('msg6').innerHTML = "";
        document.getElementById('booktitle').className = "success";
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
    <form class="registration-form" id="inform" action="../Controller/bookInfoCheck.php" method="post"
      onsubmit="return addNewBook()" enctype="multipart/form-data">
      <fieldset>
        <legend>NEW BOOK</legend>
        <table align="center">
          <tr>
            <td>Enter ISBN :</td>
            <td><input type="text" name="isbn" id="isbn" value="" onkeypress="validation()">
              <div id="msg1"></div>
            </td>
          </tr>
          <tr>
            <td>Enter Title :</td>
            <td><input type="text" name="booktitle" id="booktitle" value="" onkeypress="validation()">
              <div id="msg2"></div>
            </td>
          </tr>
          <tr>
            <td>Select Categories :</td>
            <td>
              <select name="categories" id="categories" onkeypress="validation()">
                <option value="Programming">Programming</option>
                <option value="Fiction">Fiction</option>
                <option value="Moral">Moral</option>
                <option value="Mathematical">Mathematical</option>
                <option value="DSA">DSA</option>
                <option value="Database">Database</option>
              </select>
              <div id="msg3"></div>
            </td>
          </tr>
          <tr>
            <td>Enter Author :</td>
            <td><input type="text" name="author" id="author" value="" onkeypress="validation()">
              <div id="msg4"></div>
            </td>
          </tr>
          <tr>
            <td>Book Copy :</td>
            <td><input type="text" name="bookcopy" id="bookcopy" value="" onkeypress="validation()">
              <div id="msg5"></div>
            </td>
          </tr>

          <tr>
            <td>Enter Edition :</td>
            <td><input type="text" name="edition" id="edition" value="" onkeypress="validation()">
              <div id="msg6"></div>
            </td>
          </tr>
          <tr>
            <td>Upload Book :</td>
            <td><input type="file" name="bookfile" id="bookfile" value="" onkeypress="validation()">
              <div id="msg7"></div>
            </td>
          </tr>
          <tr>
        </table>
        <center>
          <input type="submit" id="submit" name="addnewbook" value="Add New Book">
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
  </script>

  <div class="footer">
    &copy; The Oxford College of Science
  </div>

</body>

</html>