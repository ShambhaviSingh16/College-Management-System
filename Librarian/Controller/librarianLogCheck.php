<?php

require_once('../Model/usersmodel.php');
session_start();

if(isset($_POST['submit'])){

  $Librarianid = $_POST['librarianid'];
  $Password = $_POST['password'];

  if($Librarianid == "" || $Password == ""){
    echo "null submission...";
  }else{
    

    $status = validateUser($Librarianid, $Password);
    if($status){

        $_SESSION['librarianid'] = $Librarianid;
        setcookie('librarianid', $id, time()+3600, '/');
        $_SESSION['flag'] = true;

        setcookie('flag', true, time()+3600, '/');
        header('location: ../view/dashboard.php');
    }else{
      echo "invalid user";
    }
  }

}

?>