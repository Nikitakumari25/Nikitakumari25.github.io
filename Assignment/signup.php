 <?php
    include("connection.php");
    $insert=false;
   
    if(isset($_POST['name'])){
        
        // collect post variables
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $pass=$_POST['password'];
        $cpass=$_POST['cpassword'];
        $gender=$_POST['gender'];
        
        if($pass==$cpass){
           $insert=true;
        }
        else
        {
            echo "<p>Passwords didn't match.</p>";
        }
        
        $sql="INSERT INTO `todos` (`Name`, `Email`, `Phone`, `Gender`, `Password`, `Cpassword`) VALUES ('$name', '$email', '$phone', '$gender', '$pass', '$cpass');";
        
        
        if($conn->query($sql)==true)
        {
            // $insert=true;
        }
        else
        {
            echo "ERROR: $sql <br> $conn->error";
        }
    }

?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate based course</title>
    <link rel="stylesheet" href="assets/stylesheets/style.css"> 
    <script src="assets/script/script.js"></script> 
    <script src="https://kit.fontawesome.com/cb04d403ae.js" crossorigin="anonymous"></script>    
</head>

<body>
    <div class="reg_form">

        <form action="#" method="post">
            <h1>Registration Form</h1>
             <?php
            if($insert==true){
                echo "<p class='submitMsg'> Account created successfully. <a href='login.php'>Click here </a> to login..</p>";
            }
            ?> 

            <div class="form">
                <div class="input_field">
                    <div class="title_name">Name <span>*</span></div>
                    <div class="input"><input type="text" name="name" id="name" required></div>
                </div>
        
                <div class="input_field">
                    <div class="title_name">Email <span>*</span></div>
                    <div class="input"><input type="email" name="email" id="email" required></div>
                </div>
                <div class="input_field">
                    <div class="title_name">Phone <span>*</span></div>
                    <div class="input"><input type="phone" name="phone" id="phone" required></div>
                </div>
                <div class="input_field radio_btn">
                    <div class="title_name">Gender <span>*</span></div>
                    <div class="input">
                        <label for="m">
                            <input type="radio" name="gender" value="Male" id="m"> Male
                            </label>
                            <label for="f">
                            <input type="radio" name="gender" value="Female" id="f"> Female
                        </label>
                    </div>
                </div>
                <div class="input_field">
                    <div class="title_name">Password <span>*</span></div>
                    <div class="input"><input type="password" name="password" id="password" required></div>
                </div>
                <div class="input_field">
                    <div class="title_name">Confirm Password <span>*</span></div>
                    <div class="input"><input type="password" name="cpassword" id="cpassword" required></div>
                </div>
            </div>

            <div class="note">Note: Fields marked with <span>*</span> are required.</div>

            <div class="btns">
                <button class="btn" name="submit">Register</button>
                <button class="btn" onclick="clear()">Reset</button>
            </div>

            <div class="signin">
                <p>Already have an account? <a href="login.php">Login here</a></p>
            </div>
        </form>
    </div>

</body>

</html>



