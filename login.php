<?php
// Avoid XSS from user inputs
if(isset($_POST['id']) && !empty($_POST['id'])) 
  $id = htmlspecialchars($_POST['id']);

if(isset($_POST['pwd']) && !empty($_POST['pwd'])) 
  $pwd = htmlspecialchars($_POST['pwd']);

// Verify user Id and Password, then set logged=TRUE
if (isset($id) && isset($pwd)) {
  require "view/template/database.php";
  $db = dbConnect();

  // $query = $db->prepare("SELECT * FROM alb_users WHERE u_email = :email");
  // $query->execute(["email" => $id]);

  // $user = $query->fetch(PDO::FETCH_ASSOC);
  $user = getUser($db, $id);
  if ($user) {
      if ( password_verify($pwd, $user["u_password"])) {
        session_start();
        $_SESSION['logged'] = $user["u_id"];
        $_SESSION['uName'] = $user["u_name"];
        header('Location: index.php');
    }
  }
}

// User's not logged so display login page
$uName ='';
$cnxState = 'Connexion';
$title = "Vous connecter";
include "view/template/header.php";

require "view/loginView.php";

include "view/template/footer.php";

