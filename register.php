<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <?php
ob_start();
include "koneksi.php";
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    
    $email = $_POST['email'];
   
    $password = $_POST['password'];

    $result = mysqli_query($koneksi, "INSERT INTO pelanggan(username, email, password) VALUES('$username', '$email', '$password')");

    if ($result) {
        header("Location: index.php");
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
     
}
?>
            <header>Sign Up</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">username</label>
                    <input type="text" name="username" id="username" required>
                </div>
                <div class="field input">
                    <label for="email">email</label>
                    <input type="text" name="email" id="email" required>
                </div>
                <div class="field input">
                    <label for="password">password</label>
                    <input type="password" name="password" id="password" required>
                </div>
               
                <div class="field input">
                    <input type="submit" class="btn" name="submit" value="register" required>
                </div>
                <div class="links">
                   Already a member ? <a href="login.php">Sign in</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>