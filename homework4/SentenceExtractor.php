<?php

/*
Write a PHP program SentenceExtractor.php that takes a text from a
 *  textarea and a word from an input field and prints all sentences from the text, containing that word.
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
            <input type="text" name="word"/>
            <input type="submit" name="submit" value="Print"/>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            if (!empty($_POST['text']) && !empty($_POST['word'])) {
                $text = $_POST['text'];
                $word = $_POST['word'];
                $sentences = preg_split("/(?<=[.?!])\s*/", $_POST['text'], -1, PREG_SPLIT_NO_EMPTY);//array with  word 
                foreach ($sentences as $sentence) {
                    if (preg_match("/\s+$word\s+.*[.?!]+$/", $sentence)) {
                        echo "$sentence.<br/>";
                    }
                }
                }else{
                echo 'Please enter again';
            }
        }
        ?>
    </body>
</html>
