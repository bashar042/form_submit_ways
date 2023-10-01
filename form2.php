<!-- Using Javascript, submit the actual-form -->


<!DOCTYPE html>
<html>
    <head>
        <title>Form submit - Form1</title>
        <script>
            function submitMyForm2(){
                document.getElementById("form2").submit(); 
            }
        </script>
    </head>
    <body>
        <div style="margin:0 auto;width:400px">
            <form id="form2" method="post" action="action.php?act=submitForm2">
                <div style="padding: 10px">
                    Username:<br>
                    <input type="text" name="username" id="username">
                </div>
                <div style="padding: 10px">
                    Password:<br>
                    <input type="password" name="password" id="password">
                </div>
                <div style="padding: 10px">
                    <button type="button" name="btnSubmitForm2" onclick="submitMyForm2();">Submit</button>
                </div>

            </form>
        </div>
    </body>
</html>