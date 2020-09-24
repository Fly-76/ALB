<?php
  require_once "data/accounts.php";
  $accounts = get_accounts();

  $account = "";
  if(isset($_GET['account']) && !empty($_GET['account'])) 
    $account_number = htmlspecialchars($_GET['account']);

    foreach ($accounts as $account_info) {
      if ( $account_number === $account_info['number']) 
        $account = $account_info;
    }
    $title = "Compte : " . $account_number;
    include "page/header.php";
?>

  <!-- main -->
  <main class="table-responsive">
    <table id="dtBasicExample" class="table table-striped table-bordered table-sm">
      <thead>
        <tr>
          <th class="th-sm">Date</th>
          <th class="th-sm">Valeur</th>
        </tr>
      </thead>
      <tbody>

    <?php
      if (isset($account)) {
        foreach ($account as $key => $value) {
    ?>

    <tr>
      <td><?php echo $key ?></td>
      <td><?php echo $value ?></td>
    </tr>

    <?php
        }
      }
    ?>

      </tbody>
    </table>
  </main>
  <!-- end main -->


<?php
  include "page/footer.php";
?>
