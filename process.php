<?php

// require_once 'User.php';
// require_once 'Admin.php';
// require_once 'Customer.php';
// require_once 'product.php';

if (isset($_POST['admin-submit'])) {
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
