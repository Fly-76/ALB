<?php
  // If user's not logged then go to login page
  session_start();
  if (!isset($_SESSION['logged']))
    header('Location: login.php');

  if(isset($_GET['account']) && !empty($_GET['account'])) {
    $accountId = htmlspecialchars($_GET['account']);

    require_once "page/database.php";
    $db = dbConnect();
    $account = getAccount($db, $accountId);
    $transact = getTransact($db, $accountId);
  }

  $uName =($_SESSION['uName']);
  $cnxState = 'Deconnexion';
  $title = $account['a_type'] . " - " . $account['a_number'];
  include "page/header.php";
?>

  <!-- main -->
  <main class="table-responsive">

    <h2>Solde : <?= $account['a_balance'] ?> €</h2>

    <h2>Dernières opérations</h2>
    <table class="table table-striped table-bordered table-sm">
      <thead>
      <tr>
          <th class="th-sm">Description</th>
          <th class="th-sm">Type</th>
          <th class="th-sm">Montant</th>
          <th class="th-sm">Date</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($transact as $key => $value) { ?>
          <tr>
            <td><?= $value['t_description'] ?></td>
            <td><?= $value['t_type'] ?></td>
            <td><?= $value['t_amount'] ?> €</td>
            <td><?= $value['t_date'] ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>

  </main>
  <!-- end main -->


<?php
  include "page/footer.php";
?>
