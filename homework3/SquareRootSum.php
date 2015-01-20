<!DOCTYPE>
<html>
    <body>
<?php
/*
Write a PHP script SquareRootSum.php that displays a table in your browser with 2 columns.
 *  The first column should contain a number (even numbers from 0 to 100) and the second column should
 *  contain the square root of that number, rounded to the second digit after the decimal point.
 *  The last row of the table should contain the sum of all values in the Square column.
 *  Styling the page is optional. Partial output comes below:
 */
?>
<table border="1">
    <tr>
        <td>Number</td>
        <td>Square</td>
    </tr>
<?php
$sum = 0;
for($i = 0; $i <= 100; $i++){
     if ($i % 2 == 0) {
         echo '<tr>
             <td>'.$i.'</td>
             <td>'.round(sqrt($i),2).'</td>
             </tr>';
           $sum += round(sqrt($i),2);
     }
}
         echo '<tr>
                <td>Total: </td>
                <td>'.$sum.'</td>
                </tr>';
?>
</table>

    </body>
</html>