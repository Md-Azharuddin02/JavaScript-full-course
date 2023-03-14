<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="text" id="username" placeholder="username">
    <input type="text" id="email" placeholder="email">
    <input type="text" id="company" placeholder="company">

    <button type="button" onclick="setCookie()">Set Cookie</button>
    <button type="button" onclick="getCookie()">Set Cookie</button>

    <script>
        function setCookie(){
            var obj1={}
            obj1.username=document.getElementById("username").value;
            obj1.email=document.getElementById("email").value;
            obj1.company=document.getElementById("company").value;

            var str=JSON.stringify(obj1);
            document.cookie=str;
        }
        function getCookie(){
            var obj=JSON.parse(document.cookie);
            alert(obj.email+", "+ obj.email+", "+obj.company);
        }
    </script>
</body>
</html>