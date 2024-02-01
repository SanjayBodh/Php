<?php
session_start();
?>
<?php
ob_start(); // Start output buffering
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login</h2>

<!-- Login form -->
<form action="" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" required><br>

    <label for="password">Password:</label>
    <input type="password" name="password" required><br>

    <input type="submit" name="submit" value="Login">
</form>

<?php

if(isset($_POST['submit'])){
    
    $username = $_POST['username'];
    $password = $_POST['password'];

   
    if ($username === "sanjay" && $password === "password") {
        $_SESSION['user_name'] = $username;
        header("Location: connection.php");
        exit; 
    } else {
        echo "<p>Invalid username or password.</p>";
    }
}
?>

</body>
</html>

<?php
ob_end_flush(); // End output buffering and send the output to the browser
?>





