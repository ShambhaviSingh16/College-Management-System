<?php
$title = "View Book Info";
require_once('../Model/usersmodel.php');
$serialno = $_GET['serialno'];
$bookinfo = viewBookInfo($serialno);
?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $title; ?></title>
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

  <div class="content" id="content">
    <form class="table-responsive" id="inform" action="" method="post">
      <h2 align="center">
        <?php echo $title; ?>
      </h2>
      <hr>
      <fieldset>
        <legend>VIEW BOOK INFO</legend>
        <br>
        <table border="1" width="100%" cellspacing="0">
          <tr align="center">
            <th>ISBN</th>
            <th>Book Title</th>
            <th>Author</th>
            <th>Edition</th>
            <th>Categories</th>
            <th>Book Item No.</th>
            <th>Preview Book</th>
          </tr>
          <tr>
            <td><?php echo $bookinfo['isbn']; ?></td>
            <td><?php echo $bookinfo['title']; ?></td>
            <td><?php echo $bookinfo['author']; ?></td>
            <td><?php echo $bookinfo['edition']; ?></td>
            <td><?php echo $bookinfo['categories']; ?></td>
            <td><?php echo $bookinfo['bookcopy']; ?></td>
            <td><a href="<?php echo $bookinfo['bookfile']; ?>">Read the Book</a></td>
        </tr>
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