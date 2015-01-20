<!DOCTYPE html>
<html>
<head>
<meta charset="UTF_8"/>
<title>02_Most Frequent Tag</title>
</head>
<body>
<form method="GET">
    Name: <input type="text" name="names"/>
    <input type="submit" name="submit" value="Submit"/>
</form>
</body>
<?php

/*
Write a PHP script MostFrequentTag.php which generates an HTML input text field and a submit button.
 *  In the text field the user must enter different tags, separated by a comma and a space (", ").
 *  When the information is submitted, the script should generate a list of the tags, sorted by frequency.
 *  Then you must print: 
 * "Most Frequent Tag is: [most frequent tag]". Semantic HTML is required. Styling is not required. Example:
 */

if (isset($_GET['submit'])) {
    $arr = explode(", ", $_GET['names']);
    //echo '<pre>' . print_r($arr, true) . '</pre>';
    $count = array_count_values($arr);
    echo '<pre>' . print_r($count, true) . '</pre>';
   
    arsort($count); //bool true , false
    $keys = array_keys($count); //vrushta masiv ot kluchovete na masiva 
    //echo '<pre>' . print_r($keys, true) . '</pre>';
    foreach ($count as $tag => $value) {
       echo $tag. '=>'. $value. '<br/>'; 
    }
    
    echo 'Most frequent word is :' . $keys[0] ;
    
        
    
}
//$arr = array(1,2,3,3);
//$count = arsort($arr); // vrushta masiv ot stoinosti i kolko puti se sudurja
//echo '<pre>' . print_r($count, true) . '</pre>';
?>
</html>
</body>