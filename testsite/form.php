<html>
<head>

</head>

<body>

<h2>Register Form</h2>

<form method="post" action="insert.php">

    <table border="0" width="60%">

        <tr>
            <td width="10%">Name: <input type="text" name="name"/></td>
        </tr>
        <br/>
        <tr>
            <td width="10%">Email: <input type="text" name="email"/></td>
        </tr>
        <br/>
        <tr>
            <td width="10%">Password: <input type="password" name="password"/></td>
        </tr>
        <br/>
    </table>
    <p>
        <input type="submit" value="register"/> <br/>
        <input type="reset" value="reset"/>
</form>


<center><h3>
        <?php include("links.php"); ?>
    </h3></center>

</body>
</html>