<?php
class FormValidation{
    //properties
    public $firstname;
    public $surname;
    public $age;
    public $username;
    public $email;

    //methods
    public function __construct($firstname, $surname, $age, $username, $email){
        $this->firstname = $firstname;
        $this->surname = $surname;
        $this->age = $age;
        $this->username = $username;
        $this->email = $email;
    }   
    public function writeToFile(){
        $file = fopen('person_data.txt', 'a');
        $data = $this->firstname . " " . $this->surname . " " . $this->age  . " " . $this->username  . " " . $this->email;
        fwrite($file, $data);
        fclose($file);
    }
    public function readFromFile(int $key){
        $file = fopen('person_data.txt', "r");
        $content = explode(" ", fread($file, filesize('person_data.txt')));
        return $content[$key];
    }
}
$firstname = test_input($_POST['firstname']);
$surname = test_input($_POST['surname']);
$age = test_input($_POST['age']);
$username = test_input($_POST['username']);
$email = test_input($_POST['email']);

$person = new FormValidation($firstname, $surname, $age, $username, $email);
$person->writeToFile();
$person->readFromFile(1);

function test_input($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>