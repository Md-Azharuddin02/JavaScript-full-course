<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button type="button" onclick="setCookes()">Set Cookies</button>
    <button type="button" onclick="getCookes()">Get Cookies</button>
    <script>
        function setCookes(){
            document.cookie="username=prince";
        }
        function getCookes(){
            alert(document.cookie);
        }
    </script>
</body>
</html>