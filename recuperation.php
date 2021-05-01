<?php
	require_once('config.php');
?>
if( isset ( $_POST )){

		$firstname  		= $_POST [ 'firstname' ];
		$lastname  		    = $_POST [ 'nom de famille' ];
		$email  			= $_POST [ 'email' ];
		$numérodetéléphone 	= $_POST [ 'numéro de téléphone' ];
		$motdepasse  		= sha1 ( $_POST [ 'mot de passe' ]);

		$sql = "INSERT INTO users (prénom, nom, email, numéro de téléphone, mot de passe) VALUES (?,?,?,?,?)" ;
		$stmtinsert = $db -> prepare ( $sql );
		$result = $stmtinsert -> execute ([ $firstname , $lastname , $email , $phonenumber , $password ]);
		if ( $result ) {
			echo  'Sauvegardé avec succès.' ;
		} else {
			echo  'Il y a eu des erreurs lors de l'enregistrement des données.';
		}
}else{
	echo'les données sont valide'
}
} 