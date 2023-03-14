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
        //path is also one of the attribute of the cookie that will allow to access cookie . 
        // it means if we are setting the path only for the parent file and the child file then we can not access out of the parent file of the cookies .

        // "path=/." will show that we cann access the cookie of curent directory or inside that directory


        function setCookie(){
            document.cookie="name=sharma;path=/.";
        }
        function getCookie(){
            alert(document.cookie);
        }
    </script>
</body>
</html>