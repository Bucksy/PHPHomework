<?php

/*
Write a PHP program SentenceExtractor.php that takes a text from a textarea and a 
 * word from an input field and prints all sentences from the text, containing that word.
 *  A sentence is any sequence of words ending with ., ! or ?.
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <form method="post">
            Please enter a text: <textarea name="text" rows="4" cols="20"></textarea>
            <input type="text" name="ban-list"/>
            <input type="submit" name="submit" value="Print"/>
        </form>
     <?php
        if (isset($_POST['submit'])) {
               if (!empty($_POST['text']) && !empty($_POST['ban-list'])) {

        $text = htmlentities($_POST['text']);
        $ban = htmlentities($_POST['ban-list']);
        $banList = explode(', ', $ban);

        foreach ($banList as $ban) {
            $text = str_replace($ban, str_repeat('*', strlen($ban)), $text);
        }
        echo $text;
               } else {
        echo 'Please enter again!';
               }
        }
        ?>
    </body>
</html>


