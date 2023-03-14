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
        //cookie expire is an attribute of the cookie that provide cookies for a particular times of period.
        // here can set the time and date of the expiry of the cookie. 


        function setCookie(){
            document.cookie= "Name=Sonu kr sharma;expires=Tue, 14 Mar 2023 00:18:00 ITC";
        }
        function getCookie(){
            alert(document.cookie);
        }
    </script>
</body>
</html>