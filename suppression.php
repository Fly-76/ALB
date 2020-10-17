<?php
  // If user's not logged then go to login page
  session_start();
  if (!isset($_SESSION['logged']))
    header('Location: login.php');
    
  $userId = $_SESSION['logged'];

  if(isset($_GET['account']) && !empty($_GET['account'])) {
    $accountId = htmlspecialchars($_GET['account']);

    require_once "view/template/database.php";
    $db = dbConnect();
    if (userVerif($db, $accountId, $userId)) {
      deleteAccount($db, $accountId);
    } else header('Location: login.php');
  }

  header('Location: index.php');