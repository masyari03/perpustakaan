<?php
session_start();
include('db.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Replace these with actual authentication code
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'admin' && $password == 'password') {
        $_SESSION['username'] = $username;
        $_SESSION['loggedin'] = true;
        header('Location: pinjam/peminjaman.php');
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}

?>

<!DOCTYPE html> 

<html lang="en"> 

<head> 

 <meta charset="UTF-8"> 

 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

 <title>Login</title> 


</head> 
<style></style>
<body style="background-color: rgb(133, 201, 131);"> 

 <h2 style="text-align: center; color: rgb(255, 255, 255);">Login e-Perpustakaan</h2> 

 <form action="proses_login.php" method="post" style="text-align: center;"> 

 <label for="username" style="color: white;">Username:</label> 
 <input type="text" id="username" name="username" required><br><br>

 <label for="password" style="color: white;">Password:</label> 
 <input type="password" id="password" name="password" required><br><br>

 <input type="submit" value="Login"> 

 </form> 

</body> 

</html>