<?php

        class Admin extends User
        {
            public function uploadProduct($productName, $productImage)
            {
                echo "Admin {$this->getUsername()} uploaded product '{$productName}' with image: {$productImage}";
            }
        }
