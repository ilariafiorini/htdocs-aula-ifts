<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./calc.css">
    <title>CAlcolatrice</title>
</head>
<body>
    <div class="container">
        <div class="calculator card">

            <input type="text" class="calculator-screen z-depth-1" value="" disabled />

            <div class="calculator-keys">

                <button type="button" class="operator btn btn-info" value="+">+</button>
                <button type="button" class="operator btn btn-info" value="-">-</button>
                <button type="button" class="operator btn btn-info" value="*">&times;</button>
                <button type="button" class="operator btn btn-info" value="/">&divide;</button>

                <button type="button" value="7" class="btn btn-light waves-effect">7</button>
                <button type="button" value="8" class="btn btn-light waves-effect">8</button>
                <button type="button" value="9" class="btn btn-light waves-effect">9</button>


                <button type="button" value="4" class="btn btn-light waves-effect">4</button>
                <button type="button" value="5" class="btn btn-light waves-effect">5</button>
                <button type="button" value="6" class="btn btn-light waves-effect">6</button>


                <button type="button" value="1" class="btn btn-light waves-effect">1</button>
                <button type="button" value="2" class="btn btn-light waves-effect">2</button>
                <button type="button" value="3" class="btn btn-light waves-effect">3</button>


                <button type="button" value="0" class="btn btn-light waves-effect">0</button>
                <button type="button" class="decimal function btn btn-secondary" value=".">.</button>
                <button type="button" class="all-clear function btn btn-danger btn-sm" value="all-clear">AC</button>

                <button type="button" class="equal-sign operator btn btn-default" value="=">=</button>

                </div>
        </div>
    </div>
</body>
</html>