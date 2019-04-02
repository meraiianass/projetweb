<?PHP
class Commande{
	private $reference;
	private $nom;
	private $mail;
	private $telephone;
	private $date;
	private $adresse;


	function __construct($reference,$nom,$mail,$telephone,$date,$adresse){
		$this->reference=$reference;
		$this->nom=$nom;
		$this->mail=$mail;
		$this->telephone=$telephone;
		$this->date=$date;
		$this->adresse=$adresse;
	}
	
	function getreference(){
		return $this->reference;
	}
	function getNom(){
		return $this->nom;
	}
	function getmail(){
		return $this->mail;
	}
	function gettelephone(){
		return $this->telephone;
	}
	function getdate(){
		return $this->date;
	}
	function getadresse(){
		return $this->adresse;
	}

	function setNom($nom){
		$this->nom=$nom;
	}
	function setmail($mail){
		$this->mail=$mail;
	}
	function settelephone($telephone){
		$this->telephone=$telephone;
	}
	function setadresse($adresse){
		$this->adresse=$adresse;
	}
	function setreference($reference){
		$this->reference=$reference;
	}
	function setdate($date){
		$this->date=$date;
	}
	
}

?>