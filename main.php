<?php

echo"
---class---
";
//class

class Fruit{
    public $name;
    public $color;

    function introduce(){
        return $this->name . " - " . $this->color;
    }
}

$apple = new Fruit();
$apple->name = "Apel";
$apple->color = "Merah";

echo $apple->introduce();

echo "
----encapsulation-----
";

//encapsulation (u/ menutupi properti supaya diluar kelas tidak bisa akses memakai seter & geter)
class Animal{
    private $nama;
    private $species;

    function food(){
        return $this->nama . " - " . $this->species;
    }

    function set_nama($nama){
        $this->nama =$nama;
    }

    function get_nama(){
        return $this->nama;
    }

    function set_species($species){
        $this->species =$species;
    }

    function get_species(){
        return $this->species;
    }
}

$cat = new Animal();
$cat->set_nama ("Koceng");
$cat->set_species ("Karnivora");

echo $cat->get_nama();
echo $cat->get_species();

echo "
----constructor-----
";

//constructor (function special u/ inisialisasi property)
class Cats{
    private $hairy;
    private $category;
    private $character;
    private $gender;

    function __construct($hairy, $category, $character, $gender){
        $this->hairy = $hairy;
        $this->category = $category;
        $this->character = $character;
        $this->gender = $gender;
    }

    function anabul(){
        return $this->hairy ."-". $this->category ."-". $this->character ."-". $this->gender;
    }
}

$mueza = new Cats("medium", "persia", "cute", "female");
echo $mueza->anabul();

echo "
----inhiretance----
";

//inhiretance (ada cllas child yang mengikuti class parent)
class Vehicle{
    private $merek;
    private $color;

    function __construct($merek, $color){
        $this->merek =$merek;
        $this->color =$color;
    }

    function greet(){
        return "hello, my car ". $this->merek ." with color ". $this->color;
    }
}


class Car extends Vehicle{

}

$car = new Car("pajero", "white");
echo $car->greet();

echo"
----polymorphism----
";
//polymorphism(lebih dari satu bentuk)
//terdiri dari overloading(nama sama parameter beda tp php ga support) and overriding(konsep dimana class child bisa override dari class parent)
class Vehicles{
    private $merek;
    private $color;

    function __construct($merek, $color){
        $this->merek =$merek;
        $this->color =$color;
    }

    function greet(){
        return "hello, my car ". $this->merek ." with color ". $this->color;
    }
}
//ada 2 pemanggilan function greet
//maka yang akan berhasil adalah yang function di dlm child
class Cars extends Vehicles{
    function greet (){
    return 
        "hi i am liya";
    }
};

$car = new Cars("pajero", "white");
echo $car->greet();


?>