<!-- Using AJAX -->

<!DOCTYPE html>
<html>
    <head>
        <title>Form submit - Form1</title>
        <script src="jquery-1.11.3.min.js"></script>
        <script>
            function submitMyForm5(){
                let username = document.getElementById("username").value; 
                let password = document.getElementById("password").value; 

                $.ajax({
                        type: "POST",
                        data: { username: username, password: password },
                        url: `action.php?act=submitForm5`,
                        dataType: 'text',
                        success: function (res) { 
                            alert(res)
                            console.log('response:', res)
                        }
                    });
            }
        </script>
    </head>
    <body>
        <div style="margin:0 auto;width:400px">
            <div style="padding: 10px">
                Username:<br>
                <input type="text" name="username" id="username">
            </div>
            <div style="padding: 10px">
                Password:<br>
                <input type="password" name="password" id="password">
            </div>
            <div style="padding: 10px">
                <button type="button" onclick="submitMyForm5();">Submit</button>
            </div>
        </div>
    </body>
</html>