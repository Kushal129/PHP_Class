<!-- Write PHP application which manages product’s details using object-oriented concepts.
The structure for creating a class is as follows.
    1. Product with data members name, quantity, company, price per unit, type (like Camera, Laptop, Refrigerator).
    2. Camera with data members lens type, mega pixel, memory capacity.
    3. Laptop with data members RAM, Processor, Graphics card.
    4. Refrigerator with data members Capacity, Star (like 2,3,4,5), Type (like single door, double door).
    5. Create member functions as per requirements. Display method should be there in all classes.
    6. Use access specifier as per requirements.
The application should have following features:
    • Take user input of a product’s details: name, quantity, company, price per unit, product type.
    • As per the product type given, ask other details specific to that product.
    • Display information of product in table format.
    • Display total price for product.  -->

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Product's </title>
    </head>
    <body>
        <h1>Product Management</h1>
        <form action="Report.php" method="POST">

        <label for="Name">Name : </label>
        <input type="text" name="Name" id="Name" placeholder="Enter Name" required >
        <br>
        <label for="Quantity">Quantity : </label>
        <input type="number" name="Quantity" id="Quantity" placeholder="Enter Quantity" required >
        <br>
        <label for="Company">Company : </label>
        <input type="text" name="Company" id="Company" placeholder="Enter Quantity" required >
        <br>
        <label for="Price_per_unit">Price Per unit : </label>
        <input type="text" name="Price_per_unit" id="Price_per_unit" placeholder="Enter Price_per_unit" required >
        <br>
        <label for="type">Product Type:</label>
        <select id="type" name="type" required>
            <option value=""selected>Selected</option>
            <option value="Camera">Camera</option>
            <option value="Laptop">Laptop</option>
            <option value="Refrigerator">Refrigerator</option>
        </select><br>

        <!-- Additional fields -->
        <div id="cameraFields" style="display: none;">
            <label for="lensType">Lens Type:</label>
            <input type="text" id="lensType" name="lensType"><br>

            <label for="megaPixel">Mega Pixel:</label>
            <input type="text" id="megaPixel" name="megaPixel"><br>

            <label for="memoryCapacity">Memory Capacity:</label>
            <input type="text" id="memoryCapacity" name="memoryCapacity"><br>
        </div>

        <div id="laptopFields" style="display: none;">
            <label for="RAM">RAM:</label>
            <input type="text" id="RAM" name="RAM"><br>

            <label for="processor">Processor:</label>
            <input type="text" id="processor" name="processor"><br>

            <label for="graphicsCard">Graphics Card:</label>
            <input type="text" id="graphicsCard" name="graphicsCard"><br>
        </div>

        <div id="refrigeratorFields" style="display: none;">
            <label for="capacity">Capacity:</label>
            <input type="text" id="capacity" name="capacity"><br>

            <label for="star">Star:</label>
            <input type="text" id="star" name="star"><br>

            <label for="refrigeratorType">Refrigerator Type:</label>
            <input type="text" id="refrigeratorType" name="refrigeratorType"><br>
        </div>

        <input type="submit" value="Add Product">

        </form>

        <script>
            document.getElementById("type").addEventListener("change",function(){
                var selectedType = this.value;
                document.getElementById("cameraFields").style.display = (selectedType === "Camera") ? "block" : "none";
                document.getElementById("laptopFields").style.display = (selectedType === "Laptop") ? "block" : "none";
                document.getElementById("refrigeratorFields").style.display = (selectedType === "Refrigerator") ? "block" : "none";
            });
        </script>
    </body>
    </html>