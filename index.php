<?php
  // If user's not logged then go to login page
  session_start();
  if (!isset($_SESSION['logged']))
    header('Location: login.php');

  $userId = $_SESSION['logged'];

  require_once "view/template/database.php";
  $db = dbConnect();
  $accounts = getAccounts($db, $userId);

  $uName =($_SESSION['uName']);
  $cnxState = 'Deconnexion';
  $title = "Consulter vos comptes";
  include "view/template/header.php";
?>

  <!-- main -->
  <main class="container">
    <section class="row">

      <?php
        foreach ($accounts as $keys => $value):
      ?>
        <div class ="col-12 col-sm-6 col-lg-3 my-2">
          <div class="card bg-ligh border-dark h-100">
            <div class="card-header">
              <h5 class="card-title"><?= $value['a_type'] ?></h4>
              <a href="account.php?account=<?= $value['a_id'] ?>" >
                <?= $value['a_number'] ?>
              </a>
            </div>
            <h4 class="card-title text-center">Solde de compte</h4>
            <p class="card-text text-right pr-3"><?= $value['a_balance'] ?> €</p>
            <div class="card-footer">
              <a href="depot.php?account=<?= $value['a_id'] ?>" class="btn btn-primary w-100 my-1">Effectuer un dépôt</a>
              <a href="retrait.php?account=<?= $value['a_id'] ?>" class="btn btn-primary w-100 my-1">Effectuer un retrait</a>
              <a href="suppression.php?account=<?= $value['a_id'] ?>" class="btn btn btn-warning w-100 my-1">Supprimer le compte</a>
            </div>
          </div>
        </div>
      <?php
        endforeach;
      ?>

    </section>
  </main>
  <!-- end main -->

  <!-- modal -->
  <div class="modal fade" id="rules" tabindex="-1" role="dialog" aria-labelledby="rulesTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bg-warning">
          <h5 class="modal-title" id="rulesTitle">Attention</h5>
        </div>
        <div id="rulesContent" class="modal-body">

        </div>
        <div class="modal-footer bg-warning">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">J'ai compris</button>
        </div>
      </div>
    </div>
  </div>
  <!-- end modal -->

<?php
  include "view/template/footer.php";
?>
