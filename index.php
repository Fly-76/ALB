<?php
  include "page/header.php";
  require_once "data/accounts.php";
  $accounts = get_accounts();
?>

  <!-- main -->
  <main class="container">
    <section class="row">

<?php
  foreach ($accounts as $keys => $value):
?>

  <div class ="col-12 col-sm-6 col-lg-3 my-2">
    <div class="card border-primary h-100">
      <div class="card-header">
        <a href="account.php">
          <?php echo $value['number'] ?>
        </a>
      </div>
      <h4 class="card-title text-center">Solde de compte</h4>
      <p class="card-text text-right pr-3"><?php echo $value['amount'] ?></p>
      <div class="card-footer">
        <a href="#" class="btn btn-primary w-100 my-1">Effectuer un dépôt</a>
        <a href="#" class="btn btn-primary w-100 my-1">Effectuer un retrait</a>
        <a href="#" class="btn btn btn-warning w-100 my-1">Supprimer le compte</a>
      </div>
    </div>
  </div>

<?php
  endforeach;
?>


<!-- "name" => "Compte courant",
"number" => "N:0132520024 fr 45",
"owner" => "Mr Gossart Thomas",
"amount" => 250,
"last_operation" => "auchan -97.36€" -->
</section>
  </main>
  <!-- end main -->


<?php
  include "page/footer.php";
?>
