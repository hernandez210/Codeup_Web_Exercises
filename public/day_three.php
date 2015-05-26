<php
var_dump($_get)
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>
            codeupdotdev
        </title>
    </head>
    <body>
    <!-- This is a form that requires a username and password. 
        <!- The form is set in method post -->
        <form method="POST" action="/process-form.php">
            <p>
                <label for="username">Username</label>
                <input id="username" name="username" type="text">
            </p>
            <p>
                <label for="password">Password</label>
                <input id="password" name="password" type="password">
            </p>
            <p>
                <input type="submit">
            </p>
        </form>
    </body>
</html>