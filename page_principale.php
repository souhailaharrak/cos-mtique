<?php
// Connecter la base des données
require 'config/connexion.php';
session_start();




$select_products = mysqli_query($connet, "SELECT * FROM produit  ORDER BY RAND () LIMIT 4");
// $fetch_products = mysqli_fetch_assoc($select_products);
// print_r($fetch_products);
//die();
?>


    <?php require_once('template/header.php')?>

    <?php
    if (isset($_SESSION['client'])) {
        $idClient = $_SESSION['client']['idClient'];
        $data = mysqli_fetch_assoc(
            mysqli_query($connet, "select * from client WHERE  idClient = $idClient")
        );

        ?>
        
        <?php
    }
    ?>
    
    <div class="modal" tabindex="-1" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo "welcome " . $data['nom'] . " " . $data['prenom']; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            </div>
        </div>
    </div>
   <head>
   <link rel="stylesheet" href="css/custom.css">
   </head>

            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="image/pr.jpg" class="d-block w-100 mt-0 h-25" alt="pr">
                            <div class="carousel-caption ">
                                <h5 class="new">NEW</h5>
                                <h3 class="day">Day Break</h3>
                                <p class="p">Glow tonic for day and night repair.</p>
                                <a href="" class="pA">SHOP SERUMS</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="image/pr1.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption ">
                                <h5 class="new">EDIT</h5>
                                <h4 class="da">Ready Steady Glow</h4>
                                <p class="p">Ready to go for that everyday glow</p>
                                <a href="" class="p">SHOP SERUMS</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="image/pr2.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption ">
                                <h5 class="new">BEST SELLER</h5>
                                <h2 class="day1">Sugar Face x Bloom</h2>
                                <a href="" class="p">SHOP SERUMS</a>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>

                        <div class="Cruelty">
                    <h4 class="beaute">Cruelty-free beauty for the future</h4>
                    <p class="beaute1">Nous fabriquons des produits intuitifs et simples conçus pour vivre avec
                        vous.<br>
                        Nos produits sont désormais emballés dans du plastique 100 % Ocean Waste.</p>
                    <h2 class="COLLECTION">New Collection</h2>
                   </div>

                    <div class="row row-cols-1 row-cols-md-4 g-4">
                        <?php
                            while($fetch_products = mysqli_fetch_assoc($select_products)){
                                ?>
                                    <div class="col w-25 ">
                                        <img src=<?php echo $fetch_products['image']?> class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title me-6 color-red"><?php echo $fetch_products['libelle']?> </h6>
                                             <span>$<?php echo $fetch_products['prix']?> </span>
                                        </div>

                                    </div>
                                <?php
                            }
                        ?>
                        
                       
                    </div>
                    <div class="thumbnail">
                    <img src="image/mg9.jpg" class="img-thumbnail" alt="...">
                    <img src="image/mg8.jpg" id="thm" class="img-thumbnail" alt="...">
                     </div>
                    <div class="row row-cols-4 row-cols-md-4 g-4">
                        <div class="col">
                            <div class="mg13">
                                <img class=" w-75 mt-3 ms-6" src="image/mg13.png" alt="...">
                                <div class="card-bod">
                                    <h6 class="vegan1" class="card-title">Vegan</h6>
                                    <p class="para">We only use the finest <br> natural ingredients.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <img class="w-75 mt-3" src="image/mg10.png" class="" alt="...">
                            <div class="">
                                <h6 class="vegan" class="card-title">Vegan</h6>
                                <p class="para">Orders are shipped with  <br>biodegradable peanuts.</p>
                            </div>
                        </div>
                        <div class="col">
                            <img class="w-75 mt-3" src="image/mg12.png" class="" alt="...">
                            <div class="">
                                <h6 class="vegan" class="card-title">Vegan</h6>
                                <p class="para">Our entire collection is vegan <br>and cruelty free.</p>
                            </div>
                        </div>
                        <div class="col">
                            <img class="w-75 mt-3 ms-3" src="image/mg11.png" class="" alt="...">
                            <div class="">
                                <h6 class="vegan" class="card-title">Vegan</h6>
                                <p class="para">All packaging is recyclable  <br>and eco conscious.</p>
                            </div>
                        </div>
                       </div>
                       <div class="Herbivore">
                    <h6>Herbivore</h6>
                    <p class="pink">PINK HIBISCUS FACE MIST</p>
                    </div>
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <div class="">
                                <img src="image/mg14.png" class="card-img-top w-100" alt="...">
                            </div>
                        </div>
                        <div class="col">
                            <span class="cc">Quantity </span>
                            <input class="cc1" type="text" name="Quantity">
                        </div>
                        <div class="botton">
                            <button class="Primary type="  type="button" class="btn btn-lg btn-primary" disabled>BUY</button>
                            <button class="Primary1" type="button" class="btn btn-secondary btn-lg" disabled>ADD TO
                                CART</button>
                            <p class="cloud">A new ultra-fine spray that creates a soft cloud of 100% <br> natural
                                moisturizing and soothing vegan hyaluronic acid,<br> organic rose hydrosol, coconut
                                water and hibiscus extract.</p>
                            <h6>HOW TO USE</h6>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    After cleaning, shake the bottle and spray 3-5 times.<br> Gently tap into the skin.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    Follow with a serum, face oil or pink cloud.
                                </label><br><br>
                            </div>
                          </div><br>
                         </div><br><br>
                        <img class="unknown" src="image/unknown.png" alt=""><br><br>
                       <div>
                             <img class="logo2"  src="icon/Asset2.png" class="img-fluid" alt="...">
                       </div>
<div class="container">               
  <div class="row" id="column">
 <div class="col" > <span id="colu"> About us </span> 
   <div class="col" id="RE">Recycling </div> 
   <div class="col"  id="RE">Sustaunability </div> 
   <div class="col"  id="RE">ingredents </div>
   <div class="col"  id="RE">Careers</div>  
</div>
  
      
<div class="col" > 
    <span id="colu"> shop </span> 
   <div class="col" id="RE">New arrivals</div> 
   <div class="col"  id="RE">Bestsellers</div> 
   <div class="col"  id="RE">On Sale</div>
   <div class="col"  id="RE">Git Cart</div> 
   </div>
    
   <div class="col" > 
    <span id="colu"> Aider </span> 
   <div class="col" id="RE">Shipping  </div> 
   <div class="col"  id="RE">Payment</div> 
   <div class="col"  id="RE">Return </div>
   <div class="col"  id="RE">Contact</div> 
   </div>
   <div class="col"  > 
    <span id="colu">Contact Us</span> 
   <div class="col"><img style="width:20px; margin-left:2rem " src="image/fb.png"   alt=""></div> 
   <div class="col"><img style="width:20px; margin-left:2rem;margin-top:1rem; " src="image/inst.png"   alt=""></div> 
   <div class="col"><img style="width:20px; margin-left:2rem;margin-top:1rem; " src="image/paypal.png" alt=""></div>
   </div>
   
  </div>
  <div class="top">
    <a href="#top"><img class="solid" src="image/sld.svg"  alt=""></a>
</div>
</div>
     <hr style="border-style:none solid dotted dashed; color:black;"/>                
            <p id="off">OFFSPRING Beauty <strong>co.2022</strong> </p>           
</nav>

    </form>
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- bootstrap5 js file -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        <?php if(isset($_SESSION['client'])): ?>
            var myModal = new bootstrap.Modal(document.getElementById('myModal'), {
                focus: true,
                backdrop: true
            })

            myModal.show()

            setTimeout(() => {
                myModal.hide()
            }, 3000);
        <?php endif?>
     
    </script>
</body>
</html>