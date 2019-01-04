<?php

class NewClass{

    //Properties and Methods goes here
    public $data = "I am a property";
    public $error = "This is the class called " . __CLASS__ . "!";
    
    public function __construct () {
        echo "This class has been instantiated!"."<br>";
    }

    public function __toString() {
        echo "toString method: ";
        return $this->error;
    }

    public function setNewProperty($newData) {
        $this->data = $newData;
    }

    public function getProperty() {
        return $this->data;
    }

    public function __destruct () {
        echo "<br>"."This is the end of the class!";
    }

}