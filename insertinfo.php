<?php
	//on récupère les variables issue du formulaire
	$TRNDTE=$_GET['TRNDTE'];
	$CHFID=$_GET['CHFID'];
	$VEHIMMAT=$_GET['VEHIMMAT'];
	$TRNARCHAUFFEUR=$_GET['TRNARCHAUFFEUR'];
	$Heures=$_GET['Heures'];
	$TRNARCHAUFFEUR=$TRNARCHAUFFEUR." ".$Heures;
	$TRNCOMMENTAIRE=$_GET['TRNCOMMENTAIRE'];
	//supprime les blancs devant et derrière la chaine
	$TRNDTE=trim($TRNDTE);
	$CHFID=trim($CHFID);
	$VEHIMMAT=trim($VEHIMMAT);
	
	include 'connectAD.php';
	$sql="SELECT * FROM tournee;";
	$cptTournee = compteSQL($sql);	
	$TRNNUM = $cptTournee+1;
	
	if (empty($date)) {
		$sql = "INSERT INTO tournee (TRNNUM, TRNDTE, CHFID, VEHIMMAT, TRNARCHAUFFEUR, TRNCOMMENTAIRE) VALUES ('$TRNNUM', '$TRNDTE', '$CHFID', '$VEHIMMAT', '$TRNARCHAUFFEUR', '$TRNCOMMENTAIRE');";
		$result = executeSQL($sql);
		
		if ($result)
			echo "<meta http-equiv='refresh' content='0;url=Organiser_les_tournees.php?message=<font color=green> Ajout realise </font>'>";
		else
			echo "<meta http-equiv='refresh' content='0;url=Organiser_les_tournees.php?message=<font color=red> Probleme d'insertion... </font>'>";
		
	} else 
		echo "<meta http-equiv='refresh' content='0;url=Organiser_les_tournees.php?message=<font color=red> Vous ne devez pas mettre d espace... </font>'>"
	
?>
