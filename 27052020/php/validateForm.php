<?php
    if (isset($_POST['submit']) && $_POST['submit'] == "SUBMIT!"){
        $fullName = test_input($_POST['fullName']);
        $age = test_input($_POST['age']);
        $email = test_input($_POST['email']);
        if(empty($fullName) || empty($age) || empty($email)){
            header("Location: http://".$_SERVER['HTTP_HOST']."/newproject/27052020"); 
        }
        else{
            $fullNameArray = explode(" ", $_POST['fullName']);
            $name = $fullNameArray[0];
            $surname = $fullNameArray[1];
            class PersonData {
                public $name;
                public $surname;
                public $age;
                public $email;

                public function __construct($name, $surname, $age, $email){
                    $this->name = $name;
                    $this->surname = $surname;
                    $this->age = $age;
                    $this->email = $email;
                }
                public function displayPersonData(){
                    echo $this->name . " " . $this->surname . " " . $this->age . " " . $this->email;
                }
                public function getName(){
                    if($this->name!=""){
                        return $this->name;
                    }
                }
                public function getSurname(){
                    if($this->surname!=""){
                        return $this->surname;
                    }
                }
                public function getAge(){
                    if($this->age!=""){
                        return $this->age;
                    }
                }
                public function getEmail(){
                    if($this->email!=""){
                        return $this->email;
                    }
                }
                public function setName($newName){
                    $this->name = $newName;
                }
                public function setSurame($newSurame){
                    $this->surname = $newSurame;
                }
                public function setAge($newAge){
                    $this->age = $newAge;
                }
                public function setEmail($newEmail){
                    $this->email = $newEmail;
                }
                public function insertDataToFile(){
                    $submitArray = [$this->name, $this->surname, $this ->age, $this->email];
                    $keys = ["Name", "Surname", "Age", "E-mail"];
                    $together[] = array_combine($keys, $submitArray);
                    $createdFile = fopen("person_data.txt", "a");
                    foreach($together as $keyValue){
                        foreach($keyValue as $key => $value){
                            fwrite($createdFile, $key . ": " . $value . "\n"); 
                        }
                        fwrite($createdFile, "\n");
                    }
                    fclose($createdFile);
                }
                public function getValueFromFile(){
                    $file = fopen("person_data.txt", "r") or die("Unable to open file!");
                    $content = fread($file, filesize("person_data.txt"));
                    fclose($file);
                }
            }
            $person = new PersonData($name, $surname, $_POST['age'], $_POST['email']);
            $person->insertDataToFile();
            //header("Location: http://".$_SERVER['HTTP_HOST']."/newproject/27052020/public/submit_success.php"); 
        }
    }
    function test_input($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>