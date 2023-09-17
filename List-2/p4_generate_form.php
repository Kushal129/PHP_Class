<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generated Form</title>
</head>
<body>
    <?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $number_students = $_POST["number_students"];
        $number_subjects = $_POST["number_subjects"];
    }
    ?>

    <form action="p4_generate_marksheet.php" method="post">
        <?php
        for($i=1; $i <= $number_students; $i++){
            echo "<h3>Student $i</h3>";
            // echo "Student ID : <input type='text' name='student_id[]' required ><br>";
            echo "<table>";
            echo "<tr>";
            echo "<td>Student ID</td>";
            echo "<td> :</td> ";
            echo "<td> <input type='text' name='student_id[]' required ></td>";
            echo "</tr>";

            // echo "Student NAME : <input type='text' name='student_name[]' required><br>";
            echo "<tr>";
            echo "<td>Student NAME1</td>";
            echo "<td> : </td>";
            echo "<td> <input type='text' name='student_name[]' required> </td>";
            echo "</tr>";


            for($j=1; $j<=$number_subjects; $j++){
                // echo "Subject $j name : <input type='tetx' name='subject_name[]' required> <br>";
                echo "<tr>";
                echo "<td>Subject $j name </td>";
                echo "<td>:</td>";
                echo "<td><input type='tetx' name='subject_name[]' required></td> ";
                echo "</tr>";

                // echo "Marks of subject $j : <input type='text' name='marks[$i][]' required><br>";
                echo "<tr>";
                echo "<td>Marks of subject $j</td>";
                echo "<td> : </td> ";
                echo "<td><input type='number' name='marks[$i][]' required></td>";
                echo "<tr>";

            }
            echo "</table>";
            echo "<br>";
        }
        ?>
        <input type="hidden" name="number_students" value="<?php echo $number_students; ?>">
        <input type="hidden" name="number_subjects" value="<?php echo $number_subjects; ?>">
        <input type="submit" value="Generate Marksheet" name="generate_marksheet">
    </form>
</body>
</html>