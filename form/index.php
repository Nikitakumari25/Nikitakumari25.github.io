<?php

$insert=false;

if(isset($_POST['name'])){

    // create connecting variables
    $server="localhost";
    $username="root";
    $password="";
    $database="students";

    // creating connection
    $conn=mysqli_connect($server,$username,$password,$database);

    // checking for connection
    if(!$conn){
        die("connection to this Database failed due to ".mysqli_connect_error());
    }
    // echo "successfully connecting to Database";

   // collect post variables
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['phone'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $qualification=$_POST['qualification'];
    $address=$_POST['address'];
    $language=$_POST['language'];
    $query=$_POST['query'];

    $sql="INSERT INTO `students` ( `Name`, `Email`, `Mobile`, `Age`, `Gender`, `Qualification`, `Address`, `Language`, `Query`, `Date`) VALUES ( '$name', '$email', '$mobile', '$age', '$gender', '$qualification', '$address', '$language', '$query', current_timestamp());";

     if($conn->query($sql)==true){
        $insert=true;
     }
    else
    {
     echo "ERROR: $sql <br> $conn->error";
    }

    $conn->close();

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate based course</title>
  <style>
   *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    body{
        overflow:hidden;
    }
    .reg_form {
        display: flex;
        justify-content: center;
    }
    .reg_form img {
        height: 100vh;
        width: 100vw;
        z-index: -1;
        position: absolute;
    }
    .reg_form form {
        top: 20px;
        display: flex;
        align-items: center;
        flex-direction: column;
        background: #fff;
        padding:15px 30px;
        margin: 0 auto;
        border-radius: 5px;
        font-weight: bold;
        font-size: 1.6rem;
        position: absolute;
        width: 50%;
    }
    .reg_form form input {
        margin: 5px 0;
        width: 95%;
        outline: none;
        border: 1px solid black;
        padding: 8px;
    }
    .reg_form form textarea {
        padding: 6px;
        border: 1px solid black;
        width: 95%;
    }
    .reg_form h1 {
        font-size:3.8rem;
        text-align: center;
    }
    .reg_form .btn {
        font-size: 1.4rem;
        margin: 10px auto;
        cursor: pointer;
        background-color: purple;
        color: white;
        border: none;
        padding: 6px 10px;
    }
    .reg_form .submitMsg {
        font-size: 2rem;
        text-align: center;
        margin: 6px 0;
        color: purple;
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


    @media (max-width:1400px) {
        .reg_form form {
            width: 60%;
        }
    }

    @media (max-width:992px) {
        .reg_form form {
            width: 80%;
            padding:10px 20px;
        }
        
         .reg_form h1 {
            font-size:3rem;
        }
    }


    @media (max-width:768px) {
        .reg_form form {
            width: 70%;
            padding:10px 20px;
        }
        .reg_form form input {
            width: 100%;
        }
        .reg_form form textarea {
            width: 100%;
         }
         .reg_form h1 {
            font-size:2.3rem;
        }
    }


    @media (max-width:540px){
        .reg_form form input {
            width: 100%;
        }
        .reg_form form textarea {
            width: 100%;
         }
         .reg_form h1 {
            font-size:2.5rem;
        }
         .reg_form form {
            width: 90%;
        }
        .reg_form form input {
            width: 100%;
        }
        .reg_form .btn {
            font-size: 1.3rem;
            padding: 4px 10px;
            margin: 10px auto;
        }
        .reg_form form textarea {
            width: 100%;
        }
        .reg_form h1 {
            font-size:1.8rem;
        }
        .reg_form form {
        top: 10px;
        }
    } 

  </style>
</head>

<body>
    <div class="reg_form">
        <img src="https://bohatala.com/wp-content/uploads/2018/02/maxresdefault-5.jpg" alt="">
        <form action="index.php" method="post">
            <h1>Registration Form</h1>

            <?php
            if($insert==true)
            {
                echo "<p class='submitMsg'>Thanks for joining us.We'll contact you shortly.</p>";
            }
            ?>

             <input type="text" name="name" id="name" required placeholder="Enter your name"> 
            <input type="email" name="email" id="email" required placeholder="Enter your email">
             <input type="phone" name="phone" id="phone" required  placeholder="Enter your mobile">
            <input type="text" name="gender" id="gender" required placeholder="Enter your gender">
            <input type="text" name="age" id="age" required placeholder="Enter your age"> 
            <input type="text" name="qualification" id="qualification" required placeholder="Enter your qualification">
            <input type="text" name="address" id="address" required placeholder="Enter your address">
             <input type="text" name="language" id="language" required placeholder="Languages you want to learn">
            <textarea name="query" id="query" cols="20" rows="8" placeholder="Any query"></textarea>
            <div class="btns">
            <button class="btn">Submit</button>
            <button class="btn" onclick="clear()">Reset</button>
            </div>
        </form>
    </div>

    <script src="assets/javascript/script.js"></script>
</body>

</html>

