<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include "p5_faculty.php";
    include "p5_student.php";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $faculty_name = $_POST["faculty_name"];
        $subject = $_POST["subject"];
        $num_students = $_POST["num_students"];

        // object of Facultyclass
        $faculty = new Faculty($faculty_name, $subject, $num_students);
        $students = array();

        for ($i = 0; $i < $num_students; $i++) {
            $student_name = $_POST["student_name"][$i];
            $student = new Student($student_name);

            $marks = $_POST["marks"][$i];
            $student->setMarks($subject, $marks);

            $students[] = $student;
        }


    ?>

        <h2>Marks analysis report <?php echo $faculty->getSubject(); ?></h2>
        <p>Faculty Name : <?php echo $faculty->getName(); ?></p>
        <p>Number of Students: <?php echo $faculty->getNumStudents(); ?></p>

        <h3>Student wise marks</h3>
        <table border="1">
            <tr>
                <th>Student Name</th>
                <th><?php echo $subject; ?></th>
            </tr>
            <?php
            foreach ($students as $student) {
                $student_name = $student->getName();
                $student_marks = $student->getMarks()[$subject];

            ?>
                <tr>
                    <td><?php echo $student_name; ?></td>
                    <td><?php echo $student_marks; ?></td>
                </tr>
            <?php } ?>
        </table>
    <?php } ?>
</body>

</html>