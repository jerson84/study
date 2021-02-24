
<?php include_once("include/config.php");?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form method="post" action="process.php" name="exp">
		name:<br>
		<input type="text" name="name">
		<br>
		Address:<br>
		
		<input type="text" name="address">
		<br>
		City:<br>
		<input type="text" name="city">

		
		<br>
		<br>
		mobile:<br>
		<input type="text" name="city">

		
		<br>
	
	
		<input type="submit" name="save" value="submit">
	</form>


<?php
	
$a = 10; 
function myTest() {
} 
myTest();
echo "<p>Variable a inside function is: $a</p>";
	
$a=100;
$b='welvome to php tutorial';
$c=	50.20;
$d= null;

var_dump($a);	
var_dump($b);	
var_dump($c);	
var_dump($d);
	
	
$a=10;
$b=20;
echo($a / $b);	

	echo "<br>";
	
if($a>=$b){
	
	echo $a--;
}
else{
	echo $a++;
}	
	
$a=10;
$a%=20;	
echo($a);	
$x = 13;  
echo $x++;
	
$x = 150;  
$y = 100;

if ($x == 150 xor $y == 100) {
    echo "Hello world!";
}
	
$txt1="Hi";
$txt2="Jerson";
$txt1 .= $txt2;	
echo $txt1; 
	
$a=10;
$b=11;
$c=10;
if($a > $b and $a > $c)
{
echo"a is largest.";
}
elseif($b > $a and $b > $c)
{
echo"b is largest";
}
elseif($c > $a and $c > $b)
{
echo" c is largest";
}
else
{
echo"a=b=c";
}	

	
$favsport = "cricket";
switch ($favsport) {
case "hockey":
echo "Your favorite sport is Hocky!";
break;
case "cricket":
echo "Your favorite sport is Cricket!";
break;
case "football":
echo "Your favorite sport is Football!";
break;
case "badminton":
echo "Your favorite sport is Badminton!";
break;
default:
echo "Your favorite sport is neither Hockey, Cricket, Football nor Golf!";
}
	
$d = date("D");
switch ($d){
case "Mon":
echo "Today is Monday";
break;
case "Tue":
echo "Today is Tuesday";
break;
case "Wed":
echo "Today is Wednesday";
break;
case "Thu":
echo "Today is Thursday";
break;
case "Fri":
echo "Today is Friday";
break;
case "Sat":
echo "Today is Saturday";
break;
case "Sun":
echo "Today is Sunday";
break;
default:
echo "Wonder which day is this ?";
}
	
	$a=0;
while ($a<=10)
{
echo $a;
$a++;
}
echo"<br>";
	
	
$i=0;
while($i <= 10){
	if($i % 2 == 0){
	echo $i." - Even,  ";
		}else{
			echo $i." - Odd,  ";
		 }
	 $i++;
	 }
	
$a=0;
do
{
echo $a;
$a++;
}
while($a<=18);
	
for($a=1;$a<=10;$a++)
echo "$a <br>";	
	
$data=array(1,2,3,4,5);
foreach($data as $element)
{
    echo "$element";
}	
echo"<br>";	
	
$data=array();
for($i=0;$i<=10;$i++)
{
$data[$i]=$i;
}
foreach($data as $element)
{
echo "$element";
}

	
function getSum($num1, $num2){
$sum = $num1 + $num2;
echo "Sum of the two numbers $num1 and $num2 is : $sum";
}
getSum(20, 30);	
	
define ("nam","hi Iam jerson");

echo nam;
	
?>
</body>
</html>