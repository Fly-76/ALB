<?php
  $uName = '';
  if (isset($_SESSION['uName'])) $uName =($_SESSION['uName']);
  $cnxState = 'Deconnexion';
  $title = "Statistiques CAC40";
  include "view/template/header.php";

  require "view/statistiquesView.php";

  include "view/template/footer.php";

