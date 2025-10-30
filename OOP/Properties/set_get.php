<?php
    class Car
    {
        private $v_name;
        private $v_price;
        // Set the Data
        function set_vname($v_name)
        {
            $this->v_name = $v_name;
        }
        function set_vprice($v_price)
        {
            $this->v_price = $v_price;
        }
        // Get the Data
        function get_vname()
        {
            return $this->v_name;
        }
        function get_vprice()
        {
            return $this->v_price;
        }
      }
    $BMW= new Car();
    $BMW->set_vname("LIZAN");
    $BMW->set_vprice("$ 200K");
    $HONDA= new Car();
    $HONDA->set_vname("Splender++");
    $BMW->set_vprice("$ 200K");

    echo '<h3>Car Details</h3>';
    echo 'Version : '.$BMW->get_vname().'<br />';
    echo 'Price : '.$BMW->get_vprice().'<hr />';
    echo 'Version : '.$HONDA->get_vname().'<br />';
    echo 'Price : '.$BMW->get_vprice().'<hr />';
?>