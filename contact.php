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
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
 <li>
                        <div class="cart">
                            <a href="index.php">
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

    <section id="content" class="container my-5 py-5">
        <div class="container text-center mt-5">
            <h3>Contact Us</h3>
            <hr class="hr mx-auto">
            <p class="w-50 mx-auto">
                Phone number:123456789
            </p>
            <p class="w-50 mx-auto">
                Email-address : BRANDZZ2email.com
            </p>
            <p class="w-50 mx-auto">
                We work on fashion style
            </p>
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
                  
                    <li class=" list-inline-item "><a href="contact.php">Contact</a></li>

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