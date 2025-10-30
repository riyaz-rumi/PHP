<pre style="font-family: Times-New-Roman">
<?php
    class Father
    {
        protected const FATHER_NAME = 'Meshan';
        protected const SURNAME = 'Rumi';
    }
    class Child extends Father
    {
        protected const CHILD_NAME = 'Riyaz';
        private $semester;
        private $section;
        function __construct($semester, $section)
        {
            $this->semester = $semester;
            $this->section = $section;
        }
        function disp()
        {
            echo 'Full Name         '.Child::CHILD_NAME.' '.Father::FATHER_NAME.' '.Father::SURNAME;
            echo '<br>Semester           '.$this->semester;
            echo '<br>Section              '.$this->section;
        }
    }
    $child = new Child('BCA 2','B');
    $father = new Father();
    $child->disp();
?>