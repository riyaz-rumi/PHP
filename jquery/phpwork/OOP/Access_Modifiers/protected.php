<?php
    class F_Name
    {
        protected $fname;
        function set($fname)
        {
            $this->fname = $fname;
        }
        function get()
        {
            return $this->fname;
        }
        class L_Name
        {
            protected $lname;
            function set($fname)
            {
                $this->fname = $fname;
            }
            function get()
            {
                return $this->fname;
            }
            $Last = new L_Name();
            $Last->set("Rumi");
            $Last->get();
        }
        $First = new F_Name();
    }
?>