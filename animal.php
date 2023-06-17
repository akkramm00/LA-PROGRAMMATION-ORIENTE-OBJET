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
	public function aboie(){
		echo("Wouf");
	}
}
namespace chat;
class Chat extends \animal\animal{
	public function miaule(){
		echo("Miaou");
	}
}
namespace main;
$monChien = new \chien\Chien();
$monChat = new \chat\Chat();
$monChien->aboie();
$monChat->miaule();

?>
