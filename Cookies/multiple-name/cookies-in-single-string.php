<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="text" placeholder="username" id="username" >
    <input type="text" placeholder="email" id="email" >
    <input type="text" placeholder="company" id="company" >

    <button type="button" onclick="setCookie()">Set cookie</button>
    <button type="button" onclick="getCookie()">Get cookie</button>
    <script>
        
        // we can not set the multiple name in the single cookies 
        // in order to set multiple cookies we can use obje or multiple cookies setting 

        function setCookie(){
            var set ="username="+document.getElementById("username").value+";Email="+document.getElementById("email").value+";Company="+document.getElementById("company").value+";";

            document.cookie=set;
        }
        function getCookie(){
            alert(document.cookie);
        }
    </script>
</body>
</html>