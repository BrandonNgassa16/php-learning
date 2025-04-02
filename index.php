<!doctype html>

<!-- Web page "Hello World Autos"       -->
<!-- Created by Harrison Kong           -->
<!-- Copyright (C) Coursera 2021        -->

<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv=“Pragma” content=”no-cache”>
<meta http-equdiv=“Expires” content=”-1″>
<meta http-equiv=“CACHE-CONTROL” content=”NO-CACHE”>
<!-- CSS Stylesheets -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="css/index.css">

<title>Hello World Autos</title>   

</head>

<body>
    <?php   
         
         $vehicles = [
            ["Astro", "Estrella", "2021", 500, 50000, "veh-01.jpg"],
            ["Yesss", "Tesing ", "2025", 3000, 50000, "veh-02.jpg"],
            ["Sag", "just this one ", "2021", 7000000, 50000, "veh-03.jpg"]


         ];

    
    
    
    
    ?>

<div class='outer-div'>
<h1><?php echo " Hello World Autos "?></h1>
<p class="slogan">Where everyone can afford to buy a vehicle!</p>

<table class="vehicle-table" id="vehicle-table">
    <colgroup>
        <col width="20%"><col width="80%">
    </colgroup>
    <tbody>
        <!-- rows of vehicles -->
         <?php foreach($vehicles as $vehicle) {

            $price = number_format($vehicle, 2);
            
            echo <<<FOREACHVEHICLE
            <tr>
                <td class="top-aligned">
                    <img class="thumbnail" src="images/<?php echo $vehicles[0][5]  ?>" alt="vehicle picture">
                </td>
                <td>
                    <class="vehicle-make"><?php echo $vehicles[0][0] ?></p>
                    <p class="vehicle-model"><?php echo $vehicles[0][1] ?></p>
                    <hr class="vehicle-hr">
                    <p class="right-aligned"><span class="data-label">Year: </span><span class="vehicle-year"><?php echo $vehicles[0][2] ?></span>
                    &nbsp;&nbsp;<span class="data-label">Mileage: </span><span class="vehicle-mileage"><?php echo $vehicles[0][3] ?></span></p>
                    <p class="vehicle-price right-aligned">$<?php echo $vehicles[0][4] ?></p>

                    <hr />
                </td>
            </tr>
        
        }
        ?>

    </tbody>

</table>

</div>

</body>
<footer>
    <?php include 'footer.php'?>
</footer>

</html>