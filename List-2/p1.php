<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=PT+Sans');

        body {
            background: #fff;
            font-family: 'PT Sans', sans-serif;
        }

        h2 {
            padding-top: 1.5rem;
        }

        a {
            color: #333;
        }

        a:hover {
            color: #da5767;
            text-decoration: none;
        }

        .card {
            border: 0.40rem solid #f8f9fa;
            top: 10%;
        }

        .form-control {
            background-color: #f8f9fa;
            padding: 20px;
            padding: 25px 15px;
            margin-bottom: 1.3rem;
        }

        .form-control:focus {

            color: #000000;
            background-color: #ffffff;
            border: 3px solid #da5767;
            outline: 0;
            box-shadow: none;

        }

        .btn {
            padding: 0.6rem 1.2rem;
            background: #da5767;
            border: 2px solid #da5767;
        }

        .btn-primary:hover {


            background-color: #df8c96;
            border-color: #df8c96;
            transition: .3s;

        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <h2 class="card-title text-center">Register </h2>
                    <div class="card-body py-md-4">
                        <form _lpchecked="1" action="#" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            </div>


                            <div class="form-group">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="confirm-password" name="password_confirm" placeholder="confirm-password">
                            </div>
                            <div class="d-flex flex-row align-items-center justify-content-between">
                                <a href="#">Login</a>
                                <button class="btn btn-primary" name="register">Create Account</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST["register"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $psw = $_POST["password"];
        $psw_confirm = $_POST["password_confirm"];

        echo "<script>alert('Name : $name , Email : $email, Password : $psw, Confirm-password : $psw_confirm');</script>";
       
    }
    ?>
</body>

</html>