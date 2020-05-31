<?php
/**
 * 
 */
class inscription
{
	private $nom;
	private $prenom;
	private $username;
	private $mdp;
	private $email;

	public function __construct($nom, $prenom, $username, $mdp, $email)
	{
		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->username = $username;
		$this->mdp = $mdp;
		$this->email = $email;
	}

	public function inscri($conn){
		$insert = 'INSERT INTO inscription(nom,prenom,username,mdp,email) VALUES (:nom,:prenom,:username,:mdp,:email)';
		$SQLStmnt = $conn->prepare($insert);
		$SQLStmnt->bindParam(':nom',$this->nom);
		$SQLStmnt->bindParam(':prenom',$this->prenom);
		$SQLStmnt->bindParam(':username',$this->username);
		$SQLStmnt->bindParam(':mdp',$this->mdp);
		$SQLStmnt->bindParam(':email',$this->email);
		if (!$SQLStmt->execute()) {
			var_dump($SQLStmt->errorInfo());
		}
	}

	public function getNom(){
		return $this->nom;
	}
}
?>