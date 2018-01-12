<?php
	$bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', '');
	$resultat=$bdd->query("SELECT * FROM commission");

	$resultat->setFetchMode(PDO::FETCH_ASSOC);

	foreach ($resultat as $data)

	{
	echo '<option>'.$data['description'].'</option>';

	}
?>