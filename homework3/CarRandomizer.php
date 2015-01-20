<!DOCTYPE>
<html>
    <body>
<?php
/*
You are a very rich billionaire with an unhidden passion for cars.
 *  You like certain car manufacturers but you don’t really care about anything else,
 *  and that’s why you need your own randomizing algorithm that helps you decide how many and what color cars you should buy. 
 * Write a PHP script CarRandomizer.php that receives a string of cars from an input HTML form, 
 * separated by a comma and space (“, “). It then prints each car, a random color and a random quantity in a table like
 *  the one shown below. Use colors by your choice.
 * Use as quantity a random number in range [1...5]. 
 */
?>
<form method="POST">
    Enter cars: 
    <input type="text" name="cars"/>
    <input type="submit" name="submit" value="Show result"/>
</form>
<?php
if(isset($_POST['cars'])){
    $cars = trim($_POST['cars']);
    $result = explode(", ",$cars);
}
?>
<table border="1">
    <tr>
        <td>
            Cars
        </td>
         <td>
            Colors
        </td>
         <td>
            Count
        </td>
    </tr>
    <?php
    $color = array('red', 'green', 'black', 'yellow', 'blue');
    foreach ($result as $carName) {
        $count = rand(1,5);
        $rand = array_rand($color);
        echo '<tr>
               <td>'.$carName.'</td>
                <td>'.$color[$rand].'</td>
                <td>'.$count.'</td>
              </tr>';
    }
    ?>
</table>
        
</body>
</html>