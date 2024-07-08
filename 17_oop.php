<?php
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

// Class
class User
{
    // Properties are attributes that belong to a class

    // Access Modifiers: public, private, protected
    // public - can be accessed from anywhere
    // private - can only be accessed from inside the class
    // protected - can only be accessed from inside the class and by inheriting classes
    public $name;
    public $email;
    public $password;

    // Constructor - method that runs when an object in created
    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    // Method is a function that belong to a class
    function set_name($name)
    {
        $this->name = $name;
    }

    // getter
    function get_name()
    {
        return $this->name;
    }
}


// Instantiate User object
$user1 = new User("Vlahd", "vlahd@gmail.com", "vlahd123");
$user2 = new User("Shar", "shar@gmail.com", "shar123");

// $user1->name = "Vlahd";
// $user1->email = "vlahd@gmail.com";
// $user1->password = "vlahd123";

$user2->set_name("Shar");


echo $user1->get_name();
echo $user2->get_name();

echo $user1->name;
echo "<br></br>";
var_dump($user1);
echo "<br></br>";
var_dump($user2);
echo "<br></br>";


// Inheritance

class Employee extends User
{
    private $title;
    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    public function get_title()
    {
        return $this->title;
    }
}


$employee1 = new Employee("Sarah", "sarah@gmail.com", "sarag", "Singer");
echo $employee1->get_title();
