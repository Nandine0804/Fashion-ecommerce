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
            <a class="navbar-brand" href="#">BRANDZZ</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shop.html">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
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
<div class="header__cart">
                    <ul>
                        <li class="header__submenu text-black" id="submenu">
                            <button class="header__cart-btn" id="toggle-cart-btn"><svg class="cart" width="24" height="24" viewBox="0 0 24 24">
                   <path d="M17,18C15.89,18 15,18.89 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20C19,18.89 18.1,18 17,18M1,2V4H3L6.6,11.59L5.24,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42A0.25,0.25 0 0,1 7.17,14.75C7.17,14.7 7.18,14.66 7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.58 17.3,11.97L20.88,5.5C20.95,5.34 21,5.17 21,5A1,1 0 0,0 20,4H5.21L4.27,2M7,18C5.89,18 5,18.89 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20C9,18.89 8.1,18 7,18Z"></path>
             </svg>CART</button>
                            <div id="shopping-cart" class="shopping-cart-container">
                                <table id="cart-content">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                                <p class="total-container" id="total-price"></p>
                                <a href="checkout.html" id="checkout-btn" class="cart-btn">Checkout</a>
                                <a href="#" id="clear-cart" class="cart-btn">Clear Cart</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div> 
        
        

                   
                
            
            
        </div>
        
    </nav>
    <section class="hero-section ">
        <div class="container ">
            <h5>Lorem ipsum <span>Lorem, ipsum dolor.
                </span>dolor sit amet.</h5>
            <h1>Lorem ipsum dolor sit amet.</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum laboriosam ut quae eaque non nobis.
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
                    <h4>Lorem, ipsum dolor.</h4>
                    <button class="text-uppercase ">SHOP NOW</button>
                </div>
            </div>
            <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                <img class="img-fluid "
                    src="https://media.glamour.com/photos/569589b85fff94d44eec7dbf/master/w_1600%2Cc_limit/fashion-blogs-slaves-to-fashion-2010-05-11-0511crystal-renn-chanel2_fa.jpg "
                    alt="pic-1 " />

                <div class="details">
                    <h4>Lorem, ipsum dolor.</h4>
                    <button class="text-uppercase">SHOP NOW</button>
                </div>
            </div>
            <div class="one col-lg-4 col-md-12 col-sm-12 p-0 ">
                <img class="img-fluid "
                    src="https://media.voguebusiness.com/photos/5dddb3e8db92720008c2cdc4/2:3/w_2560%2Cc_limit/price-increases-in-luxury-voguebus-getty-imges-nov-19-article.jpg "
                    alt="pic-1 " />
                <div class="details ">
                    <h4>Lorem, ipsum dolor.</h4>
                    <button class="text-uppercase ">SHOP NOW</button>
                </div>
            </div>

        </div>
    </section>

    <section id="featured"  class="my-5 pb-5 ">
        <div class="container text-center mt-5 py-5 ">
            <h3>Our Featured</h3>
            <hr class="hr mx-auto ">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, ipsam?</p>
        </div>
        
        <div class="row mx-auto container-fluid grid" id="grid">
        
           
            <div class="product text-center col-lg-3 col-md-4 col-sm-12 border-0 card-item card" >
                <img class="img-fluid mb-3 card_image"
                    src="https://images.pexels.com/photos/914668/pexels-photo-914668.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2 "
                    alt=" ">
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
                <button type="submit" class="buy-btn card__btn add-to-cart" data-id="1">Add to cart</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-sm-12 border-0 card-item card" >
                <img class="img-fluid mb-3 card_image"
                    src="https://images.pexels.com/photos/914668/pexels-photo-914668.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2 "
                    alt=" ">
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
                <button type="submit" class="buy-btn card__btn add-to-cart" data-id="2">Add to cart</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-sm-12 border-0 card-item card" >
                <img class="img-fluid mb-3 card_image"
                    src="https://images.pexels.com/photos/914668/pexels-photo-914668.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2 "
                    alt=" ">
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
                <button type="submit" class="buy-btn card__btn add-to-cart" data-id="3">Add to cart</button>
            </div>

            <div class="product text-center col-lg-3 col-md-4 col-sm-12 border-0 card-item card" >
                <img class="img-fluid mb-3 card_image"
                    src="https://images.pexels.com/photos/914668/pexels-photo-914668.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2 "
                    alt=" ">
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
                <button type="submit" class="buy-btn card__btn add-to-cart" data-id="4">Add to cart</button>
            </div>

            <div class="product text-center col-lg-3 col-md-4 col-sm-12 border-0 card-item card" >
                <img class="img-fluid mb-3 card_image"
                    src="https://images.pexels.com/photos/914668/pexels-photo-914668.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2 "
                    alt=" ">
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
                <button type="submit" class="buy-btn card__btn add-to-cart" data-id="5">Add to cart</button>
            </div>

            <div class="product text-center col-lg-3 col-md-4 col-sm-12 border-0 card-item card" >
                <img class="img-fluid mb-3 card_image"
                    src="https://images.pexels.com/photos/914668/pexels-photo-914668.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2 "
                    alt=" ">
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
                <button type="submit" class="buy-btn card__btn add-to-cart" data-id="6">Add to cart</button>
            </div>
