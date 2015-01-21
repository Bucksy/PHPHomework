<!--
Problem 1.Word Mapping
Write a PHP program WordMapper.php that takes a text from a textarea and prints 
 * each word and the number of times it occurs in the text. The search should be case-insensitive. 
 * The result should be printed as an HTML table-->

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <form method="post">
            Please enter a string: <textarea name="text" rows="4" cols="20"></textarea>
            <input type="submit" name="submit" value="Count Words"/>
        </form>
        <?php
        if (isset($_POST['submit']) && !empty($_POST['text'])) {
            if (is_string($_POST['text'])) {

                $text = trim(htmlentities($_POST['text']));
                $text = strtolower($text);
                $words = str_word_count($text, 1); //array
                //echo '<pre>' . print_r($words, true) . '</pre>';
                $words = array_count_values($words);
                //echo '<pre>' . print_r($words, true) . '</pre>';
                echo '<table border="1">';
                foreach ($words as $key => $word) {
                    echo '<tr>
                           <td>' . $key . '</td>
                           <td>' . $word . '</td>
                         </tr>';
                }
                echo '</table>';
            } else {
                echo 'Please enter the valid text';
            }
        }
//      $str = "The quick brows fox.!!! jumped over..// the lazy dog.!";
//      $str = strtolower($str);
//      echo '<pre>' . print_r((str_word_count($str,1)), true) . '</pre>';
//      
//      
//      echo str_word_count($str);
        ?>
    </body>
</html>


