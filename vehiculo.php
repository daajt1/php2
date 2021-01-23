<?php
class Vehicle
{
	private $owner;
	
	public function __construct ($ownerName) {
		$this->owner=$ownerName;
		echo 'construct <br>';
	}
	
	public function move() {
		echo 'moving<br>';
	}
	public function getOwner() {
		return $this->owner;
	}
	public function setOwner ($owner){
		$this->owner = $owner; 
	}

} // Aqui es donde te falta el {

class Car extends Vehicle{
	public function move(){
		echo'Car:  moving<br>';
	}
}

class truck extends Vehicle{
	public function move(){
		echo'Truck:  moving<br>';
    }
}


echo'Class Car<br>';
$car = new Car ('bob');
$car ->move();
echo'owner car: ' . $car->getOwner() . '<br>';
 
echo'Class truck <br>';
$truck = new truck ('max');
$truck ->move();
echo'owner truck: ' . $truck->getOwner(); 

?>