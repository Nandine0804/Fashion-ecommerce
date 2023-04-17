
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
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce website</title>
    <script src="https://kit.fontawesome.com/544ad584ac.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />

</head>

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
                            <a href="cart.php">
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

    <section id="featured " class="my-5 mt-5">
        <div class="container text-center mt-5 py-5 ">
            <h3>Children section and 13 Age below</h3>
            <hr class="mx-auto hr ">
            <p>Fresh Fashion of Beauty</p>
        </div>

        <div class="row mx-auto container-fluid ">
            <div class="product text-center col-lg-3 col-md-4 col-sm-12 border-0 card-item card">
                <img class="img-fluid mb-3 card_image" src="https://images.pexels.com/photos/5559986/pexels-photo-5559986.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt=" ">
                <div class="star ">
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                </div>
                <h5 class="p-name card__title">Women Cloths</h5>
                <h4 class="p-price card__price">$150.00</h4>
                <i class="fa fa-shopping-cart" id="add-to-cart"></i>
                <button type="submit" class="buy-btn card__btn add-to-cart" data-id="16">Add to cart</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-sm-12 border-0 card-item card">
                <img class="img-fluid mb-3 card_image" src="https://images.pexels.com/photos/1620769/pexels-photo-1620769.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt=" ">
                <div class="star ">
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                </div>
                <h5 class="p-name card__title">Women Cloths</h5>
                <h4 class="p-price card__price">$150.00</h4>
                <i class="fa fa-shopping-cart" id="add-to-cart"></i>
                <button type="submit" class="buy-btn card__btn add-to-cart" data-id="17">Add to cart</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-sm-12 border-0 card-item card">
                <img class="img-fluid mb-3 card_image" src="https://images.pexels.com/photos/5560019/pexels-photo-5560019.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt=" ">
                <div class="star ">
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                </div>
                <h5 class="p-name card__title">Women Cloths</h5>
                <h4 class="p-price card__price">$150.00</h4>
                <i class="fa fa-shopping-cart" id="add-to-cart"></i>
                <button type="submit" class="buy-btn card__btn add-to-cart" data-id="18">Add to cart</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-sm-12 border-0 card-item card">
                <img class="img-fluid mb-3 card_image" src="https://images.pexels.com/photos/1493108/pexels-photo-1493108.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt=" ">
                <div class="star ">
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                </div>
                <h5 class="p-name card__title">Women Cloths</h5>
                <h4 class="p-price card__price">$150.00</h4>
                <i class="fa fa-shopping-cart" id="add-to-cart"></i>
                <button type="submit" class="buy-btn card__btn add-to-cart" data-id="19">Add to cart</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-sm-12 border-0 card-item card">
                <img class="img-fluid mb-3 card_image" src="https://images.pexels.com/photos/7140713/pexels-photo-7140713.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt=" ">
                <div class="star ">
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                </div>
                <h5 class="p-name card__title">Women Cloths</h5>
                <h4 class="p-price card__price">$150.00</h4>
                <i class="fa fa-shopping-cart" id="add-to-cart"></i>
                <button type="submit" class="buy-btn card__btn add-to-cart" data-id="20">Add to cart</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-sm-12 border-0 card-item card">
                <img class="img-fluid mb-3 card_image" src="https://images.pexels.com/photos/1619801/pexels-photo-1619801.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt=" ">
                <div class="star ">
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                </div>
                <h5 class="p-name card__title">Women Cloths</h5>
                <h4 class="p-price card__price">$150.00</h4>
                <i class="fa fa-shopping-cart" id="add-to-cart"></i>
                <button type="submit" class="buy-btn card__btn add-to-cart" data-id="21">Add to cart</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-sm-12 border-0 card-item card">
                <img class="img-fluid mb-3 card_image" src="https://images.pexels.com/photos/5560013/pexels-photo-5560013.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt=" ">
                <div class="star ">
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                </div>
                <h5 class="p-name card__title">Women Cloths</h5>
                <h4 class="p-price card__price">$150.00</h4>
                <i class="fa fa-shopping-cart" id="add-to-cart"></i>
                <button type="submit" class="buy-btn card__btn add-to-cart" data-id="22">Add to cart</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-sm-12 border-0 card-item card">
                <img class="img-fluid mb-3 card_image" src="https://images.pexels.com/photos/1619786/pexels-photo-1619786.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt=" ">
                <div class="star ">
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                </div>
                <h5 class="p-name card__title">Women Cloths</h5>
                <h4 class="p-price card__price">$150.00</h4>
                <i class="fa fa-shopping-cart" id="add-to-cart"></i>
                <button type="submit" class="buy-btn card__btn add-to-cart" data-id="23">Add to cart</button>
            </div>


        </div>
    </section>

    <div class=" footer-basic ">
        <footer>
            <div class=" social ">
                <a href="# "><img src="https://cdn-icons-png.flaticon.com/512/214/214552.png " alt=" " /></a>
                <a href=" # "><img src="https://cdn-icons-png.flaticon.com/512/174/174855.png " alt=" " /></a>
                <a href=" # "><img src="https://cdn-icons-png.flaticon.com/512/2504/2504903.png " alt=" " /></a>

                <ul class=" list-inline ">
                    <li class=" list-inline-item "><a href="index.php">Home</a></li>
                    <li class=" list-inline-item "><a href="shop.php">Shop</a></li>
                    <li class=" list-inline-item "><a href="contact.php">Contact</a></li>

                </ul>

        </footer>
        </div>

</body>

</html>