<?PHP
include "../entities/employe.php";
include "../core/employeC.php";

if (isset($_POST['reference']) and isset($_POST['nom']) and isset($_POST['mail']) and isset($_POST['telephone']) and isset($_POST['date']) and isset($_POST['adresse'])){
$employe1=new commande($_POST['reference'],$_POST['nom'],$_POST['mail'],$_POST['telephone'],$_POST['date'],$_POST['adresse']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$employe1C=new CommandeC();
$employe1C->ajouterEmploye($employe1);
header('Location: panier.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>