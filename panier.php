<?php
    require_once('config/connexion.php');
    session_start();
    if(!$_SESSION['client']) header('location:log_in.php');

    if(isset($_GET['delete_product'])){

        $arr = [];

        foreach($_SESSION['panier'] as $produit) {
            if($produit['produit_id'] != $_GET['delete_product']){
                array_push($arr, $produit);
            }
        }
        $_SESSION['panier'] = $arr;
        header('location:panier.php');
    }
?>

<?php require_once('template/header.php')?>


     
    <section class="h-100 h-custom" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card">
                        <div class="card-body p-4">

                            <div class="row">

                                <div class="col">
                                    <h5 class="mb-3"><a href="products.php" class="text-body"><i
                                                class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping</a>
                                    </h5>
                                    <hr>

                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <div>
                                            <p class="mb-1">Shopping cart</p>
                                            <p class="mb-0">You have <?php if(isset($_SESSION['panier'])) echo count($_SESSION['panier']); else echo 0;?> items in your cart</p>
                                        </div>
                                        <div>
                                            <p class="mb-0"><span class="text-muted"></span>
                                                price </p>
                                        </div>
                                    </div>

                                    <div class="card ">
                                        <div class="card-body">

                                            <?php 
                                            if(isset($_SESSION['panier']) && count($_SESSION['panier']) > 0){
                                            foreach($_SESSION['panier'] as $produit){
                                                ?>
                                                <div class="d-flex justify-content-between mb-3">
                                                <div class="d-flex flex-row align-items-center">
                                                    <div>
                                                        <img src=<?php echo $produit['produit_image']?>
                                                            class="img-fluid rounded-3" alt="Shopping item"
                                                            style="width: 65px;">
                                                    </div>
                                                    <div class="ms-3">
                                                        <h5><?php $produit['produit_libelle']?></h5>
                                                        <p class="small mb-0">$<?php echo $produit['produit_prix']?></p>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row align-items-center">
                                                    <div style="width: 50px;">
                                                        <h5 class="fw-normal mb-0"><?php echo $produit['produit_quantite']?></h5>
                                                    </div>
                                                    <div style="width: 80px;">
                                                        <h5 class="mb-0">$<?php echo ($produit['produit_prix'] * $produit['produit_quantite'])?></h5>
                                                    </div>
                                                    <a href="?delete_product=<?php echo $produit['produit_id']?>" style="color: #cecece;"><i
                                                            class="fas fa-trash-alt"></i></a>
                                                </div>
                                            </div>
                                                <?php
                                            }
                                        }else{
                                            ?>
                                                <div>no item in your cart</div>
                                            <?php
                                        }
                                            ?>
                                            
                                        </div>
                                    </div>




                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
        </div>
        </div>
    </section>

    <?php require_once('template/footer_products_panier.php')?>