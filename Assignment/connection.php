<?php
    error_reporting(0);

        // create connecting variables
        $server="localhost";
        $username="root";
        $password="";
        $database="todos";

    // creating connection
    $conn=mysqli_connect($server,$username,$password,$database);

    // checking for connection
    if(!$conn){
        die("connection to this Database failed due to ".mysqli_connect_error());
    }
    // echo "successfully connecting to Database";
    else{
        // echo "connection ok";
    }
  
?>

