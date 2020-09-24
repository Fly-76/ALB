<?php
  include "page/header.php";
  require_once "data/accounts.php";
  $accounts = get_accounts();
?>

  <!-- main -->
  <main class="container">
    <section class="row">



    <?php
    if(isset($_GET['account']) && !empty($_GET['account'])) {
        echo htmlspecialchars($_GET['account']);
    }
    ?>





    </section>
  </main>
  <!-- end main -->

<?php
  include "page/footer.php";
?>
