<!-- Using HTML-PHP form submit -->

<!DOCTYPE html>
<html>
    <head>
        <title>Form submit - Form1</title>
    </head>
    <body>
        <div style="margin:0 auto;width:400px">
            <form method="post" action="action.php">
                <div style="padding: 10px">
                    Username:<br>
                    <input type="text" name="username" id="username">
                </div>
                <div style="padding: 10px">
                    Password:<br>
                    <input type="password" name="password" id="password">
                </div>
                <div style="padding: 10px">
                    <button type="submit" name="submitForm1">Submit</button>
                </div>

            </form>
        </div>
    </body>
</html>