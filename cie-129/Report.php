<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            color: #333;
        }

        .product-table {
            border-collapse: collapse;
            width: 100%;
        }

        .product-table th,
        .product-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .product-table th {
            background-color: #f2f2f2;
        }
    </style>
</head>


<body>
    <h1>Repost's </h1>

    <table class="product-table">
        <thead>
            <tr>
                <th>Name </th>
                <th>Quantity </th>
                <th>Company </th>
                <th>Price per Unit </th>
                <th>Type </th>
                <th>Details </th>
            </tr>
        </thead>

        <tbody>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $Name = $_POST["Name"];
                $Quantity = $_POST["Quantity"];
                $Company = $_POST["Company"];
                $Price_per_unit = $_POST["Price_per_unit"];
                $type = $_POST["type"];
                $details = "";

                if ($type === "Camera") {
                    $lensType = $_POST["lensType"];
                    $megaPixel = $_POST["megaPixel"];
                    $memoryCapacity = $_POST["memoryCapacity"];
                    $details = "Lens Type: $lensType, Mega Pixel: $megaPixel, Memory Capacity: $memoryCapacity";
                } elseif ($type === "Laptop") {
                    $RAM = $_POST["RAM"];
                    $processor = $_POST["processor"];
                    $graphicsCard = $_POST["graphicsCard"];
                    $details = "RAM: $RAM, Processor: $processor, Graphics Card: $graphicsCard";
                } elseif ($type === "Refrigerator") {
                    $capacity = $_POST["capacity"];
                    $star = $_POST["star"];
                    $refrigeratorType = $_POST["refrigeratorType"];
                    $details = "Capacity: $capacity, Star: $star, Refrigerator Type: $refrigeratorType";
                }

                echo "<tr>";
                echo "<td>$Name</td>";
                echo "<td>$Quantity</td>";
                echo "<td>$Company</td>";
                echo "<td>$Price_per_unit</td>";
                echo "<td>$type</td>";
                echo "<td>$details</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <form action="Product.php" method="get">
        <button type="submit">Add New Record</button>
    </form>

</body>

</html>