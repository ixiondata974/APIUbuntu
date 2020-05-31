<?php

class Activite
{
	public  function insertActivite($conn, $activites){
		/*$LesActivites = json_decode($activites);
		$IDprofil = $LesActivites->{'Profil'};
		$code_acti = $LesActivites->{'activite'};
		$km = $LesActivites->{'km'};
		$heure = $LesActivites->{'heure'};
		$minute = $LesActivites->{'minute'};

		$Insert_acti = 'SELECT COALESCE (max(id),0)+1 as idTemp FROM temp_distance ';
		$SQLStmt = $conn->prepare($Insert_acti);
		$SQLStmt->execute();
		$Temp = $SQLStmt->fetch(PDO::FETCH_ASSOC);
	
		$SelectActi = 'INSERT INTO temp_distance(id,heure,minut,km) VALUES (:id,:heure,:minute,:km)';
		$SQLStmt = $conn->prepare($SelectActi);
		$SQLStmt->bindParam(':id',$Temp['idTemp']);
		$SQLStmt->bindParam(':heure',$heure);
		$SQLStmt->bindParam(':minute',$minute);
		$SQLStmt->bindParam(':km',$km);
		if (!$SQLStmt->execute()) {
			var_dump($SQLStmt->errorInfo());
		}

		$InsertActi = 'INSERT INTO profil_activite(Cprofil,code_acti,code_temp) VALUES(:profilID,:code_acti,:code_temp)';
		$SQLStmt = $conn->prepare($InsertActi);
		$SQLStmt->bindParam(':profilID',$IDprofil);
		$SQLStmt->bindParam(':code_acti',$code_acti);
		$SQLStmt->bindParam(':code_temp',$Temp['idTemp']);
		if (!$SQLStmt->execute()) {
			var_dump($SQLStmt->errorInfo());
		}*/
	}
}
?>