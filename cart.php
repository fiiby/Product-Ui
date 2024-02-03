<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            /* background-color: #f4f4f4; */
            background-color: lightseagreen;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .product-card {
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 10px;
        }

        .product-details {
            flex-grow: 1;
        }

        .product-image {
            max-width: 100px;
            max-height: 100px;
            margin-right: 10px;
        }

        #cart {
            margin-top: 20px;
            border-top: 2px solid #333;
            padding-top: 10px;
        }

        #cart h2 {
            text-align: center;
        }

        #cart-items {
            list-style: none;
            padding: 0;
        }

        .add-to-cart-btn {
            background-color: lightseagreen;
            color: #fff;
            border: #333;
            padding: 5px;
            /* margin: 10px; */
            cursor: pointer;
            border-radius: 3px;
            transition: all 0.25s ease;
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 10px;
        }

        .cart-item-details {
            flex-grow: 1;
        }

        .remove-btn {
            background-color: #ff3333;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 3px;
            transition: background-color 0.3s ease;
        }

        .remove-btn:hover {
            background-color: #ff6666;
        }

        .checkout-btn {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 3px;
            transition: background-color 0.3s ease;
        }

        .checkout-btn:hover {
            background-color: #555;
        }
    </style>
</head>

<body>





    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shopping Cart</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
            }

            header {
                background-color: #555;
                color: #fff;
                padding: 10px;
                text-align: center;
            }

            .container {
                max-width: 800px;
                margin: 20px auto;
                padding: 20px;
                background-color: #fff;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            .product-card {
                display: flex;
                justify-content: space-between;
                border-bottom: 1px solid #ddd;
                padding: 10px;
                margin-bottom: 10px;
            }

            .product-details {
                flex-grow: 1;
            }

            .product-image img{
                max-width: 0px;
                max-height: 50px;
                margin-right: 10px;
                size: 10px;;
            }

            #cart {
                margin-top: 20px;
                border-top: 2px solid #333;
                padding-top: 10px;
            }

            #cart h2 {
                text-align: center;
            }

            #cart-items {
                list-style: none;
                padding: 0;
            }

            .cart-item {
                display: flex;
                justify-content: space-between;
                border-bottom: 1px solid #ddd;
                padding: 10px;
                margin-bottom: 10px;
            }

            .cart-item-details {
                flex-grow: 1;
            }

            .remove-btn {
                background-color: #ff3333;
                color: #fff;
                border: none;
                padding: 5px 10px;
                cursor: pointer;
                border-radius: 3px;
                transition: background-color 0.3s ease;
            }

            .remove-btn:hover {
                background-color: #ff6666;
            }

            .checkout-btn {
                background-color: #333;
                color: #fff;
                border: none;
                padding: 10px 20px;
                cursor: pointer;
                border-radius: 3px;
                transition: background-color 0.3s ease;
            }

            .checkout-btn:hover {
                background-color: #555;
            }
        </style>
    </head>

    <body>


        <div class="container">
            <header>
                <h1>Shopping Cart</h1>
            </header>
            <div class="product-card">
                <div class="product-details">
                    <h2>Product 1</h2>
                    <p>Price: $20.00</p>
                </div>
                <div class="product-image">
                    <img src="../images/1.jpeg" alt=" Product 1">
                </div>
                <button class="add-to-cart-btn" data-product="Product 1" data-price="20.00">Add to Cart</button>
            </div>
<!-- fix img path -->
            <div class="product-card">
                <div class="product-details">
                    <h2>Product 2</h2>
                    <p>Price: $15.00</p>
                </div>
                <div class="product-image">
                    <img src="product2.jpg" alt="Product 2">
                </div>
                <button class="add-to-cart-btn" data-product="Product 2" data-price="15.00">Add to Cart</button>
            </div>

            <!-- More product cards can be added here -->

            <div id="cart">
                <ul id="cart-items"></ul>
                <button class="checkout-btn" onclick="checkout()">Checkout</button>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var addToCartButtons = document.querySelectorAll('.add-to-cart-btn');
                var cartItems = document.getElementById('cart-items');

                addToCartButtons.forEach(function(button) {
                    button.addEventListener('click', addToCart);
                });

                function addToCart(event) {
                    var product = event.target.getAttribute('data-product');
                    var price = event.target.getAttribute('data-price');

                    var cartItem = document.createElement('li');
                    cartItem.className = 'cart-item';
                    cartItem.innerHTML = `
                    <div class="cart-item-details">
                        <p>${product} - $${price}</p>
                    </div>
                    <button class="remove-btn" onclick="removeCartItem(this)">Remove</button>
                `;
                    cartItems.appendChild(cartItem);
                }

                window.removeCartItem = function(button) {
                    var item = button.parentNode;
                    item.parentNode.removeChild(item);
                };
            });

            function checkout() {
                alert('Checkout functionality to be implemented.');
            }
        </script>
    </body>

    </html>