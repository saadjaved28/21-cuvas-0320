<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: aqua;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: transparent;
            color: #4caf50;
            border: 2px solid #4caf50;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            float: right;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        button:hover {
            background-color: #4caf50;
            color: #fff;
        }

        /* CSS code for styling the login link */
a {
  text-decoration: none; /* Remove underline from the link */
  color: #007bff; /* Set the text color to a blue shade (you can change it as needed) */
  font-weight: bold; /* Make the text bold */
  padding: 5px 10px; /* Add padding to the link */
  border: 1px solid #007bff; /* Add a border around the link */
  border-radius: 5px; /* Add rounded corners to the border */
  transition: background-color 0.3s ease; /* Add a smooth transition effect for the background color */
}

a:hover {
  background-color: #007bff; /* Change the background color on hover */
  color: #fff; /* Change the text color on hover */
}

    </style>
</head>
<body>

<form method="post" action="">
    <h1 >Login form</h1>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <button type="submit" name="login">Login</button>
    <a href="registration.php">back</a>
</form>

</body>
</html>


<?php
include('db.php');
session_start();

if (isset($_POST['login'])) {
   //input
    $email = $_POST['email'];
    $password = $_POST['password'];



    //validate
    $stmt = $con->prepare("SELECT * FROM reg WHERE email=? AND password=?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result) {
        if ($result->num_rows > 0) {


            //login suc
           
            $_SESSION['email'] = $email;
            $_SESSION['loggedin'] = true;
            header("Location: mainpage.php");
            exit();

        } else {
            echo "Invalid email or password";
        }
    } else {
        echo "Error: " . $con->error;
    }

    $stmt->close();
}
?>
