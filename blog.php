<?php
$uName = '';
if (isset($_SESSION['uName'])) $uName =($_SESSION['uName']);
$cnxState = 'Deconnexion';
$title = "Toute l'actualité de notre blog";
include "view/template/header.php";

require "view/blogView.php";

include "view/template/footer.php";

