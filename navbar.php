<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommers-puma</title>
    <style>
      
 #nav_text{
   
   font-size: 14px;
   line-height: 1.428; 
   

       --tw-text-opacity: 1;
       color: rgba(255, 255, 255, var(--tw-text-opacity));
   
}
.nav1{
background-color: rgba(138, 115, 80);
}
.after_navbar{
background-color:rgba(90, 82, 36);
}
    
#womenDropdown:hover .dropdown-menu {
    display: block;
}


.dropdown-menu {
    display: none;
}
.custom-hr {
        background-color:black; 
        height: 3px; 
        border: none;
    }
  


    .nav_2 {
  
  /* position: fixed;
  top:0;
  width: 100%; 
  z-index: 1000; */
}
    
        /* Style the side navbar */
        #mySidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            right: 0; /* Position the navbar on the right side */
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        /* Style the navigation links */
        #mySidenav a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        /* Change color on hover */
        #mySidenav a:hover {
            color: #f1f1f1;
        }

        /* Position and style the close button */
        .sidenav-close {
            position: absolute;
            top: 0;
            left: 155px; /* Position the close button on the left side */
            font-size: 36px;
            margin-left: 50px;
        }
        .profile-card {
            max-width: 400px;
            margin: auto;
            text-align: center;
        }
        .profile-img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
        }
        .nav-link-nav:hover {
          border-bottom: 2px solid orange;
    cursor: pointer;
}


    </style>

</head>
<body>
    
 <!-- nav1 start -->
 <nav class="navbar navbar-expand-lg nav1 ">
  <div class="container-fluid d-flex justify-content-center align-self-center">
   <h1 id="nav_text">FREE DELIVERIES. FREE RETURNS.</h1>

  </div>
</nav>
<script>
    function changeText() {
    var textElement = document.getElementById('nav_text');
    var currentText = textElement.textContent;
    
    if (currentText === 'FREE DELIVERIES. FREE RETURNS.') {
      textElement.textContent = 'EXTRA 5% DISCOUNT FOR ALL ONLINE PAYMENTS';
    } else {
      textElement.textContent = 'FREE DELIVERIES. FREE RETURNS.';
    }
  }


  setInterval(changeText, 2000);

</script>
<!-- nav1 End -->
<!-- /////////////////////////////////////////////////////////////////////////////// -->
<!-- nav2  start -->


<nav class="navbar navbar-expand-lg navbar-dark bg-dark nav_2 fixed-top">
  <div class="container-fluid">
  <a class="navbar-brand logo  d-flex justify-content-center align-self-center" href="#">
      <img src="img\puma_(1).png" alt="Puma_logo" width="60" height="70">
    </a>
    <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon text-light">

      </span>
    
    </button>
     
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <p class="nav-link active text-light nav-link-nav" onclick="new_()" aria-current="page">New</p>

        </li>
        <!-- <li class="nav-item"> -->
         
          <!--  -->
          <div class="dropdown" id="womenDropdown">
    <p class="nav-link active text-light nav-link-nav" aria-current="page"  id="womenLink">Women</p>

    

    <ul class="dropdown-menu" aria-labelledby="womenLink">
   
    <div class="d-flex ">
      <div class="m-2">
      <li><a class="dropdown-item" href="#">Shoes</a></li>
    <li><hr class="dropdown-divider custom-hr"></li>
        <li><p class="dropdown-item" onclick="Running()">Running</p></li>
        <li><p class="dropdown-item" onclick="walking()">Walking</p></li>
        <li><p class="dropdown-item" onclick="training()" >Training & Gym</p></li>
        </div>
       
        <div class="m-2">
        <li><a class="dropdown-item" href="#">Sports</a></li>
            <li><hr class="dropdown-divider custom-hr"></li>
        <li><p class="dropdown-item" onclick="Cricket()">Cricket</p></li>
        <li><p class="dropdown-item" onclick="football()">football</p></li>
        <li><p class="dropdown-item" onclick="Running()">Batminton</p></li>
        </div>

      </div>
    </ul>

</div>
<!--/////////////////////////////////////////////////////////////////////////  -->
          

        <!-- </li> -->
        <div class="dropdown" id="womenDropdown">
    <a class="nav-link active text-light nav-link-nav" aria-current="page" href="#" id="menLink">Men</a>

    

    <ul class="dropdown-menu" aria-labelledby="menLink">
   
    <div class="d-flex ">
      <div class="m-2">
      <li><a class="dropdown-item" href="#">Shoes</a></li>
    <li><hr class="dropdown-divider custom-hr"></li>
        <li><p class="dropdown-item" onclick="Running()">Running</p></li>
        <li><p class="dropdown-item" onclick="walking()">Walking</p></li>
        <li><p class="dropdown-item" onclick="training()" >Training & Gym</p></li>
        </div>
       
        <div class="m-2">
        <li><a class="dropdown-item" href="#">Sports</a></li>
            <li><hr class="dropdown-divider custom-hr"></li>
        <li><p class="dropdown-item" onclick="Cricket()">Cricket</p></li>
        <li><p class="dropdown-item" onclick="football()">football</p></li>
        <li><p class="dropdown-item" onclick="Running()">Batminton</p></li>
        </div>

      </div>
    </ul>

