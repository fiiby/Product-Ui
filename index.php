<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User System</title>
</head>

<body>
       <!-- <form action="process.php" method="post">
        <h2>Customer Section</h2>
        <label for="customer-username">Username:</label>
        <input type="text" name="customer-username" required>
        <label for="customer-password">Password:</label>
        <input type="password" name="customer-password" required>
        <button type="submit" name="customer-submit">View Product</button>
    </form> -->
     <?php
     
include_once("product.php");
spl_autoload_register(function($class){
    $path = __DIR__ . '/../' . lcfirst(str_replace('\\', '/', $class)) . '.php';
    require $path;
});

use Admin\Admin;
use Customer\Customer;

 $admin = new Admin(1, "john", "john@gmail.com", "123");

$admin->upload_product();

echo "<br>";

$customer = new Customer(1, "mitchelle", "mitchelle@gmail.com", "123");
$customer->view_product();


// include __DIR__ . "/" . "./product.php";
?>
    
    <!-- Admin Section -->
    <!--
    <form action="process.php" method="post">
        <h2>Admin Section</h2>
        <label for="admin-username">Username:</label>
        <input type="text" name="admin-username" required>
        <label for="admin-password">Password:</label>
        <input type="password" name="admin-password" required>
        <label for="product-name">Product Name:</label>
        <input type="text" name="product-name" required>
        <label for="product-image">Product Image URL:</label>
        <input type="text" name="product-image" required>
        <button type="submit" name="admin-submit">Upload Product</button>
    </form> -->

    <!-- Customer Section -->
    
  <!-- nots:
  files system: 
  views folder: login/signup/product/cart. 
app folder:  user/admin/customer/.
index no folder.
process which folder?
db by it self.
asset folder: images
fix grid in product pg.
 
-->


</body>

</html>