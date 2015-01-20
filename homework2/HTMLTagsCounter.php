<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
<title>Tag Counter</title>
</head>
<body>
<section>
<p>Enter HTML Tag or a blank line to reset the session:</p>
<form action="" method="post">
<input type="text" name="tags" id="tag-box"/>
<input type="submit" name="submitBtn" id="sub"/>
<br/>
<div id="result">
<?php
$validTags = array('body', 'a', 'h1');
//$count = 0;
if (isset($_POST['tags'])&&isset($_POST['submitBtn'])) {
    
    if ($_POST['tags'] == '') {
        if (isset($_SESSION['count'])) {
            unset($_SESSION['count']);
        }
    }
    
    if (in_array($_POST['tags'], $validTags)) { // dali POST['tags'] se sudurja v masiv validTags
        $_SESSION['a']+=1;
        echo 'Score:' . $_SESSION['a'];
    }else{
        echo "Invalid tags";
        echo 'Score:' . $_SESSION['a'];
    }

}