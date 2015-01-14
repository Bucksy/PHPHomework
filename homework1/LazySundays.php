<?php

/*
Write a PHP script LazySundays.php which prints the dates of all Sundays in the current month. Example:
 */
function getSundays($y, $m)
{
    return new DatePeriod(
        new DateTime("first sunday of $y-$m"),
        DateInterval::createFromDateString('next sunday'),
        new DateTime("last sunday of $y-$m")
    );
}

foreach (getSundays(2014, 12) as $sunday) {
    echo $sunday->format("l, Y-m-d\n");
}
?>
