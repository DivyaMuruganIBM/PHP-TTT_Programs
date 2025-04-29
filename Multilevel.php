<?php
class Anudip {
    function Course() {
        echo "offering course<br>";
    }
}

class TNNug extends Anudip {
    function guide() {
        echo "Guiding students<br>";
    }
}

class Div extends TNNug {
    function learn() {
        echo "PHP course.<br>";
    }
}

$student = new Div();

$student->Course(); 
$student->guide(); 
$student->learn(); 
?>
