<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="process.php" method="post">
        <h2>Customer Section</h2>
        <div>
            <label for="customer-username">Username:</label>
            <input type="text" name="customer-username" required>
        </div>
        <br>

        <div>
            <label for="customer-password">Password:</label>
            <input type="password" name="customer-password" required>
        </div>
        <br>
        <div>
            <button type="submit" name="customer-submit">View Product</button>
        </div>

    </form>
</body>

</html>

<?php

class Customer extends User
{
    public function viewProduct()
    {
        echo "Customer {$this->getUsername()} viewed a product";
    }
}
