<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Librarian Registration</title>
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
  <script>
function Librarianregistration(){
  var Email = document.getElementById('email').value;
  var Name = document.getElementById('name').value;
  var Librarianid = document.getElementById('librarianid').value;
  var Mobile = document.getElementById('mobile').value;
  var Dob = document.getElementById('dob').value;
  var Address = document.getElementById('address').value;
  var Password = document.getElementById('password').value;
  var Cpassword = document.getElementById('cpassword').value;
  var msg=""
  if(Email==""){
       msg+="enter mail address";
       email.className="error";
  }
  if(Name==""){
       msg+="enter name";
       nam.className="error";
  }
  if(Librarianid==""){
       msg+="enter Librarianid";
       librarianid.className="error";
  }
  if(Mobile==""){
       msg+="enter mobile no";
       mobilen.className="error";
  }
  if(Dob==""){
       msg+="enter date of birth";
       dob.className="error";
  }
  if(Address==""){
       msg+="write your address";
       address.className="error";
  }
  if(Password==""){
       msg+="enter password";
       password.className="error";
  }
  if(Cpassword==""){
       msg+="Retype Password";
       cpassword.className="error";
  }
  
  if(msg==""){
                return true;
            }
  else{
                document.getElementById('msg1').innerHTML = "enter mail address";
                document.getElementById('msg2').innerHTML = "enter name";
                document.getElementById('msg3').innerHTML = "enter Librarianid";
                document.getElementById('msg4').innerHTML = "enter mobile no";
                document.getElementById('msg5').innerHTML = "enter date of birth";
                document.getElementById('msg6').innerHTML = "write your address";
                document.getElementById('msg7').innerHTML = "enter password";
                document.getElementById('msg8').innerHTML = "Retype Password";
                return false;

  }
}

function Regvalidation(){
  var Email = document.getElementById('email').value;
  var Name = document.getElementById('name').value;
  var Librarianid = document.getElementById('librarianid').value;
  var Mobile = document.getElementById('mobile').value;
  var Dob = document.getElementById('dob').value;
  var Address = document.getElementById('address').value;
  var Password = document.getElementById('password').value;
  var Cpassword = document.getElementById('cpassword').value;
  if(Mail!=""){
    var str = document.getElementById('email').value;
    var n = str.includes("@gmail");
    if(n == true){
      document.getElementById('msg1').innerHTML="";
      document.getElementById('mail').className="success";
      
     }
    }
  if(Name!=""){
      document.getElementById('msg2').innerHTML="";
      document.getElementById('name').className="success";
    }
    if(Librarianid!="" && Librarianid.length == 3){
      document.getElementById('msg3').innerHTML="";
      document.getElementById('librarianid').className="success";
    }
    if(Mobilen!="" && Mobile.length == 9){
      document.getElementById('msg4').innerHTML="";
      document.getElementById('mobile').className="success";
    
    }
    if(Password!="" && Password.length == 7){
      document.getElementById('msg7').innerHTML="";
      document.getElementById('password').className="success";
    }
   if(Cpassword!="" && Cpassword.length == 7){
      document.getElementById('msg8').innerHTML="";
      document.getElementById('cpassword').className="success";
    }
    if(Password == Cpassword){
      document.getElementById('msg8').innerHTML="";
      document.getElementById('cpassword').className="success";
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
      <a href="iindex.html">Back</a>
    </div>
  </div>

  <div id="content">
      <form class="registration-form" action="../Controller/librarianRegCheck.php"  method="POST" onsubmit="return Librarianregistration()">
      <fieldset>
        <legend>Librarian Registration</legend>
        <table align="center">
          <tr>
            <td colspan="2">
              <center>
                <div id="error_messege"></div>
              </center>
            </td>
          </tr>
          <tr>
                    <td>Email Address</td>
                    <td>: <input type="email" name="email" id="email" value=""  onkeypress="Regvalidation()"><div id="msg1"></div></td>
                  </tr>
                  <tr>
                    <td>Name</td>
                    <td>: <input type="text" name="name" id="name" value=""  onkeypress="Regvalidation()"><div id="msg2"></div></td>
                  </tr>
                  <tr>
                    <td>Librarian Id</td>
                    <td>: <input type="text" name="librarianid" id="librarianid" value=""  onkeypress="Regvalidation()"><div id="msg3"></div></td>
                  </tr>
                  <tr>
                    <td>Gender</td>
                    <td>
                      : <input type="radio" name="gender" value="male" checked>Male
                      <input type="radio" name="gender" value="female">Female
                    </td>
                  </tr>
                  <tr>
                    <td>Mobile Number</td>
                    <td>: <input type="text" name="mobileno" id="mobile" value="01"  onkeypress="Regvalidation()"><div id="msg4"></div></td>
                  </tr
                  <tr>
                    <td>Date of Birth</td>
                    <td>: <input type="date" name="dob" id="dob" value=""  onkeypress="Regvalidation()"><div id="msg5"></div></td>
                  </tr>
                  <!-- <tr>
                    <td>Present Address</td>
                    <td>: <input type="text" name="address" id="address" value=""  onkeypress="Regvalidation()"><div id="msg6"></div></td>
                  </tr> -->
                  <tr>
                    <tr>
                        <td>Choose a Password</td>
                        <td>: <input type="password" name="password" id="password" value=""  onkeypress="Regvalidation()"><div id="msg7"></div></td>
                      </tr>
                      <tr>
                        <td>Confirm Password</td>
                        <td>: <input type="password" name="cpassword" id="cpassword" value=""  onkeypress="Regvalidation()"><div id="msg8"></div></td>
                      </tr>
                      <!-- <tr>
                    <td colspan="2"><input type="checkbox" name="policy" value="1"><b>Yes</b>,I'll maintain privacy & policy.</td>
                  </tr> -->
                
               </table>
        <center>
        <td><input type="submit" name="register" value="Registration"></td>

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