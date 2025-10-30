<h4>
<?php
    // j or d = current date, S = suffix, F = Full Month Name, Y = Year like 2023, l = week name
    echo "Today : ".date("dS F Y, l")."<hr>";

    // (Day * Hours * Minutes * Seconds)
    $seconds_of_a_year = (365 * 24 * 60 * 60);
    $before_year = date("dS F Y, l", (time() - $seconds_of_a_year));
    echo "Before A Year : ".$before_year."<hr>";
?>
</h4>