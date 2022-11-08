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
    <title><?php echo $fetch_info['name'] ?> | Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
   @import url("https://fonts.googleapis.com/css2?family=Jost:wght@300;400&family=Overpass:wght@300&family=Poiret+One&family=Poppins:wght@300&display=swap");
 nav{
        padding-left: 100px!important;
        padding-right: 100px!important;
        background:#242424;
        font-family: 'Overpass', sans-serif;
    } 
    body{
        background: #c0392b;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #8e44ad, #c0392b);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #8e44ad, #c0392b); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
font-family: 'Overpass', sans-serif;
    }
    nav a.navbar-brand{
        color: #fff;
        font-size: 30px!important;
        font-weight: 500;
    }
    button a{
        color: #6665ee;
        font-weight: 500;
    }
    button a:hover{
        text-decoration: none;
    }
    h1{
        position: absolute;
        top: 50%;
        left: 50%;
        width: 100%;
        text-align: center;
        transform: translate(-50%, -50%);
        font-size: 50px;
        font-weight: 600;
        transition: all 0.4s ease-in-out;

    }

    h1:hover{
        letter-spacing: 4px;
    }
    </style>
</head>
<body>
    <nav class="navbar">
    <a class="navbar-brand" href="#">LOGIN PAGE</a>
    <button type="button" class="btn btn-light"><a href="logout-user.php">Logout</a></button>
    </nav>
    <h1>Welcome <?php echo $fetch_info['name'] ?></h1>
    
</body>
</html>