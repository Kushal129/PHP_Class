<!DOCTYPE html>
<html>

<head>
    <title>Student Records</title>
    <link rel="stylesheet" type="text/css" href="std.css">
    <style>
        table {
            border-collapse: collapse;
            align-items: center;
            justify-content: center;
            display: flex;
        }

        h2 {
            align-items: center;
            justify-content: center;
            display: flex;
        }

        .sub {
            justify-content: center;
            margin-top: 2rem;
            margin-left: 61rem;
            align-items: center;
            display: flex;
            border: none;
            color: black;
            background-color: green;
        }


        tr,
        td {
            border: 1px solid black;
            width: 50px;
            padding: 8px;
        }
    </style>
</head>

<body>
    <h2>Student Records </h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Enrollmant No</th>
            <th>Sub-1</th>
            <th>Sub-2</th>
            <th>Sub-3</th>
            <th>Sub-4</th>
            <th>Sub-5</th>
            <th>Total</th>
            <th>Grade</th>
        </tr>

        <?php
        session_start();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['index'])) {
                $index = $_POST['index'];
                if (isset($_SESSION['students'][$index])) {
                    unset($_SESSION['students'][$index]);
                    $_SESSION['students'] = array_values($_SESSION['students']);
                }
            }
        }

        if (isset($_SESSION['students'])) {
            foreach ($_SESSION['students'] as $index => $student) {
                echo "<tr>";
                echo "<td>" . $student['name'] . "</td>";
                echo "<td>" . $student['enro'] . "</td>";
                echo "<td>" . $student['sub_1'] . "</td>";
                echo "<td>" . $student['sub_2'] . "</td>";
                echo "<td>" . $student['sub_3'] . "</td>";
                echo "<td>" . $student['sub_4'] . "</td>";
                echo "<td>" . $student['sub_5'] . "</td>";
                echo "<td>" . $student['total'] . "</td>";
                echo "<td>" . $student['percentage'] . "%</td>";
                echo "<td>" . $student['grade'] . "</td>";
                echo '<td>';
                echo '<form action="rec.php" method="post">';
                echo '<input type="hidden" name="index" value="' . $index . '">';
                echo '<button type="submit" name="delete">Delete</button>';
                echo '</form>';
                echo '</td>';
                echo '</tr>';
            }
        }
        ?>

    </table>
    <form action="studnt.php" method="get">
        <button class="sub" type="submit">Add Records</button>
    </form>
</body>

</html>