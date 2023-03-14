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
    <Script>
        // max-age is also one of the cookie attribute that is also use to give the maximun time to store the cooke.
        // -------------------format to set max-age -------------
                    // (secounds*minutes*hours*days);
                    // (60*60*24*365)


        function setCookie(){
            document.cookie="Learn Vern;max-age="+(60*2)+";";
        }
        function getCookie(){
            alert(document.cookie);
        }

    </Script>
</body>
</html>