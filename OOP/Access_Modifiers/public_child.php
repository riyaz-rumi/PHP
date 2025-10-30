<?php
    class Father
    {
        public const FATHER_NAME = 'Meshan';
        public const SURNAME = 'Rumi';
    }
    class Child extends Father
    {
        public const CHILD_NAME = 'Riyaz';
        private $semester;
        private $section;
        function __construct($semester, $section)
        {
            $this->semester = $semester;
            $this->section = $section;
        }
        function disp()
        {
            echo '<br>Semester : '.$this->semester;
            echo '<br>Section  : '.$this->section;
        }
    }
    echo 'Full Name : '.Child::CHILD_NAME.' '.Father::FATHER_NAME.' '.Father::SURNAME;
    $child = new Child('BCA 2','B');
    $father = new Father();
    $child->disp();
?>