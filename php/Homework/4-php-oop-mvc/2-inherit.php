<?php
echo "<a href=\"./\">BACK</a>";
/* 1. --- CLASS ---
 *
 *
 */
echo "<h1>1. CLASS</h1>";
/*
 * EXERCISE 1 : Create parent class and extends it by children class.
 *
 */
/*
 * SUGGESTION :
class Hero
{
protected $name;
public function __construct($name = "Undefined")
{
echo "Start of class<br>";
$this->name = $name;
}
public function setName($name)
{
$this->name = $name;
return $this;
}
public function getName()
{
return $this->name;
}
public function display()
{
echo $this->name;
}
public function __destruct()
{
echo "<br>End of class";
}
}
class Antimage extends Hero
{
public function __construct()
{
parent::__construct("ANTIMAGE");
}
public function setName($name)
{
echo "You can not setName is $name for this hero.<br>";
return $this;
}
}
$nam = new Antimage();
$nam->setName("ABC")->display();
 */
echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";

class Employees{
    protected $name;
    public function __construct($name = "Undefined"){
        $this->name = $name;
    }
    public function set_name($name){
        $this->name = $name;
        return $this;
    }    
    public function get_name(){
        return $this->name;
    }  
    public function display(){
        echo $this->name . "<br>";
    }
    public function __destruct(){
        echo "End of class.";
    }
}
class Salary extends Employees{
    public function __construct()
    {
        parent::__construct("SALARY");
    }
    public function set_name($name){
        echo "Salary of $name <br>";
        return $this;
    }
}
$salary = new Salary();
$salary->set_name("Mai")->display();
?>