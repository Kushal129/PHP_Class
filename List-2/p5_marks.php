<?php
    include "p5_faculty.php";
    include "p5_student.php";

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $faculty_name = $_POST["faculty_name"];
        $subject = $_POST["subject"];
        $num_students = $_POST["num_students"];

        $faculty = new Faculty($faculty_name,$subject,$num_students);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Marks entry for <?php echo $faculty->getName(); ?></h3>
    <form action="p5_generate_report.php" method="post">
        <?php
        for($i=1; $i<= $num_students; $i++){
            echo "Student $i <br>";
            echo "Student Name : <input type='text' name='student_name[]' required><br>";
            echo "Marks of $subject :  <input type='text' name='marks[]' required> <br>";

        }
        ?>

        <input type="hidden" name="faculty_name" value="<?php echo $faculty_name; ?>">
        <input type="hidden" name="subject" value="<?php echo $subject; ?>">
        <input type="hidden" name="num_students" value="<?php echo $num_students; ?>">
        <input type="submit" value="Generate Report">

    </form>
</body>
</html>