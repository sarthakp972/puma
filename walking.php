<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> 
    <style>
        .banner_walk{
            background-image: url('https://cdn.sanity.io/images/qa41whrn/prod/91ab72770018a3dd837679078c58c8a855b91f67-2880x1040.jpg?w=2160&q=80&auto=format');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-family: Arial, sans-serif;
        }
        .card_banner_walk {
    background-color: rgba(255, 255, 255, 0); /* Transparent background */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
.af_n_walk{
    background: linear-gradient(45deg, #FFD700, #9370DB, #8FBC8F);
}
    </style>
</head>
<body>

   

<div class="after_navbar d-flex flex-column justify-content-center align-items-center af_n_walk">

<div class="af1 text-dark">EXTRA 15% OFF ON ORDERS ABOVE ₹2999*</div>
<div class="af2 text-dark">Limited Time Offer | Ends Today ⏳</div>
<div class="af3 text-dark">Auto-applied at checkout</div>

</div>  

<!-- ///////////////////////////////////////////////////// -->
<div class="mt-4 d-flex justify-content-around align-items-center">
<div class="card" style="width: 18rem;">
  <img src="https://cdn.sanity.io/images/qa41whrn/staging/b5e75f5263f6c02c4d18f277d3768276b325a900-1240x1754.jpg" class="card-img-top" alt="...">

</div>

<div class="card" style="width: 18rem;">
  <img src="https://cdn.sanity.io/images/qa41whrn/staging/d37897a0cc3842268239d4f386f3055e81d7aaa7-595x842.jpg" class="card-img-top" alt="...">

</div>

<div class="card" style="width: 18rem;">
  <img src="https://cdn.sanity.io/images/qa41whrn/staging/6903c322e781dbd0f47b441408023e15844c1108-595x842.jpg" class="card-img-top" alt="...">

</div>

<div class="card" style="width: 18rem;">
  <img src="https://cdn.sanity.io/images/qa41whrn/staging/011f8c7435d680e6f1c08b654401ce00cc85e006-595x842.jpg" class="card-img-top" alt="...">

</div>
</div>
<!-- ////////////////////////////////////////////////////////// -->
<div class="banner_walk m-4 flex justify-content-start align-items-center ">
    <div class="m-4">

 <div class="flex justify-content-start align-items-center" >
    <h1>
 EXTRA 20% OFF
ON EVERYTHING*
</h1>
<p>
Auto-applied at checkout
</p>
 </div>
<!--  -->
 <div class="flex justify-content-between align-items-center">
 <button type="button" class="btn btn-dark">For HIM</button>
 <button type="button" class="btn btn-dark">FOR HER</button>
 <button type="button" class="btn btn-dark">FOR KIDS</button>
 </div>

</div>

</div>
<!-- ////////////////////////////////////////////////////////// -->
<div class="m-4">
<?php
  //  include 'slide.php';
   ?>
</div>

<?php
   include 'cart.php';
   ?>

<div class="m-4">
<?php
   include 'footer.php';
   ?>
  </div>


</body>
</html>