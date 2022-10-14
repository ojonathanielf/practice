 <?php


include('header.php');
include('db.php');




if (isset($_POST['Register'])) {

  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];
  $filename = $_FILES['filename']['name'];
  $tmpname = $_FILES['filename']['tmp_name'];

  $path = '../upload/'. $filename;

  $passnew = sha1($password);

   
   // $upload = upload('filename');

   if (empty($email) or empty($password)) {

     $info = "<div class= 'alert alert-info'>All fields are Required</div>";
     
   }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

     $info = "<div class= 'alert alert-info'>Invalid Email Format</div>";

   }elseif (strlen($password < 6)) {

     $info ="<div class= 'alert alert-info'>Password is too short</div>";

   }elseif (!$password == $cpassword) {

     $info ="<div class= 'alert alert-info'>Password Mismatch</div>";

   }
   // elseif (!$upload) {
     
   //   echo $info ="<div class= alert alert-danger> No File Chosen</div>";

   // }
   else {

    $upload = move_uploaded_file($tmpname, $path);

    if ($upload) {


   $query = "INSERT INTO users(fullname, email, password, filename) VALUES('$fullname', '$email', '$passnew', '$filename')";
   $result = mysqli_query($con, $query);

   if ($result) {
    
   $info = "<div class= 'alert alert-info'>Redirecting, please wait...</div>";
     header("Refresh:2; url=login.php");
  }
  }
   //   echo "<script> alert('Registration Completed')</script>";
   // }else {
   //  echo "<script> alert('Error in Registration, Try Again')</script>";
   // }
}
}
?>

<div style="height: 500px; width: 100%">


	<div class="container container col-xs-12 col-md-4 col-sm-12 mt-3">
  <div class="card">
    
<form action="register.php" method="post" enctype="multipart/form-data">

<div class="container my-1 mt-3">
    <?php   echo @$info; ?>
     <label class="sr-only" for="inlineFormInputGroupUsername">Full Name</label>
      <div class="input-group">
        <div class="input-group-prepend">
           </div>
        <input type="text" class="form-control" name="fullname" id="inlineFormInputGroupUsername" placeholder="Full Name">
      </div>

      <label class="sr-only" for="inlineFormInputGroupUsername">Email</label>
      <div class="input-group mt-3">
        <div class="input-group-prepend">
          </div>
        <input type="text" class="form-control" name="email" id="inlineFormInputGroupUsername" placeholder="Email">
      </div>

        
    <label class="sr-only" for="inlineFormInputGroupUsername"> Password</label>
      <div class="input-group mt-3">
        <div class="input-group-prepend">
          
        </div>
        <div class="input-group-text" id="show"><i class="fa fa-eye"></i></div>
        <input type="Password" class="form-control" name="password" id="ValEntered" placeholder="Password">
      </div>
      <label class="sr-only" for="inlineFormInputGroupUsername">Confirm Password</label>
      <div class="input-group mt-3">
        <div class="input-group-prepend">
          
        </div>
        <div class="input-group-text" id="showed"><i class="fa fa-eye"></i></div>
        <input type="Password" class="form-control" name="cpassword" id="ValEnteredd" placeholder=" Confirm Password">
      </div>

    <div class="input-group mt-3">
        <div class="input-group-prepend">
          </div>
        <input type="file" class="form-control" name="filename" id="inlineFormInputGroupUsername" placeholder="Choosepicture">
      </div>


    
      <input type="submit" name="Register" value="Register" class="btn btn-info mt-3"> <a href="login.php" style="text-decoration: none; font-style: italic;"> Already Have an Account?</a>
    
    </div>


</form>
</div></div>


</div>















<?php

include('footer.php');
// include('store.php');
?>

