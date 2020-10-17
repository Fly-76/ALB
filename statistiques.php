<?php
  $uName = '';
  if (isset($_SESSION['uName'])) $uName =($_SESSION['uName']);
  $cnxState = 'Deconnexion';
  $title = "Statistiques CAC40";
  include "view/template/header.php";
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
      </tbody>
    </table>
  </main>
  <!-- end main -->

<?php
  include "view/template/footer.php";
?>
