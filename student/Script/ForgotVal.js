function validation() {
    var id = document.getElementById("id").value;
    var npass = document.getElementById("npass").value;
    var rnpass = document.getElementById("rnpass").value;
    var error_messege = document.getElementById("error_messege");
    var text;
  
    if (id == "" || npass == "" || rnpass == "") {
      text = "Please fill all the fields";
      error_messege.innerHTML = text;
      return false;
    } else {
      if (npass != rnpass) {
        text = "New password and Retype New password mismatch!";
        error_messege.innerHTML = text;
        return false;
      } else {
        if (npass.length < 8) {
          text = "Password should be at least 8 characters long!";
          error_messege.innerHTML = text;
          return false;
        }
        return true;
      }
    }
  }
  