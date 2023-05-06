
<?php 

$string = "Ziad algaide";
echo $string;
echo "<br>";
echo strtolower($string);
echo "<br>";
echo strtoupper($string);
echo "<br>";
echo strlen($string);
echo "<br>";
echo $string[0];
echo "<br>";
echo $string[-1];
echo "<br>";
$string[-1] = "i";
echo $string;
echo "<br>";
echo str_replace("Ziad", "Waleed",$string);
echo "<br>";
echo substr($string,0,11);
echo "<br>";
echo substr($string,12);

?>