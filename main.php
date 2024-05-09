<?php
session_start(); // Start the session



// Retrieve user data from session
$user_id = $_SESSION['user_id'];
$user_email = $_SESSION['user_email'];
$user_name = $_SESSION['user_f_name'] ;

// You can use this data to display on the page
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puma</title>
 
    <!-- <link rel="stylesheet" href="components/navbar.css"> -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> 
   
<style> 
   *{
      margin: 0;
      padding: 0;
      box-sizing:border-box;
   }
   html,body{  
      width:100%;
      height: 100%;
   }
   .mar{
      margin-top:10px ;
   }

</style>
<html>
<body>

 <?php
   include 'navbar.php';
   ?> 
<!--  -->
<div id="new_">
   <?php
   include 'new_.php';
   ?>
   </div>
   <!-- ///////////////////////////////////////////// -->
   
<div id="check_out">
   <?php
   include 'check_out.php';
   ?>
   </div>
   <!-- ////////////////////////////////////////// -->
   <div id="running">
   <?php
   include 'running.php';
   ?>
   </div>
  <!--  -->

   <div id="shopping_cart">
   <?php
   include 'shopping_cart.php';
   ?>
   </div>
   <!--  -->
   <!--  -->
   <div id="traning_gym">
   <?php
   include 'traning_gym.php';
   ?>
   </div>
  <!--  -->
  </div>
   <!--  -->
   <div id="walking">
   <?php
   include 'walking.php';
   ?>
   </div>
  <!--  -->
  </div>
   <!--  -->
   <div id="football">
   <?php
   include 'football.php';
   ?>
   </div>
  <!--  -->
  </div>
   <!--  -->
   <div id="cricket">
   <?php
   include 'cricket.php';
   ?>
   </div>
  <!--  -->
  </div>
   <!--  -->
   <div id="basketball">
   <?php
   include 'batminton.php';
   ?>
   </div>

  <!--  -->
  </div>
   <!--  -->
  

<script>
   $("#running").show();
   $("#new_").hide();
   $("#basketball").hide();
   $("#football").hide();
   $("#shopping_cart").hide();
   $("#walking").hide();
   $("#cricket").hide();
   $("#traning_gym").hide();
   $("#check_out").hide();
   function cart(){
      $("#running").hide();
   $("#shopping_cart").show();
  $("#basketball").hide();
   $("#football").hide();
   $("#walking").hide();
   $("#cricket").hide();
   $("#traning_gym").hide();
   $("#new_").hide();
   $("#check_out").hide();
  }
  function Running(){
   $("#running").show();
   $("#shopping_cart").hide();
  $("#basketball").hide();
   $("#football").hide();
   $("#walking").hide();
   $("#cricket").hide();
   $("#traning_gym").hide();
   $("#new_").hide();
   $("#check_out").hide();
  } 

  function walking() {
   $("#running").hide();
   $("#shopping_cart").hide();
  $("#basketball").hide();
   $("#football").hide();
   $("#walking").show();
   $("#cricket").hide();
   $("#traning_gym").hide();
   $("#new_").hide();
   $("#check_out").hide();
   
  }
  function training() {
   $("#running").hide();
   $("#shopping_cart").hide();
  $("#basketball").hide();
   $("#football").hide();
   $("#walking").hide();
   $("#cricket").hide();
   $("#traning_gym").show();
   $("#new_").hide();
   $("#check_out").hide();
   
}
function Cricket() {
   $("#running").hide();
   $("#shopping_cart").hide();
  $("#basketball").hide();
   $("#football").hide();
   $("#walking").hide();
   $("#cricket").show();
   $("#traning_gym").hide();
   $("#new_").hide();
   $("#check_out").hide();
   
}
function football() {
   $("#running").hide();
   $("#shopping_cart").hide();
  $("#basketball").hide();
   $("#football").show();
   $("#walking").hide();
   $("#cricket").hide();
   $("#traning_gym").hide();
   $("#new_").hide();
}
function Batminton() {
   $("#running").hide();
   $("#shopping_cart").hide();
  $("#basketball").show();
   $("#football").hide();
   $("#walking").hide();
   $("#cricket").hide();
   $("#traning_gym").hide();
   $("#new_").hide();
   $("#check_out").hide();
}
function new_(){
   $("#running").hide();
   $("#shopping_cart").hide();
  $("#new_").show();
   $("#football").hide();
   $("#walking").hide();
   $("#cricket").hide();
   $("#traning_gym").hide();
   $("#basketball").hide();
 
   $("#check_out").hide();
}

   function pay() {
      $("#running").hide();
   $("#shopping_cart").hide();
  $("#new_").hide();
   $("#football").hide();
   $("#walking").hide();
   $("#cricket").hide();
   $("#traning_gym").hide();
   $("#basketball").hide();

   $("#check_out").show();
  
   
}
</script>   

     
</body>
</html>
