<?php

/*
Write a PHP script GetFormData.php which retrieves the input data from an HTML form, and displays it as string. 
 * The input fields should hold name, age and gender (radio buttons).
 *  The returned string should be a message containing the information submitted by the form. \100% accuracy is NOT required
 */
echo '<pre>' . print_r($_POST, true) . '</pre>';
?>

<form method="Post"> 
    Name: <input type="text" name="username" placeholder="Name..."/><br/>
    Age: <input type="text" name="age" placeholder="Age"/><br/>
    <input type="radio" name="gender" value="Male"/>Male <br/>
    <input type="radio" name="gender" value="Female"/>Female<br/>
    <input type="submit" name="submit" value="Submit"/>
</form>
<?php
if (isset($_POST['submit'])) {
    $username = htmlentities($_POST['username']);
    $age = htmlentities($_POST['age']);
    $gender = $_POST['gender'];
    
    echo 'My name is ' . $username . 'I\'m ' . $age . ' years old ' . ' I\'m ' . $gender; 
}
