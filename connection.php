<?php
ob_start(); // Start output buffering
?>
<?php
session_start();
echo "welcome" . $_SESSION['user_name'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Profile</title>
    
</head>
<body>



<h2>Welcome</h2>
<p>Name: YourName</p>
<p>Age: 17</p>

<a href="logout.php">logout</a>
<a href="default.php">google</a>
</body>
</html>
<?php
$userprofile = $_SESSION['user_name'];

if($userprofile == true)
{
echo 'hello';
}
else
{
    header('location:index.php');
    echo ("you are not welcome");
}
?>

<?php
ob_end_flush(); // End output buffering and send the output to the browser
?>