
<?php

class Customer extends User
{
    public function viewProduct()
    {
        echo "Customer {$this->getUsername()} viewed a product";
    }
}
