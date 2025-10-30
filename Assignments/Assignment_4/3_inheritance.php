<?php
    class Branch
    {
        private $tuition;
        protected $students;
        function __construct($tuition, $students)
        {
            $this->tuition= $tuition;
            $this->students = $students;
        }
        function disp()
        {
            echo '<br>Tuition Brach no. : '.$this->tuition;
            echo '<br>No. of Students : '.$this->students;
            echo '<hr>';
        }
    }
    class SubBranch extends Branch
    {
        function __construct($tuition, $students)
        {
            $this->tuition= $tuition;
            $this->students = $students;
        }
        function display()
        {
            echo '<br>Tuition Sub Brach no. : '.$this->tuition;
            echo '<br>No. of Students : '.$this->students;
            echo '<hr>';
        }
    }
    $obj1 = new Branch('ABC classes Main Branch', 528);
    $obj2 = new SubBranch('ABC classes Branch 4', 45);
    $obj1->disp();
    $obj2->display();
?>