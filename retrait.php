<?php
  // If user's not logged then go to login page
  session_start();
  if (!isset($_SESSION['logged']))
    header('Location: login.php');

  if(isset($_GET['account']) && !empty($_GET['account'])) {
    $accountId = htmlspecialchars($_GET['account']);

    require_once "view/template/database.php";
    $db = dbConnect();
    $account = getAccount($db, $accountId);
    $transact = getTransact($db, $accountId);
  }

  $uName =($_SESSION['uName']);
  $cnxState = 'Deconnexion';
  $title = "Retrait du " . $account['a_type'] . " : " . $account['a_number'];
  include "view/template/header.php";
?>

  <!-- main -->
  <main class="table-responsive">

    <h2>Solde : <?= $account['a_balance'] ?> €</h2>

    <h2>Retrait</h2>

  </main>
  <!-- end main -->


<?php
  include "view/template/footer.php";
?>
