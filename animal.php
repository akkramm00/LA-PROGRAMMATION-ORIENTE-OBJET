<?php 
namespace animal;
class Animal{
	protected string $nom;
	
	public function getNom(){
		return $this->nom;
	}
	
	public function setNom(string $nom = null){
		$this->nom = $nom;
	}
	public function dort(){
		echo("zzz");
	}
}
namespace chien;
class Chien extends \animal\animal{
}
namespace chat;
namespace main;
$monChien = new \chien\Chien();
$monChien->dort();

?>