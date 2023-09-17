<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Faculty{
        public $name, $subject, $numStudents;

        public function __construct($name,$subject,$numStudents)
        {
            $this->name =  $name;
            $this->subject = $subject;
            $this->numStudents = $numStudents;
        }

        // Getter 
        public function getName(){
            return $this->name;
        }

        public function getSubject(){
            return $this->subject;
        }

        public function getNumStudents(){
            return $this->numStudents;
        }

        // Setter
        public function setName($name){
            $this->name = $name;

        }
       
        public function setSubject($subject){
            $this->name = $subject;

        }

        public function setNumStudents($numStudents){
            $this->name = $numStudents;

        }
    }
    ?>
</body>
</html>