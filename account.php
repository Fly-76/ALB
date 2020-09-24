<?php
  require_once "data/accounts.php";
  $accounts = get_accounts();

  $account = "";
  if(isset($_GET['account']) && !empty($_GET['account'])) 
    $account = htmlspecialchars($_GET['account']);

    $title = "Compte : " . $account;
    include "page/header.php";
?>

  <!-- main -->
  <main class="container">
    <section class="row">



    </section>
  </main>
  <!-- end main -->

<?php
  include "page/footer.php";
?>
