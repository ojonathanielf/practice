
<?php   session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width initial scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  

  <style>

    .bgblue{
      background-color: #004687;
     
    }
nav ul li a{
  color: #bfbfbf;
  font-size: 17px;
  border-radius: 3px;
  text-transform: uppercase;
  padding: 7px 7px;
}
a.active, a:hover{
  background: gold;
  transition: .2s
}


</style>



</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bgblue">
  <a class="navbar-brand" href="#" style=" font-size: 40px;"><div style="width: 50px; height: 50px; text-align: center; ">
  <h1 style="border: solid gold; border-radius: 50%; background-color: maroon;">N</h1>
</div></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div style="font-weight: bolder;font-size: 20px; margin-left: 30px;" class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
            
        </ul>
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link active" href="index.php" style="color: white;">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="dashboard.php"style="color: white;">Dashboard</a>

      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php"style="color: white;">Login</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="store.php"style="color: white;">My activities</a>
      </li>
    </ul>
  </div>
  <?php 


if (isset($_SESSION['fullname'])) {
    
    echo "<form action='logout.php'><button class='btn btn-danger my-2 my-sm-0' type = 'submit'>Logout</button></form-control>";
  }  





?>

  
</nav>




 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init();
</script>

</body>
</html>