<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
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
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
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
    <h1>Create account</h1>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <button type="submit" name="sub">Register</button>
    <a href="login.php">Login</a>
</form>

</body>
</html>

<?php
include('db.php');
if(isset($_POST['sub']))
{
    //user input
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
//insert into database
$sql = "INSERT INTO reg (name, email, password) VALUES ('$name', '$email', '$password')";


//execute qry
if ($con->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

//connection close
$con->close();
}
?>
