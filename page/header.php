<!doctype html>
<html class="no-js" lang="fr">

<head>
  <meta charset="utf-8">
  <title>Ada Lovelace's Bank</title>
  <meta name="description" content="Virtual Bank, just a sample interface">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="icon" type="image/png" href="favicon-196x196.png" sizes="196x196" />
  <link rel="icon" type="image/png" href="favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
  <link rel="icon" type="image/png" href="favicon-128.png" sizes="128x128" />
  
  <!-- load bootstrap css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">

  <meta name="theme-color" content="#fafafa">
</head>

<body>

  <!-- navigation bar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">ALB</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" href="index.php">Mon compte<span class="sr-only">(current)</span></a>
        <a class="nav-link" href="virements.php">Virement</a>
        <a class="nav-link" href="souscrire.php">Souscrire</a>
        <a class="nav-link" href="statistiques.php">Statistiques</a>
        <a class="nav-link" href="blog.php">Blog</a>
      </div>
    </div>
  </nav>    
  <!-- end navigation bar -->

  <!-- header -->
  <header class="jumbotron jumbotron-fluid text-white bg-dark">
    <div class="container">
      <h1 class="display-4"><?php echo $title ?></h1>
    </div>
  </header>
  <!-- end header -->

