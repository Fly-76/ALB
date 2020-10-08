<?php
  // Avoid XSS from user inputs
  if(isset($_POST['id']) && !empty($_POST['id'])) 
    $id = htmlspecialchars($_POST['id']);

  if(isset($_POST['pwd']) && !empty($_POST['pwd'])) 
    $pwd = htmlspecialchars($_POST['pwd']);

  // Verify user Id and Password, then set logged=TRUE
  if (isset($id) && isset($pwd)) {
    require "page/database.php";
    $db = dbConnect();
  
    // $query = $db->prepare("SELECT * FROM alb_users WHERE u_email = :email");
    // $query->execute(["email" => $id]);

    // $user = $query->fetch(PDO::FETCH_ASSOC);
    $user = getUser($db, $id);
    if ($user) {
       if ( password_verify($pwd, $user["u_password"])) {
          session_start();
          $_SESSION['logged'] = $user["u_id"];
          header('Location: index.php');
      }
    }
  }

  // User's not logged so display login page
  $title = "Vous connecter";
  include "page/header.php";
?>

  <!-- main -->
  <main class="d-flex justify-content-center form_container">
    <div class="card bg-ligh border-dark mt-4 mb-5 p-4">
      <div class="mb-3">Veuillez rentre vos identifiants</div>

      <form action="login.php" method="post">
        <div class="input-group mb-3">
          <div class="input-group-append">
            <span class="input-group-text"><i class="fas fa-user"></i></span>
          </div>
          <input type="email" name="id" class="form-control input_user" placeholder="Email">
        </div>
        <div class="input-group mb-2">
          <div class="input-group-append">
            <span class="input-group-text"><i class="fas fa-key"></i></span>
          </div>
          <input type="password" name="pwd" class="form-control input_pass" value="" placeholder="Mot de passe">
        </div>
        <div class="d-flex justify-content-center mt-3 login_container">
          <input type="submit" value="Connexion" class="btn btn-primary">
        </div>
      </form>
    </div>
  </main>
<!-- end main -->

<?php
  include "page/footer.php";
?>

