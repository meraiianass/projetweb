<?PHP
include "../config.php";
class CommandeC {
function afficherEmploye ($commande){
		echo "Reference: ".$commande->getreference()."<br>";
		echo "Nom: ".$commande->getNom()."<br>";
		echo "Mail: ".$commande->getmail()."<br>";
		echo "Telephone: ".$commande->gettelephone()."<br>";
		echo "Date: ".$commande->getdate()."<br>";
		echo "Adresse: ".$commande->getadresse()."<br>";
	}
	
	
	function ajouterEmploye($commande){
		$sql="insert into commande (reference,nom,mail,telephone,date,adresse) values (:reference, :nom,:mail,:telephone,:date,:adresse)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $reference=$commande->getreference();
        $nom=$commande->getNom();
        $mail=$commande->getmail();
        $telephone=$commande->gettelephone();
        $date=$commande->getdate();
        $adresse=$commande->getadresse();

		$req->bindValue(':reference',$reference);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':telephone',$telephone);
		$req->bindValue(':date',$date);
		$req->bindValue(':adresse',$adresse);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherEmployes(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From commande";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerEmploye($reference){
		$sql="DELETE FROM commande where reference= :reference";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':reference',$reference);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierEmploye($commande,$reference){
		$sql="UPDATE commande SET reference=:referencee, nom=:nom,mail=:mail,telephone=:telephone,date=:date,adresse=:adresse WHERE reference=:reference";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$referencee=$commande->getreference();
        $nom=$commande->getNom();
        $mail=$commande->getmail();
        $telephone=$commande->gettelephone();
        $date=$commande->getdate();
        $adresse=$commande->getadresse();

		$datas = array(':referencee'=>$referencee, ':reference'=>$reference, ':nom'=>$nom,':mail'=>$mail,':telephone'=>$telephone,':date'=>$date,':adresse'=>$adresse);
		$req->bindValue(':referencee',$referencee);
		$req->bindValue(':reference',$reference);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':telephone',$telephone);
		$req->bindValue(':date',$date);
		$req->bindValue(':adresse',$adresse);

		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererEmploye($reference){
		$sql="SELECT * from commande where reference=$reference";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeEmployes($tarif){
		$sql="SELECT * from employe where tarifHoraire=$tarif";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>