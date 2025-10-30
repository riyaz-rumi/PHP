<pre style="font-family: Times-New-Roman">
<?php
    class Programming_Software
    {
        private $name;
        private $usage;
        private $version;

        function __construct($name, $version, $usage)
        {
            $this->name = '<b><i>'.$name.'</b></i>';
            $this->version = '<i>'.$version.'</i>';
            $this->usage = $usage;
        }
        function display()
        {
            echo 'Name                        '.$this->name.'<br />';
            echo 'Version                     '.$this->version.'<br />';
            echo 'Usage                       '.$this->usage.'<br /><br /><br />';
        }
    }
    $Turbo_C = new Programming_Software('Turbo C++', '4.2.8', 'Used For C & C++ Programming only.');
    $Sublime = new Programming_Software('Sublime', '1.8.2', 'Used For Non-GUI programming.');
    $Eclipse = new Programming_Software('eclipse', '4.5.1', 'Specially Used For Java Progrmming.');
    $Visual_Studio = new Programming_Software('Visual Studio 2013', '7.8.5', 'Specially Used For GUI Prgromming.');
    $Visual_Studio_Code = new Programming_Software('Visual Studio Code', '1.5.9', 'Used For GUI And Non-GUI programming.');

    echo '<h2>Programming Software</h2>';
    $Turbo_C->display();
    $Sublime->display();
    $Eclipse->display();
    $Visual_Studio->display();
    $Visual_Studio_Code->display();
?>