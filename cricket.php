

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
        .banner_1_cri{
            background-image: url('https://cdn.sanity.io/images/qa41whrn/prod/5142da34333160f19fe3251a5eff535be2fb67f6-2880x1040.jpg?w=2160&q=80&auto=format');
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
        .card_banner_1 {
    background-color: rgba(255, 255, 255, 0); /* Transparent background */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
.af_na_cri{
    background: linear-gradient(45deg, #20B2AA, #FF6F61, #EEE8AA);
}
.card-img-top-cricket{
  width: 100%;
        height: 500px;
        object-fit: cover;
}
    </style>
</head>
<body>

   

<div class="after_navbar af_na_cri d-flex flex-column justify-content-center align-items-center bg-danger">

<div class="af1 text-dark">EXTRA 15% OFF ON ORDERS ABOVE ₹2999*</div>
<div class="af2 text-dark">Limited Time Offer | Ends Today ⏳</div>
<div class="af3 text-dark">Auto-applied at checkout</div>

</div>  

<!-- ///////////////////////////////////////////////////// -->
<div class="mt-4 d-flex justify-content-around align-items-center">
<div class="card" style="width: 18rem;">
  <img src="https://cdn.sanity.io/images/qa41whrn/prod/dbae8850e093d6b61ca2db9f14d07597ef1660f3-1536x1536.jpg?w=2160&q=80&auto=format" class="card-img-top-cricket" alt="...">

</div>

<div class="card" style="width: 18rem;">
  <img src="https://cdn.sanity.io/images/qa41whrn/prod/4c6bb733dc5f25deb99c5a4789b588e5371fca5a-3200x3200.jpg?w=2160&q=80&auto=format" class="card-img-top-cricket" alt="...">

</div>

<div class="card" style="width: 18rem;">
  <img src="https://cdn.sanity.io/images/qa41whrn/prod/f7f7c5eebccec6aba4a60cd613df703c59c5554b-1536x1536.jpg?w=2160&q=80&auto=format" class="card-img-top-cricket" alt="...">

</div>

<div class="card" style="width: 18rem;">
  <img src="https://cdn.sanity.io/images/qa41whrn/prod/dbae8850e093d6b61ca2db9f14d07597ef1660f3-1536x1536.jpg?w=2160&q=80&auto=format" class="card-img-top-cricket" alt="...">

</div>
</div>
<!-- ////////////////////////////////////////////////////////// -->
<div class="banner_1_cri m-4 flex justify-content-center align-items-center ">
    <div class="m-4">

 <div class="flex justify-content-start align-items-center" >
    <h1 class="text-dark">
 EXTRA 20% OFF
ON EVERYTHING*
</h1>
<p class="text-dark">
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