<?php

if (isset($_COOKIE['testsite'])) {
    header('Location:enter.php');
} else {

    echo "

<html>
<head>

</head>

<body>

<h1>
    <center>Welcome to CRUD control center</center>
</h1>
<center>Please login...</center>

<center>
    <form method='post' action='login.php'>

        <table border='0' width='30%'>

            <tr>
                <td>Name:</td>
                <td><input type='text' name='name' maxlength='15'/></td>
            </tr>
            <br/>
            <tr>
                <td>Password:</td>
                <td><input type='password' name='password' maxlength='15'/></td>
            </tr>
            <br/>
            <tr>
                <td>Remember me? </td>
                <td><input type='checkbox' name='remember' /></td>
            </tr>
            <br/>

        </table>
        <p>
            <input type='submit' value='Submit'/> <br/>
            <input type='reset' value='Reset Form'/>
    </form>
    <a href='form.php'>Register?</a>

</center>
</body>


</html>
";
}