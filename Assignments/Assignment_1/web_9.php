<?php
    // l = week name, j = current date, S = suffix, F = Full Month Name, Y = Year like 2023 , A = AM or PM
    // h:i:s = hours:minutes:seconds
    // date()
    echo date("l jS F Y h:i:s A")."<hr>";

    // mktime (h, i, s, M, d, Y)
    echo date("h:i:s M-d-Y", mktime(5,5,1,3,19,2023))."<hr>";
    
    // time()
    // returns the current time in the number of seconds since January 1, 1970
    echo "The current time in the number of seconds since January 1, 1970 : ".time()."<hr>";

    // strtotime(string)
    $Yesterday = strtotime("-24 hours");
    echo "Yesterday : ".date("l jS F Y", $Yesterday)."<br>";
    $today = strtotime("now");
    echo "Today : ".date("l jS F Y", $today)."<br>";
    $tomorrow = strtotime("+24 hours");
    echo "Tomorrow : ".date("l jS F Y", $tomorrow)."<hr>";

    // idate()
    // formats a time or date as integer.
    echo idate("h").":".idate("i") . ":".idate("s")." ".idate("Y")."<hr>";
?>