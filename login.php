<?php

include('header.php');
include('db.php');



if (isset($_POST['Login'])) {

   $email = $_POST['email'];
   $password =$_POST['password'];
  
    $passnew = sha1($password);

if (empty($email) or empty($password)) {

     $info = "<div class= 'alert alert-info'>All fields are Required</div>";
     
   }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

     $info = "<div class= 'alert alert-info'>Invalid Email Format</div>";

   }elseif (strlen($password) < 6) {

     $info ="<div class= 'alert alert-info'>Password is too short</div>";

   }
   else{


$query = "SELECT * FROM users WHERE email = '$email' and password = '$passnew'";
$result = mysqli_query($con, $query);
$numrows = mysqli_num_rows($result);

if ($numrows == 1) {
   while ($array = mysqli_fetch_assoc($result)) {
     

     $email = $array['email'];
     $fullname = $array['fullname'];
     $password = $array['password'];
     $filename = $array['filename'];
     // $dateandtime = $array['dateandtime'];



     $_SESSION['fullname'] = $fullname;
     $_SESSION['email'] = $email;
     $_SESSION['password'] = $password;
     $_SESSION['filename'] = $filename;
     // $_SESSION['dateandtime'] = $dateandtime;
      $info = "<div class= 'alert alert-info'>Redirecting, please wait...</div>";
     header("Refresh:2; url=dashboard.php");}

    }else{

      $info = "<div class= 'alert alert-info'>Invalid Login Details</div>";
    }
    }
}
?>

<div style="height: 500px; width: 100%">


	<div class="container col-xs-12 col-md-4 col-sm-12 mt-3">
  <div class="card">
    
<form action="login.php" method="post">

<div class="container my-1 mt-4">
    <?php   echo "<span style= color:red; font-weight:bold;>". @$info . "</span>"; ?>
     
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
      
    
      <input type="submit" name="Login" value="Login" class="btn btn-info mt-3"> <a href="register.php" style="text-decoration: none; font-style: italic;"> Don't have an account yet?</a>
    
    </div>


</form>
</div></div>


</div>




   














<?php

include('footer.php');

?>