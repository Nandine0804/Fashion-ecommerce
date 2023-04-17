<!DOCTYPE html>
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
        <div class="container">
            <a class="navbar-brand" href="index.php">BRANDZZ</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shop.html">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                    <div class="icons">
                        <li class="nav-item" id="bag">

                            <a href="cart.html">
                                <img src=" https://cdn-icons-png.flaticon.com/512/687/687259.png " alt="bg ">
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a href="account.html "><i class="fa-regular fa-user "></i></a>
                        </li>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
    <!--Login page-->
    <section>
        <div class="my-5 py-5">
            <div class="container text-center mt-3 pt-5">
                <h2 class="form-weight-bold">CHECK OUT</h2>
                <hr class="hr mx-auto">
            </div>
            <div class="mx-auto container">
                <form id="checkout-form">
                    <div class="form-group checkout-small-element">
                        <label>Name</label>
                        <input type="text" class="form-control" id="checkout-name" name="name" placeholder="" />
                    </div>


                    <div class="form-group checkout-small-element">
                        <label>Email</label>
                        <input type="text" class="form-control" id="checkout-email" name="email" placeholder="" />
                    </div>
                    <div class="form-group checkout-small-element"> <label>Phone</label>
                        <input type="tel" class="form-control" id="checkout-phone" name="phone" placeholder="" />
                    </div>
                    <div class="form-group checkout-small-element"> <label>City</label>
                        <input type="text" class="form-control" id="checkout-city" name="city" placeholder="" />
                    </div>
                    <div class="form-group checkout-small-element w-100"> <label>Address</label>
                        <input type="text" class="form-control" id="checkout-address" name="address" placeholder="" />
                    </div>
                    <div class="form-group checkout-btn-container mt-20">
                        <button type="submit" class="w-100" id="checkout">CHECK OUT</button>
                    </div>

                </form>
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
                    <li class=" list-inline-item "><a href="shop.html">Shop</a></li>
                    <li class=" list-inline-item "><a href="contact.html">Contact</a></li>

                </ul>

        </footer>
        </div>








        <script src="https://kit.fontawesome.com/544ad584ac.js " crossorigin=" anonymous ">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js " integrity=" sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe " crossorigin=" anonymous ">
        </script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity=" sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin=" anonymous "></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js " integrity=" sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin=" anonymous "></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js " integrity=" sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin=" anonymous "></script>
        <script defer src=" https://use.fontawesome.com/releases/v5.15.4/js/all.js " integrity=" sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc " crossorigin=" anonymous "></script>

</body>

</html>