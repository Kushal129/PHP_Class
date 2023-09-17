<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
        <head>
<title>Order</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
    <body>
        <?php include 'header.php';?>
    <center> <form action="view.php" method = "POST">
            <label>Name</label>
            <input type="text" name="name" required><br><br>
            
            <label>Mobile No</label>
            <input type="number" name="mobile" required><br><br>
            
            <label>Address</label>
            <input type="text" name="address" required><br><br>
            
            <label>Room Size</label>
            <input type="text" name="roomsize" required><br><br>
            
            <label>Color type</label>
            <input type="text" name="colortype" required><br><br>
            
            <label>Color</label>
            <input type="color" name="color" required><br><br>
            
            <input type="submit" name="submit" value="submit">
        </form></center><br><br>
        <?php include 'footer.php';?>
    </body>
</html>

<?php
if($_SESSION["REQUEST_METHOD"] == "POST")
{
    $name = $_POST["name"];
    $mobile = $_POST["mobile"];
    $address= $_POST["address"];
    $roomsize = $_POST["roomsize"];
    $colortype = $_POST["colortype"];
    $color = $_POST["color"];
    
}
?>