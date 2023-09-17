<!DOCTYPE html>
<html>
<head>
    <title>Student Records</title>
    <link rel="stylesheet" type="text/css" href="std.css">
    <style>
        table{
            border-collapse: collapse;
            align-items: center;
            justify-content: center;
            display: flex;
        }
        tr , td{
            border: 1px solid black;
            width: 50px;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h2>Student Records</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Grade</th>
            <th>Actions</th> <!-- Add a new column for actions -->
        </tr>
        <?php
        session_start();

        // Handle record deletion
        if (isset($_POST['delete'])) {
            $index = $_POST['index'];
            if (isset($_SESSION['students'][$index])) {
                unset($_SESSION['students'][$index]);
                $_SESSION['students'] = array_values($_SESSION['students']); // Reindex the array
            }
        }

        if (isset($_SESSION['students'])) {
            foreach ($_SESSION['students'] as $index => $student) {
                echo "<tr>";
                echo "<td>" . $student['name'] . "</td>";
                echo "<td>" . $student['age'] . "</td>";
                echo "<td>" . $student['grade'] . "</td>";
                echo '<td>';
                echo '<form action="records.php" method="post">';
                echo '<input type="hidden" name="index" value="' . $index . '">';
                echo '<button type="submit" name="delete">Delete</button>';
                echo '</form>';
                echo '</td>';
                echo "</tr>";
            }
        }
        ?>
    </table>
    
    <form action="index.php" method="get">
        <button type="submit">Add New Record</button>
    </form>
</body>
</html>
