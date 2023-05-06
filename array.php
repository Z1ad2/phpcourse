<form action = "array.php" method = "GET">
<input type = "text" name = "xname">
<input type = "submit">
</form>

<?php
/*
$family = array("Father", "Mother", "Brother",);
$family[1] = "love";
$family[3] = "Sister";
echo $family[1]
echo $family[2]
echo count($family);
*/

//$family = array("Nour", "Khalid", "Anas");
$xname = $_GET["xname"];

$score = [
"Nour" => [
    "Score" => "93",
    "Grade" => "A",
], 
"Khalid" =>[
    "Score" => "96",
    "Grade" => "A+",
], 
"Anas" => [
    "Score" => "89",
    "Grade" => "B+"
],
];
echo "Score: " . $score[$xname]["Score"];
echo "<br> ";
echo "Grade: " . $score[$xname]["Grade"];

/*$family = [
    "Designer" => "Nour", 
    "Programmer" =>"Khalid", 
    "Gamer" => "Anas"
];
echo $family[$xname];
*/
?>