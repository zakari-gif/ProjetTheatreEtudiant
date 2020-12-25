<?php

	$titre = 'Liste des places associées au dossier 11 pour une catégorie donnée';
	include('entete.php');

	// affichage du formulaire
	echo ("
		<form action=\"SpectaclesDossier_v3_action.php\" method=\"POST\">
			<label for=\"inp_categorie\">Veuillez saisir une catégorie :</label>
			<input type=\"text\" name=\"categorie\" />
			<br /><br />
			<input type=\"submit\" value=\"Valider\" />
			<input type=\"reset\" value=\"Annuler\" />
		</form>
	");

	// travail à réaliser
	echo ("
		<p class=\"work\">
			Ajoutez une étape à cet enchaînement de scripts de façon à obtenir le fonctionnement suivant :
			<ul>
				<li><b>Etape 1 :</b> un formulaire nous demande de choisir un numéro de dossier dans une liste extraite de la base de données</li>
				<li><b>Etape 2 :</b> pour le numéro de dossier choisi, un formulaire nous demande de sélectionner une catégorie dans une liste qui ne contiendra que les catégories concernées par le numéro de dossier demandé</li>
				<li><b>Etape 3 :</b> affichage de la liste des places correspondant à la catégorie et au numéro de dossier sélectionnés</li>
			</ul>
		</p>
	");

	include('pied.php');

?>
