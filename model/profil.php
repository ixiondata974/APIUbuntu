<?php 
class profil 
{
	private $code_inscri;
	private $poid;
	private $taille;
	private $imc;
	private $age;

	public function __construct($code_inscri, $poid, $taille, $imc, $age){
		$this->code_inscri = $code_inscri;
		$this->poid = $poid;
		$this->taille = $taille;
		$this->imc = $imc;
		$this->age = $age;
	}

	public function creerProfil($conn){
		$creerProfil = 'INSERT INTO profil(code_inscri, poid, taille, IMC, age) VALUES (:code_inscri, :poid, :taille, :IMC, :age)';
		$SQLStmt = $conn->prepare($creerProfil);
		$SQLStmt->bindParam(':code_inscri', $this->code_inscri);
		$SQLStmt->bindParam(':poid', $this->poid);
		$SQLStmt->bindParam(':taille', $this->taille);
		$SQLStmt->bindParam(':IMC', $this->imc);
		$SQLStmt->bindParam(':age', $this->age);
		if (!$SQLStmt->execute()) {
			var_dump($SQLStmt->errorInfo());
		}
	}
}

 ?>