</div>
<!--/////////////////////////////////////////////////////////////////////////  -->
        <li class="nav-item">
          <a class="nav-link nav-link-nav active text-light" aria-current="page" href="#">Kids</a>
        </li>
        <!-- ////////////////////////////////////////////////////////////////////// -->
        <div class="dropdown" id="womenDropdown">
    <a class="nav-link active text-light nav-link-nav" aria-current="page" href="#" id="womenLink">Sports</a>

    

    <ul class="dropdown-menu" aria-labelledby="womenLink">
   
    <div class="d-flex ">
      <div class="m-2">
      <li><a class="dropdown-item" href="#">Shoes</a></li>
    <li><hr class="dropdown-divider custom-hr"></li>
        <li><p class="dropdown-item" onclick="Running()">Running</p></li>
        <li><p class="dropdown-item" onclick="walking()">Walking</p></li>
        <li><p class="dropdown-item" onclick="training()" >Training & Gym</p></li>
        </div>
       
        <div class="m-2">
        <li><a class="dropdown-item" href="#">Sports</a></li>
            <li><hr class="dropdown-divider custom-hr"></li>
        <li><p class="dropdown-item" onclick="Cricket()">Cricket</p></li>
        <li><p class="dropdown-item" onclick="football()">football</p></li>
        <li><p class="dropdown-item" onclick="Running()">Batminton</p></li>
        </div>

      </div>
    </ul>

</div>
<!--/////////////////////////////////////////////////////////////////////////  -->
      </ul>

      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success me-2" type="submit">Search</button>

<!--  -->
<div class="dropdown">
  <div  type="button" data-bs-toggle="dropdown" aria-expanded="false">
<!--  -->
<div id="cart_ani" onclick="cart()" class="cart_ani" data-totalitems="0">
        <i class="fas fa-shopping-cart"><img src="img\cart1.png" alt="cart"   width="45" height="36"></i>
      </div>

  <!--  -->
  </div>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Acount</a></li>
    <li>  <button type="button" class="btn "><a class="dropdown-item" href="singup_login_forget_logout\signup.php">Login</a></button></li>
  
    <li>  <button type="button" class="btn "><a class="dropdown-item" href="">SingUp</a></button></li>
  </ul>
</div>
<!-- //////////////////////////////// -->

 <!-- <div class="dropdown" id="womenDropdown">
    <a class="nav-link active text-light" aria-current="page" href="#" id="womenLink"><div class="cart-">
 
  <img src="img\user.png" alt="user" width="38" height="30" class="dropdown-toggle" id="dropdownMenuButton"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" 
  >
  </div></a> -->

    

<!-- ////////////////////////////////// -->



<div class="dropdown" id="womenDropdown">
    <a class="nav-link active text-light" aria-current="page" href="#" id="womenLink">
        <div class="cart-">
            <img src="img/user.png" alt="user" width="38" height="30" id="side_nav">
        </div>
    </a>
</div>

<!-- Side Navbar -->
<div id="mySidenav" class="sidenav">
    <a href="#" class="sidenav-close" onclick="closeNav()">&times;</a>
    
<div class="container">
    <div class="profile-card">
        <img src="img\profile-pic.png" alt="Profile Picture" class="profile-img">
        <h2 class="text-light"> Profile Name: <?php echo $user_name; ?></h2>

        <div class="d-flex flex-column" >
        <button class="btn btn-secondary mb-2" id="orderBtn">Your Order</button>
        
        <button class="btn btn-primary " id="logoutBtn"><a href="http://localhost/puma/singup_login_forget_logout/logoutpage/logout.php"> Log Out</a></button>
        
        </div>

    </div>
</div>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }

    // Toggle navbar when clicking on the image
    document.getElementById("side_nav").addEventListener("click", function() {
        if (document.getElementById("mySidenav").style.width === "250px") {
            closeNav();
        } else {
            openNav();
        }
    });
</script>



 
    <!--  -->

 <!-- <div class="cart-">
 
  <img src="img\user.png" alt="user" width="38" height="30" class="dropdown-toggle" id="dropdownMenuButton"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" 
  >
  </div> -->
 
</div>
  <!--  --> 
      </form>
    </div>
  </div>
</nav>
<!-- nav2 end -->

 <!-- <div class="after_navbar d-flex flex-column justify-content-center align-items-center">

<div class="af1 text-light">EXTRA 15% OFF ON ORDERS ABOVE ₹2999*</div>
<div class="af2 text-light">Limited Time Offer | Ends Today ⏳</div>
<div class="af3 text-light">Auto-applied at checkout</div>

</div> -->

<script>
        $(document).ready(function () {
  $(".add-to-cart").on("click", function () {
    var button = $(this);
    var cart = $("#cart_ani");
    var cartTotal = cart.attr("data-totalitems");
    var newCartTotal = parseInt(cartTotal) + 1;

    button.addClass("sendtocart");
    setTimeout(function () {
      button.removeClass("sendtocart");
      cart.addClass("shake").attr("data-totalitems", newCartTotal);
      setTimeout(function () {
        cart.removeClass("shake");
      }, 500);
    }, 1000);
  });
});

      </script> 
      <!-- ///////////////////////////////////////////////////////////////////////////////////// -->
      </body>
</html>