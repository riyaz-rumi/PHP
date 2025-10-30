<pre style="font-family: 'Times-New-Roman'">
<?php
    class Software
    {
        public $OBJECT;
        private $use;
        private $version;
        function __construct($OBJECT, $use, $version)
        {
            $this->OBJECT = $OBJECT;
            $this->use = $use;
            $this->version = '<i>'.$version.'</i>';
        }
        function display()
        {
            echo '<h4>'.$this->OBJECT.'</h4>';
            echo 'Usage                     '.$this->use.'<br>';
            echo 'Version                   '.$this->version.'<br><br>';
        }
    }
    $MS_Word = new Software('Microsoft Word','Writting', 'Version 3.4.7');
    $MS_PowerPoint = new Software('Microsoft PowerPoint', 'Presenting','Version 4.8.1');
    $MS_Excel = new Software('Microsoft Excel', 'Tabular Formatting','Version 7.5.2');
    $MS_Visio = new Software('Microsoft Visio', 'Designing', 'Version 3.4.6');
    $MS_OpenOffice = new Software('Microsoft OpenOffice', 'Mailing', 'Version 7.5.3');
    $MS_OneNote = new Software('Microsoft OneNote', 'Simple Note', '7.5.3');
    
    echo '<h2>Microsoft Products</h2>';
    $MS_Word->display();
    $MS_PowerPoint->display();
    $MS_Excel->display();
    $MS_Visio->display();
    $MS_OpenOffice->display();
    $MS_OneNote->display();   
?>