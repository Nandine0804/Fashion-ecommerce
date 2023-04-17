<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>


<meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <script src="https://kit.fontawesome.com/544ad584ac.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
 

    <title>Welcome  <?php echo $fetch_info['name'] ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
    <nav class="navbar header">
    <a class="navbar-brand" href="#">LOGIN PAGE</a>
    <button type="button" class="btn btn-light"><a href="logout-user.php">Logout</a></button>
    </nav>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light py-3 fixed-top" id="navbar">
        <div class="container container header__top">
            <a class="navbar-brand" href="index.php">BRANDZZ</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shop.php">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
 <li>
                        <div class="cart">
                            <a href="#cart-things">
                                <i class="fas fa-shopping-cart"></i>
                                </a>
                                <p id="count">0</p></div>
                     </li>
                    

                </ul>
                   <div class="icons">
                    <ul>
                        <li class="nav-item ml-10" id="detail_person">
                            <h4 class="data">Hi <?php echo $fetch_info['name'] ?></h4>
                             
                        </li>
                        <button type="button" id="logout" class="btn-dark"><a href="logout-user.php"><img src="logout.png" class="logout-logo" alt="logout"/>Logout</a></button>
                    
                    
                    </ul>

                    </div>

             </div>
        
    </nav>
    <section class="hero-section ">
        <div class="container ">
            <h5>New Clothes, New Passion.
                </span>Complement your flawless beauty.</h5>
            <h1>The best look anytime anywhere. As gorgeous as you</h1>
            <p>Clothes are the spirit of Fashion.Choose to look classy
            </p>
            <button class="text-uppercase "><a href="#">SHOP NOW</a></button>

        </div>
    </section>
    <section id="brand " class="container ">
        <div class="row ">
            <img class="img-fluid col-lg-3 col-md-6 col-sm-12 "
                src="https://i.pinimg.com/originals/1d/79/1e/1d791eeeda45585927193e7f74c7a7db.png " alt=" " />
            <img class="img-fluid col-lg-3 col-md-6 col-sm-12 "
                src="https://cdn.logojoy.com/wp-content/uploads/2018/05/30143356/127.png " alt=" " />
            <img class="img-fluid col-lg-3 col-md-6 col-sm-12 "
                src="https://global-uploads.webflow.com/5f1c9cd99129705b848a815a/6123ced7720f29323f0110c3_2.jpg "
                alt=" " />
            <img class="img-fluid col-lg-3 col-md-6 col-sm-12 "
                src="https://blog.logomyway.com/wp-content/uploads/2020/08/lui-vuitton-logo2.jpg " alt=" " />
        </div>
    </section>


    <section id="new" class="w-100 ">
        <div class="row p-0 m-0">
            <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                <img class="img-fluid  "
                    src="https://images.pexels.com/photos/12821062/pexels-photo-12821062.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2 "
                    alt="pic-1 " />

                <div class="details">
                    <h4>Wear the best.</h4>
                    
                </div>
            </div>
            <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                <img class="img-fluid "
                    src="https://media.glamour.com/photos/569589b85fff94d44eec7dbf/master/w_1600%2Cc_limit/fashion-blogs-slaves-to-fashion-2010-05-11-0511crystal-renn-chanel2_fa.jpg "
                    alt="pic-1 " />

                <div class="details">
                    <h4>Feel the authentic peace.</h4>
                 
                </div>
            </div>
            <div class="one col-lg-4 col-md-12 col-sm-12 p-0 ">
                <img class="img-fluid "
                    src="https://media.voguebusiness.com/photos/5dddb3e8db92720008c2cdc4/2:3/w_2560%2Cc_limit/price-increases-in-luxury-voguebus-getty-imges-nov-19-article.jpg "
                    alt="pic-1 " />
                <div class="details ">
                    <h4>Fashion is nothing without people</h4>
                   
                </div>
            </div>

        </div>
    </section>

    <section id="featured"  class="my-5 pb-5 ">
        <div class="container text-center mt-5 py-5 ">
            <h3>Our Featured</h3>
            <hr class="hr mx-auto ">
            <p>Life isn’t perfect but your outfit can be. <br/>A New Revolution.A New Perspective</p>
        </div>
        <div id="root"></div>
 </div>
            

    </section>

    <section id="banner" class="my-5 py-5">
        <div class="container ">
            <h4>Different is beautiful</h4>
            <h1>Designed only for you.
                <br />upto 30% OFF
            </h1>
            <button class="text-uppercase " id="carts">Shop Now</button>
        </div>
    </section>



    




     <section id="featured"  class="my-5 pb-5 ">
        <div class="container text-center mt-5 py-5 ">
            <h3>Our Featured</h3>
            <hr class="hr mx-auto ">
            <p>Life isn’t perfect but your outfit can be. <br/>A New Revolution.A New Perspective</p>
        </div>
        <div id="root_1"></div>
        
        
         

    </section>


     <section id="featured"  class="my-5 pb-5 ">
        <div class="container text-center mt-5 py-5 ">
            <h3>Our Featured</h3>
            <hr class="hr mx-auto ">
            <p>Life isn’t perfect but your outfit can be. <br/>A New Revolution.A New Perspective</p>
        </div>
        <div id="root_2"></div>
        
        
         

    </section>


   
<div class="container_1" id="cart-things">
<h1 class="text-black">CART ITEMS</h1>
           <div class="sidebar">
                <div class="head"><p>My Cart</p></div>
                <div id="cartItem">Your cart is empty</div>
                <div class="foot">
                    <h3>Total</h3>
                    <h2 id="total">$ 0.00</h2>
                </div>
            </div>
        </div>

        
<div class=" footer-basic ">
    <footer>
        <div class=" social ">
            <a href=" # "><img src=" https://cdn-icons-png.flaticon.com/512/214/214552.png " alt=" "/></a>
            <a href=" # "><img src=" https://cdn-icons-png.flaticon.com/512/174/174855.png " alt=" "/></a>
            <a href=" # "><img src=" https://cdn-icons-png.flaticon.com/512/2504/2504903.png " alt=" "/></a>
           
        <ul class=" list-inline ">
    
            <li class=" list-inline-item "><a href=" index.php ">Home</a></li>
            <li class=" list-inline-item "><a href=" shop.php ">Shop</a></li>
            <li class=" list-inline-item "><a href=" contact.php ">Contact</a></li>
        
        
        </ul>
   
    </footer>
</div>



        
        

<script src="script.js"></script>

    <script src=" https://kit.fontawesome.com/544ad584ac.js " crossorigin=" anonymous ">
    </script>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js " integrity="
                            sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe " crossorigin="
                            anonymous ">
                            </script>
    <script src=" https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="
                            sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="
                            anonymous "></script>
    <script src=" https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js " integrity="
                            sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="
                            anonymous "></script>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js " integrity="
                            sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="
                            anonymous "></script>
    <script defer src=" https://use.fontawesome.com/releases/v5.15.4/js/all.js " integrity="
                            sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc " crossorigin="
                            anonymous "></script>

                             

</body>

</html>
    