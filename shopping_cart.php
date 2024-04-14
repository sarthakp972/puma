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
<>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h2>Shopping Cart</h2>
            <ul class="list-group cart container  ">
              <!-- Cart items will be inserted here -->
          
              <!--  -->
            </ul>
            <div class="text-center mt-3">
              <button class="btn btn-danger clear-cart">Clear Cart</button>
            </div>
            <div class="text-center mt-3">
              <p>Total Items: <span id="total-items">0</span></p>
              <p>Total Price: $<span id="total-price">0.00</span></p>
              <button class="btn btn-success proceed-payment d-none">Proceed to Payment</button>
            </div>
          </div>
        </div>
</div>
<!-- ////////////////////////////////////////////////// -->
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
            // //////////////////////////////////////
            var cart = $("#cart_ani");
    var cartTotal = cart.attr("data-totalitems");
    
    // Decrease the total items count
    var newCartTotal = 0;
    
    cart.attr("data-totalitems", newCartTotal);
            // /////////////////////////////////////
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
// ///////////////////
var cart = $("#cart_ani");
    var cartTotal = cart.attr("data-totalitems");
    
    // Decrease the total items count
    var newCartTotal = parseInt(cartTotal) - 1;
    
    cart.attr("data-totalitems", newCartTotal);


            $(this).closest('li').remove();
            updateCartTotal();
            updateProceedPaymentButton();
    
    //  console.log(newCartTotal)
        });
    });
</script>


</body>
</html>
