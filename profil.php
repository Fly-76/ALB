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

  $cnxState = 'Modifier vos informations';
  $title = $account['a_type'] . " - " . $account['a_number'];
  include "page/header.php";
?>

  <!-- main -->

  <!-- end main -->


<?php
  include "page/footer.php";
?>
