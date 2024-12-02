// Function to validate a specific field and show error message if invalid
function validateField(inputElement, errorMessage) {
  const value = inputElement.value.trim();
  errorMessage.innerHTML = "";

  if (value === "") {
    errorMessage.innerHTML = "This field is required";
    return false;
  } else if (inputElement.id === "password" && value.length < 8) {
    errorMessage.innerHTML = "Password must be at least 8 characters long";
    return false;
  } else if (inputElement.id === "repass" && value !== document.getElementById("password").value) {
    errorMessage.innerHTML = "Passwords do not match";
    return false;
  } else if (inputElement.id === "email" && !validateEmail(value)) {
    errorMessage.innerHTML = "Invalid email format";
    return false;
  } else if (inputElement.id === "id") {
    return validateId(inputElement, errorMessage);
  } else if (inputElement.id === "mobile") {
    return validateMobile(inputElement, errorMessage);
  } else if (inputElement.id === "name") {
    return validateName(inputElement, errorMessage);
  }

  return true;
}

// Function to validate the form fields on submit
function validation() {
  var form = document.getElementById("inform");
  var errorMessages = form.getElementsByClassName("error-message");
  var isValid = true;

  // Clear all previous error messages
  for (var i = 0; i < errorMessages.length; i++) {
    errorMessages[i].innerHTML = "";
  }

  // Validate each field and show error messages if invalid
  for (var i = 0; i < form.elements.length; i++) {
    var element = form.elements[i];
    if (element.tagName === "INPUT" || element.tagName === "SELECT") {
      var errorMessage = document.getElementById(element.id + "-error");
      if (!validateField(element, errorMessage)) {
        isValid = false;
      }
    }
  }

  return isValid;
}
function showSuccessMessage(message) {
  const successMessageElement = document.createElement('div');
  successMessageElement.className = 'success-message';
  successMessageElement.textContent = message;

  const form = document.getElementById('inform');
  form.appendChild(successMessageElement);

  setTimeout(function() {
    form.removeChild(successMessageElement);
  }, 5000);
}

// Function to validate email format
function validateEmail(email) {
  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailPattern.test(email);
}

// Function to validate ID format (4 digits, only numbers, no repetition)
function validateId(inputElement) {
  const value = inputElement.value.trim();
  errorMessage.innerHTML = "";

  if (value === "") {
    errorMessage.innerHTML = "ID is required";
    return false;
  } else if (isNaN(value)) {
    errorMessage.innerHTML = "ID must contain only numbers";
    return false;
  } else if (value.length !== 4) {
    errorMessage.innerHTML = "ID must be exactly 4 digits";
    return false;
  }

  // Add your logic to check for ID repetition here
  // You may need to use an array to store existing IDs and check if the current ID is already in the array.

  return true;
}

// Function to validate mobile number format (10 digits, only numbers)
function validateMobile(inputElement) {
  const value = inputElement.value.trim();
  errorMessage.innerHTML = "";

  if (value === "") {
    errorMessage.innerHTML = "Mobile number is required";
    return false;
  } else if (isNaN(value)) {
    errorMessage.innerHTML = "Mobile number must contain only numbers";
    return false;
  } else if (value.length !== 10) {
    errorMessage.innerHTML = "Mobile number must be exactly 10 digits";
    return false;
  }

  return true;
}

// Function to validate name format (only letters and spaces)
function validateName(inputElement) {
  const value = inputElement.value.trim();
  errorMessage.innerHTML = "";

  if (value === "") {
    errorMessage.innerHTML = "Name is required";
    return false;
  } else if (!/^[a-zA-Z\s]+$/.test(value)) {
    errorMessage.innerHTML = "Name should contain only letters and spaces";
    return false;
  }

  return true;
}
// Function to show error popup for field validation
function showErrorMessagePopup(isValid, errorMessage) {
  if (!isValid) {
    errorMessage.style.backgroundColor = "yellow";
    errorMessage.style.color = "black";
    errorMessage.style.display = "block";
  } else {
    errorMessage.style.display = "none";
  }
}






    function validatePhone(event) {

      //event.keycode will return unicode for characters and numbers like a, b, c, 5 etc.
      //event.which will return key for mouse events and other events like ctrl alt etc. 
      var key = window.event ? event.keyCode : event.which;

      if (event.keyCode == 8 || event.keyCode == 46 || event.keyCode == 37 || event.keyCode == 39) {
        // 8 means Backspace
        //46 means Delete
        // 37 means left arrow
        // 39 means right arrow
        return true;
      } else if (key < 48 || key > 57) {
        // 48-57 is 0-9 numbers on your keyboard.
        return false;
      } else return true;
    }

    $('#dob').on('change', function() {
      var today = new Date();
      var birthDate = new Date($(this).val());
      var age = today.getFullYear() - birthDate.getFullYear();
      var m = today.getMonth() - birthDate.getMonth();

      if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
      }

      $('#age').val(age);
    });

    $("#registerCandidates").on("submit", function(e) {
      e.preventDefault();
      if ($('#password').val() != $('#cpassword').val()) {
        $('#passwordError').show();
      } else {
        $(this).unbind('submit').submit();
      }
    });



    // Validate password
    if ($password != $confirm_password) {
        die("Error: Passwords do not match.");
    }

    // Password validation rules (You can customize these rules as per your requirements)
    $min_password_length = 8;
    $uppercase_required = true;
    $number_required = true;
    $special_char_required = true;

    if (strlen($password) < $min_password_length) {
        die("Error: Password must be at least {$min_password_length} characters long.");
    }

    if ($uppercase_required && !preg_match("/[A-Z]/", $password)) {
        die("Error: Password must contain at least one uppercase letter.");
    }

    if ($number_required && !preg_match("/\d/", $password)) {
        die("Error: Password must contain at least one number.");
    }

    if ($special_char_required && !preg_match("/[^a-zA-Z\d]/", $password)) {
        die("Error: Password must contain at least one special character.");
    }
