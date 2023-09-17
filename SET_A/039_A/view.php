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
        
        <style>
            table{
                border-collapse: collapse;
            }
            
            tr,td,th{
                border: 10px solid;
 
            }
        </style>
        <?php include 'header.php';?>
        
    <center><h1>Order Details</h1></center>
    
    <table>
        <tr>
            <th>Name</th>
            <td><?php echo $name; ?>
        </tr>
        
        <tr>
            <th>Mobile No</th>
            <td><?php echo $mobile; ?>
        </tr>
        
        <tr>
            <th>Address</th>
            <td><?php echo $address; ?>
        </tr>
        
        <tr>
            <th>Room Size</th>
            <td><?php echo $roomsize; ?>
        </tr>
        
        <tr>
            <th>Color Type</th>
            <td><?php echo $colortype; ?>
        </tr>
        
        <tr>
            <th>Color</th>
            <td><?php echo $color; ?>
        </tr>
    </table>
        
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