<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Yada yada yada</h1>
    <?php
        // This is a comment!
        # This is also a comment!
        /*
        My multiline comment!
        */
        echo "<h1>Hello world!</h1>" ;
        $myName = "Pēteris";
        $mySurname = "Rautmanis";
        $mans_cipars = 10;
        $mansOtrsCipars = 10.5;
        $array = ["Pēteris", "Rautmanis", 10, 22];
      
        $result00 = $mans_cipars + $mansOtrsCipars;
        $result01 = $myName . " " . $mySurname;
        $result02 = $array[2];
      
        echo "<h1>This is some text.</h1></br>";
        echo $result00;
        echo "<br/>";
        print $result01;
        echo "<br/>";
        print "My favourite number is: " . $result02;
        echo "<br/>";
        print_r($array);
        echo "<br/>";
        var_dump($array);
        echo "<br/>";
        var_dump($result00);
        echo "<br/>"; 
        echo "<br/>";
        echo "<br/>"; 
        echo "<br/>";
        $personName = "Ģirts";
        var_dump($personName);
        echo "<br/>";
        $personAge = 45;
        var_dump($personAge);
        echo "<br/>";
        $personHeight = 1.83;
        var_dump($personHeight);
        echo "<br/>";
        $isMale = true;
        var_dump($isMale);
        echo "<br/>";
        $cars = ['Audi', 'Škoda', 'Lada'];
        var_dump($cars);
        echo "<br/>";
        var_dump(NULL);
        echo "<br/>";
        $personName = "Koļa";
        var_dump($personName);
        echo "<br/>";
        echo strlen($personName);
        echo "<br/>";
        echo str_word_count("This is my sentence");
        echo "<br/>";
        echo strrev("This is my sentence");
        echo "<br/>";
        echo strpos("This is my lovely sentence", "lovely");
        echo "<br/>";
        echo str_replace("my", "your", "This is my lovely sentence");
        echo "<br/>";
        echo "<br/>";
        echo "<br/>";
        var_dump($personAge);
        echo "<br/>";
        var_dump($personHeight);
        echo "<br/>";
        var_dump(is_int($personAge));
        echo "<br/>";
        var_dump(is_int($personName));
        echo "<br/>";
        var_dump(is_float($personHeight));
        echo "<br/>";
        var_dump(is_string($personName));
        echo "<br/>";
        $x = (int)123.456;
        echo $x;
        echo "<br/>";
        $y = (int)"12345.789";
        echo $y;
        echo "<br/>";
        echo "<br/>";
        echo "<br/>";
        echo "<br/>";
        echo "<br/>";
        $z = 1234.5678;
        echo floor($z);
        echo "<br/>";
        echo ceil($z);
        echo "<br/>";
        echo pi();
        echo "<br/>";
        echo sqrt(81);
        echo "<br/>";
        print round(0.60);
        echo "<br/>";
        print round(0.49);
        echo "<br/>";
        echo rand();
        echo "<br/>";
        echo rand(0, 100);
        echo "<br/>";
        define("NAME", "Pēteris Rautmanis");//constant
        echo NAME;
        echo "<br/>";
        echo 3 ** 3;
        echo "<br/>";
        $myCars = ["BMW", "Volvo", "Mazda", "Škoda"];
        foreach($myCars as $car){
            echo $car . "<br/>";
        }
        var_dump($myCars);
        echo "<br/>";
        echo "<br/>";
        echo "<br/>";
        echo "<br/>";
        $persons = ["Peteris"=>"22", "Olafs"=>"37", "Jogita"=>"23"];
        foreach($persons as $key => $value){
            echo $key . " is " . $value . " years old<br/>";
        };
        echo $persons["Peteris"];
        echo "<br/>";
        echo "<br/>";
        echo "<br/>";
        echo "<br/>";
        echo "<br/>";
        echo "<br/>";
        function myFunction (){
            echo "Hello world!";
        }
        myFunction();
        echo "<br/>";
        function myNumbers($n1, $n2){
            echo $n1 + $n2;
        }
        myNumbers(300, 22);
        echo "<br/>";
        echo "<br/>";
        echo count($myCars);
        echo "<br/>";
        echo "<br/>";
        echo "<br/>";
        $myGarage = [
            ['Volvo', 18],
            ['Audi', 2],
            ['Land Rover', 1]
        ];
        echo $myGarage[2][0];
        echo "<br/>";
        sort($myCars);
        print_r($myCars);
        echo "<br/>";
        rsort($myCars);
        print_r($myCars);
        echo "<br/>";
        asort($persons);
        print_r($persons);
    ?>
</body>
</html>