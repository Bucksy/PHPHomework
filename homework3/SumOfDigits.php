<?php

/*
Write a PHP script SumOfDigits.php which receives a comma-separated
 *  list of integers from an input form and creates a two-column table. 
 * The first column should contain each of the values from the input
 * . The second column should contain the sum of the digits of each value. 
 */
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="utf-8"/>
</head>
<body>
    <form method="POST">
    Enter a string(numbers or string), separated with comma:(example: 1111, 4444, asfs)
    <input type="text" name="numbers"/>
    <input type="submit" name="submit" value="Show result"/>
   </form>
    <?php
    
     function splitStr($strInput){
        $patternToMatch = '/^([^,\s]+)?$|^(([^,\s]+)?((, )([^,\s]+))+)$/';
        $patternSplit = '/, /';
        if(preg_match($patternToMatch, $strInput) == 1){
        return preg_split($patternSplit, $strInput);
        }
        return false;
}
    function sumDigits($input){
                if (is_numeric($input)) {
                    $digits = str_split($input);
                    $sum = 0;
                    foreach ($digits as $digit) {
                       $sum += $digit;
                    }
                    echo $sum;
                }else{
                    'I cannot sum that';
                }
            }
    ?>
    
    <?php
      if (isset($_POST['submit'])) {
        if (!empty($_POST['numbers'])) {
            $input = splitStr($_POST['numbers']);
    ?>
    <table border="1">
        <tr>
            <td>Input</td>
            <td>Sum</td>
        </tr>
   
    <?php
        foreach ($input as $value) {
            
        echo '<tr>
                <td>'.splitStr($input).'</td>
                <td>'.sumDigits($input).'</td>
            </tr>';
      }
        }
      }
      
        ?>
     </table>
</body>
</htm>