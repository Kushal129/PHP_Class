<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Student{
        public $name;
        public $marks;

        public function __construct($name)
        {
            $this->name = $name;
            $this->marks = array();
        }

        public function getName(){
            return $this->name;
        }

        public function getMarks(){
            return $this->marks;
        }

        public function setMarks($subject,$marks){
            $this->marks[$subject] = $marks;
        }


    }
    ?>
</body>
</html>