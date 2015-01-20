<form method="POST" action="">
    Enter Amount: <input type="text" name="money"/><br/>
    <input type="radio" name="currency" value="USD"/> 
    <label for="usd">USD</label>
    <input type="radio" name="currency" value="EUR"/>
    <label for="euro">EUR</label>
    <input type="radio" name="currency" value="BGN"/>
    <label for="bgn">BGN</label><br/>
    <label>Compound Annual Interest</label>
    <input type="text" name="interest"/><br/>
    <label>Select Month</label><br/>
    <select style="width:300px;" name="month">
		   <option value="6">6 months</option>
		   <option value="12">1 year</option>
		   <option value="36">2 years</option>
                   <option value="60">5 years</option>
   </select>
    <input type="submit" name="submit" value="Calculate"/>
</form>
<?php
echo '<pre>' . print_r($_POST, true) . '</pre>';
if (isset($_POST['submit'])) {
    $money = htmlentities($_POST['money']);
    $currency = htmlentities($_POST['currency']);
    $interest = htmlentities($_POST['interest']);
    $months = htmlentities($_POST['month']);
   // $period = preg_replace('/[^0-9]/', '', $period);
    
   $sum = $money;
   for ($index = 0; $index <= $months; $index++) {
       $sum *= (1 + ($interest / 12) / 100);
   }
   
   $currencySymbol = '';
   switch ($currency) {
       case 'USD': 
           $currencySymbol = "$";
           echo $currencySymbol . number_format($sum, 2, '.', '');
           break;
        case 'BGN': 
           $currencySymbol = "лв";
           echo $currencySymbol . number_format($sum, 2, '.', '');
           break;
        case 'EUR': 
           $currencySymbol = "€";
           echo $currencySymbol . number_format($sum, 2, '.', '');
           break;
       default:
           break;
   }
   
}else{
    echo 'Please enter again';
}


/*
Write a PHP script CalculateInterest.php which generates an HTML page that contains:
•	An input text field to hold the amount of money
•	Radio buttons to choose the currency
•	An input text field to enter the compound annual interest amount
•	A dropdown menu to choose the period of time
•	A submit button
 *

 */
?>
