<?php

require 'connect.php';
$prodectId = $_GET['productId'];
// echo $prodectId ;

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DETAILS PRODUI</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="details.css">

</head>
<body>

<?php 

$myquery = "SELECT * FROM produit where idProduit = '$prodectId'" ;
    
$outcome = mysqli_query($connection, $myquery) ;
$row = mysqli_fetch_assoc($outcome) ;

?>

<nav id="frstnav">
 <p>Save <span>15%</span> on orders over <span>$50</span> ♡ Use code <span>15%</span> OFF at checkout</p>
</nav>
    
<nav id="scndnav" class=" navbar navbar-expand-lg navbar-light bg-light ">
 <div class=" container-fluid">
     
  <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">

   <span class="navbar-toggler-icon"></span>

  </button>

  <div class="collapse navbar-collapse" id="navbarCollapse">

   <div class="navbar-nav">

    <a href="#" class="nav-item nav-link active">Home</a>
    <a href="#" class="nav-item nav-link active">Produits</a>

   </div>

  </div>
 
  <div class="collapse navbar-collapse" id="navbarCollapse">

   <div class="navbar-header">

    <a class="navbar-brand" class="logo" href="#"><img id="logo" src=" logo/logo.png" alt=""></a>

   </div>
 
   <div class="navbar-nav ms-auto">

    <a href="#" class="nav-item nav-link active">Login</a>
    <a href="#" class="nav-item nav-link active">Register</a>
    <a href="#" class="nav-item nav-link active"><i class="fa-solid fa-cart-shopping"></i></a>
    <a href="#" class="nav-item nav-link active"><i class="fa-solid fa-magnifying-glass"></i></a>

   </div>
  </div>

 </div>
</nav>

<main>
 <div class="container-fluid pt-5">

   <div class="row">
    <div class="col-sm-6">
    
    <img src="<?php echo $row['image']; ?>" class="img" alt="" />
    
    </div>

    <div class="col-sm-6">

     <h1><?php echo $row['libelle']; ?></h1>

     <p>$<?php echo number_format( $row['prix'],2) ; ?></p>
        <div class="product-rating--stars">

         <span class="fa fa-star checked"></span>
         <span class="fa fa-star checked"></span>
         <span class="fa fa-star checked"></span>
         <span class="fa fa-star"></span>
         <span class="fa fa-star"></span>

        </div>

        <div class="pt-4">    

         <input type="number" class="form-control" placeholder="1">

        </div> 

        <div class="pt-4">

         <button type="button" id="addTocart" class="btn btn-outline-primary">ADD TO CART</button>

        </div>    

        <div class="pt-4">

         <p><?php echo $row['description']; ?></p>
        
        </div>  

    </div>            
  </div>

 </div>
</main>

<!-- footer -->

<footer class="text-center text-lg-start bg-light text-muted">
 <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">

  <div id="getConnected" class="me-5 d-none d-lg-block">
   <span>Get connected with us on social networks:</span>
  </div>
           
  <div id="socialMedia">

    <a href="" class="me-4 text-reset"><i class="fab fa-facebook-f"></i></a>
    <a href="" class="me-4 text-reset"><i class="fab fa-twitter"></i></a>
    <a href="" class="me-4 text-reset"><i class="fab fa-google"></i></a>
    <a href="" class="me-4 text-reset"><i class="fab fa-instagram"></i></a>
    <a href="" class="me-4 text-reset"><i class="fab fa-linkedin"></i></a>
    <a href="" class="me-4 text-reset"><i class="fab fa-github"></i></a>

  </div>       
 </section>

 <section class="">
  <div class="container text-center text-md-start mt-5">
                
   <div class="row mt-3">            
    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                       
     <h6 class="text-uppercase fw-bold mb-4">
      <img class="logo" src="logo/logo.png" alt="">
     </h6>

    </div>

    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">                 
     <h6 class="text-uppercase fw-bold mb-4">About us</h6>

      <p><a href="#!" class="text-reset">Recycling </a></p>
      <p><a href="#!" class="text-reset">Sustaunability</a></p>
      <p><a href="#!" class="text-reset">Ingredients </a></p>
      <p><a href="#!" class="text-reset">Careers </a></p>

    </div>

    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
     <h6 class="text-uppercase fw-bold mb-4">Shop</h6>

     <p><a href="#!" class="text-reset">New arrivals</a></p>
     <p><a href="#!" class="text-reset">Bestsellers</a></p>
     <p><a href="#!" class="text-reset">On Sale </a></p>
     <p><a href="#!" class="text-reset">Git Cart</a></p>

    </div>

    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">               
    <h6 class="text-uppercase fw-bold mb-4">Aider</h6>

     <p><a href="#!" class="text-reset">Shipping </a></p>
     <p><a href="#!" class="text-reset">Payment</a></p>
     <p><a href="#!" class="text-reset">Return</a></p>
     <p><a href="#!" class="text-reset"> Contact </a></p>

    </div>              
   </div>
                
  </div>
 </section>

 <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
  © 2022 Copyright:
  
   <a id="vitalCom" class="text-reset fw-bold" href="https://mdbootstrap.com/">VITAL.com</a>

 </div>   
</footer>
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</body>
</html>