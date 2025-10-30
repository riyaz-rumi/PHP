<?php
    define('HOSTNAME', 'localhost');
    define('USERNAME', 'root');
    define('PASSWORD', '');
    define('DB_NAME', 'DB_TEMP');
    class Connection
    {
        private $conn;
        function __construct()
        {
            $conn = @mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DB_NAME);
            $this->conn = $conn;
            if (!$this->conn)
                echo mysqli_connect_error();
        }
        function select()
        {
            $sel = "SELECT * FROM `TBL_TEMP`";
            $select = @mysqli_query($this->conn, $sel);
            return $select;
        }
        function search($searching)
        {
            $srch = "SELECT * FROM `TBL_TEMP` WHERE `NAME` LIKE '%$searching%' OR `AGE` LIKE '%$searching%'";
            $search = @mysqli_query($this->conn, $srch);
            return $search;
        }
        function insert($name, $age)
        {
            $ins = "INSERT INTO `TBL_TEMP` (`NAME`, `AGE`) VALUES ('$name', '$age')";
            $insert = @mysqli_query($this->conn, $ins);
            return $insert;
        }
        function delete($ID)
        {
            $del = "DELETE FROM `TBL_TEMP` WHERE `ID` = '$ID'";
            $delete = @mysqli_query($this->conn, $del);
            return $delete;
        }
        function update($ID, $new_name, $new_age)
        {
            $up = "UPDATE `TBL_TEMP` SET `NAME` = '$new_name', `AGE` = '$new_age' WHERE `ID` = '$ID'";
            $update = @mysqli_query($this->conn, $up);
            return $update;
        }
        function __destruct()
        {
            @mysqli_close($this->conn);
        }
    }
    $obj = new Connection();
?>