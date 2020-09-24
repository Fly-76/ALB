<?php
  require_once "data/accounts.php";
  $accounts = get_accounts();

  $account = "";
  if(isset($_GET['account']) && !empty($_GET['account'])) 
    $account_number = htmlspecialchars($_GET['account']);

    $account = $accounts[$account_number];
    var_dump($account);


    $title = "Compte : " . $account_number;
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
