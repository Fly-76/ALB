<!doctype html>
<html class="no-js" lang="fr">

<head>
  <meta charset="utf-8">
  <title>Ada Lovelace's Bank</title>
  <meta name="description" content="Virtual Bank, just a sample interface">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="icon" type="png" href="public/img/favicon-196x196.png" sizes="196x196" />
  <link rel="icon" type="png" href="public/img/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="png" href="public/img/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="png" href="public/img/favicon-16x16.png" sizes="16x16" />
  <link rel="icon" type="png" href="public/img/favicon-128.png" sizes="128x128" />
  
  <!-- load bootstrap css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <link rel="stylesheet" href="public/css/normalize.css">
  <link rel="stylesheet" href="public/css/main.css">

  <script src="https://kit.fontawesome.com/a5a3281376.js" crossorigin="anonymous"></script>

  <meta name="theme-color" content="#fafafa">
</head>

<body>

  <!-- navigation bar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php"><img src="public/img/ADA.png" width="30" height="30" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <!-- <div class="navbar-nav"> -->
      <ul class="navbar-nav mr-auto">
        <li><a class="nav-link" href="profil.php">Profil</a></li>
        <li><a class="nav-link active" href="index.php">Mon compte<span class="sr-only">(current)</span></a></li>
        <li><a class="nav-link" href="virements.php">Virement</a></li>
        <li><a class="nav-link" href="souscrire.php">Souscrire</a></li>
        <li><a class="nav-link" href="statistiques.php">Statistiques</a></li>
        <li><a class="nav-link" href="blog.php">Blog</a></li>
      <!-- </div> -->
      </ul>
      <form action="disconnect.php" class="form-inline">
        <button class="btn btn-outline-info my-2 my-sm-0" type="submit"><?= $cnxState ?></button>
      </form>
    </div>
  </nav>    
  <!-- end navigation bar -->

  <!-- header -->
  <header class="jumbotron jumbotron-fluid text-white bg-dark">
    <div class="container">
      <h1><?php echo $uName ?></h1>
      <h1><?php echo $title ?></h1>
    </div>
  </header>
  <!-- end header -->

