<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Banking System</title>
  <style>
	.footer {
   
   left: 0;
   bottom: 0;
   width: 100%;
   color: black;
   text-align: center;
   background-color :white;
}
button{
        transition: 1.5s;
        background-color: lightblue;
        border-radius: 8px;
        width: 250px;
        height: 50px;

      }
      button:hover{
        background-color:#616C6F;
        color: white;
      }
      .neon {
    color: #D0F8FF;
    text-shadow: 0 0 5px #A5F1FF, 0 0 10px #A5F1FF,
             0 0 20px #A5F1FF, 0 0 30px #A5F1FF,
             0 0 40px #A5F1FF;
}
.threed {
    text-align: center;
    text-shadow: 2px 2px 2px #CCCCCC;
    font-size: 150%;
    color: green;
}
	</style>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div >
            <div>
                <div class="heading text-center my-4" style="background-image: url(images/moneyplant.jpg);">

                 <h1 style=" color:Black ; background-color: white">Piggy BANK</h3>
                  <marquee class="threed" behavior="scroll" direction="down" >
                  Save Money and spend essentially!!!
                  </marquee>
                </div>
              </div>
            </div>
			<div class="container-fluid" >
			<div class="container-fluid-sm" >
               <img src="piggy.jpg" style=" width:100%;height:700px">
               <section id="middle-container">
               <div class="row activity text-center">
                  
                  <div class="col-md act">
                  <br>
                    <img src="bank3.jpg" class="img-fluid" style=" height: 350px;">
                    <br>
                    <a href="transfer.php"><button>Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                  <br>
                    <img src="bank4.png" class="img-fluid" style=" height: 350px;">
                    <br>
                    <a href="transactionhistory.php"><button>Transaction History</button></a>
                  </div>
            </div>
     </div></div>
     
      </div>
      <div class="footer">
      <br>
        <p> Made by <b>Sankara Gomathi S</b> <br> The Sparks Foundation</p>

      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
 </body>
</html>