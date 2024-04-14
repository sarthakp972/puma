<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .slide_img{
                height:100vh;
        }
    </style>
</head>
<body>

<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="https://cdn.sanity.io/images/qa41whrn/prod/572ae0233283c2e721b4e14f20c7674b2a699020-1331x2000.png?" class="d-block slide_img w-100" alt="...">
      <!-- -->
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="https://cdn.sanity.io/images/qa41whrn/staging/97012ef77a623ec72883dec6db7e2b2bd50420d8-1334x2000.png?" class="slide_img d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://cdn.sanity.io/images/qa41whrn/prod/43289f1677dd7995b25b1b000441cbe11801855e-543x864.jpg?" class="slide_img d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    
</body>
</html>