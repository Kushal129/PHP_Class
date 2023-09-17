<?php 
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_SESSION['students'])){
        $_SESSION['students'] = array();
    }

    $student = array(
        'name' => $_POST['name'],
        'enro' => $_POST['enro'],
        'sub_1' => $_POST['sub_1'],
        'sub_2' => $_POST['sub_2'],
        'sub_3' => $_POST['sub_3'],
        'sub_4' => $_POST['sub_4'],
        'sub_5' => $_POST['sub_5'],
    );

    $total = $_POST['sub_1'] + $_POST['sub_2'] + $_POST['sub_3'] + $_POST['sub_4'] + $_POST['sub_5'];
    $percentage = $total / 5;

    $student['total'] = $total;
    $student['percentage'] = $percentage;

    // Calculate grade based on percentage
    if ($percentage >= 90) {
        $student['grade'] = 'A+';
    } elseif ($percentage >= 80) {
        $student['grade'] = 'A';
    } elseif ($percentage >= 70) {
        $student['grade'] = 'B';
    } elseif ($percentage >= 60) {
        $student['grade'] = 'C';
    } elseif ($percentage >= 50) {
        $student['grade'] = 'D';
    } else {
        $student['grade'] = 'F';
    }

    array_push($_SESSION['students'], $student);
    header("Location:rec.php"); 
    exit();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
 <title>Studnt</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <form action="studnt.php" method="POST">
    <label for="name">Name: </label>
    <input type="text" name="name" placeholder="Enter Name" required>
    <br>
    <label for="enro">Enrollment no: </label>
    <input type="number" name="enro" placeholder="Enter Enroll" required> 
    <br>
    <label for="sub_1">Subject - 1 marks :  </label>
    <input type="text" name="sub_1" placeholder="Enter Sub_1" required>
    <br>
    <label for="sub_2">Subject - 2 marks :  </label>
    <input type="text" name="sub_2" placeholder="Enter Sub-2" required>
    <br>
    <label for="sub_3">Subject - 3 marks :  </label>
    <input type="text" name="sub_3" placeholder="Enter Sub-3" required>
    <br>
    <label for="sub_4">Subject - 4 marks :  </label>
    <input type="text" name="sub_4" placeholder="Enter Sub-4" required>
    <br>
    <label for="sub_5">Subject - 5 marks :  </label>
    <input type="text" name="sub_5" placeholder="Enter Sub-5" required>
    <br>
    <button type="submit"> Sumbit </button>
    </form>
</body>
</html>