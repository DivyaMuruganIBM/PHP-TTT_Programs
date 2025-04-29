<?php
class Student {
    private $name;
    private $stuid;
    private $course;

    public function setName($name) {
        $this->name = $name;
    }

    public function setStuId($stuid) {
        $this->stuid = $stuid;
    }

    public function setCourse($course) {
        $this->course = $course;
    }

    public function getName() {
        return $this->name;
    }

    public function getStuId() {
        return $this->stuid;
    }

    public function getCourse() {
        return $this->course;
    }
}

$student = new Student();
$student->setName("Divya");
$student->setStuId("AF101");
$student->setCourse("PHP");

echo "Student Name: " . $student->getName() . "<br>";
echo "Student ID: " . $student->getStuId() . "<br>";
echo "Course: " . $student->getCourse() . "<br>";
?>
