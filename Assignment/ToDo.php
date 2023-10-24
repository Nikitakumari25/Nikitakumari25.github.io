<?php
    include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODOS</title>
    <script src="https://kit.fontawesome.com/cb04d403ae.js" crossorigin="anonymous"></script>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            overflow: hidden;
        }
        .wrapper{
            height: 100vh;
            width: 100vw;
            background-image: url("assets/images/notes.jpg");
            background-size: 100% 100%;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            position: relative;
        }
        .wrapper::after{
            content: "";
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background: rgba(0,0,0,0.5);
        }
        #todo {
            margin: 100px auto;
            width: 25%;
            padding: 20px;
            border-radius: 10px;
            color: orange;
            position: absolute;
            background: transparent;
            box-shadow: 0px 0px 5px 4px rgba(255, 255, 255, 0.347);
            background-size: 100% 100%;
            background-size: cover;
            z-index: 1;
        }

        #todo::after {
            content: "";
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            border-radius: 10px;
            background: rgba(0, 0, 0, 0.5);
            z-index: -1;
        }

        #todo h1 {
            text-align: center;
        }

        input {
            margin: 20px 0;
            padding: 7px;
            border-radius: 5px;
            width: 70%;
            border: 1px solid orange;
            font-size: 1rem;
            outline: none;
        }

        .add {
            margin: 20px 0;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid orange;
            background-color: #fff;
            color: orange;
        }

        .add:hover {
            border: none;
            background-color: orange;
            color: white;
            cursor: pointer;
        }

        .todo_container {
            color: white;
            display: flex;
            align-items: center;
            font-size: 18px;
        }

        .todo_container .todo_list {
            width: 70%;
        }

        .todo_container .mytodo {
            width: 93%;
            border: 1px solid transparent;
            margin: 5px 0;
            outline: none;
        }
        .todo_container .mytodo:focus{
            border: none;
            border-bottom: 2px solid orange;
            background-color: transparent;
            color: white;
            border-radius: 0;
        }

        .action_btns {
            display: flex;
            margin-left: 20px;
        }

        .action_btns i {
            background-color: #fff;
            color: orange;
            padding: 8px 10px;
            border-radius: 5px;
            margin: 0 3px;
        }

        .action_btns .edit i {
            background-color: #3D8BCD;
            color: white;
        }

        .action_btns .edit i:hover {
            border: none;
            color: #3D8BCD;
            background-color: #fff;
            cursor: pointer;
        }

        .action_btns .dlt i {
            background-color: #DB524C;
            color: white;
        }

        #todo .action_btns .dlt i:hover {
            border: none;
            color: #DB524C;
            background-color: #fff;
            cursor: pointer;
        }
        .wrapper .logout{
            font-size: 1.4rem;
            cursor: pointer;
            background-color: purple;
            color: white;
            padding: 6px 10px;
            border-radius: 5px;
            position: absolute;
            z-index: 1;
            right: 10px;
            top: 10px;
        }
        .wrapper .logout:hover{
            background-color: rgb(107, 1, 107);
        }

        @media (max-width:1400px) {
            #todo {
                width: 30%;
            }
        }
        @media (max-width:992px) {
            #todo {
                width: 45%;
            }
        }
        @media (max-width:768px) {
            #todo {
                width: 60%;
            }
        }
        @media (max-width:540px) {
            #todo {
                width: 70%;
            }
        }
        @media (max-width:390px) {
            #todo {
                width: 80%;
            }
            .todo_container {
                flex-direction: column;
            }
            input{
                width: 90%;
            }
            .add{
                display: block;
                margin: 0;
            }
            .todo_container .todo_list {
                width: 100%;
            }
            .todo_container .mytodo {
            margin: 9px 0;
            }
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <a href="logout.php"><button class="logout">Log out</button></a>
        <div id="todo">
            <h1>TODOs</h1>
            <input type="text" placeholder="Add a task" id="add_todo">
            <button class="add">ADD</button>
            <div class="todo">
                <!-- <div class="todo_container">
                    <div class="todo_list">
                        <input type="text" placeholder="My first task" class="mytodo">
                    </div>
                    <div class="action_btns">
                        <div class="edit"><i class="fa-solid fa-pen-to-square"></i></div>
                        <div class="dlt"><i class="fa-solid fa-trash"></i></div>
                    </div>
                </div>
                <div class="todo_container">
                    <div class="todo_list">
                        <input type="text" placeholder="My first task" class="mytodo">
                    </div>
                    <div class="action_btns">
                        <div class="edit"><i class="fa-solid fa-pen-to-square"></i></div>
                        <div class="dlt"><i class="fa-solid fa-trash"></i></div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>

    <script src="assets/script/script.js"></script>

</body>

</html>