<?php 
    session_start();
    

    global $finalResult ;
    $DBserver = "localhost";
    $username = "root" ;
    $password = "" ;
    $DBname = "gestion_magasine" ;

    $connet = mysqli_connect($DBserver, $username, $password, $DBname) ;






    $myquery = "SELECT * FROM produit" ;
    
    $outcome = mysqli_query($connet, $myquery) ;
    $row = mysqli_num_rows($outcome) ;
    
    if(!isset($_SESSION['panier'])) $_SESSION['panier'] = [];



    if(isset($_POST['addToCart'])){
        if(isset($_SESSION['client'])){
            array_push($_SESSION['panier'],  [
                'produit_id' => $_POST['idProduit'],
                'produit_libelle' => $_POST['libelle'],
                'produit_prix' => $_POST['prix'],
                'produit_quantite' => $_POST['quantite'],
                'produit_image' => $_POST['image'],
            ]);
        }else{
            header('location:log_in.php');
        }
        
    }

       
    

    ?>
    <?php require_once('template/header.php')?>
<div class="container" id="frstrow">
    <div class="row">

        <?php 
    $result=$connet-> query($myquery);
    while ($finalResult = mysqli_fetch_assoc($outcome))
    {


    ?>
        <div class="col-sm-3">
            <form id="myform" action="" method="post" enctype=" multipart/form-data">
                <input hidden name="idProduit" value="<?php echo $finalResult['idProduit']; ?>">
                <input type="hidden" name="prix" value="<?php echo $finalResult['prix']?>">
                <input type="hidden" name="image" value="<?php echo $finalResult['image']?>">
                <input type="hidden" name="libelle" value="<?php echo $finalResult['libelle']?>">
                <img class="prodImg" src="<?php echo $finalResult['image']; ?>" alt="">
                <div class="content <?php echo ($finalResult['stock'] == 0)? 'text-danger' : '';?>">
                <h6><?php echo $finalResult['libelle']; ?>
                    <span> $<?php echo number_format( $finalResult['prix'],2) ; ?></span>
                </h6>
                <p>Sock: <?php echo $finalResult['stock']; ?></p>
                </div>
                
                <?php 
                $arr = [];
                foreach($_SESSION['panier'] as $produit) {
                    $arr[] = $produit['produit_id'];
                }?>
                <?php if($finalResult['stock'] > 0){?>
                    <input class="form-control" name="quantite" type="number" value="1" min="1" max="10" step="1" />
                    <?php if(!in_array($finalResult['idProduit'], $arr)){ ?>
                    <button type="submit" name="addToCart" class="btn btn-primary mt-2" id="addToCart">add to cart</button>
                    <?php 
                    }else{
                        ?>
                            <button type="button" class="btn btn-secondary mt-2" disabled>in cart</button>
                        <?php
                    }
                } ?>  
            </form>
    </div>

    <?php }?>
</div>
</div>

<?php require_once('template/footer_products_panier.php')?>