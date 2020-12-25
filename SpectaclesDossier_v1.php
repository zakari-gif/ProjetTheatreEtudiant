<?php

	$titre = 'Liste des places associées au dossier 11 pour une catégorie donnée';
	include('entete.php');

	// affichage du formulaire
	echo ("
		<form action=\"SpectaclesDossier_v1_action.php\" method=\"POST\">
			<label for=\"inp_categorie\">Veuillez saisir une catégorie :</label>
			<input type=\"radio\" name=\"categorie1\" value=\"1er balcon\" [checked]>1er balcon</imput>
			<input type=\"radio\" name=\"categorie2\" value=\"2nd balcon\" [checked]>2nd balcon</imput>
			<input type=\"radio\" name=\"categorie3\" value=\"orchestre\" [checked]>orchestre</imput>
			<input type=\"radio\" name=\"categorie4\" value=\"poulailler\" [checked]>poulailler</imput>
			<br /><br />
			<input type=\"submit\" value=\"Valider\" />
			<input type=\"reset\" value=\"Annuler\" />
		</form>
	");

	// travail à réaliser
	echo ("
		<p class=\"work\">
			Améliorez l'interface utilisateur en proposant, à la place du champ de saisie libre, un choix de catégorie dans une liste contenant toutes les catégories (sous forme de boite de sélection ou de boutons radio).<br />Cette liste sera codée \"en dur\".
		</p>
	");

	include('pied.php');

?>
