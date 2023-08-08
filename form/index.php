<?php

$insert=false;

if(isset($_POST['name'])){

    // create connecting variables
    $server="localhost";
    $username="root";
    $password="";

    // creating connection
    $conn=mysqli_connect($server,$username,$password);

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

    $sql="INSERT INTO `students`.`students` ( `Name`, `Email`, `Mobile`, `Gender`, `Age`, `Qualification`, `Address`, `Language`, `Query`, `Date`) VALUES ( '$name', '$email', '$mobile', '$gender', '$age', '$qualification', '$address', '$language', '$query', current_timestamp());";

    if($conn->query($sql)==true)
    {
        // echo"Successfully inserted";
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
  <link rel="stylesheet" href="assets/stylesheets/style.css">
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

             <input type="text" name="name" id="name" required placeholder="Enter your name"> <span class="formerror"></span>
            <input type="email" name="email" id="email" required placeholder="Enter your email"><span class="formerror"></span>
             <input type="phone" name="phone" id="phone" required  placeholder="Enter your mobile"><span class="formerror"></span>
            <input type="text" name="gender" id="gender" required placeholder="Enter your gender"><span class="formerror"></span>
            <input type="text" name="age" id="age" required placeholder="Enter your age"> <span class="formerror"></span>
            <input type="text" name="qualification" id="qualification" required placeholder="Enter your qualification"><span class="formerror"></span>
            <input type="text" name="address" id="address" required placeholder="Enter your address"><span class="formerror"></span>
             <input type="text" name="language" id="language" required placeholder="Languages you want to learn"><span class="formerror"></span>
            <textarea name="query" id="query" cols="20" rows="10" placeholder="Any query"></textarea>
            <div class="btns">
            <button class="btn">Submit</button>
            <button class="btn" onclick="clear()">Reset</button>
            </div>
        </form>
    </div>

    <script src="assets/javascript/script.js"></script>
</body>

</html>

