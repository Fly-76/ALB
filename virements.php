<?php
  // If user's not logged then go to login page
  session_start();
  if (!isset($_SESSION['logged']))
    header('Location: login.php');

  $userId = $_SESSION['logged'];

  require_once "page/database.php";
  $db = dbConnect();
  $accounts = getAccounts($db, $userId); 

  $title = "Effectuer un virement";
  include "page/header.php";
?>

  <!-- main -->
  <main class="container">
    <section class="row my-5">
      <div class="col-12 col-md-6 mx-auto">
        <h3>Effectuer un virement</h3>
        <form method="post">

          <div class="form-group">
            <label for="accountDebit">Compte à débiter</label>
            <select class="form-control" id="accountDebit">
            <?php
              foreach ($accounts as $keys => $value):
            ?>
              <option><?= $value['a_type'] ?> : <?= $value['a_number'] ?></option>
            <?php
              endforeach;
            ?>            
            </select>
          </div>

          <div class="form-group">
            <label for="amount">Montant du virement en euros</label>
            <input type="number" class="form-control" id="amount" placeholder="Veuillez entrer le montant">
          </div>

          <div class="form-group">
            <label for="accountCredit">Compte à créditer</label>
            <select class="form-control" id="accountCredit">
            <?php
              foreach ($accounts as $keys => $value):
            ?>
              <option><?= $value['a_type'] ?> : <?= $value['a_number'] ?></option>
            <?php
              endforeach;
            ?>            
            </select>
          </div>

          <div class="text-center">
            <input type="submit" value="Valider" class="btn btn-primary">
          </div>
        </form>
      </div>

    </section>
  </main>
  <!-- end main -->

<?php
  include "page/footer.php";
?>
