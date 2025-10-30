<!-- <body style="color: white; background-color: black;"> -->
<pre style="font-family: Times-New-Roman">
<?php
    class Fonts
    {
        private $name;
        private $version;
        private $copyright;
        function __construct($name, $version, $copyright)
        {
            $this->name = '<b><i>'.$name.'</b></i>';
            $this->version = '<i>'.$version.'</i>';
            $this->copyright = $copyright;
        }
        function display()
        {
            echo 'Name                        '.$this->name.'<br />';
            echo 'Version                     '.$this->version.'<br />';
            echo 'Copyright                 '.$this->copyright.'<br /><br /><br />';
        }
    }
    $name = array('Algerian', 'Arial', 'Calibri', 'Cooper', 'Cambria', 'Times-New-Roman');
    $version = array('Version 1.57', 'Version 7.00', 'Version 6.23', 'Version 1.51', 'Version 6.99', 'Version 7.00');
    
    $Algerian = 'URW Software, Copyright 1993 By URW.';
    $Arial = 'Copyright 2017, Monotype Corporation.';
    $Calibri = 'Copyright 2018 Microsoft Corporation.';
    $Cooper = 'Copyright URW Software, Monotype Corporation & Microsoft Corporation.';
    $Cambria = 'Copyright 2018 Microsoft Corporation.';
    $Times_New_Roman = 'Copyright 2017, The Monotype Corporation. All Rights Reserved.';
    
    $copyright = array($Algerian, $Arial, $Calibri, $Cooper, $Cambria, $Times_New_Roman);

    $Algerian = new Fonts($name[0], $version[0],$copyright[0]);
    $Arial = new Fonts($name[1], $version[1], $copyright[1]);
    $Calibri = new Fonts($name[2], $version[2], $copyright[2]);
    $Cooper = new Fonts($name[3], $version[3], $copyright[3]);
    $Cambria = new Fonts($name[4], $version[4], $copyright[4]);
    $Times_New_Roman = new Fonts($name[5], $version[5], $copyright[5]);

    echo '<h2>Fonts</h2>';
    $Algerian->display();   
    $Arial->display();
    $Calibri->display();
    $Cooper->display();
    $Cambria->display();
    $Times_New_Roman->display();
?>