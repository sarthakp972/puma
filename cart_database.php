


<!--var userId = <?php //echo json_encode($_SESSION['user_id']); ?>;
console.log("User ID:", userId); ///////////////////////////////////////////////////////////////////////////////////////// -->
<?php
session_start();
// Database connection details (replace with your actual credentials)
 $servername = "localhost";
$username = "root";
$password = "";
$dbname = "sing_login";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Check if cart data is received
if (is_null($_POST['cartData'])) {
  die("Error: No cart data received.");
}

// Get cart data from POST request (assuming it's JSON-encoded)
$cartData = json_decode($_POST['cartData'], true);

// Loop through cart items and insert data (replace with your table structure)
foreach ($cartData as $item) {
  $sql = "INSERT INTO user_info_product (product_name, product_price, product_quantity, id)
  VALUES ('" . $item['name'] . "', " . $item['price'] . ", " . $item['quantity'] . ", " . $_SESSION['user_id'] . ")";



  if (mysqli_query($conn, $sql)) {
    echo "Item added successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

mysqli_close($conn);
?>