<? php
require_once( 'config.php' );
?>
<!DOCTYPE html >
<html >
<tête >
	<title > Enregistrement de l'utilisateur | PHP </ title >
	<link  rel = " stylesheet " type = " text / css " href = " css / bootstrap.min.css " >
</tête >
<corps >

<div >
	<? php

	?>	
</div >

<div >
	<form  action = " registration.php " method = " post " >
		<div  class = " container " >

			<div  class = " row " >
				<div  class = " col-sm-3 " >
					<h1 > Enregistrement </h1 >
					<p > Remplissez le formulaire avec les valeurs correctes. </p >
					<hr  class = " mb-3 ">
					<label  for = " firstname " > <b > Prénom </b > </label >
					<input  class = " form-control " id = " firstname " type = " text " name = " firstname " requis >

					<label  for = " lastname " > <b > Nom de famille </b > </label >
					<input  class = " form-control " id = " lastname "   type = " text " name = " lastname " requis >

					<label  for = " email " > <b > Adresse e-mail </b > </label >
					<input  class = " form-control " id = " email "   type = " email " name = " email " requis >

					<label  for = " phonenumber " > < b > Numéro de téléphone </b > </label >
					<input  class = " form-control " id = " phonenumber "   type = " text " name = " phonenumber " requis >

					<label  for = " password " > <b > Mot de passe </b > </label >
					<input  class = " form-control " id = " password "   type = " password " name = " password " requis >
					<hr  class = " mb-3 " >
					<input  class = " btn btn-primary " type = " submit " id = " register " name = " create " value = " Inscription " >
				</div >
			</div >
		</div >
	</form >
</div >
<script  src = " https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js " > </script >;
<script  src = " https://cdn.jsdelivr.net/npm/sweetalert2@8 " > </script>

	$(fonction ( ){
		$( '#register' ) . cliquez sur ( fonction ( e ) {

			var  valide  =  ceci . forme . checkValidity ( ) ;

			if ( valide ) {


			var firstname  	=  $( '#firstname' ).val ( ) ;
			var lastname 	=  $( '#lastname' ).val ( ) ;
			var email  		=  $( '#email' ).val ( ) ;
			var phonenumber  =  $( '#phonenumber' ).val ( ) ;
			var mot de passe  	= $( '#password' ).val ( ) ;


				e.preventDefault ( ) ;	

				$.ajax ( {
					tapez : 'POST' ,
					url : 'process.php' ,
					données : { prénom : prénom , nom : nom , email : email , numérodetéléphone : numéro de téléphone , mot de passe : mot de passe } ,
					succès : fonction ( données ) {
					Swal . feu ( {
								'title' : 'Réussi' ,
								'texte' : données ,
								'type' : 'succès'
								} )

					} ,
					erreur :fonction( données ) {
						Swal . feu( {
								'title' : 'Erreurs' ,
								'text' : 'Des erreurs se sont produites lors de l'enregistrement des données.' ,
								'type' : 'erreur'
								} )
					}
				} ) ;


			}else {

			}

		} ) ;		


	} ) ;

</script >
</corps >
</html > 