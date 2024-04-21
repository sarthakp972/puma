<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Circular </title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .circular-frame {
      width: calc(15% - 20px); /* 25% width for each circular frame with 20px margin */
      height: auto;
      border-radius: 50%;
      overflow: hidden;
      border: 2px solid rgba(230, 99, 0, 0.6);
    
      margin: 10px; /* Adjust the margin to create gaps between circular frames */
    }

    .circular-frame img {
      width: 100%;
      height: auto;
      display: block;
      background-size: cover
    }
    .background-image {
    background-image: url('https://cdn.sanity.io/images/qa41whrn/prod/6aa27162eb6203da98b73b7a5328c75ddcc1c393-1440x500.jpg?w=1440&q=80&auto=format');
    background-size: cover;
    background-repeat: no-repeat;
    /* background-position: center top;   */
    width: 100vw; /* 100% of viewport width */
    height: 75vh; /* 100% of viewport height */
}

@media screen and (max-width: 600px) {
    .background-image {
        height: 50vh; /* Adjust height for small devices */
    }
}


    @media (max-width: 576px) {
      /* For smaller screens, make each circular frame occupy 100% width */
      .circular-frame {
        width: 100%;
        margin: 10px 0; /* Adjust the margin for smaller screens */
      }
    }
    .card {
      background: transparent;
      border: none;
      margin-top: 15vh; /* Adjust the top margin to center vertically */
    }
  </style>
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col text-center">
      <div class="d-flex flex-wrap justify-content-center m-4">
        <!-- Circular Frames -->
       
        <div class="circular-frame">
          <img src="https://image.useinsider.com/pumaindia/defaultImageLibrary/Nitro-1709634960.jpeg" alt="Placeholder Image">
         </div>
     
        
        

        <div class="circular-frame">
          <img src="https://image.useinsider.com/pumaindia/defaultImageLibrary/Kids-1709634911.jpeg" alt="Placeholder Image">
        
        </div>
    
    

        <div class="circular-frame">
          <img src="https://image.useinsider.com/pumaindia/defaultImageLibrary/3-1709900898.jpeg" alt="Placeholder Image">
        </div>

        <div class="circular-frame">
          <img src="	https://image.useinsider.com/pumaindia/defaultImageLibrary/Exclusives-1709877142.jpeg" alt="Placeholder Image">
        </div>

        <div class="circular-frame">
          <img src="https://image.useinsider.com/pumaindia/defaultImageLibrary/2-1709900914.jpeg" alt="Placeholder Image">
        </div>
        <!-- End Circular Frames -->
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS (optional) -->
<div class="background-image">
<div class="background-image d-flex justify-content-center align-items-center">
    <div class="card text-center">
      <div class="card-body">
        <h1 class="card-title text-light">PUMA x HARRDY SANDHU</h1>
        <h5 class="card-text text-warning">STYLE. OK. PLEASE.</h5>
        <a href="#" class="btn btn-dark">SHOP COLLECTION</a>
      </div>
    </div>
  </div>
</div>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    
</body>
<html>







