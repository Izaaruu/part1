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
      .rank {
        width: 80%;
        height: 145px;
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
      
      .radio {
        display: flex;
        justify-content: space-around;
        align-items: center;
        width: 80%;
      }
      .radio input {
        width: 35px;
        height: 35px;
      }
     input[type=radio] {
   appearance: none;
   padding: 10px;
   background-color: white;
   border-radius:50%;
   border: 2px solid #6532A8;
}
input[type=radio]:checked {
   background-color: #BE9BF9;
   width: 10px;
   height: 10px;
   border-radius: 50%;
} 
.btn {
      background-color: #6532A8;
      color: white;
      width: 400px;
      border-radius: 20px;
    }
    .btn:hover {
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
          height: 700px;
          margin: -30px auto;
          
        }
        .image {
          width: 50%;
        }
        .btn {
      width: 300px;
      margin-bottom: 30px;
      color: white;
    }
    .btn:hover {
      background-color: #BE9BF9;
      color: white;
    }
    .radio {
      margin: 1px auto;
    }
    .rank {
      width: 80%;
    }
    .text {
      text-align: center;
      margin-top: 20px;
    }
    .text h1 {
      font-size: 30px;
    }
    .text p {
      font-size: 20px;
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
     <p>Pilih Rank yang anda inginkan</p>
     <img src="rank.png" class="rank">
     <div class="radio">
     <input type="radio" name="jobtype" id="parttime" value="parttime"/>
	  <input type="radio" name="jobtype" id="fulltime" value="fulltime"/>
	  <input type="radio" name="jobtype" id="parttimee" value="parttimee"/>
	  <input type="radio" name="jobtype" id="fulltimee" value="fulltimee"/>
     </div>
     <br><br>
     <a href="pilih2.php"><button type="button" class="btn"><b>Konfirmasi</b></button></a>
   </div>
   <div class="kosong"></div>
   <div class="kosong"></div>
 </div>
    
    
    
    
  
</script>
  </body>
</html>