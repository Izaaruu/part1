<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pilihan selanjutnya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <style>
       


      .pembungkus {
        display: flex;
        justify-content: space-around;
        align-items: center;
        height: 600px;
        margin-top: -200px;
      }
      .card1 img {
        width: 300px;
        height: 420px;
        border-radius: 15px;
      }
      
      .text h1 {
        font-size: 55px;
        color: #6532A8;
      }
      .text p {
        font-size: 30px;
        color: #BE9BF9;
        margin-top: -15px;
      }
.btn1 {
      background-color: #6532A8;
      color: white;
      width: 350px;
      border-radius: 20px;
      height: 45px;
      outline: none;
      border: none;
    }
    .btn1:hover {
      background-color: #BE9BF9;
      color: white;
    }
     .bungkus {
     display: flex;
     justify-content: space-between;
   }
   .image {
     width: 15%;
   } 
   input {
      outline: none;
      border: 5px solid #6532A8;
      font-size: 20px;
      padding: 5px 20px;
      color: #BE9BF9;
      background-color: #f1f1f1;
      border-radius: 15px;
    }
   
      
      @media (max-width:600px){
        .card1 img {
          width: 250px;
          height: 350px;
          margin-left: 12%;
        }
        .pembungkus {
          display: block;
          justify-content: center;
          width: 350px;
          height: 650px;
          margin: -30px auto;
          
        }
        .image {
          width: 50%;
        }
        .btn1 {
      width: 250px;
      color: white;
    }
    .btn1:hover {
      background-color: #BE9BF9;
      color: white;
    }
    .text {
      text-align: center;
      margin-top: 20px;
    }
    .text h1 {
      font-size: 30px;
      color: #6532A8;
    }
    .text p {
      font-size: 20px;
    }
    input {
      outline: none;
      border: 5px solid #6532A8;
      font-size: 17px;
      padding: 5px 20px;
      color: #BE9BF9;
      background-color: #f1f1f1;
      border-radius: 15px;
    }
    
      }
    </style>
  </head>
  <body>
   <div class="bg-loader">
  <div class="loader">
  </div>
</div>   
    
    
 <div class="bungkus">
  <div class="kosong"></div>
  <img src="4.png" class="image">
</div>
 <div class="pembungkus">
   <div class="kosong"></div>
   <div class="card1">
     <img src="images/bs.png">
   </div>
   <div class="text">
     <h1>Brawl Stars</h1>
     <p>Masukan jumlah trophi minimum</p>
     <br>
     <input type="text">
     <br><br><br>
     <a href="contact.php"><button type="button" class="btn1"><b>Masukan</b></button></a>
   </div>
   <div class="kosong"></div>
   <div class="kosong"></div>
 </div>
    
    
    
    
    
    
    
    
    
    
    
    <!--<script>
$(document).ready(function(){
  $(".bg-loader").hide();
});
</script>-->
</script>
  </body>
</html>