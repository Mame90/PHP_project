<?php
        $servername ="localhost";
        $username = "root";
        $password = "";
        $dbname = "univert";
    
        $conn = new mysqli($servername, $username, $password, $dbname);
        if($conn->connect_error)
        {
            die ("Erreur de connexion au server".$conn->connect_error);
        }
        
            if(isset($_POST['enregistrer']))
            { 
            $matricule = $_POST['matricule'];
            $prenom = $_POST['prenom'];
            $nom = $_POST['nom'];
            $date_lieu = $_POST['naissance'];
            $adresse = $_POST['adresse'];
            $telephone = $_POST['tel'];
            $email = $_POST['Email'];
            
            $situation_matri = $_POST['matri'];
            $genre = $_POST['genre'];
            $statut = $_POST['statut'];
            $fonction = $_POST['fonctions'];
            $salaire = $_POST['salaire'];
            
            $date_entree = $_POST['debut'];
            
            $presence = $_POST['presence'];
           
            $cv = $_FILES['cv']['name'];
            $destination1 = "cv/".$cv;
            move_uploaded_file($_FILES['cv']['tmp_name'], $destination1);
            $photo = $_FILES['photo']['name'];
            $destination2 = "picture/".$photo;
            move_uploaded_file($_FILES['photo']['tmp_name'], $destination2);
               
            $sql = "INSERT INTO employes (matricule, prenom, nom, date_lieu_naissance, adresse, tel, email, situation_matri, 
            genre, statut,  fonction, salaire, date_entree, presence, cv, photo) 
            VALUE('$matricule', '$prenom', '$nom', '$date_lieu', '$adresse', $telephone, '$email', '$situation_matri', 
            '$genre', '$statut', '$fonction', $salaire, '$date_entree', '$presence', '$cv', '$photo')";
                
            if($conn->query($sql) === TRUE)
            {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Enregistrement effectué avec succès !
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
            }
            else
            {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  Erreur d enregistrement veillez vérifier vos informations svp !
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
            }
           } 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Formulaire!</title>
    <link rel="stylesheet" href="forme.css">
  </head>
  <body style="background-image: url(image/6xkKnj.png);">
      <!-- Debut navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="image/logo.png" alt="" style ="width: 200px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="formulaire.php">Enregistrement</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Employés
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="affichage.php">Liste des employes</a></li>
                            <li><a class="dropdown-item" href="archive.php">Employés Archivés</a></li>
                            <li><hr class="dropdown-divider"></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="employes.php">Congés</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="annonce.php">Annonces</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="recrutement.php">Recrutements</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
     <!-- Fin navbar -->
     <!-- Debut form -->
     <center><h1 style="margin-top: 20px;" id="h1">Enregistrement des Employés</h1></center>
     <p></p>
     <div class="container-sm"  style="margin-top: 70px";>
    <form class="row g-3 needs-validation"  method="POST" enctype="multipart/form-data">
    <div class="col-md-3">
            <label for="validationCustom01" class="form-label"><strong>Matricule</strong><span style="color: red;"> *</span></label>
            <input type="text" class="form-control" id="validationCustom01" name="matricule" required autocomplete="off">
            <div class="invalid-feedback">
                Veillez saisir le Matricule
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationCustom01" class="form-label"><strong>Prenom</strong><span style="color: red;"> *</span></label>
            <input type="text" class="form-control" id="validationCustom01" name="prenom" required autocomplete="off">
            <div class="invalid-feedback">
                Veillez saisir le prenom
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationCustom02" class="form-label"><strong>Nom</strong><span style="color: red;"> *</span></label>
            <input type="text" class="form-control" id="validationCustom02" name="nom" required autocomplete="off">
            <div class="invalid-feedback">
            Veillez saisir le nom
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationCustomUsername" class="form-label"><strong>Date & lieu de naissance</strong><span style="color: red;"> *</span></label>
            <input type="text" class="form-control" id="validationCustomUsername" name="naissance" required autocomplete="off">
            <div class="invalid-feedback">
            Veillez saisir la date et lieu de naissance
            </div>
            
        </div>
        <div class="col-md-3">
            <label for="validationCustom03" class="form-label"><strong>Adresse</strong><span style="color: red;"> *</span></label>
            <input type="text" class="form-control" id="validationCustom03" name="adresse" required autocomplete="off">
            <div class="invalid-feedback">
            Veillez saisir l'Adresse
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationCustom03" class="form-label"><strong>Telephone</strong><span style="color: red;"> *</span></label>
            <input type="number" class="form-control" id="validationCustom03" name="tel" required autocomplete="off">
            <div class="invalid-feedback">
            Veillez saisir le numero de telephone
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationCustom05" class="form-label"><strong>Email</strong><span style="color: red;"> *</span></label>
            <input type="email" class="form-control" id="validationCustom05" name="Email" required autocomplete="off">
            <div class="invalid-feedback">
            Veillez saisir l'Email
            </div>
        </div>
        
        <div class="col-md-3">
            <label for="validationCustom04" class="form-label"><strong>Situation matrimoniale</strong><span style="color: red;"> *</span></label>
            <select class="form-select" id="validationCustom04" name="matri" required autocomplete="off">
                <option selected disabled value="">Choisir</option>
                <option>Marié</option>
                <option>Célibataire</option>
                <option>Divorcé</option>
            </select>
            <div class="invalid-feedback">
            Veillez selectionner une option
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationCustom04" class="form-label"><strong>Genre</strong><span style="color: red;"> *</span></label>
            <select class="form-select" id="validationCustom04" name="genre" required autocomplete="off">
                <option selected disabled value="">Choisir</option>
                <option>Homme</option>
                <option>Femme</option>
            </select>
            <div class="invalid-feedback">
            Veillez selectionner une option
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationCustom04" class="form-label"><strong>Statut</strong><span style="color: red;"> *</span></label>
            <select class="form-select" id="validationCustom04" name="statut" required autocomplete="off">
                <option selected disabled value="">Choisir</option>
                <option>Cadre</option>
                <option>Agent</option>
                <option>Stagiaire</option>
            </select>
            <div class="invalid-feedback">
            Veillez selectionner une option
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationCustom04" class="form-label"><strong>Fonction</strong><span style="color: red;"> *</span></label>
            <select class="form-select" id="validationCustom04" name="fonctions" required autocomplete="off">
                <option selected disabled value="">Choisir</option>
                <option>Admin reseax</option>
                <option>Comptable</option>
                <option>Cecretaire</option>
                <option>Chaufereur</option>
                <option>Maitenancier</option>
            </select>
            <div class="invalid-feedback">
            Veillez selectionner une option
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationCustom05" class="form-label"><strong>Salaire</strong><span style="color: red;"> *</span></label>
            <input type="number" class="form-control" id="validationCustom05" name="salaire" required autocomplete="off">
            <div class="invalid-feedback">
            Veillez saisir le salaire
            </div>
        </div>
        
        <div class="col-md-3">
            <label for="validationCustom05" class="form-label"><strong>Date d'entrée</strong><span style="color: red;"> *</span></label>
            <input type="date" class="form-control" id="validationCustom05" name="debut" required autocomplete="off">
            <div class="invalid-feedback">
            Veillez saisir la date d'entrée
            </div>
        </div>
        
        <div class="col-md-3">
            <label for="validationCustom04" class="form-label"><strong>Presence</strong><span style="color: red;"> *</span></label>
            <select class="form-select" id="validationCustom04" name="presence" required autocomplete="off">
                <option selected disabled value="">Choisir</option>
                <option>En vaccance</option>
                <option>Present</option>
                <option>Licencié</option>
            </select>
            <div class="invalid-feedback">
            Veillez selectionner une option
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationCustom05" class="form-label"><strong>CV</strong><span style="color: red;"> *</span></label>
            <input type="file" class="form-control" id="validationCustom05" name="cv" required autocomplete="off">
            <div class="invalid-feedback">
            Veillez insert le CV
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationCustom05" class="form-label"><strong>Photo</strong><span style="color: red;"> *</span></label>
            <input type="file" class="form-control" id="validationCustom05" name="photo" required autocomplete="off">
            <div class="invalid-feedback">
            Veillez insert la photo
            </div>
        </div>
        
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                 Veillez confirmer l'enregistrement !
                </label>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit" name="enregistrer" >Eregistrez</button>
        </div>
    </form>
    </div>
    <!-- Fin form -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script> 
        (function () 
        {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms)
            .forEach(function (form) 
            {
                form.addEventListener('submit', function (event) 
                {
                    if (!form.checkValidity()) 
                    {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
</body>
</html>