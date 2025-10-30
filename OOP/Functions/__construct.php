<?php
    class Car
    {
        private $VName;
        private $VPrice;
        function __construct($VName, $VPrice)
        {
            $this->VName = $VName;
            $this->VPrice = $VPrice;
        }
        function display()
        {
            echo 'Version : '.$this->VName.'<br />';
            echo 'Price : '.$this->VPrice.'<hr />';
        }
    }
    $BMW = new Car("LIZAAN", "500 K");
    $audi = new Car("ASPHALT", "250 K");
    $Honda = new Car("Carl Hogan", "295 K");
    $Suzuki = new Car("Swift 99", "150 K");
    # An Object Array : $Cars = array($BMW, $audi, $Honda);
    echo '<h3>Car Details</h3>';
    $BMW->display();
    $audi->display();
    $Honda->display();
    $Suzuki->display();
?>