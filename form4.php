<!-- Using Javascript by creating form on action -->

<!DOCTYPE html>
<html>
    <head>
        <title>Form submit - Form1</title>
        <script>
            function submitMyForm4(){
                var form = document.createElement("form");
                var element1 = document.createElement("input"); 
                var element2 = document.createElement("input");  

                form.method = "POST";
                form.action = "action.php?act=submitForm4";   

                element1.value="Bashar";
                element1.name="username";
                form.appendChild(element1);  

                element2.value="123456";
                element2.name="password";
                form.appendChild(element2);

                document.body.appendChild(form);

                form.submit();
            }
        </script>
    </head>
    <body>
        <div style="margin:0 auto;width:400px">
            
            <div style="padding: 10px">
                <button type="button" onclick="submitMyForm4();">Submit</button>
            </div>

        </div>
    </body>
</html>