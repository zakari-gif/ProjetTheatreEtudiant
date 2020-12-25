<?php

	// récupération des variables
	$nomS= $_POST['nomS'];

	$titre = "Representation sans place Reservée $nomS";
	include('entete.php');

	// construction de la requete
	$requete = ("
		SELECT NOSPEC,DATEREP
		FROM theatre.LesRepresentations 
		where NOSPEC not in (select distinct NOSPEC from theatre.Lestickets) and DATEREP not in ( select distinct DATEREP from
		theatre.Lestickets)
	");

	// analyse de la requete et association au curseur
	$curseur = oci_parse ($lien, $requete) ;

	// affectation de la variable
	oci_bind_by_name ($curseur,':n', $nomS);

	// execution de la requete
	$ok = @oci_execute ($curseur);

	// on teste $ok pour voir si oci_execute s'est bien passé
	if (!$ok) {

		// oci_execute a échoué, on affiche l'erreur
		$error_message = oci_error($curseur);
		echo "<p class=\"erreur\">{$error_message['message']}</p>";

	}
	else {

		// oci_execute a réussi, on fetch sur le premier résultat
		$res = oci_fetch ($curseur);

		if (!$res) {

			// il n'y a aucun résultat
			echo "<p class=\"erreur\"><b>Ticket inconnu</b></p>" ;

		}
		else {

			// on affiche la table qui va servir a la mise en page du resultat
			echo "<table><tr><th>NOSPEC</th><th>DATEREP</th></tr>" ;

			// on affiche un résultat et on passe au suivant s'il existe
			do {

				$NOSPEC = oci_result($curseur, 1) ;
				$DATEREP = oci_result($curseur, 2);			
				echo "<tr><td>$NOSPEC</td><td>$DATEREP</td></tr>";

			} while (oci_fetch ($curseur));

			echo "</table>";
		}

	}

	// on libère le curseur
	oci_free_statement($curseur);

	include('pied.php');

?>
