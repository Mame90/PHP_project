<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>employes</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="image/logo.png" alt="" style ="width: 200px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="accueil.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="candidat.php">Zone de candidature</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Se connecter
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="connecte.php">Administrateur</a></li>
            <li><a class="dropdown-item" href="employconnecte.php">Employé</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
 <center>
   <form action="">
        <table>
       <tr>
            <td>Matricule <span style="color: red">*</span> </td>
            <td> <input type="text" name="matricule">  <br>
            
       </tr>
       <tr>
            <td>PRENOM <span style="color: red">*</span> </td>
            <td> <input type="text" name="prenom"> <br>
            
       </tr>
       <tr>
           <td>Nom <span style= "color: red">*</span></td>
           <td> <input type="text" name="nom" </td>
       </tr>


       <tr>
            <td>Email <span style="color: red">*</span> </td>
            <td> <input type="text" name="email"> <br>
            
       </tr>
       <tr>
            <td>Motif <span style="color: red">*</span> </td>
            <td> <input type="text" name="motif"> <br>
            
       </tr>
       <tr>
            <td>Message</td>
            <td> <textarea name="message" id="" cols="22" rows="10"></textarea> </td>
       </tr>
        <tr>
            <td> <input type="submit" value="envoyer" > </td>
        </tr>
       </table>
    </form>
    </center>
    </body>
</html>