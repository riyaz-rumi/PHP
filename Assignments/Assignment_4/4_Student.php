<?php
    class Student
    {
        public $name;
        private $marks;
        function __construct($name, $marks)
        {
            $this->name = $name;
            $this->marks = $marks;
        }
        function display()
        {
            echo 'Student Name : '.$this->name.'<br />';
            echo 'Marks : '.$this->marks.'<hr />';
        }
        function average($marks)
        {
            $avg = ($marks / 4.00);
            // echo 'Average : '.$avg.'<hr />';
            return $avg;
        }
        function comparision($avg1, $avg2)
        {
            if ($avg1 > $avg2)
                return 1;
            elseif ($avg2 > $avg1)
                return 2;
            else
                return 0;
        }
    }
    $stud1 = new Student('Roy Disney', 325);
    $stud1->display();
    $stud1_avg = $stud1->average(325);
    $stud2 = new Student('Walt Disney', 321);
    $stud2->display();
    $stud2_avg = $stud2->average(321);
    if ($stud1->comparision(325, 321) == 1)
        echo $stud1->name." has more persentage!<br>Average : ".$stud1->average(325);
    elseif ($stud2->comparision(325, 321) == 2)
        echo $stud2->name." has more persentage!<br>Average : ".$stud2->average(321);
    else
        echo $stud1->name." and ".$stud1->name." have the same averages!<br>Average : ".$stud1->average(325);
    echo "<hr>";
?>