<?php
// If user's not logged then go to login page
session_start();
if (!isset($_SESSION['logged']))
  header('Location: login.php');

$userId = $_SESSION['logged'];

require_once "view/template/database.php";
$db = dbConnect();
$accounts = getAccounts($db, $userId);

$uName =($_SESSION['uName']);
$cnxState = 'Deconnexion';
$title = "Consulter vos comptes";
include "view/template/header.php";

require "view/indexView.php";

include "view/template/footer.php";

