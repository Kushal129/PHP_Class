<?php
session_start();

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $student = array(
//         'name' => $_POST['name'],
//         'age' => $_POST['age'],
//         'grade' => $_POST['grade']
//     );

//     if (!isset($_SESSION['students'])) {
//         $_SESSION['students'] = array();
//     }

//     array_push($_SESSION['students'], $student);

//     header("Location: records.php");
//     exit();
// }

// record mate
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $student = array(
        'name' => $_POST['name'],
        'age' => $_POST['age'],
        'grade' => $_POST['grade']
    );
    //session mate 
    if (!isset($_SESSION['students'])) {
        $_SESSION['students'] = array();
    }

    array_push($_SESSION['students'] , $student);
    header("location: records.php");
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Student Record Form</title>
    <link rel="stylesheet" type="text/css" href="std.css">
</head>

<body>
    <form action="index.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required min="0">

        <label for="grade">Grade:</label>
        <input type="text" id="grade" name="grade" required>

        <button type="submit">Submit</button>
    </form>
</body>

</html>