<!-- Create an application, which asks for number of students and number 
of subjects. On the basis of this input, generate another form, which 
asks for name of each subject and details for each student like ID, 
name and marks for each subject. Display a mark sheet for each 
student, which contains ID, name, subject wise marks, total marks, 
percentage and grade of student. The criteria to calculate grade is as 
follows: 
✓ Above 85%: First-Distinction 
✓ 70%-85%: first class 
✓ 60%-69%: second class 
✓ 50%-59%: pass class 
✓ Below 50%: fail -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="p4_generate_form.php" method="post">
        <label for="">Enter number of students</label>
        <input type="text" name="number_students"><br>
        <label for="">Enter numberof subjects</label>
        <input type="text" name="number_subjects"><br>

        <input type="submit" value="Generate" name="generate_form">
    </form>
</body>
</html>