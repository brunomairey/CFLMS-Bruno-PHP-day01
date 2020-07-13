<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
.center {
	line-height: 95vh;
	height: 1vh;
	width: 100%;
	/*	margin: auto;*/
		/*display: flex;
  justify-content: center;
  align-items: center;*/
	text-align: center;
	/*align-items: center;*/

  }

.center h1 {
	/*position: relative;
	top: 50%;*/
	display: inline-block;
	vertical-align: middle;
	/*width: 30%;
	border: solid red;
	margin: auto;*/
}

/*.container1{		
	height: 100vw;
	width: 100vw; 
	vertical-align: middle;
	text-align: center;
}*/
	</style>
</head>
<body>



<?php 

echo("<hr>");

$farenheit = 61;
function convert()
{
	global $farenheit;
	$celcius = ($farenheit-32)/1.80;
	echo ("$farenheit fahrenheit is $celcius celcius");
	// $result = ($celcius < 5) ? "the weather is really cold" : "The weather is really hot";
	// echo $result;
	echo("<hr>");
	if ($celcius>0 && $celcius <= 5) {echo "the weather is really cold";}
else if ($celcius > 5 && $celcius <= 10) {echo "the weather is cold";}
else if ($celcius > 10 && $celcius <= 15) {echo "the weather is pleasant";}
else if ($celcius > 15 && $celcius <= 20) {echo "the weather is warm";}
else {echo "the weather is hot";}

}


convert();
echo("<hr>");


$name = "Bruno";
echo ("<div class=\"center\"><h1>Hello $name </h1></div>");
echo("<hr>");
$d=date("D");
if ($d=="Mon" )
echo "Happy Monday! ";
else
echo "Have a nice day! <br>" ;
echo("<hr>");
switch ($d)
{
case "Mon":
echo ("Today is Monday");
break ;
case "Tue":
echo ("Today is Tuesday");
break;
case "Wed":
echo ("Today is Wednesday") ;
break;
case "Thu":
echo ("Today is Thursday");
break;
case "Fri" :
echo ("Today is Friday");
break;
case  "Sat":
echo ("Today is Saturday");
break ;
case "Sun":
echo ("Today is Sunday") ;
break;
default:
echo ("Wonder which day is this ?") ;
}

echo("<hr>");
// $name = "Bruno";
for( $i=0; $i<=50; $i++  )
echo ("<br>$i My name in for is $name");
echo("<hr>");

$j = 0;
echo($j);
while($j <=100)
	{
		$j++;
	
echo ("<br>$j My name in while is $name");
}
echo("<hr>");
$i=0;
do
{
$i++;
echo ("<br>$i My name in do while is $name");
}
while($i < 10 );
echo("<hr>");
$trainers = array("Acilio","Serry", "Theodora", "Marina");
foreach( $trainers as  $value )
{
echo "The avaible trainers is $value <br />";
}
echo("<hr>");
$character['a']="Mickey Mouse";
$character['b']="Minie Mouse";
$character ['c']="Goofy";
$character ['d']="Pluto";
$character ['e']="Donald Duck";
$character ['f']="Daisy";
echo ("Character is ".  $character ['a'] . "<br />");
echo ("Character is ".  $character ['b'] . "<br />");
echo ("Character is ".  $character ['d'] . "<br />");
echo ("Character is ".  $character ['c'] . "<br />");
echo ("Character is ".  $character ['e'] . "<br />");
echo ("Character is ".  $character ['f'] . "<br />");
echo("<hr>");
foreach( $character as  $value )
{
echo "The character is $value <br />";
}

echo("<hr>");

?>

</body>
</html>