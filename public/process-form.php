<?php
var_dump($_GET)
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>codeup.dev</title>
    </head>
    <body>
        <form method="GET" action="/process-form.php">
            <p>
                <label for="username">username</label>
                <input id="username" name="username" type="text">
            </p>
            <p>
                <label for="password">password</label>
                <input id="password" name="password" type="text">
            </p>
            <p>
                <input type="submit">
            </p>
        </form>
    </body>
</html>