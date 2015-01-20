<!DOCTYPE html>
<html>
<head>
<title>Show Annual Expenses</title>
<meta charset="utf-8"/>
</head>
<body>
<?php
/*
Problem 3.Show Annual Expenses
Write a PHP script AnnualExpenses.php that receives n years from an input HTML form and creates a table
 * (like the one shown below) with random expenses by months and the corresponding years (n years back). 
 * For example, if N is 10, create a table that shows the expenses for each month for the last 10 years. 
 * Add a "Total" column at the end, showing the total expenses for the same year. 
 * The random expenses in the table should be in the range [0…999]. 
*/
?>
<form method="POST">
      Enter number of years: 
     <input type="text" name="years" id="input" />
    <input type="submit" name="submit" value="Show costs"/>
</form>
 <?php
 
if (isset($_POST['submit'])) {
    if (is_numeric($_POST['years']) &&!empty($_POST['years'])) {
        $years = trim($_POST['years']);
        $years = (int)$years;
        $currentYear = date('Y');
        $endYear = $currentYear + $years;   

        $months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
        'October', 'November', 'December','Total');
 ?>
    <table border="1">
      
        <tr>
            <th>Year</th>
            <?php
             foreach ($months as $month) {
                 echo '<th>'.$month.'</th>';
             }
            ?>
        </tr>
            <?php for($year = $currentYear; $year < $endYear; $year++){ ?>
                 <?php $sum = 0;?>
              <tr>
                <td><?php echo $year; ?> </td>
                     <?php for($month = 1; $month <= 12; $month++){ 
                         $randNum = rand(0,999); ?>
                 <td><?php echo $randNum; ?></td>
                 <?php  $sum += $randNum;?>
               
              <?php } ?>
                 <td><?=$sum;?></td>
              </tr>
         <?php } ?>
    </table>  
  <?php
    }else{
        echo 'Please enter a valid number !';
    }
}
  ?>
</body>
</html>




