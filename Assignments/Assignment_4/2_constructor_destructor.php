<?php
    class Software
    {
        private $name;
        private $use;
        private $version;
        function __destruct()
        {
            echo "Memory Released!<br>";
        }
        function __construct($name, $use, $version)
        {
            $this->name = $name;
            $this->use = $use;
            $this->version = $version;
        }
        function display()
        {
            echo '<h3>'.$this->name."</h3>";
            echo $this->use." ".$this->version.'<hr>';
        }
    }
    $MS_Word = new Software("MS Word", 'Writting', '3.4.7');
    $MS_PowerPoint = new Software("MS PowerPoint", 'Presenting','4.8.1');
    
    $MS_Word->display();
    $MS_PowerPoint->display();

?>