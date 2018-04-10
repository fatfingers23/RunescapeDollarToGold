<?php








//url for price trends of a bond on the ge, can replace 29492 with w/e item id is for other projects
$url = 'https://services.runescape.com/m=itemdb_rs/api/graph/29492.json';
$json = file_get_contents($url);
$obj = json_decode($json);
//grabs the last item under daily in the jason file, which is today's price
$currentGpPrice = end($obj->daily);

//dollar amount for bonds before taxes
$aud = 7.99;
$cad = 7.39;
$eur = 5.69;
$gbp = 3.99;
$usd = 6.99;

$aud = number_format($currentGpPrice / $aud);
$cad = number_format($currentGpPrice / $cad);
$eur = number_format($currentGpPrice / $eur);
$gbp = number_format($currentGpPrice / $gbp);
$usd = number_format($currentGpPrice / $usd);




?>

<html>
    <header>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


        <meta name="viewport" content="width=device-width, initial-scale=1">

    </header>
<body>
<?php
echo' 
    <div class="container ">
        <div class="card" >
            <div class="card-header text-center">
                Runescape Gold to Real World Dollars for Today
            </div>
            <div class=" mx-auto">
            <ul class="list-group list-group-flush" >
                <li class="list-group-item">1 Bond equals: '.number_format($currentGpPrice).' Gold  </li>
                <li class="list-group-item">1 AUD equals: '.$aud.' Gold  </li>
                <li class="list-group-item">1 CAD equals: '.$cad.' Gold  </li>
                <li class="list-group-item">1 EUR equals: '.$eur.' Gold </li>
                <li class="list-group-item">1 GBP equals: '.$gbp.' Gold </li>
                <li class="list-group-item">1 USD equals: '.$usd.' Gold </li>
            </ul>
            </div>
        <div class="card-footer text-muted text-center">
            Amounts calculated by Current GE price for bond / Bond price in dollar amount. Prices for bonds <a href="https://services.runescape.com/m=news/price-changes---4th-june-2018?jptg=ia&amp;jptv=community_news">here</a>.
        </div>
</div>    
    </div>'; ?>



</body>
</html>



