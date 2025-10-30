<pre style="font-family: 'Times-New-Roman'">
<?php
    class Father
    {
        protected const FATHER_NAME = 'Meshan';
        protected const LAST_NAME = 'Rumi';
        /*
        function __construct($father_name, $last_name)
        {
            $this->father_name = $father_name;
            $this->last_name = $last_name;
        }
        function display()
        {
            echo Father::FATHER_NAME.' '.Father::LAST_NAME;
        }
        */
    }
    class Child extends Father
    {
        protected const CHILD_NAME = 'Riyaz';
        function disp()
        {
            echo "Full Name : ".Child::CHILD_NAME.' '.Father::FATHER_NAME.' '.Father::LAST_NAME;;
        }
    }
    // $father = new Father();
    // $father->display();
    $child = new Child();
    $child->disp();
?>