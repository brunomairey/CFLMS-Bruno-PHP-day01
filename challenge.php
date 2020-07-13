<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<title></title>
</head>
<body>
 <div class="row row-cols-3 mx-4 justify-content-around">
            
<?php 
$cars = array(
"bmw" => array ("img" => "bmw.JPG", "brand" => "bmw", "model" => "Serie 1", "price"  => 39, "location" => "Vienna", "availability" => "true"),
"audi" => array ("img" => "audi.jpg", "brand" => "audi", "model" => "A3", "price"  => 29, "location" => "Berlin", "availability" => "false"),
"peugeot" => array ("img" => "508.jpg", "brand" => "peugeot", "model" => "508", "price"  => 49, "location" => "Munich", "availability" => "true"),
);

// echo ("the following car " . $cars['bmw']['brand'] . "\n" . $cars['bmw']['model'] . " is available for a price of " . $cars['bmw']['price'] . " in " 
// 	. $cars['bmw']['location']); 


foreach($cars as $key => $value){ 

echo "<div class=\"card-deck my-4 \"><div class=\"card mb-4 bg-dark text-white text-center teaser hovereffect\">
                           <img src=\"" . $value["img"] . "\" class=\"card-img-top imageheight\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">" . $value["brand"] . "\n" . $value["model"] . "</h5> 
                                 
                                <p class=\"card-text text-left\"> is available for a price of ". $value["price"]  . "€ per day in " . $value["location"] .  "</p></div></div>" 
                              
                                
                     
                   
             // echo("</div>");
;}
// foreach($cars as $key => $value){
// 	foreach ($value as $key2 => $val) {
// 		echo $val."<br>";
// 	}
// }

//  foreach($cars as $key => $value){
// 	echo $value["brand"]."<br>";
// }

// The Car agency should show the availability of the cars, the make and models of the cars, price and location of the specific rental place.
// echo "Marks for mark in physics : ";
// echo $marks[ 'mark']['physics'] . "<br />" ;
?>
</div>


</body>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>