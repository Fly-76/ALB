<?php
// If user's not logged then go to login page
session_start();
if (!isset($_SESSION['logged']))
  header('Location: login.php');

$userId = $_SESSION['logged'];

// check POST data validity
$type = $amount = '';

if(isset($_POST['type']) && !empty($_POST['type'])) 
  $type = htmlspecialchars($_POST['type']);

if(isset($_POST['amount']) && !empty($_POST['amount'])) 
  $amount = htmlspecialchars($_POST['amount']);


require_once "view/template/database.php";
$db = dbConnect();
$newAccount = newAccount($db, $userId, $type, $amount);

$uName =($_SESSION['uName']);
$cnxState = 'Deconnexion';
$title = "Ouvrir un nouveau compte";
include "view/template/header.php";

require "view/souscrireView.php";

include "view/template/footer.php";
