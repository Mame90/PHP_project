<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Formulaire!</title>
    <link rel="stylesheet" href="forme.css">
  </head>
  <body>
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
    <table class="table">
    <thead>
        <tr>
            <th scope="col">Matricule</th>
            <th scope="col">Prenom</th>
            <th scope="col">Nom</th>
            <th scope="col">Date naissance</th>
            <th scope="col">Adresse</th>
            <th scope="col">Tel</th>
            <th scope="col">Email</th>
            <th scope="col">Situation matri</th>
            <th scope="col">Genre</th>
            <th scope="col">Statut</th>
            <th scope="col">Fonction</th>
            <th scope="col">Salaire</th>
            <th scope="col">Date entree</th>
            <th scope="col">Presence</th>
            <th scope="col">CV</th>
            <th scope="col">Photo</th>
        </tr>
</thead>
<tbody>
    <?php
        $servername = "localhost";
        $usename = "root";
        $password = "";
        $dbname = "Univert";
        
        $conn = new Mysqli($servername, $usename, $password, $dbname);
        if($conn->connect_error)
        {
            die ("Erreur connexion au server".$conn->connect_error);
        }
        $sql = "SELECT matricule, prenom, nom, date_lieu_naissance, Adresse, tel,
         email, situation_matri, genre, statut, fonction, salaire, date_entree, presence, cv, photo FROM employes";
         $result = $conn->query($sql);
         if($result->num_rows > 0)
         {
            while($row = $result->fetch_assoc())
            {
            ?>
              <tr>
                  <th scope="row"><?php  echo $row ['matricule'];?></td>
                  <td><?php  echo $row ['prenom'];?></td>
                  <td><?php  echo $row ['nom'];?></td>
                  <td><?php  echo $row ['date_lieu_naissance'];?></td>
                  <td><?php  echo $row ['Adresse'];?></td>
                  <td><?php  echo $row ['tel'];?></td>
                  <td><?php  echo $row ['email'];?></td>
                  <td><?php  echo $row ['situation_matri'];?></td>
                  <td><?php  echo $row ['genre'];?></td>
                  <td><?php  echo $row ['statut'];?></td>
                  <td><?php  echo $row ['fonction'];?></td>
                  <td><?php  echo $row ['salaire'];?></td>
                  <td><?php  echo $row ['date_entree'];?></td>
                  <td><?php  echo $row ['presence'];?></td>
                  <td><?php  echo $row ['cv'];?></td>
                  <td><?php  echo $row ['photo'];?></td>
              </tr>

            <?php
                
            }
         }
         else
         {
             echo "0 resultat";
         }
         $conn->close();
    ?>
    </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>