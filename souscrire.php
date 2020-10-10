<?php
  // If user's not logged then go to login page
  session_start();
  if (!isset($_SESSION['logged']))
    header('Location: login.php');
  
  $userId = $_SESSION['logged'];
  
  // check POST data validity
  $type = $amount = '';

  if(isset($_POST['type']) && !empty($_POST['type'])) 
    $type = htmlspecialchars($_POST['type']);

  if(isset($_POST['amount']) && !empty($_POST['amount'])) 
    $amount = htmlspecialchars($_POST['amount']);


  require_once "page/database.php";
  $db = dbConnect();
  $newAccount = newAccount($db, $userId, $type, $amount);

  $cnxState = 'Deconnexion';
  $title = "Ouvrir un nouveau compte";
  include "page/header.php";
?>

  <!-- main -->
  <main class="container">
    <section class="row my-5">

      <div class="col-12 col-md-6 mx-auto">
        <h3>Ouverture de compte</h3>
        <form action="souscrire.php" method="post">

          <div class="form-group">
            <label for="account">Sélectionnez le type de compte</label>
            <select class="form-control" id="account" name="type">
              <option>Compte courant</option>
              <option>Livret A</option>
              <option>Plan Epargne logement</option>
            </select>
          </div>

          <div class="form-group">
            <label for="amount">Montant minimum</label>
            <input type="number" class="form-control" id="amount" name="amount" placeholder="Veuillez entrer le montant, minimum 50€" min="50">
          </div>
                <div class="text-center">
            <input type="submit" value="Valider" class="btn btn-primary">
          </div>
        </form>
      </div>

<?php
  if (isset($type) && isset($amount)) {
?>
      <div class="alert alert-success" role="alert">
        Compte créé avec succés:
        <p>- Type , <?php echo $type ?></p>
        <p>- Montant , <?php echo $amount ?></p> 
      </div>

      <!-- <div class="alert alert-danger" role="alert">
        This is a danger alert—check it out!
      </div> -->

<?php
  }
?>

    </section>
  </main>
  <!-- end main -->

<?php
  include "page/footer.php";
?>
