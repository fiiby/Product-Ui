

<?php

class User {
    protected $id;
    protected $username;
    protected $email;
    protected $password;

    public function __construct($id, $username, $email, $password) {
        $this->id = $id;
        $this->username = $username;
        $this->setEmail($email);
        $this->password = $password;
    }

    public function getId() {
        return $this->id;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    protected function setEmail($email) {
        // Basic email validation
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
        } else {
            throw new InvalidArgumentException("Invalid email address");
        }
    }
    
    // connect to db:
    include_once 'db-connect.php';

    //sql query:
    $sql = "SELECT * FROM  User WHERE username = '$username' AND password = '$password'";

    // execute the query:
    $result = $database_connection->query($sql);
    if ($result->num_rows > 0) {
        echo "login successful";
        $_SESSION['username'] = $username;
        header('Location: product.php');
    } else {
        echo "invalid credentials";
    }
}
?>
</body>
</htm>