<?php
/*
Write a PHP script PrimesInRange.php that receives two numbers – start and end – 
 * from an input field and displays all numbers in
 * that range as a comma-separated list. Prime numbers should be bolded.
 */
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="utf-8"/>
</head>
<body>
    <form method="post">
        Starting Index: 
        <input type="text" name="firstIndex"/><br/>
        Ending Index:
        <input type="text" name="endIndex"/><br/>
        <input type="submit" name="submit" value="Submit"/>
    </form>
  <?php
    if (isset($_POST['submit'])) {
        if (!empty($_POST['firstIndex']) && !empty($_POST['endIndex'])
                && is_numeric($_POST['firstIndex']) && is_numeric($_POST['endIndex'])) {
            $firstIndex = trim($_POST['firstIndex']);
            $lastIndex = trim($_POST['endIndex']);
        }
     
        function isPrime($number){
            $lastDivider = round(sqrt($number));
            $divider = 2;
            while($divider <= $lastDivider){
                if ($number == 1) {
                    return false;
                }
                if($number % $divider == 0){
                  return false;
                }
                $divider++;
                }
            return true;
        }
     
     

       for($index = $firstIndex; $index <= $lastIndex; $index++){
           if (isPrime($index)) {
                echo '<strong>'.$index.', '.'</strong>';
           }else{
               echo $index. ', ';
           }
           
       }
      
    }
    
  ?>
    
     
</body>
</html>