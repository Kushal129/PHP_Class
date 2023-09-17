<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $student_ids = $_POST["student_id"];
        $student_names = $_POST["student_name"];
        $subject_names = $_POST["subject_name"];
        $marks = $_POST["marks"];

        $total_subjects = count($subject_names);

        for($i=0; $i<count($student_ids); $i++){
            $total_marks = 0;
            echo "<h3>Student marksheet ".$student_names[$i]."</h3>";
            echo "Student ID: " . $student_ids[$i] . "<br>";
            echo "Student Name: " . $student_names[$i] . "<br>";

            for($j=0; $j<$total_subjects; $j++){
                // Error in marks[$i][$j]
                echo $subject_names[$j] . " Marks : ".$marks[$i][$j] . "<br>";
                $total_marks += $marks[$i][$j];
                
            }

            $percentage = ($total_marks/($total_subjects*100))*100;
            $grade = "";
            if($percentage >= 90){
                $grade = "First Distinction";
            }
            elseif($percentage >= 70){
                $grade = "First Class";
            }
            elseif($percentage >= 60){
                $grade = "Second Class";
            }
            elseif($percentage >= 50){
                $grade = "Pass Class";
            }
            else{
                $grade = "Fail";
            }

            echo "TOTAL MARKS = ".$total_marks."<br>";
            echo "PERCENTAGE = ".number_format($percentage,2)."%<br>";
            echo "GRADE = ".$grade."<br><br>";
        }

    }
    ?>
</body>
</html>