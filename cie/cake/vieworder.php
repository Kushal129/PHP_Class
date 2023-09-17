<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cake_name = $_POST["cake_name"];
    $cake_size = $_POST["cake_size"];
    $cake_quantity = $_POST["cake_quantity"];
    $Occasion = $_POST["Occasion"];
    $delivery_date = $_POST["delivery_date"];
    $address = $_POST["address"];
    $note = $_POST["note"];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>vieworder</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        table{
            align-items: center;
            border-collapse: collapse;
            width: 100%;
        }
        th ,td {
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>

<body>
    <?php 
    include "navbar.php";
    ?>
    <h1> Orders </h1>
    <table>
        <tr>
            <th> Cake Name </th>
            <th> Cake Size </th>
            <th> Cake Quantity </th>
            <th> Occasion </th>
            <th> Cake Delivery Date </th>
            <th> Address</th>
            <th> Note's </th>
        </tr>
        <tr>
            <td><?php echo $cake_name ?></td>
            <td><?php echo $cake_size ?></td>
            <td><?php echo $cake_quantity ?></td>
            <td><?php echo $Occasion ?></td>
            <td><?php echo $delivery_date ?></td>
            <td><?php echo $address ?></td>
            <td><?php echo $note ?></td>
        </tr>
    </table>


    <br>
    <?php 
    include "footer.php";
    ?>
</body>

</html>