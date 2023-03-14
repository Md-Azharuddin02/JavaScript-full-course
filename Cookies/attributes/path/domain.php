<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button type="button" onclick="setCookie()">Set Cookie</button>
    <button type="button" onclick="getCookie()">Get Cookie</button>
    <script>
    //domain attribute of the cookie will allow only to create the cookies only for the specific domain. 

    // we cant use this domain attrubute on the localhost. in oreder to perform domain we need global host 

        function setCookie(){
            document.cookie= "Name=Sonu kr sharma";
            domain= learn-vern.com;
        }
        function getCookie(){
            alert(document.cookie);
        }
    </script>
</body>
</html>