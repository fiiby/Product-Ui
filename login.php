<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100%;
            /* background-color: papayawhip; */
            background-color:wheat;
        }

        h1 {
            color: white;
            text-align: center;
        }

        .login-form {
            max-width: 400px;
            width: 100%;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);

            background-color: lightseagreen;
        }

        .form-input {
            margin-bottom: 20px;
        }

        .username,
        .password {
            width: 100%;
            /* align-items: center; */
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            background-color:whitesmoke;
        }

        .login-btn {
            background-color: whitesmoke;
            color: black;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        .login-btn:hover {
            background-color: orangered;
        }
        a{
            text-decoration: none;
            color: blue;
        }
    </style>
</head>

<body>

    <div class="container">

        <form class="login-form" action="login.php" method="POST">
            <h1>Log in</h1>
            <div class="form-input">
                <input type="text" class="username" name="username" placeholder=" Enter username">
            </div>
            <br />
            <div class="form-input">
                <input type="password" class="password" name="password" placeholder="Enter password">
            </div>

            <select name="role">
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
            <br>
            <br>
            <div>
                <input type="submit" class="login-btn" name="login" value="login">
            </div>
            <div class="form-input">
                <h3>Don't have an account click,
                    <a href="signup.php">signup</a>
                </h3>
            </div>
        </form>
    </div>

</body>

</html>
<?php
if (isset($_POST['login'])) {
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    // connect to db:
    include_once 'db-connect.php';

    //sql query:
    $sql = "SELECT * FROM  user WHERE username = '$username' AND password = '$password'";

    // execute the query:
    $result = $database_connection->query($sql);
    if ($result->num_rows > 0) {
        echo "login successful";
        $_SESSION['username'] = $username;
        header('Location: cart.php');
    } else {
        echo "invalid credentials";
    }
}
?>