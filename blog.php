<?php
  $uName = '';
  if (isset($_SESSION['uName'])) $uName =($_SESSION['uName']);
  $cnxState = 'Deconnexion';
  $title = "Toute l'actualité de notre blog";
  include "view/template/header.php";
?>

  <!-- main -->
  <main class="container">
    <section class="row">

    </section>
  </main>
  <!-- end main -->

<?php
  include "view/template/footer.php";
?>
