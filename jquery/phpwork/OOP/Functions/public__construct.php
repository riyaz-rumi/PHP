<?php
    class Car
    {
        public $VName;
        public $VPrice;
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
    echo '<table cellspacing=1px>
        <tr>
            <th align=left>Version</th>
            <th>Price $</th>
        </tr>
        <tr>
            <td>'.$BMW->VName.'</td>
            <td align=right>'.$BMW->VPrice.'</td>
        </tr>
        <tr>
            <td>'.$audi->VName.'</td>
            <td align=right>'.$audi->VPrice.'</td>
        </tr>
        <tr>
            <td>'.$Honda->VName.'</td>
            <td align=right>'.$Honda->VPrice.'</td>
        </tr>
        <tr>
            <td>'.$Suzuki->VName.'</td>
            <td align=right>'.$Suzuki->VPrice.'</td>
        </tr>';
    // $BMW->display();
    // $audi->display();
    // $Honda->display();
    // $Suzuki->display();
?>