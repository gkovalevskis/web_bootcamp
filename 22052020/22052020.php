<?php 
 $file = fopen("info.txt", "r") or die("Unable to open file!");
 $content = explode("\n", fread($file, filesize("info.txt")));
 fclose($file);
 $array_keys = ["Name", "Surname", "Age", "Fav_color"];
 $people = [];
 echo "<h1>Content array: </h1></br>";
 var_dump($content);
 echo "</br>";
 $i = 0;
 foreach($content as $single_person_string){
     $single_person_array = explode(" ", $single_person_string);
     echo "<h1>Persone line: . $i . </h1></br>";
     var_dump($single_person_array);
     echo "</br>";
     $people[] = array_combine($array_keys, $single_person_array);
     $i++;
 }
 var_dump($people);//multidimensional array $x[[], [], [], []];
 $created_file = fopen("person_one.txt", "w");
 foreach($people as $person){
     echo "<h1>Person: </h1></br>";
     var_dump($person);
     echo "</br>";
     foreach($person as $key => $value){
        echo "<h1>Key + value: </h1></br>";
         var_dump($key . ": " . $value);
         echo "</br>";
         fwrite($created_file, $key . ": " . $value . "\n"); 
     }
     fwrite($created_file, "\n");
 }
 fclose($created_file);
?>