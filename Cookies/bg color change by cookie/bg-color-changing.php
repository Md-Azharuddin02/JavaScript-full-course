<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            position: absolute;
            top: 50%;
            left: 40%;
        }
    </style>
</head>
<body>
    <select  id="color" onchange="setColor()">
    <option value="select">----Select Color----</option>
    <option value="green">Green</option>
    <option value="red">Red</option>
    <option value="puble">Blue</option>
    </select>

    <script>
        function setColor(){
            var value=document.getElementById("color").value;
            if(value != "select"){
                document.bgColor=value;
                document.cookie="value="+value;
            }
        }
        window.onload=function(){
            if(document.cookie !=0){
                var arr= document.cookie.split("=");
                document.bgColor=arr[1];
                document.getElementById("color").value=arr[1];
            }
        }
    </script>
</body>
</html>