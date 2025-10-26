<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Lab05
    </h1>
    <form action="#" method="">
        <input type="number" class="Input-field" id="num1" placeholder="Enter Number">
        <input type="number" class="Input-field" id="num2" placeholder="Enter Anther Number">
        <input type="button" class="btn" id="add-button" value="Click To Add Number" onclick="addTwonumbers()">
    </form>
    <div>
        <h1>
            Output Is : <span id="result">0</span>
        </h1>
    </div>
    <script>
        function addTwonumbers(){
            let num1 = Number(document.getElementById('num1').value);
            let num2 = Number (document.getElementById('num2').value);
            let sum=num1+num2;
            let output = document.getElementById('result');
            if (sum>100){
                output.innerText="NUMBER IS GREATTER THAN 100";
            }
            else{
                output.innerText=sum;
            }
        }
    </script>
</body>
</html>