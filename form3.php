<!-- Using Javascript with adding more fields -->

<!DOCTYPE html>
<html>
    <head>
        <title>Form submit - Form1</title>
        <script>
            function submitMyForm3(){
                let form = document.getElementById("form3"); 
                var anotherElement = document.createElement("input");      

                anotherElement.value='test';
                anotherElement.name="txtTest";
                form.appendChild(anotherElement);

                //document.body.appendChild(form);

                form.submit();
            }
        </script>
    </head>
    <body>
        <div style="margin:0 auto;width:400px">
            <form id="form3" method="post" action="action.php?act=submitForm3">
                <div style="padding: 10px">
                    Username:<br>
                    <input type="text" name="username" id="username">
                </div>
                <div style="padding: 10px">
                    Password:<br>
                    <input type="password" name="password" id="password">
                </div>
                <div style="padding: 10px">
                    <button type="button" name="btnSubmitForm2" onclick="submitMyForm3();">Submit</button>
                </div>

            </form>
        </div>
    </body>
</html>