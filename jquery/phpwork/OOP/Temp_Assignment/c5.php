<pre style="font-family: Times-New-Roman">
<?php
    class Browser
    {
        private $name;
        private $version;
        private $rate;

        function __construct($name, $version, $rate)
        {
            $this->name = '<b><i>'.$name.'</b></i>';
            $this->version = '<i>'.$version.'</i>';
            $this->rate = $rate;
        }
        function display()
        {
            echo 'Name                       '.$this->name.'<br />';
            echo 'version                     '.$this->version.'<br />';
            echo 'rate                           '.$this->rate.'<br /><br /><br />';
        }
    }
    $Chrome = new Browser('Google Chrome', 'Version 5.4.1', '4.5');
    $Edge = new Browser('Microsoft Edge', 'Version 2.4.3', '4.6');
    $FireFox = new Browser('Mozilla FireFox', 'Version 4.2.8', '4.3');
    $Internet_Explorer = new Browser('Microsoft Internet Explorer', 'Version 2.5.4', '3.2');
    $Opera = new Browser('Opera', 'Version 2.4.3', '4.4');
    $Safari = new Browser('Safari', 'Version 4.8.1', '2.3');
    $Brave = new Browser('Brave', 'Version 4.1.3', '3.4');

    echo '<h2>Most Useful Browsers</h2>';
    $Chrome->display();
    $Edge->display();
    $FireFox->display();
    $Internet_Explorer->display();
    $Opera->display();
    $Safari->display();
    $Brave->display();
?>