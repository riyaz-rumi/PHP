<?php
    class Car
    {   // Using Public Modifier we can use 'member variables' inside & also outside the "class"
        public $vname;
        public $vprice;
        // Set the Data
        function set_vname($vname)
        {
            $this->vname = $vname;
        }
        function set_vprice($vprice)
        {
            $this->vprice = $vprice;
        }
        // Get the Data
        function get_vname()
        {
            return $this->vname;
        }
        function get_vprice()
        {
            return $this->vprice;
        }
    }
    // Setting data statically
    $BMW= new Car();
    $BMW->vname = "LIZAN";
    $BMW->vprice = "$ 200K";
    $HONDA= new Car();
    $HONDA->vname = "Splender++";
    $BMW->vprice = "$ 200K";

    echo '<h3>Car Details</h3>';
    echo 'Version : '.$BMW->get_vname().'<br />';
    echo 'Price : '.$BMW->get_vprice().'<hr />';
    echo 'Version : '.$HONDA->get_vname().'<br />';
    echo 'Price : '.$BMW->get_vprice().'<hr />';
?>