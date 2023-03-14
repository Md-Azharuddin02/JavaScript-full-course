<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="text" placeholder="username" id="username">
    <input type="text" placeholder="email" id="email">
    <input type="text" placeholder="company" id="company">

    <button type="button" onclick="setCookies()">Set Cookies</button>
    <button type="button" onclick="getCookies()">Get Cookies</button>

    <script>
        // in order to set multiple cookie we can use multiple cookie keyword
        function setCookies(){
            document.cookie= "username="+document.getElementById("username").value;
            document.cookie= "email="+document.getElementById("email").value;
            document.cookie= "company="+document.getElementById("company").value;
        }
        function getCookies(){
            alert(document.cookie);
        }
    </script>
</body>
</html>