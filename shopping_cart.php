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
</head>
<body>
<div class="shopping-cart-1">
 <!-- <div class="m-2">
    <div class="card1">
        <div class="card" style="width: 15rem;">
            <img src="https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_300,h_300/global/391928/01/sv01/fnd/IND/fmt/png/RS-X-Triple-Unisex-Sneakers" class="card-img-top" alt="..."> 
            <div class="d-flex flex-row container justify-content-between">
                <h5 class="card-title">EQT Support</h5>
                <p>$49</p>
            </div>
            <div class="d-flex flex-row container justify-content-between">
                <button class="btn btn-dark mb-4 add-to-cart" data-name="EQT Support" data-price="49">Add to Cart</button>
                <h5 id="discount">20% off</h5>
            </div>
        </div>
    </div>
</div> -->

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h2>Shopping Cart</h2>
            <ul class="list-group cart container">
              
                <!--  Cart items inserted another page  -->
                  <!-- Cart items will be inserted here -->
            </ul>
            <div class="text-center mt-3">
                <button class="btn btn-danger clear-cart">Clear Cart</button>
            </div>
            <div class="text-center mt-3">
                <p>Total Items: <span id="total-items">0</span></p>
                <p>Total Price: $<span id="total-price">0.00</span></p>
                <button class="btn btn-success proceed-payment d-none" onclick="pay()">Proceed to Payment</button>
            </div>
        </div>
    </div>
</div>

</div><!--shopping card 1  -->


   <!-- ////////////////////////////////////////////////////// -->
  
<script>
    function updateProceedPaymentButton() {
        var totalPrice = parseFloat($('#total-price').text());
        if (totalPrice > 0) {
            $('.proceed-payment').removeClass('d-none');
        } else {
            $('.proceed-payment').addClass('d-none');
        }
    }

    function addItemToCart(name, price, quantity) {
        var cartItem = '<li class="list-group-item d-flex justify-content-between align-items-center">' +
            name +
            '<span class="badge badge-primary badge-pill price">' + price.toFixed(2) + '</span>' + 
            '<div class="btn-group">' +
            '<button class="btn btn-sm btn-outline-primary increment">+</button>' +
            '<span class="quantity">' + quantity + '</span>' +
            '<button class="btn btn-sm btn-outline-primary decrement">-</button>' +
            '</div>' +
            '<button class="btn btn-sm btn-outline-danger remove">Remove</button>' +
            '$'+ price+
            '</li>';

        $('.cart').append(cartItem);
        updateCartTotal();
        updateProceedPaymentButton();
    }

    function updateCartTotal() {
        var totalItems = 0;
        var totalPrice = 0;

        $('.cart .list-group-item').each(function() {
            var quantity = parseInt($(this).find('.quantity').text());
            var price = parseFloat($(this).find('.price').text());
            totalItems += quantity;
            totalPrice += quantity * price;
        });

        $('#total-items').text(totalItems);
        $('#total-price').text(totalPrice.toFixed(2));
    }

    $(document).ready(function() {
        // Add to cart button click event
        $('.add-to-cart').click(function() {
            var name = $(this).data('name');
          
            var price = parseFloat($(this).data('price'));
            addItemToCart(name, price, 1);
        });

        // Clear cart button click event
        $('.clear-cart').click(function() {
            $('.cart').empty();
            updateCartTotal();
            updateProceedPaymentButton();
            // ///////////////////////////////////////////////////
            var button = $(this);
    var cart = $("#cart_ani");
    var cartTotal = cart.attr("data-totalitems");
    var newCartTotal = parseInt(cartTotal) *0;

    button.addClass("sendtocart");
    setTimeout(function () {
      button.removeClass("sendtocart");
      cart.addClass("shake").attr("data-totalitems", newCartTotal);
      setTimeout(function () {
        cart.removeClass("shake");
      }, 200);
    }, 500);
            ////////////////////////////////////////////////////

        });

        // Increment quantity button click event
        $(document).on('click', '.increment', function() {
            var $quantity = $(this).siblings('.quantity');
            var quantity = parseInt($quantity.text());
            $quantity.text(quantity + 1);
            updateCartTotal();
            updateProceedPaymentButton();
        });

        // Decrement quantity button click event
        $(document).on('click', '.decrement', function() {
           
            var $quantity = $(this).siblings('.quantity');
            var quantity = parseInt($quantity.text());
            if (quantity > 1) {
                $quantity.text(quantity - 1);
                updateCartTotal();
                updateProceedPaymentButton();
            }
        });

        // Remove item button click event
        $(document).on('click', '.remove', function() {

            $(this).closest('li').remove();
             // ///////////////////////////////////////////////////
             var button = $(this);
    var cart = $("#cart_ani");
    var cartTotal = cart.attr("data-totalitems");
    var newCartTotal = parseInt(cartTotal) - 1;

    button.addClass("sendtocart");
    setTimeout(function () {
      button.removeClass("sendtocart");
      cart.addClass("shake").attr("data-totalitems", newCartTotal);
      setTimeout(function () {
        cart.removeClass("shake");
      }, 500);
    }, 1000);
            ////////////////////////////////////////////////////
            updateCartTotal();
            updateProceedPaymentButton();
            
        });
    });


// ///////////////////////////////////////////////////////////////////cart send into database



// Function to send cart data to PHP using AJAX
function sendCartDataToPHP(cartData) {
  
    console.log(cartData);
        $.ajax({
           
            type: "POST",
            url: "cart_database.php", 
            data: { cartData: JSON.stringify(cartData) }, // Send serialized cart data to PHP
            success: function(response) {
                // Handle success response from PHP if needed
                console.log(response,"this response");
                // Redirect to payment page or show confirmation message
                // window.location.href = "payment.php"; // Replace "payment.php" with your payment page URL
                alert("data send",response);
            },
            error: function(xhr, status, error) {
                // Handle error response if needed
                console.error(xhr.responseText);
                // Show error message to the user
                alert("Error occurred while processing payment. Please try again later.");
            }
        });
    }
    ////////////////////////////////////////////////////////////
  
    
    ////////////////////////////////////////////////////////////////////
    $(document).ready(function() {
        // Proceed to payment button click event
        $('.proceed-payment').click(function() {
            // Serialize cart data
            var cartData = [];
            $('.cart .list-group-item').each(function() {
                var item = {
                    name: $(this).text().trim().split("+")[0].split("-")[0].split("$")[0],
                    price: parseFloat($(this).find('.price').text()),
                    quantity: parseInt($(this).find('.quantity').text())
                };
                cartData.push(item);
            });  

            // Send cart data to PHP when proceeding to payment
             sendCartDataToPHP(cartData);
            // console.log(JSON.stringify(cartData));
        });

        // Other event handlers...
    });
    ////////////////////////////////////////////////////////////////////////////////
    // $(document).ready(function() {
    //     // Proceed to payment button click event
    //     $('.proceed-payment').click(function() {
    //         // Serialize cart data
           
    //     });

        // Other event handlers...
   // });
</script>


</body>
</html>
