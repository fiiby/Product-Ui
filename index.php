<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User System</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: lightseagreen;
        }

        header {
            background-color: #555;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .nav ul li {
            display: inline;
            padding: 10px;
            background-color: lightseagreen;
            margin: 10px;
            border-radius: 3px;
            font-size: larger;
            text-decoration-line: none;
            color: white;
        }

        a {
            text-decoration-line: none;
            color: #fff;
        }
    </style>
</head>

<body>
    <header>
        <h1>Welcome to My Shop</h1>
        <nav>
            <div class="nav">
                <ul>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="signup.php">Signup</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <h2>Admin Section</h2>
    <!-- <form action="process.php" method="post">
        <label for="admin-username">Username:</label>
        <input type="text" id="admin-username" name="admin-username" required><br>
        <label for="admin-password">Password:</label>
        <input type="password" id="admin-password" name="admin-password" required><br>
        <label for="product-name">Product Name:</label>
        <input type="text" id="product-name" name="product-name" required><br>
        <label for="product-image-url">Product Image URL:</label>
        <input type="url" id="product-image-url" name="product-image-url" required><br>
        <input type="submit" value="Upload Product">
    </form> -->
    <form action="process.php" method="post">
        <input type="hidden" name="user_type" value="admin">
        <label for="admin_username">Username:</label><br>
        <input type="text" id="admin_username" name="username"><br>
        <label for="admin_password">Password:</label><br>
        <input type="password" id="admin_password" name="password"><br>
        <label for="product_name">Product Name:</label><br>
        <input type="text" id="product_name" name="product_name"><br>
        <label for="product_image">Product Image URL:</label><br>
        <input type="text" id="product_image" name="product_image"><br><br>
        <input type="submit" value="Upload Product">
    </form>

    <h2>Customer Section</h2>
    <!-- <form action="product.php" method="post">
        <label for="customer-username">Username:</label>
        <input type="text" id="customer-username" name="customer-username" required><br>
        <label for="customer-password">Password:</label>
        <input type="password" id="customer-password" name="customer-password" required><br>
        <input type="submit" value="View Product">
    </form> -->

   
    <form action="process.php" method="post">
        <input type="hidden" name="user_type" value="customer">
        <label for="customer_username">Username:</label><br>
        <input type="text" id="customer_username" name="username"><br>
        <label for="customer_password">Password:</label><br>
        <input type="password" id="customer_password" name="password"><br><br>
        <input type="submit" value="View Product">
    </form>
</body>

</html>

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