<div class="product text-center col-lg-3 col-md-4 col-sm-12 card-item border-0 card" >
                <img class="img-fluid mb-3 card_image"
                    src="https://images.pexels.com/photos/914668/pexels-photo-914668.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2 "
                    alt=" ">
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
                <button type="submit" class="buy-btn card__btn add-to-cart" data-id="7">Add to cart</button>
            </div>
<div class="product text-center col-lg-3 col-md-4 col-sm-12 card-item border-0 card" >
                <img class="img-fluid mb-3 card_image"
                    src="https://images.pexels.com/photos/914668/pexels-photo-914668.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2 "
                    alt=" ">
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
                <button type="submit" class="buy-btn card__btn add-to-cart" data-id="8">Add to cart</button>
            </div>

        </div>
        
         

    </section>

    <section id="banner" class="my-5 py-5">
        <div class="container ">
            <h4>Lorem, ipsum dolor.</h4>
            <h1>Lorem ipsum dolor sit.
                <br />upto 30% OFF
            </h1>
            <button class="text-uppercase " id="carts">Shop Now</button>
        </div>
    </section>



    <section id="featured " class="my-5 ">
        <div class="container text-center mt-5 py-5 ">
            <h3>Dresses and Coats</h3>
            <hr class="mx-auto hr ">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, ipsam?</p>
        </div>
        <div class="row mx-auto container-fluid ">
            <div class="product text-center col-lg-3 col-md-4 col-sm-12 border-0 card-item card" >
                <img class="img-fluid mb-3 card_image"
                    src="https://images.pexels.com/photos/914668/pexels-photo-914668.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2 "
                    alt=" ">
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
                <button type="submit" class="buy-btn card__btn add-to-cart" data-id="9">Add to cart</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-sm-12 border-0 card-item card" >
                <img class="img-fluid mb-3 card_image"
                    src="https://images.pexels.com/photos/914668/pexels-photo-914668.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2 "
                    alt=" ">
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
                <button type="submit" class="buy-btn card__btn add-to-cart" data-id="10">Add to cart</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-sm-12 border-0 card-item card" >
                <img class="img-fluid mb-3 card_image"
                    src="https://images.pexels.com/photos/914668/pexels-photo-914668.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2 "
                    alt=" ">
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
                <button type="submit" class="buy-btn card__btn add-to-cart" data-id="11">Add to cart</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-sm-12 border-0 card-item card" >
                <img class="img-fluid mb-3 card_image"
                    src="https://images.pexels.com/photos/914668/pexels-photo-914668.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2 "
                    alt=" ">
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
                <button type="submit" class="buy-btn card__btn add-to-cart" data-id="12">Add to cart</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-sm-12 border-0 card-item card" >
                <img class="img-fluid mb-3 card_image"
                    src="https://images.pexels.com/photos/914668/pexels-photo-914668.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2 "
                    alt=" ">
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
                <button type="submit" class="buy-btn card__btn add-to-cart" data-id="13">Add to cart</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-sm-12 border-0 card-item card" >
                <img class="img-fluid mb-3 card_image"
                    src="https://images.pexels.com/photos/914668/pexels-photo-914668.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2 "
                    alt=" ">
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
                <button type="submit" class="buy-btn card__btn add-to-cart" data-id="14">Add to cart</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-sm-12 border-0 card-item card" >
                <img class="img-fluid mb-3 card_image"
                    src="https://images.pexels.com/photos/914668/pexels-photo-914668.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2 "
                    alt=" ">
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
                <button type="submit" class="buy-btn card__btn add-to-cart" data-id="15">Add to cart</button>
            </div>
             <div class="product text-center col-lg-3 col-md-4 col-sm-12 border-0 card-item card" >
                <img class="img-fluid mb-3 card_image"
                    src="https://images.pexels.com/photos/914668/pexels-photo-914668.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2 "
                    alt=" ">
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


    <section id="featured " class="my-5 ">
        <div class="container text-center mt-5 py-5 ">
            <h3>Children section and 13 Age below</h3>
            <hr class="mx-auto hr ">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, ipsam?</p>
        </div>
       
        <div class="row mx-auto container-fluid ">
            <div class="product text-center col-lg-3 col-md-4 col-sm-12 border-0 card-item card" >
                <img class="img-fluid mb-3 card_image"
                    src="https://images.pexels.com/photos/914668/pexels-photo-914668.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2 "
                    alt=" ">
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
            <div class="product text-center col-lg-3 col-md-4 col-sm-12 border-0 card-item card" >
                <img class="img-fluid mb-3 card_image"
                    src="https://images.pexels.com/photos/914668/pexels-photo-914668.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2 "
                    alt=" ">
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
            <div class="product text-center col-lg-3 col-md-4 col-sm-12 border-0 card-item card" >
                <img class="img-fluid mb-3 card_image"
                    src="https://images.pexels.com/photos/914668/pexels-photo-914668.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2 "
                    alt=" ">
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
            <div class="product text-center col-lg-3 col-md-4 col-sm-12 border-0 card-item card" >
                <img class="img-fluid mb-3 card_image"
                    src="https://images.pexels.com/photos/914668/pexels-photo-914668.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2 "
                    alt=" ">
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
            <div class="product text-center col-lg-3 col-md-4 col-sm-12 border-0 card-item card" >
                <img class="img-fluid mb-3 card_image"
                    src="https://images.pexels.com/photos/914668/pexels-photo-914668.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2 "
                    alt=" ">
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
            <div class="product text-center col-lg-3 col-md-4 col-sm-12 border-0 card-item card" >
                <img class="img-fluid mb-3 card_image"
                    src="https://images.pexels.com/photos/914668/pexels-photo-914668.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2 "
                    alt=" ">
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
            <div class="product text-center col-lg-3 col-md-4 col-sm-12 border-0 card-item card" >
                <img class="img-fluid mb-3 card_image"
                    src="https://images.pexels.com/photos/914668/pexels-photo-914668.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2 "
                    alt=" ">
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
            <div class="product text-center col-lg-3 col-md-4 col-sm-12 border-0 card-item card" >
                <img class="img-fluid mb-3 card_image"
                    src="https://images.pexels.com/photos/914668/pexels-photo-914668.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2 "
                    alt=" ">
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
            <a href=" # "><img src=" https://cdn-icons-png.flaticon.com/512/214/214552.png " alt=" "/></a>
            <a href=" # "><img src=" https://cdn-icons-png.flaticon.com/512/174/174855.png " alt=" "/></a>
            <a href=" # "><img src=" https://cdn-icons-png.flaticon.com/512/2504/2504903.png " alt=" "/></a>
           
        <ul class=" list-inline ">
    
            <li class=" list-inline-item "><a href=" home.php ">Home</a></li>
            <li class=" list-inline-item "><a href=" shop.html ">Shop</a></li>
            <li class=" list-inline-item "><a href=" contact.html ">Contact</a></li>
        
        
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
    