<?php
$date =  date('Y-m-d', time());
$star = "hi! how are you?"
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2000", "2100", "1400","2016", "2200", "1010");
echo "The value of \$year: ";
print_r($year)
{
echo "<br> <br>1. To Replace '-' with '/' in date <br>";
$datea = str_replace("-", "/","$date");
echo "The value of \$date: ".$datea."<br>";
echo "<br>";
}
{
echo "2.To compare the date & tar and print.";
if (strcmp($datea, $tar) > 0)
	echo "<br> The future<br><br>";
elseif  (strcmp($date1, $tar) < 0)
	echo "<br> the past";
else  echo "<br> oops";
}
echo "3. print the position of / in the date <br>";
for($i=0;$i<strlen($datea);$i++)
{
if($datea[$i]=='/')
{
echo " ".$i; 
}
}
{
echo "<br><br>4.To print number of words in date and print it";
echo "<br>" .str_word_count($date);
}
{

echo "5.The length of the sentence is:";
echo strlen($star)."<br>";
}
{
echo "<br><br>#<u> $star </u>"."<br>";
echo "<br>6. ASCII value of first character of above underlined sentence is";
echo "<br>" .ord ($star)."<br>";
}
{
echo "<br>7.Return the last two charcters of date";
echo "<br>".substr("$date", -2);
}
echo "<br> 8.Convert date into array & delimit '/' it with space<br>";
$DE=explode("/",$datea);
for($i=0;$i<count($DE);$i++)
{
echo $DE[$i]." ";
}
echo "<br>";
IdentifyLeapYearforeach($year);
IdentifyLeapYearwhile($year));
function IdentifyLeapYearforeach($year)
{
echo "<br>9.  To identify whether each year is a leap year";
foreach($year as $value)
{
if(((int)$value)%4==0)
{
echo "<br>True";
}
else
{
echo "<br>False";
}
echo "<br>";
}
}
function IdentifyLeapYearwhile($year)
{
echo "<br>10.Identify leap year with WHILE function";
$i=0;

while($i<count($year))

{
if(((int)$year[$i])%4==0)
{
echo "<br>True";
}
else
{
echo "<br>False";
}
++$i;

echo "<br>";
}
}
echo "<br> 11. Done with SWITCH case";
for ($i=0;$i<count($year);$i++)

{echo "<br>";
switch ($year{$i})
{
case "2000": if(((int)$year[$i])%4==0)
{
echo "<br>True";
}
else
{
echo "<br>False";
}

break;
case "2100": if(((int)$year[$i])%4==0)
{
echo "<br>True";
}
else
{
echo "<br>False";
}

break;
case "1400": if(((int)$year[$i])%4==0)
{
echo "<br>True";
}
else
{
echo "<br>False";
}

break;
case "2016": if(((int)$year[$i])%4==0)
{
echo "<br>True";
}
else
{
echo "<br>False";
}

break;
case "2200": if(((int)$year[$i])%4==0)
{
echo "<br>True";
}
else
{
echo "<br>False";
}

break;
case "1010": if(((int)$year[$i])%4==0)
{
echo "<br>True";
}
else
{
echo "<br>False";
}

break;
}
}
?>






