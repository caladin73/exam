<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Cars</title>
        <link rel='stylesheet' href='css/mystyles.css'/>
        <script>
            var showYear = function() {
                var x = document.getElementById('yearo');
                var y = document.getElementById('yeari');
                x.innerHTML = y.value;
            }
            var init = function() {
                var x = document.getElementById('yearo');
                var y = document.getElementById('yeari');
                document.getElementById('yeari').value = 2013;
                x.innerHTML = y.value;
                x.addEventListener('input', showYear, true);
            }
            window.addEventListener('load', init, true);
        </script>
    </head>

    <body>
        <h1>Second Hand Sardine Cans</h1>
        <form action='insertCar.php' method='post'>
            <p>
                <strong>Id:</strong><br/>
                <input name='id' value='4' readonly='readonly'/>
            </p>
            <p>
                <strong>Year:</strong><br/>
                <input id='yeari' type='range' name='year' min='1990' max='2017' value='0'/>
                <output id="yearo" for="yeari">2013</output>
            </p>
            <p>
                <strong>Manufacturer:</strong><br/>
                <input type='text' name='manufacturer' required/>
            </p>
            <p>
                <strong>Model:</strong><br/>
                <input type='text' name='model' required/>
            </p>
            <p>
                <strong>Color:</strong><br/>
                <input type='text' name='color' required/>
            </p>
            <p>
                <strong>Mileage:</strong><br/>
                <input type='number' name='miles' required/>
            </p>
            <p>
                <strong>Price:</strong><br/>
                <input type='number' name='price' required/>
            </p>
            <p>
                <strong>Buyback Warranty:</strong><br/>
                <select name='buyback'>
                    <option value='yes'>yes</option>
                    <option value='no'>Hell no</option></option>
                </select>
            </p>
            <p>
                <input type='submit' value='Go!'/>
            </p>
        </form>
    </body>
</html>
