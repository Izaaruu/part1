
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form class="form" action="tambahpengguna.php" method="post">
        <table width="25%" border="0" align="">
           
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" placeholder="username"></td>
            </tr>
            <tr>
                <td>Id_pemain</td>
                <td><input type="text" name="id_pemain" placeholder="id_pemain"></td>
            </tr>
            <tr>
                <td>email</td>
                <td><input type="text" name="email" placeholder="email"></td>
            </tr>
            <tr>
                <td>pasword</td>
                <td><input type="text" name="password" placeholder="password"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" values="submit"></td>
            </tr>
        </table>
    </form>
    <?php
    include "koneksi.php";
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $id_pemain = $_POST['id_pemain'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $result = mysqli_query($koneksi, "INSERT INTO pembeli(username,id_pemain,email,password) VALUES('$username','$id_pemain','$email','$password')");
    }
?>


</body>
</html>