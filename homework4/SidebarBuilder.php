<?php

/*
Write a PHP program SidebarBuilder.php that takes data from several input fields and builds 3 sidebars. 
 * The input fields are categories, tags and months. The first sidebar should contain a list of the categories,
 *  the second sidebar – a list of the tags and the third should contain the months. 
 * The entries in the input strings will be separated by a comma and space ", ".
 *  Styling the page is optional. Semantic HTML is required.
 */
?>
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
            
            Categories: <input type="text" name="categories"/><br/>
            Tags:  <input type="text" name="tags"/><br/>
            Months:  <input type="text" name="months"/><br/>
            <input type="submit" name="submit" value="Generate"/><br/>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            if (!empty($_POST['categories']) && !empty($_POST['tags']) && !empty($_POST['months'])) {
                if (is_string($_POST['categories']) && is_string($_POST['tags']) && is_string($_POST['months'])) {
                    
                    $categories = trim(htmlentities($_POST['categories']));
                    $categories = preg_split('/[,\s]/', $_POST['categories'], -1, PREG_SPLIT_NO_EMPTY);
                    $tags = trim(htmlentities($_POST['tags']));
                    $tags = preg_split('/[,\s]/', $_POST['tags'], -1, PREG_SPLIT_NO_EMPTY);
                    $months = trim(htmlentities($_POST['months']));
                    $months = preg_split('/[,\s]/', $_POST['months'], -1, PREG_SPLIT_NO_EMPTY);

                    function sideBar($title, $arr) {
                        echo '<h4 style="text-decoration: underline; color: blue;">' . $title . '</h4>';
                        echo '<ul style="background-color: yellow; width: 200px; border: 1px solid black;">';;
                        foreach ($arr as $value) {
                            echo '<li style="text-decoration: underline;list-style-type: circle;">' . $value . '</li>';
                        }
                        echo '</ul>';
                    }
                    
                    sideBar('Categories', $categories);
                    sideBar('Tags', $tags);
                    sideBar('Months', $months);
                    
                }else{
                    echo 'Please enter a valid string, separated with comma!';
                }
            }else{
                echo 'Please enter again!';
            }
        }
        ?>
    </body>
</html>


