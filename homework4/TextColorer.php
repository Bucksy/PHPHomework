<!--
Write a PHP program TextColorer.php that takes a text from a textfield, colors each
character according to its ASCII value and prints the result. 
If the ASCII value of a character is odd, the character should be printed in blue.
If it’s even, it should be printed in red.-->

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <form method="post">
            Please enter a string: <textarea name="text" rows="4" cols="20"></textarea>
            <input type="submit" name="submit" value="Color text"/>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            if (is_string($_POST['text'])&&!empty($_POST['text'])) {
                $text = trim(htmlentities($_POST['text']));
                for ($i = 0; $i < strlen($text); $i++) {
                    if (ord($text[$i]) % 2 == 0) {
                        echo "<span style='color: red';>$text[$i]</span>";
                    }else{
                        echo "<span style='color: blue';>$text[$i]</span>"; 
                    }
                }
            }else{
                echo 'Please enter a valid string';
            }
        }
        ?>
    </body>
</html>


