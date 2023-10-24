<?php
include("connection.php");
$insert=false;
 if(isset($_POST['login'])){
    $username=$_POST['username'];
    $pass=$_POST['password'];

    $query="SELECT * FROM todos WHERE Email ='$username' && Password='$pass' ";
    $data=mysqli_query($conn,$query);
    $total=mysqli_num_rows($data);
    
    if($total!=0){
        ?>
        <meta http-equiv = "refresh" content = "0; url =http://localhost/Assignment/ToDo.php " />
        <?php
    }
    else{
        $insert=true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="assets/stylesheets/style.css">
    <script src="assets/script/script.js"></script>
    <script src="https://kit.fontawesome.com/cb04d403ae.js" crossorigin="anonymous"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            overflow: hidden;
        }

        .reg_form {
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url("assets/images/2YgsRc.jpg");
            background-size: 100% 100%;
            height: 100vh;
            width: 100vw;
            z-index: -1;
            position: absolute;
        }

        .reg_form::after {
            display: block;
            position: absolute;
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            background-color: black;
            opacity: 0.7;
            z-index: -1;
            content: "";
        }

        .reg_form form {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            background: #fff;
            padding: 15px 30px;
            margin: 50px 0;
            border-radius: 5px;
            font-size: 1.6rem;
            position: absolute;
            width: 25%;
        }

        .reg_form form input {
            width: 100%;
            margin: 7px 0;
            outline: none;
            border: 1px solid black;
            padding: 8px;
            border-radius: 5px;
            font-size: 1rem;
            position: relative;
        }

        .reg_form h1 {
            font-size: 3rem;
            text-align: center;
            margin: 20px 0 10px 0;
        }

        .reg_form .btn{
            font-size: 1.4rem;
            margin: 10px auto;
            cursor: pointer;
            background-color: purple;
            color: white;
            padding: 6px 10px;
            width: 100%;
            border-radius: 5px;
            text-decoration: none;
            text-align: center;
        }

        .reg_form .btn:hover {
            background-color: rgb(107, 1, 107);
        }

        .reg_form .signup {
            font-size: 1.3rem;
        }
        .reg_form i {
            font-size: 9.5rem;
            top: 134px;
            left: 38px;
            z-index: 2;
            color: rgba(87, 64, 64, 0.648);
        }
        .err{
            color:#DB524C;
            font-size:1.1rem;
            text-align:left;
        }


        @media (max-width:1400px) {
            .reg_form form {
                width: 30%;
            }
        }
        @media (max-width:992px) {
            .reg_form form {
                width: 40%;
                padding: 10px 20px;
            }
            .reg_form h1 {
                font-size: 3rem;
            }
        }
        @media (max-width:768px) {
            .reg_form form {
                width: 55%;
            }
            .reg_form h1 {
                font-size: 2.3rem;
            }
            .err{              
                font-size:0.9rem;
            }   
        }
        @media (max-width:540px) {
            .reg_form form {
                width: 70%;
            }
            .reg_form h1 {
                font-size: 1.8rem;
            }
            .err{              
                font-size:0.7rem;
            }  
            .reg_form i {
                font-size: 8.5rem;
            }
        }
        @media (max-width:390px) {
            .reg_form form {
                width: 80%;
            }
            .reg_form h1 {
                font-size: 1.5rem;
            }
            .err{              
                font-size:0.5rem;
            }  
            .reg_form i {
                font-size: 6.5rem;
            }
            .reg_form .signup {
                font-size: 1rem;
            }
            .reg_form .btn{
                font-size: 1.2rem;
            }
        }
        @media (max-width:290px) {
            .reg_form form {
                width: 90%;
            }
            .reg_form i {
                font-size: 5.5rem;
            }
        }
        
    </style>
</head>

<body>
    <div class="reg_form">

        <form action="#" method="POST">
            <i class="fa-solid fa-circle-user"></i>
            <h1>Login Now</h1>
            <?php
                if($insert==true){
                    echo '<p class="err">Login failed. Please try again. </p>';
                }
            ?>
            <input type="text" name="username" id="username" required placeholder="Username">
            <input type="password" name="password" id="password" required placeholder="Password">
            <button class="btn" name="login">login</button>
            <div class="signup">
                <p>Create an account? <a href="signup.php">Sign Up</a></p>
            </div>
        </form>
    </div>
</body>

</html>



