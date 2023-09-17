<?php


if($_SERVER ['REQUEST_METHOD'] == 'POST'){
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>order</title>
</head>
<body>
    <?php 
    include "navbar.php";
    ?>
    <form action="vieworder.php" method="post">
        <h1>Oder </h1>
        <label for="">Cake Type</label>
        <input type="text" name="cake_name" required>
        <br>
        <label for="">Cake Size</label>
        <select name="cake_size" id="" required> 
            <option value="Small">Small</option>
            <option value="Medium">Medium</option>
            <option value="Large">Large</option>
        </select>
        <br>
        <label for="">Cake Quantity</label>
        <input type="number" name="cake_quantity" required>
        <br>
        <label for="">Occasion</label>
        <select name="Occasion" id="" required>
            <option value="Birthday">Birthday</option>
            <option value="Anniversary">Anniversary</option>
            <option value="Engagement">Engagement</option>
        </select>
        <br>
        <label for="">Delivery Date</label>
        <input type="date" name="delivery_date" required>
        <br>
        <label for="">Address</label>
        <input type="text" name="address" required>
        <br>
        <label for="">Note</label>
        <textarea class="form-control" rows="2" name="note"></textarea>
        <br>

        <input type="submit" value="Order">
    </form>

    <?php 
    include "footer.php";
    ?>
</body>
</html>