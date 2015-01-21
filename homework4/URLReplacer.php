<?php
/*
  Problem 6.	URL Replacer
  Write a PHP program URLReplacer.php that takes a
 *  text from a textarea and replaces all URLs with t
 * he HTML syntax <a href= "…" ></a> with a special forum-style syntax [URL=…][/URL].

 */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>URL Replacer</title>
    </head>
    <body>
            <form method="post">
                <textarea name="text"></textarea>
                <br />
                <input type="submit" name="submitter" value="Submit">
            </form>
            <?php
            if (isset($_POST['text']) && !empty($_POST['text'])) {
                $text = $_POST['text'];
                $text = str_replace('</a>', '[/URL]', $text);
                $text =  preg_replace('/<a href="(.*?)"/', '[URL=\1]', $text);
                $text = htmlentities($text);
                echo $text;
            }
            ?>
   
    </body>
</html>
