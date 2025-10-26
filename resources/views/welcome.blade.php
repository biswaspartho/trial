<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            display:flex;
            justify-content: space-evenly;
        }
        .card{
            background-color: white;
            border-radius: 10px;
            padding: 10px;
            margin:5px;
            border: 1px solid grey;
            box-shadow: 1px 1px 11px 0px;
        }
        .flex{
            display: flex;
            padding: 10px;
        }
        .btn{
            padding: 10px;
            background-color: rgb(0,140,255);
            color: white;
            font-weight:600;
        }
        .center{
            display:flex;
            justify-content:center;
        }
    </style>
</head>
<body>
<div style="display:flex">
<div class="container">
        <div class="card">
            <div>
                <img src="https://thumbs.dreamstime.com/b/environment-earth-day-hands-trees-growing-seedlings-bokeh-green-background-female-hand-holding-tree-nature-field-118143566.jpg" alt="Nature">
            </div>
            <div>
                <div class="flex">
                    <div>
                        NATURE
                    </div>
                    <div>
                        <del>500</del>
                        <div>450</div>
                    </div>
                </div>
                <div class ="flex">
                    <input type="number" style="width:30px">
                    <div>
                        Qty
                    </div>
                </div>
                <div class="center">
                    <button class="btn">Add</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card">
            <div>
                <img src="https://thumbs.dreamstime.com/b/environment-earth-day-hands-trees-growing-seedlings-bokeh-green-background-female-hand-holding-tree-nature-field-118143566.jpg" alt="Nature">
            </div>
            <div>
                <div class="flex">
                    <div>
                        NATURE
                    </div>
                    <div>
                        <del>500</del>
                        <div>450</div>
                    </div>
                </div>
                <div class ="flex">
                    <input type="number" style="width:30px">
                    <div>
                        Qty
                    </div>
                </div>
                <div class="center">
                    <button class="btn">Add</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card">
            <div>
                <img src="https://thumbs.dreamstime.com/b/environment-earth-day-hands-trees-growing-seedlings-bokeh-green-background-female-hand-holding-tree-nature-field-118143566.jpg" alt="Nature">
            </div>
            <div>
                <div class="flex">
                    <div>
                        NATURE
                    </div>
                    <div>
                        <del>500</del>
                        <div>450</div>
                    </div>
                </div>
                <div class ="flex">
                    <input type="number" style="width:30px">
                    <div>
                        Qty
                    </div>
                </div>
                <div class="center">
                    <button class="btn" onclick="addTotal(450)">Add</button>
                    }
                
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container card">
    <h1>
        Total: <span id="total">0</span>
    </h1>
</div>
<script>
    var total=0;
    function addToTotal1(price){
        let qty = document.getElementById('qty1').value;
        total=total+(qty*price);
        let output=document.getElementById('total');
        output.innerText=total;
    }
    function addToTotal2(price){
        let qty = document.getElementById('qty2').value;
        total=total+(qty*price);
        let output=document.getElementById('total');
        output.innerText=total;
    }
    function addToTotal3(price){
        let qty = document.getElementById('qty3').value;
        total=total+(qty*price);
        let output=document.getElementById('total');
        output.innerText=total;
    }
</script>
</body>
</html>