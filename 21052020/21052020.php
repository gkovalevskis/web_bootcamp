<?php
        //go from string to array
        $cars_string = "Audi, BMW, Mazda, Volvo, Saab";
        $cars_array = explode(", ", $cars_string);
        echo "<br/>";
        var_dump($cars_string);
        echo "<br/>";
        echo "<br/>";
        var_dump($cars_array);
        echo "<br/>";
        echo "<br/>";
        //go from array to string
        $cars_back_to_string = implode(", ", $cars_array);
        var_dump($cars_back_to_string);
        echo "<br/>";
        echo "<br/>";
        //go together cars array and cars model
        $car_models = [["R8", "80"], "M5", "G9", "V40", ""];
        $cars_make_model = array_combine($cars_array, $car_models);
        var_dump($cars_make_model);
        echo "<br/>";
        echo "<br/>";
        var_dump($cars_make_model["Audi"]);
        echo "<br/>";
        echo "<br/>";
        var_dump($cars_make_model["Mazda"]);
        echo "<br/>";
        echo "<br/>";
        //insert in array value by key element
        $cars_make_model["Saab"] = "Turbo";
        var_dump($cars_make_model);
        echo "<br/>";
        echo "<br/>";
        $file = fopen("info.txt", "r");
        $content = explode("\n", fread($file, filesize("info.txt")));
        var_dump($content);
        fclose($file);

        $my_file = fopen("person.txt", "w");
        fwrite($my_file, "My name is Ģirts");
        fclose($my_file);

        $my_file = fopen("person.txt", "a");
        fwrite($my_file, "My name is Ēvalds");
        fclose($my_file);
        echo "<br/>";
        echo "<br/>";

        //Class task
        $info_keys = ["Name", "Surname", "Age", "Fav_Color"];
        $content_one = explode(" ", $content[0]);
        var_dump($content_one);
        echo "<br/>";
        echo "<br/>";
        $content_two = explode(" ", $content[1]);
        var_dump($content_two);
        echo "<br/>";
        echo "<br/>";
        $content_three = explode(" ", $content[2]);
        var_dump($content_three);
        echo "<br/>";
        echo "<br/>";
        $content_four = explode(" ", $content[3]);
        var_dump($content_four);
        echo "<br/>";
        echo "<br/>";
        $make_new_keys_array_one = array_combine($info_keys, $content_one);
        var_dump($make_new_keys_array_one);
        echo "<br/>";
        echo "<br/>";
        $make_new_keys_array_two = array_combine($info_keys, $content_two);
        var_dump($make_new_keys_array_two);
        echo "<br/>";
        echo "<br/>";
        $make_new_keys_array_three = array_combine($info_keys, $content_three);
        var_dump($make_new_keys_array_three);
        echo "<br/>";
        echo "<br/>";
        $make_new_keys_array_four = array_combine($info_keys, $content_four);
        var_dump($make_new_keys_array_four);
        echo "<br/>";
        echo "<br/>";
        $inserter = fopen("person_together.txt", "w");
        foreach($make_new_keys_array_one as $key => $value){
            fwrite($inserter, $key . ": " . $value . "\n");
        };
        fwrite($inserter, "\n");
        fwrite($inserter, "\n");
        foreach($make_new_keys_array_two as $key => $value){
            fwrite($inserter, $key . ": " . $value . "\n");
        };
        fwrite($inserter, "\n");
        fwrite($inserter, "\n");
        foreach($make_new_keys_array_three as $key => $value){
            fwrite($inserter, $key . ": " . $value . "\n");
        };
        fwrite($inserter, "\n");
        fwrite($inserter, "\n");
        foreach($make_new_keys_array_four as $key => $value){
            fwrite($inserter, $key . ": " . $value . "\n");
        };
        fclose($inserter);
?>