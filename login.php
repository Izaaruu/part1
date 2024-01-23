<?php
include "koneksi.php";
session_start();
if (isset($_POST['login'])) {
    $user = $_POST['username'];

    $pass = $_POST['password'];

    if ($user!="" && $pass!="") {
        $mysql=mysqli_query($koneksi, "SELECT * FROM pembeli WHERE username='$user' and password='$pass'");
        if($data = mysqli_fetch_array($mysql)){
            $_SESSION['username']=$data['username'];

            $_SESSION['password']=$data['password'];
            header('location:crud.php');
        }else{
            ?>
            <div class="alert alert-danger" role="alert">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <?php $error="";?> username atau password salah
            </div><?php
        }
    }

} ?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <title>Form login</title>
  <style>

    body {
      margin: 0;
      padding: 0;
      background-image: url('bg.jpg');
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      
    }
    .card {
      background-color: #f1f1f1;
      height: 600px;
      width: 400px;
      margin: 50px auto;
      border-radius: 25px;
    }
    .pembungkuskecil {
      display: flex;
      justify-content: space-around;
      align-items: center;
      width: 150px;
      height: 30px;
      margin-left: 20px;
      padding-top: 10px;
    }
    .kecil {
      background-color: #6532A8;
      width: 15px;
      height: 15px;
      border-radius: 50%;
    }
    .kecil2 {
      background-color: #6532A8;
      width: 100px;
      height: 15px;
      border-radius: 5%;
    }
    .inputan {
      margin-top: -20px;
      padding: 25px;
    }
    .judul {
      text-align: center;
      margin-bottom: 30px;
    }
    .judul h3 {
      margin-top: -10px;
    }
    .username {
      display: flex;
      justify-content: center;
      width: 350px;
      margin-bottom: 20px;
    }
    .username input {
      width: 450px;
      height: 35px;
      border: none;
      outline: none;
      margin-left: 20px;
      border-bottom: 1px solid black;
      font-size: 16px;
      background-color: #f1f1f1;
    }
    .id {
      display: flex;
      justify-content: center;
      width: 350px;
      margin-bottom: 20px;
    }
    .id input {
      width: 450px;
      height: 35px;
      border: none;
      outline: none;
      margin-left: 20px;
      border-bottom: 1px solid black;
      font-size: 16px;
      background-color: #f1f1f1;
    }
    .email {
      display: flex;
      justify-content: center;
      width: 350px;
      margin-bottom: 20px;
    }
    .email input {
      width: 450px;
      height: 35px;
      border: none;
      outline: none;
      margin-left: 20px;
      border-bottom: 1px solid black;
      font-size: 16px;
      background-color: #f1f1f1;
    }
    .password {
      display: flex;
      justify-content: center;
      width: 350px;
      margin-bottom: 20px;
    }
    .password input {
      width: 450px;
      height: 35px;
      border: none;
      outline: none;
      margin-left: 20px;
      border-bottom: 1px solid black;
      font-size: 16px;
      background-color: #f1f1f1;
    }
    .icon {
      font-size: 28px;
    }
    button {
      width: 350px;
      height: 40px;
      margin-left: 25px;
      border-radius: 20px;
      font-size: 17px;
      outline: none;
      border: none;
      background-color: #c5c5c5;
      color: white;
      margin-top: 5px;
    }
    button:hover {
      background-color: #7126d4;
      color: white;
    }
    
    
    
    @media (max-width: 600px){
      body {
        background-color: #6532A8;
      }
      .card {
        width: 340px;
        margin: 40px auto;
      }
      .judul {
      margin-top: 50px;
    }
      .inputan {
      margin-top: -20px;
      padding: 1px;
      margin-left: -10px;
    }
    .username ,
    .id ,
    .password ,
    .email {
        margin-bottom: 30px;
      }
      .username input,
      .id input,
      .password input,
      .email input {
        width: 250px;
      }
      button {
        width: 285px;
        margin-top: 30px;
      }
      p {
        margin-left: 2px;
        font-size: 14px;
      }
    }
  </style>
</head>
<body>
 
  <div class="bg-loader">
  <div class="loader">
  </div>
</div>
  
  <div class="card">
   <div class="pembungkuskecil">
    <div class="kecil"></div>
    <div class="kecil2"></div>
   </div>
   
   <div class="inputan">
    <div class="judul">
     <h1>Login</h1>
     <h3>terlebih dahulu </h3>
    </div>
    <form method="post">
    <div class="username">
      <div class="icon">
        <ion-icon name="person-outline"></ion-icon>
      </div>
      <input type="text" name="username" placeholder="username">
    </div>
    
    <div class="email">
      <div class="icon">
        <ion-icon name="mail-outline"></ion-icon>
      </div>
      <input type="text" placeholder="email">
    </div>
    <div class="password">
      <div class="icon">
        <ion-icon name="lock-closed-outline"></ion-icon>
      </div>
      <input type="text" name="password" placeholder="password">
    </div>
  </div>
  
 <button type="submit" name ="login">Kirim</button>
  </form>
  <p style="text-align:center;">Dengan mengirimkan data yang anda masukan,<br>anda menyetujui kebijakan dan privasi kami.</p>
  </div>
  
<!--<script>
$(document).ready(function(){
  $(".bg-loader").hide();
});
</script>-->


</body>
</html>
