<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
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
    </form>
</body>

</html><?php

        class Admin extends User
        {
            public function uploadProduct($productName, $productImage)
            {
                echo "Admin {$this->getUsername()} uploaded product '{$productName}' with image: {$productImage}";
            }
        }
