<?php
try {
	$bdd = new PDO('mysql:host=localhost;dbname=webavance; charset=utf8',"root","");
} catch (Exception $e) {
	die("Erreur:".$e->getMessage());
	
}


$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$genre = $_POST["civilite"];
$ville = $_POST["ville"];
$date = $_POST["date"];

 
try {

$req = $bdd->prepare('
INSERT INTO Etudiant(nom,prenom,datenai,ville,genre) VALUES(:nom, :prenom, :genre, :ville, :datenai)
');
$req->execute(array(
'nom' => $nom,
'prenom' => $prenom,
'datenai' => $date,
'ville' => $ville,
'genre' => $genre
));
echo "L'etudiant a été ajouté";
} catch (Exception $e) {
	die("Erreur:".$e->getMessage());
}

/*
try{
	$req = $bdd->prepare('
SELECT * FROM Etudiant LIMIT 0,10 
');
$req->execute();

}
//TODO
*/







?>