<?PHP
include "../core/employeC.php";
$employeC=new CommandeC();
if (isset($_POST["reference"])){
	$employeC->supprimerEmploye($_POST["reference"]);
	header('Location: panier.php');
}

?>