<?php
  $title = "Ouvrir un nouveau compte";
  include "page/header.php";
?>

  <!-- main -->
  <main class="container">
    <section class="row my-5">

      <div class="col-12 col-md-6 mx-auto">
          <h3>Ouverture de compte</h3>
          <form method="post">

            <div class="form-group">
              <label for="account">Sélectionnez le type de compte</label>
              <select class="form-control" id="account">
                <option>Compte courant</option>
                <option>Livret A</option>
                <option>Plan d'épargne logement</option>
              </select>
            </div>

            <div class="form-group">
              <label for="amount">Montant minimum</label>
              <input type="number" class="form-control" id="amount" placeholder="Veuillez entrer le montant, minimum 50€" min="50">
            </div>
                  <div class="text-center">
              <input type="submit" value="Valider" class="btn btn-primary">
            </div>
          </form>
        </div>

    </section>
  </main>
  <!-- end main -->

<?php
  include "page/footer.php";
?>
