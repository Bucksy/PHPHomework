
<form method="GET">
    <input type="text" name="names"/>
    <input type="submit" name="submit" value="Submit"/>
</form>
<?php
/*
Write a PHP script PrintTags.php which generates an HTML input text field and a submit button.
 *  In the text field the user must enter different tags, separated by a comma and a space (", "). When the information is submitted, the script should split the tags,
 *  put them in an array and print out the array. Semantic HTML is required. Styling is not 
 */
if (isset($_GET['submit'])) {
    $names = trim($_GET['names']);
    $split_names = explode(", ", $names); //masiv ot imena koito sme vuveli v input-a
    //echo '<pre>' . print_r($split_names, true) . '</pre>';
   // exit();
    foreach ($split_names as $key => $value) {
        echo $key . ' => ' .$value. '<br/>'; 
    }
    
}
//echo '<pre>' . print_r($names, true) . '</pre>';
