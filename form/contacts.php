<?php

$insert=false;

if(isset($_POST['name'])){

    // create connecting variables
    $server="localhost";
    $username="root";
    $password="";
    $database="CONTACT";

    // creating connection
    $conn=new mysqli($server,$username,$password,$database);

    // checking for connection
    if(!$conn){
        die("connection to this Database failed due to ".mysqli_connect_error());
    }

  
    // $sql="CREATE DATABASE CONTACT";
    // $sql="CREATE TABLE contacts(
    //     S.NO INT(3) PRIMARY KEY 
    //     NAME VARCHAR(30) NOT NULL
    //     EMAIL VARCHAR(50) NOT NULL
    //     PHONE VARCHAR(10) NOT NULL
    //     MSG VARCHAR(255) 
    //     DT TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

        // collect post variables
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $msg=$_POST['msg'];
  

     $sql="INSERT INTO `Contact`.`contacts` ( `Name`, `Email`, `Phone`, `Msg`, `Reg_Date`) VALUES ( '$name', '$email', '$phone', '$msg', current_timestamp());";


    if($conn->query($sql)==true)
    {
        $insert=true;
        // echo "successfully created";
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
    <title>onlinetutorials.com | contact us</title>
    <script src="https://kit.fontawesome.com/cb04d403ae.js" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: purple;
        }
        #contacts {
            position: relative;
            color: white;
        }
        #contacts .contacts {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .section-title {
            font-size: 4.7rem;
            margin: 30px 0;
            text-align: center;
        }
        .contact-bottom {
            display: flex;
           justify-content: center;
        }
        #contacts .left{
            margin-top: 60px;
            width: 50%;
        }
        #contacts .right{
            width: 50%;
        }
        #contacts form {
            width: 80%;
        }
        #contacts form input {
            width: 100%;
            padding: 5px;
            border: 1px solid black;
            outline: none;
            margin: 5px 0;
            font-size: 17px;
        }
        #contacts form textarea {
            width: 100%;
            border: 1px solid black;
            outline: none;
            padding: 5px;
            font-size: 17px;
        }
        #contacts form button {
            padding: 8px 15px;
            
            outline: none;
            cursor: pointer;
            font-size: 18px;
            margin: 10px 0 50px 0;
            float: right;
            border:1px solid white;
            background-color:transparent;
            color:white;
        }
        #contacts form button:hover{
            background-color: white;
            color: purple;
            border: none;
        }

        #contacts .contact-info{
            font-size: 20px;
        }
        #contacts .contact-info i{
            padding: 5px;
        }
        #contacts .contact-info div{
            margin: 5px 0;
        }

        @media (max-width:992px) {
            .contact-bottom {
            flex-direction: column;
            }  
            .contact-bottom div{
                margin:20px auto;
            }
            #contacts .right{
                width: 80%;
            }
            #contacts .left {
                width: 80%;
            }
            #contacts form{
                width: 100%;
            }
        }

        @media (max-width:540px) {
            .section-title{
                font-size: 3rem;
            }
        }

    </style>
</head>

<body>
    <section id="contacts">
        <div class="contacts container">
            <h1 class="section-title">CONTACT US</h1>
            <div class="contact-bottom">
                <div class="left">
                    <h3>REACH US:</h3>
                    <div class="contact-info">
                        <div class="mail"><i class="fa-solid fa-envelope"></i> info@onlinetutorials.com
                        </div>
                        <div class="no"><i class="fa-solid fa-mobile"></i>(+91)-9695939492 , 92318484993</div>
                        <div class="address"><i class="fa-solid fa-location-dot"></i>New Delhi,India</div>
                    </div>
                </div>
                <div class="right">
                    <h3>SUBMIT YOUR QUERY</h3>
                    <?php
                    if($insert==true){
                        echo "<h2>We'll reach you shortly</h2>";
                    }
                    ?>
                    <form action="contacts.php" method="post">
                        <input type="text" placeholder="Name" name="name" id="name" required>
                        <input type="phone" placeholder="Phone" name="phone" id="phone" required>
                        <input type="email" placeholder="Email" name="email" id="email" required>
                        <textarea name="msg" id="msg" cols="30" rows="10" placeholder="Message"></textarea>
                        <button>Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>