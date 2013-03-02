<html>
<head>

</head>

<body>

<h2>Register Form</h2>

<form method="post" action="insert.php">

    <table border="0" width="60%">

        <tr>
            <td width="10%">Name:</td>
            <td><input type="text" name="name" maxlength="15"/></td>
        </tr>
        <br/>
        <tr>
            <td width="10%">Email:</td>
            <td><input type="text" name="email" maxlength="30"/></td>
        </tr>
        <br/>
        <tr>
            <td width="10%">Password:</td>
            <td><input type="password" name="password" maxlength="15"/></td>
        </tr>
        <br/>
        <tr>
            <td width="10%">Confirm Password:</td>
            <td><input type="password" name="cpassword" maxlength="15"/></td>
        </tr>
        <br/>
    </table>
    <p>
        <input type="submit" value="register"/> <br/>
        <input type="reset" value="reset"/>
</form>

</body>
</html>