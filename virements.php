<?php
// If user's not logged then go to login page
session_start();
if (!isset($_SESSION['logged']))
  header('Location: login.php');

$userId = $_SESSION['logged'];

// check POST data validity
$accountDebit = $accountCredit = $amount = '';

if(isset($_POST['accountDebit']) && !empty($_POST['accountDebit'])) 
  $accountDebit = htmlspecialchars($_POST['accountDebit']);

if(isset($_POST['accountCredit']) && !empty($_POST['accountCredit'])) 
  $accountCredit = htmlspecialchars($_POST['accountCredit']);

if(isset($_POST['amount']) && !empty($_POST['amount'])) 
  $amount = htmlspecialchars($_POST['amount']);


require_once "view/template/database.php";
$db = dbConnect();
$accounts = getAccounts($db, $userId);
$Transfer = execTransfer($db, $accountDebit, $accountCredit, $amount);

$uName =($_SESSION['uName']);
$cnxState = 'Deconnexion';
$title = "Effectuer un virement";
include "view/template/header.php";

require "view/virementsView.php";

include "view/template/footer.php";

