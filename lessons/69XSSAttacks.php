<html>
<body>
<h1>XSS Attacks</h1>

<?php

//XSS Attacks work like SQL injection.
//strip_tags() will prevent scripting language from running in inputs.
//htmlentities() will will allow html tags but prevent scripts
if (isset($_POST['submitted'])) {
    //echo "<h2>Result:</h2><p>".strip_tags($_POST['data'])."</p>";
    echo "<h2>Result:</h2><p>" . htmlentities($_POST['data']) . "</p>";
}
?>

<form method="post" action="69XSSAttacks.php">
    <p>Comments: <textarea name="data" rows="3" cols="40"></textarea></p>

    <div align="center"><input type="submit" name="submit" value="Submit"></div>
    <input type="hidden" name="submitted" value="TRUE"/>
</form>
</body>
</html>