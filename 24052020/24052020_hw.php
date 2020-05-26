<?php
//FIRST TASK
function printTable($array1, $array2)
{
    echo "<h3>Task one: Multiplication table 10*10.</h3><table>";

    // Table header
    echo "\n<tr><th></th>";
    for($i = 0; $i < count($array1); $i++)
        echo "<th>$array1[$i]</th>";
    echo "</tr>";

    // Table body
    for($i = 0; $i < count($array2); $i++)
    {
        echo "<tr>\n<th>$array2[$i]</th>";
        for ($j = 0; $j < count($array1); $j++)
        {
            echo "<td>" . ($array2[$i] * $array1[$j]) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
};
$x = array(1,2,3,4,5,6,7,8,9,10);
$y = array(1,2,3,4,5,6,7,8,9,10);

printTable ($x, $y);

//SECOND TASK
$number = 1;
function factorial($number)
{
    if($number === 0){
        return 1;
    }
    return $number * factorial($number - 1);
}
echo "</br>";
echo "</br>";
echo "<h3>Task two: Factorial number.</h3><table>";
echo factorial($number) . " is the factorial from " . $number . "!";

//THIRD TASK
echo "</br>";
echo "</br>";
echo "<h3>Task three: Palindrom check.</h3><table>";
function polindromsChecker($word){
    $wordSplitter = str_split(strtolower($word));
    $wordFromOtherSide = array_reverse($wordSplitter);
    if($wordSplitter === $wordFromOtherSide){
        print $word . " is a polindrom!";
    }
    else{
        echo $word . " is not a polindrom!";
    }
};
polindromsChecker("salas");

//FOURTH TASK
echo "</br>";
echo "</br>";
echo "<h3>Task four: Array change.</h3><table>";
$file = fopen("country_and_city.txt", "r") or die("Unable to open file!");
$content = explode(", ", fread($file, filesize("country_and_city.txt")));
fclose($file);
var_dump($content);
echo "</br>";
echo "</br>";
$arrayKeys = ["Country", "City"];
$together = [];
foreach($content as $siglePlaceString){
    $siglePlaceArray = explode("=>", $siglePlaceString);
    $together[] = array_combine($arrayKeys, $siglePlaceArray);
}
$createdFile = fopen("places_together.txt", "w");
foreach($together as $place){
    var_dump($place);
    foreach($place as $key => $value){
        fwrite($createdFile, $key . ": " . $value . "\n"); 
    }
    fwrite($createdFile, "\n");
}
fclose($createdFile);
echo "</br>";
echo "</br>";
$countries = ["Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw"];
foreach ($countries as $key => $value) {
    echo "The capital of " . $key . " is " . $value . ".";
    echo "<br/>";
}



?>