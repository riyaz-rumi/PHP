<pre style="font-family: 'Times-New-Roman'">
<?php
    class Computer_System
    {
        public $OBJECT;
        public $product;
        public $price;
        public $condition;
        function __construct($OBJECT, $product, $price, $condition)
        {
            $this->OBJECT = $OBJECT;
            $this->product = '<b><i>'.$product.'</b></i>';
            $this->price = $price;
            $this->condition = $condition;
        }
        function display()
        {
            echo '<b>'.$this->OBJECT.'</b><br>';
            echo 'Product               '.$this->product.'<br>';
            echo 'Price                   '.$this->price.'<br>';
            echo 'Condition           '.$this->condition.'<br><br><br>';
        }
    }
    echo '<h2>Computer System</h2>';
    $CPU = new Computer_System('CPU', 'Zebronics', '4000 Rs.','Old');
    $Mouse = new Computer_System('Mouse', 'Logitech', '200 Rs.','Old');
    $Keyboard = new Computer_System('Keyboard', 'RAPOO', '450 Rs.','Old');
    $Speaker = new Computer_System('Speaker', 'DELL', '190 Rs.', 'New');
    $Monitor = new Computer_System('Monitor', 'DELL', '1500 Rs.', 'New');
    $CPU->display();
    $Monitor->display();
    $Speaker->display();
    $Keyboard->display();
    $Mouse->display();
?>