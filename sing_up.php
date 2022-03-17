
<?php
//Connecter la base des données
    require 'config/connexion.php';
    session_start();
    if(isset($_SESSION['client'])) header('location: page_principale.php');
?>

<?php

$errname =$errprenom=$erraddresse=$errtele=$erroremail=$errorpass=$validpass=$emailExist="";
if($_SERVER['REQUEST_METHOD']== 'POST'){
    if(empty($_POST['nom'])){

        $errname='<span class="error"> please enter your lastname </span>';
        
  }else{
      if(!preg_match("/^[a-zA-Z-']{3,}$/",$_POST['nom'])){

        $errname='<span class="error"> only letters allowed </span>';
      }
  }

  if(empty($_POST['prenom'])){

        $errprenom='<span class="error"> please enter your firtname </span>'; 
  }else{
        if(!preg_match("/^[a-zA-Z-']{3,}$/",$_POST['prenom'])){
        
            $errprenom='<span class="error"> only letters allowed </span>';
        }
    }

  if(empty($_POST['addresse'])){

    $erraddresse='<span class="error"> please enter your adrresse</span>';
    
   
} 
if(empty($_POST['telephone'])){

    $errtele='<span class="error"> please enter your telephone</span>';
    
   
}else{
    if(!preg_match("/^[0-9]{10,}$/",$_POST['telephone'])){
       $errtele='<span class="error"> invalid number phone</span>';
       
    }
}    
if(empty($_POST['email'])){
    
    $erroremail='<span class="error"> please enter your email </span>'; 
}else{ $testemail=validateInput($_POST['email']);


    if(!filter_var($testemail,FILTER_VALIDATE_EMAIL)){
        $erroremail="invalid email";
    }
}
$pass=$_POST['pass'];
$number = preg_match('@[0-9]@', $pass);
$lowercase = preg_match('@[a-z]@', $pass);
if(strlen($pass)<= 8 || !$lowercase  || !$number ) {
    $errorpass=' <span class="error"> Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.</span>';
   } else {
    $validpass= '<span class="valid">Your password is strong.</span>';
   }

}

function validateInput($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}

?>
<?php
//Connecter la base des données


if(isset($_POST['submits'])){
 
    $nom =$_POST['nom'];
    $prenom=$_POST['prenom'];
    $addresse=$_POST['addresse'];
    $telephone=$_POST['telephone'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    // select where field name=email
    $select="SELECT * from client where email='$email'";
    $query=mysqli_query($connet,$select) or die('query failed, '.$select);

    if(mysqli_num_rows($query)>0){
        $emailExist = "email already exists pliz sign in";
    }
    elseif($errname == ""  && $errprenom == ""  && $erraddresse == ""  && $errtele == ""  && $erroremail== "" && $errorpass =="") {
        $insert="INSERT INTO `client`(`nom`, `prenom`, `adresse`, `telephone`, `email`, `pass`)
            VALUES ('$nom','$prenom','$addresse','$telephone','$email','$pass')";
            
        $query2=mysqli_query($connet,$insert) or die('query failed, '.$insert);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sing up</title>
     <!-- icon -->
     <link rel="icon" href="icon/Asset3.png"/>
      <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- my style -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
 <style>
     .valid{
  color:green;
     }
.sing,h3{

position:relative;
margin-left:10rem;
font-size:1rem;
}
.error{
    color:red;
    font-size:14px;
}
.img15{
    position:absolute;
    
}
.up{
    background-color:white; 
    position:relative;
    width:40%;
    margin-top:2rem;
   margin-left:6rem;
    margin-top:2rem;
    border-radius:10px 10px;
    height: 75%;
}
.container {
        width: 1000px;
        height: 600px;
        background:url(image/mg15.png) no-repeat ;
        display: flex;
        background-size:66%;
        overflow: hidden;
           color:#835435;
           margin-top:1rem;
           margin-left:30rem;    
}

.text-container{  width: 100%;
                  text-align: center;
                  display: flex;
                  flex-direction: column;
                  align-items: center;
                  justify-content: center;
                  padding: 2rem;
                    margin-left:20rem;
                 
}

input{
 margin-top:1rem;
position:relative;

}

.image-container{
    width:100%;
}
::placeholder{
    font-size:10px;
    padding-left:2rem
}
.name{
    font-size:13px;
    color:black;
    margin-left:3rem;
    position:absolute;
    margin-top:1rem;
    font-weight:700;
}
#btn{
    border:0;
    color:white;
    background-color:#835435;
    border-radius:10px 10px;
    padding: 10px 30px 5px;
    margin-left:10rem;

}
input:focus{
    outline:none;
}
.log{
    margin-left:5rem;
    margin-top:1rem;
    cursor: pointer;
    color:black;
    font-size:15px;
}
.buy{
    display: flex;
    flex-direction: column;
     align-items: center;
    justify-content: center;
    font-weight:700;
}
@media only screen and (max-width:500px) {

.img-fluid{
       margin-right:25rem;
    
}
p{ margin-bottom:1rem;
   
    font-size:1rem;
    padding-bottom:0rem;
        
}
.container{
   
      margin-left:  0rem;
}
.up{
    margin-left:1rem;
    height: 75%;
   width:32%;
}

}
</style>
</head>
<body>
    <form action="" method="POST">
    <div class="col">
<a href="page_principale.php"><img src="icon/Asset2.png" class="img-fluid" alt=""> </a>
     <p class="buy">Sign up for  buy <br> us products</p>

</div>
<div class="container"> 
         <div class="image-container">
             <div class="up">
           <h3 class="sing" style="font-size:2rem "> Sing up</h3>     
           <div>
            <span class="name">lasName</span><input class="sing" type="text" name="nom" placeholder="entre your Lastname" > <br>
            <?php echo $errname; ?>
         </div>
         <div>
        <span class="name">firstName</span> <input class="sing" type="text" name="prenom" placeholder="entre your firstName" ><br>
        <?php echo $errprenom; ?>
         </div>
         <div>
         <span class="name"> addresse</span> <input class="sing" type="text" name="addresse" placeholder="entre your addresse" ><br>
         <?php echo  $erraddresse; ?>
         </div>
         <div>
         <span class="name">telephone</span> <input class="sing" type="text"  name="telephone" placeholder="entre your telephone" ><br>
         <?php echo $errtele; ?>
         </div>
         <div>
         <span class="name"> email</span> <input class="sing"  type="text" name="email" placeholder="entre your email" ><br>
         <?php echo $erroremail; ?>
         <?php echo $emailExist? $emailExist:""; ?>
         </div>
         <div>
         <span class="name">Password</span><input class="sing" type="text" name="pass" placeholder="entre your Password" ><br>
         <?php echo $errorpass? $errorpass : $validpass ?>
         </div>
         <div>
            <input id="btn" type="submit" name="submits" value="Registre" />
        </div>
         <a href="log_in.php"> <p class="log">  Already have an account?<span style="color:#E8C49F;font-weight: 300;"> Log in</span></p></a>
    </div>
</div>
</form>  
<!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- bootstrap5 js file -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>        
</body>
</html>