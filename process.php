<?php

require_once 'User.php';
require_once 'Admin.php';
require_once 'Customer.php';
require_once 'product.php';

if (isset($_POST['Admin'])) {
    $adminUsername = $_POST['admin-username'];
    $adminPassword = $_POST['admin-password'];
    $productName = $_POST['product-name'];
    $productImage = $_POST['product-image'];

    try {
        $admin = new Admin(1, $adminUsername, 'admin@example.com', $adminPassword);
        $admin->uploadProduct($productName, $productImage);
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}

if (isset($_POST['customer-submit'])) {
    $customerUsername = $_POST['customer-username'];
    $customerPassword = $_POST['customer-password'];

    try {
        $customer = new Customer(2, $customerUsername, 'customer@example.com', $customerPassword);
        $customer->viewProduct();
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}

/*  
This PHP code appears to be handling form submissions for an e-commerce website. Let's break it down step by step:

It includes necessary PHP files: User.php, Admin.php, Customer.php, and product.php. These files likely contain classes and functions needed for user authentication, product management, etc.

It checks if a form with the Admin key is submitted (isset($_POST['Admin'])). If so, it assumes it's an admin action and proceeds to handle it.

a. It retrieves the admin's username, password, product name, and product image from the form ($_POST).

b. It then attempts to instantiate an Admin object with the provided admin credentials.

c. If successful, it calls the uploadProduct() method of the Admin object to upload the product with the given name and image.

If an exception occurs during the process (e.g., invalid credentials, database connection issue), it catches the exception and echoes an error message.

It then checks if a form with the key customer-submit is submitted (isset($_POST['customer-submit'])). If true, it assumes it's a customer action and proceeds to handle it.

a. It retrieves the customer's username and password from the form.

b. It attempts to instantiate a Customer object with the provided customer credentials.

c. If successful, it calls the viewProduct() method of the Customer object to view products.

Again, if an exception occurs during this process, it catches the exception and echoes an error message.

This code assumes that there are HTML forms somewhere in the application that have inputs named admin-username, admin-password, product-name, product-image, customer-username, customer-password, and customer-submit. When these forms are submitted, the PHP script handles the actions accordingly, either uploading a product as an admin or viewing products as a customer.*/
