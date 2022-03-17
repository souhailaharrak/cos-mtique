<?php
 require 'config/connexion.php';
 session_start();
 if(isset($_SESSION['client'])) header('location: page_principale.php');
?>
<?php 
$errorpass="";
if(isset($_POST['submit'])){

  $email=$_POST['email'];
  $pass=$_POST['pass'];
  $requet="SELECT * FROM client WHERE email='$email' AND pass='$pass'";
  //die($requet);
  $result=mysqli_query($connet,$requet);
  if($result->num_rows > 0){
    $row=mysqli_fetch_assoc($result);
    $_SESSION['client']=$row;
    header("Location:page_principale.php");
  }else{
      $errorpass=' <span class="error">password is worng</span>';
    
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
     <!-- icon -->
     <link rel="icon" href="icon/Asset3.png"/>
      <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- my style -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   
    <style>

.sing,h3{
  position:relative;
  margin-left:10rem;
  font-size:1rem;
  margin-top:2rem;

}



.img15{

  position:absolute;
    
}
.up{

  background-color:white; 
  position:relative;
  width:85%;
  margin-top:2rem;
  margin-left:7rem;
  margin-top:4rem;
  border-radius:10px 10px;
  height:50%;

}
.container {

  width: 1000px;
  height: 600px;
  background:url(image/mg15.png) no-repeat ;
  display: flex;
  background-size:60%;
  overflow: hidden;
  color:#835435;
  margin-top:1rem;
  margin-left:30rem;  
  
    
}

.text-container{

  width: 100%;
  text-align: center;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  padding: 20rem;
  margin-left:2rem;
                 
}

input{

 margin-top:3rem;
 position:relative;
margin-left:7rem;
}

.image-container{

    flex-direction: column;
     align-items: center;
    justify-content: center;
     flex-direction: column;
     align-items: center;
    justify-content: center;

}
::placeholder{

font-size:10px;
padding-left:2rem

}
.error{
  color:red;
  margin-left:1rem;

}
.name{

  font-size:15px;
  color:black;
  margin-left:65px;
  position:absolute;
  margin-top:2rem;
  font-weight:700;

}
#btn{
  margin-top:1rem;
  border:0;
  color:white;
  background-color:#835435;
  border-radius:10px 10px;
  padding: 10px 30px 5px;

}
input:focus{

  outline:none;

}
a{
  text-decoration: none;
}
.log{

  margin-left:5rem;
  margin-top:0.5rem;
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
.img-fluid{
   width:18%;
    
}
@media only screen and (max-width:500px) {


p{ margin-bottom:1rem;
   
    font-size:1rem;
    padding-bottom:0rem;
        
}
.container{
 background-color:red;
}
.up{
    margin-left:1rem;
    height: 75%;
   width:100%;
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
   <form action = "" method ="POST" class="login-email">

     <div class="image-container">
     <div class="up">
       <h3 class="sing" style="font-size:2rem ">Log in</h3>
       
       <div>
         <span class="name">Email</span> <input class="sing"  type="email" name="email" placeholder="entre your email" required><br>
        
         </div>
         <div>
         <span class="name">Password</span><input class="sing" type="text" name="pass" placeholder="entre your Password"  required><br>
         <?php echo $errorpass ?>
         </div>

    <div>
      <input type="submit" name="submit" id="btn"name="submit"/>
    </div>
<div>
<a href="sing_up.php"> <p class="log">don't have an account?<span style="color:#E8C49F;font-weight: 600;font-size:1rem;"> sing up</span></p></a>
</div>
</div>
     </div>
   </form>
 </div>

<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- bootstrap5 js file -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>        
</body>
</html>