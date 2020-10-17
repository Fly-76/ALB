<!-- main -->
<main class="d-flex justify-content-center form_container">
<div class="card bg-ligh border-dark mt-4 mb-5 p-4">
    <div class="mb-3">Veuillez compléter vos identifiants</div>

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
