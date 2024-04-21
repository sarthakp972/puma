<style>
    .card-img-top-new {
        width: 100%;
        height: 500px;
        object-fit: cover;
    }
    .background-image-new {
        background-image: url('https://cdn.sanity.io/images/qa41whrn/prod/628cd68fef8c4a879b66920fda82c8e88fafb8d4-2000x694.jpg?w=1440&q=80&auto=format');
        background-size: cover;
        background-repeat: no-repeat;
        width: 100vw;
        height: 75vh;
    }

    @media screen and (max-width: 600px) {
        .background-image-new {
            height: 50vh;
        }
    }

    .new-card {
        background-color: rgba(255, 0, 0, 0); /* Transparent red background */
        border: none;
        color: white;
        opacity: 0.7;
    }
</style>


<div class="mt-4 d-flex flex-wrap justify-content-around align-items-center">
<div class="card mb-4" style="max-width: 18rem;">
        <img src="https://cdn.sanity.io/images/qa41whrn/prod/9cd925e7d6bca8416c68b54f91539ad0d4395db4-1334x2000.png?w=1440&q=80&auto=format" class="card-img-top-new" alt="...">
    </div>

    <div class="card mb-4" style="max-width: 18rem;">
        <img src="https://cdn.sanity.io/images/qa41whrn/prod/c24c3c7439c0ae9afdcaf35d8c3c8226b11bc8d5-2983x5304.jpg?w=1440&q=80&auto=format" class="card-img-top-new" alt="...">
    </div>

    <div class="card mb-4" style="max-width: 18rem;">
        <img src="https://cdn.sanity.io/images/qa41whrn/prod/beefe581e688627d02c7f1a6708f92fb1da3b1f5-1500x2000.png?w=1440&q=80&auto=format" class="card-img-top-new" alt="...">
    </div>

    <div class="card mb-4" style="max-width: 18rem;">
        <img src="https://cdn.sanity.io/images/qa41whrn/prod/e279b173ffe6692893d555ee2e71e6e81059fc94-1334x2000.png?w=1440&q=80&auto=format" class="card-img-top-new" alt="...">
    </div>
</div>

<div class="background-image-new">
    <div class="background-image-new d-flex justify-content-center align-items-center ">
        <div class="card text-center new-card">
            <div class="card-body new-card">
                <h1 class="card-title text-light">PUMA x HARRDY SANDHU</h1>
                <h5 class="card-text text-warning">STYLE. OK. PLEASE.</h5>
                <a href="#" class="btn btn-dark">SHOP COLLECTION</a>
            </div>
        </div>
    </div>
</div>

<?php
   include 'cart.php';
   ?>
   <?php
   include 'footer.php';
   ?>