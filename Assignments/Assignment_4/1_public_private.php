<?php
    class Login
    {
        public $username;
        private $password;
        function set($password)
        {
            $this->password = $password;
        }
        function get()
        {
            return $this->password;
        }
    }
    $unm = 'Riyaz Rumi';
    $log = new Login();
    $log->set('BCA_SEM_2_50');
    $pwd = $log->get();
    echo "Username : ".$unm."<br>Password : ".$pwd;
?>      