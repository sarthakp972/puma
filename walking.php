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
.card-img-top-walk{
  
        width: 100%;
        height: 500px;
        object-fit: cover;
    

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
  <img src="https://static.nike.com/a/images/f_auto/dpr_1.0,cs_srgb/h_715,c_limit/ba78838a-da57-4104-b276-65e2dd30a034/nike-just-do-it.png" class="card-img-top-walk" alt="...">

</div>

<div class="card" style="width: 18rem;">
  <img src="https://static.nike.com/a/images/f_auto/dpr_1.0,cs_srgb/h_715,c_limit/8d075d17-3826-497a-a682-08edb1b04579/nike-just-do-it.png" class="card-img-top-walk" alt="...">

</div>

<div class="card" style="width: 18rem;">
  <img src="https://static.nike.com/a/images/f_auto/dpr_1.0,cs_srgb/h_715,c_limit/91f5147f-4008-4b88-87c4-ce17e7c5237e/nike-just-do-it.png" class="card-img-top-walk" alt="...">

</div>

<div class="card" style="width: 18rem;">
  <img src="https://static.nike.com/a/images/f_auto/dpr_1.0,cs_srgb/h_715,c_limit/c54ad905-3531-4522-9f40-7991d7b71ab0/nike-just-do-it.png" class="card-img-top-walk" alt="...">

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