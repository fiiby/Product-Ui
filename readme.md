Object-Oriented PHP Practical Exercise with User Interface assignment:

Instructions:
1. Create three PHP classes: User, Admin, and Customer to model a simple user system.
2. The User class should have the following properties: id, username, email, and password.
Implement a constructor method to initialize these properties.
3. The Admin class should inherit from the User class. Add a method named uploadProduct
that simulates the upload of a product with an image.
4. The Customer class should also inherit from the User class. Add a method named
viewProduct that simulates the viewing of a product.
5. Create an HTML form (index.html) with two sections:
a. Admin Section: Allows the admin to input their username, password, product
name, and product image URL for product upload.
b. Customer Section: Allows the customer to input their username and password for
product viewing.
6. Create a PHP processing script (process.php) to handle form submissions. In the script:
a. Check the submitted username and password.
b. Instantiate the appropriate class (Admin or Customer) based on the login
credentials.
c. Use the instantiated object to call the relevant method (uploadProduct or
viewProduct).
7. Demonstrate the functionality by testing the UI. Open the index.html file in a web
browser, interact with the forms, and observe the results.
8. Implement encapsulation by making appropriate properties private or protected in the
classes.
9. Implement basic data validation for the email property. Ensure that the email is in a valid
format.
Assignment Submission:
Ensure that your code is well-commented and follows best practices.
Test the UI by opening the index.html file in a web browser and interacting with the forms.
Submit by presenting your work on 2nd February 2024.
Grading Criteria:
Correct implementation of classes and methods: 10 marks
Proper use of HTML and PHP for the UI: 3 marks
Proper instantiation and testing of objects with UI interaction: 2 marks
Note:
Feel free to add any additional features or improvements to enhance the functionality.
Ensure that your code is well-organized and follows best practices for Object-Oriented
Programming in PHP.
Good luck!


/* process.php:
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

This code assumes that there are HTML forms somewhere in the application that have inputs named admin-username, admin-password, product-name, product-image, customer-username, customer-password, and customer-submit. When these forms are submitted, the PHP script handles the actions accordingly, either uploading a product as an admin or viewing products as a customer.

****************************************

Admin.php :
This PHP code defines a class `Admin` that extends the `User` class. Let's break it down step by step:

1. `class Admin extends User`: This line declares a new class named `Admin` which inherits from the `User` class. In object-oriented programming, inheritance allows a class (in this case, `Admin`) to inherit properties and methods from another class (`User`). This means that the `Admin` class will have access to all public and protected properties and methods of the `User` class.

2. `public function uploadProduct($productName, $productImage)`: This line defines a public method named `uploadProduct` within the `Admin` class. This method takes two parameters: `$productName`, which represents the name of the product to be uploaded, and `$productImage`, which represents the image associated with the product.

3. `echo "Admin {$this->getUsername()} uploaded product '{$productName}' with image: {$productImage}";`: This line outputs a message to the screen using the `echo` statement. The message includes dynamic content generated by calling the `getUsername()` method inherited from the `User` class. Here's a breakdown of the message:

   - `"Admin "`: This part of the message indicates that the action was performed by an admin.
   - `{$this->getUsername()}`: This part dynamically retrieves the username of the admin who performed the action. `{$this->getUsername()}` calls the `getUsername()` method inherited from the `User` class using the `$this` keyword, which refers to the current instance of the `Admin` class.
   - `" uploaded product '`": This part of the message provides context that a product was uploaded.
   - `{$productName}`: This part dynamically inserts the name of the product that was uploaded.
   - `" with image: "`: This part of the message provides additional context.
   - `{$productImage}`: This part dynamically inserts the image associated with the uploaded product.

Overall, this code defines a class `Admin` that has a method `uploadProduct` for uploading products. When an admin uploads a product, a message is echoed to the screen indicating who performed the action and details about the product uploaded.

***************************************************
customer.php:
This PHP code defines a class `Customer` that extends the `User` class. Let's delve deeper into each component:

1. `class Customer extends User`: This line declares a new class named `Customer` which inherits from the `User` class. In object-oriented programming, inheritance allows a class (in this case, `Customer`) to inherit properties and methods from another class (`User`). This means that the `Customer` class will have access to all public and protected properties and methods of the `User` class.

2. `public function viewProduct()`: This line defines a public method named `viewProduct` within the `Customer` class. This method does not take any parameters.

3. `echo "Customer {$this->getUsername()} viewed a product";`: This line outputs a message to the screen using the `echo` statement. The message includes dynamic content generated by calling the `getUsername()` method inherited from the `User` class. Here's a breakdown of the message:

   - `"Customer "`: This part of the message indicates that the action was performed by a customer.
   - `{$this->getUsername()}`: This part dynamically retrieves the username of the customer who performed the action. `{$this->getUsername()}` calls the `getUsername()` method inherited from the `User` class using the `$this` keyword, which refers to the current instance of the `Customer` class.
   - `" viewed a product"`: This part of the message provides context that the customer viewed a product.

Overall, this code defines a class `Customer` that has a method `viewProduct` for viewing products. When a customer views a product, a message is echoed to the screen indicating who performed the action and the action itself. This method leverages inheritance, allowing the `Customer` class to utilize functionality defined in the parent `User` class.
******************************************************
User.php:
This PHP code defines a class named `User` which represents a user entity in an application. Let's analyze the code step by step:

1. `class User { ... }`: This line defines a class named `User`. The class encapsulates the properties and methods associated with a user.

2. Properties:
   - `$id`, `$username`, `$email`, `$password`: These are protected properties of the `User` class. They store information about the user's ID, username, email, and password respectively. Being `protected`, these properties can be accessed only within the class itself and by its subclasses.

3. Constructor method (`__construct`):
   - `public function __construct($id, $username, $email, $password) { ... }`: This is the constructor method of the `User` class. It is automatically called when an instance of the class is created (using the `new` keyword). The constructor initializes the user object with the provided values for `$id`, `$username`, `$email`, and `$password`.

4. Getter methods:
   - `public function getId()`, `public function getUsername()`, `public function getEmail()`, `public function getPassword()`: These are getter methods that allow access to the user's properties (id, username, email, password) from outside the class. They return the respective property values.

5. Protected method:
   - `protected function setEmail($email) { ... }`: This is a protected method called `setEmail`. It is responsible for setting the email property of the user object. It performs basic email validation using PHP's `filter_var` function with the `FILTER_VALIDATE_EMAIL` filter. If the provided email is valid, it sets the email property; otherwise, it throws an `InvalidArgumentException`.

6. `public function authenticate($username, $password) { ... }`: This is a public method named `authenticate`. It takes two parameters, `$username` and `$password`, representing the credentials of a user attempting to log in.
   - Inside the method, it includes the `db-connect.php` file to establish a connection to the database.
   - It constructs an SQL query to select user data based on the provided username and password.
   - It executes the query and checks if any rows are returned. If the query returns results (i.e., if the user credentials are valid), it echoes "login successful" to indicate a successful login, sets a session variable `$_SESSION['username']` with the logged-in username, and redirects the user to `product.php`. If no rows are returned (i.e., if the user credentials are invalid), it echoes "invalid credentials".

Overall, this class encapsulates user-related functionality such as property initialization, getter methods for accessing user properties, email validation, and user authentication against a database.

**************************************************
