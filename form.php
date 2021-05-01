<!doctype html>
<html lang="en">
  <head>
    <title>FORMULAIRE</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

        <div>
            <form  action = " registration.php " method = " post " >
                <div  class = " container " >

                    <div  class = " row " >
                        <div  class = " col-sm-3 " >
                            <h1> Enregistrement </h1>
                            <p> Remplissez le formulaire avec les valeurs correctes. </p>
                            <hr  class = " mb-3 " >
                            <label  for = " firstname " > <b> Prénom </b> </label>
                            <input  class = " form-control " id = " firstname " type = " text " name = " firstname " requis >

                            <label  for = " lastname "> <b> Nom de famille </b> </label>
                            <input  class = " form-control " id = " lastname "   type = " text " name = " lastname " requis >

                            <label  for = " email "> <b> Adresse e-mail </b> </label>
                            <input  class = " form-control " id = " email "   type = " email " name = " email " requis >

                            <label  for = " phonenumber "> <b> Numéro de téléphone </b> </label>
                            <input  class = " form-control " id = " phonenumber "   type = " text " name = " phonenumber " requis >

                            <label  for = " password " > <b> Mot de passe </b> </label>
                            <input  class = " form-control " id = " password "   type = " password " name = " password " requis >
                            <hr  class = " mb-3 " >
                            <input  class = " btn btn-primary " type = " submit " id = " register " name = " create " value = " Inscription " >
                        </div>
                    </div>
                </div>
            </form>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


