<?php
  // If user's not logged then go to login page
  session_start();
  if (!isset($_SESSION['logged']))
    header('Location: login.php');

  $userId = $_SESSION['logged'];

  require_once "page/database.php";
  $db = dbConnect();

  $uName =($_SESSION['uName']);
  $cnxState = 'Deconnexion';
  $title = 'Modifier vos informations de connexion';
  include "page/header.php";
?>

  <!-- main -->
  <main class="d-flex justify-content-center form_container">
    <div class="card bg-ligh border-dark mt-4 mb-5 p-4">
      <div class="mb-3">Modifier vos identifiants</div>

      <form action="" method="post">
        <div class="input-group mb-3">
          <div class="input-group-append">
            <span class="input-group-text"><i class="fas fa-user"></i></span>
          </div>
          <input type="email" name="id" class="form-control input_user" placeholder="Email">
        </div>

        <div class="mb-3">Si vous ne souhaitez ne pas modifier votre mot de passe, laisser les champs libres</div>

        <div class="input-group mb-2">
          <div class="input-group-append">
            <span class="input-group-text"><i class="fas fa-key"></i></span>
          </div>
          <input type="password" name="pwd" class="form-control input_pass" value="" placeholder="Nouveau mot de passe">
        </div>
        <div class="input-group mb-2">
          <div class="input-group-append">
            <span class="input-group-text"><i class="fas fa-key"></i></span>
          </div>
          <input type="password" name="pwd" class="form-control input_pass" value="" placeholder="Verification mot de passe">
        </div>
        <div class="d-flex justify-content-center mt-3 login_container">
          <input type="submit" value="Modifier" class="btn btn-primary">
        </div>
      </form>
    </div>
  </main>
<!-- end main -->

<?php
  include "page/footer.php";
?>
