<?php
    class Car
    {   // Using Private Modifier we can use 'member variables' inside the "class" only
        private $vname;
        private $vprice;
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
    $BMW= new Car();
    //! Error: Cannot access private property Car::$vname
    //! $BMW->vname = "LIZAN";
    //! $BMW->vprice = "$ 200K";
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