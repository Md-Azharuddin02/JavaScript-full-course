<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <select  id="color" onchange="getColor()">
        <option value="slelect">----Select color----</option>
        <option value="BlueViolet">purple</option>
        <option value="CadetBlue">light green</option>
        <option value="DarkCyan">green</option>
    </select>

    <script>
        function getColor(){
            var value = document.getElementById("color").value;
            if(value != "slelect"){
            document.cookie= "value="+value;
                document.bgColor=value;
            }
        }
        window.onload=function(){
            if(document.cookie !=0){
                var arr= document.cookie.split("=");
                document.getElementById("color").value= arr[1];
                document 
             }
        }
    </script>
</body>
</html>