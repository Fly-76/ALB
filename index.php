<?php
  include "page/header.php";
?>

  <!-- main -->
  <main class="container">
    <section class="row">

      <!-- Compte  1 -->
      <div class ="col-12 col-sm-6 col-lg-3 my-2">
        <div class="card border-primary h-100">
          <div class="card-header">Compte : xxxxxxxxx</div>
          <h4 class="card-title text-center">Solde de compte</h4>
          <p class="card-text text-right pr-3">13 200 €</p>
          <div class="card-footer">
            <a href="#" class="btn btn-primary w-100 my-1">Effectuer un dépôt</a>
            <a href="#" class="btn btn-primary w-100 my-1">Effectuer un retrait</a>
            <a href="#" class="btn btn btn-warning w-100 my-1">Supprimer le compte</a>
          </div>
        </div>
      </div>

      <!-- Compte  2 -->
      <div class ="col-12 col-sm-6 col-lg-3 my-2">
        <div class="card border-primary h-100">
          <div class="card-header">Compte : xxxxxxxxx</div>
          <h4 class="card-title text-center">Solde de compte</h4>
          <p class="card-text text-right pr-3">200 €</p>
          <div class="card-footer">
            <a href="#" class="btn btn-primary w-100 my-1">Effectuer un dépôt</a>
            <a href="#" class="btn btn-primary w-100 my-1">Effectuer un retrait</a>
            <a href="#" class="btn btn btn-warning w-100 my-1">Supprimer le compte</a>
          </div>
        </div>
      </div>

      <!-- Compte  3 -->
      <div class ="col-12 col-sm-6 col-lg-3 my-2">
        <div class="card border-primary h-100">
          <div class="card-header">Compte : xxxxxxxxx</div>
          <h4 class="card-title text-center">Solde de compte</h4>
          <p class="card-text text-right pr-3">3 100 €</p>
          <div class="card-footer">
            <a href="#" class="btn btn-primary w-100 my-1">Effectuer un dépôt</a>
            <a href="#" class="btn btn-primary w-100 my-1">Effectuer un retrait</a>
            <a href="#" class="btn btn btn-warning w-100 my-1">Supprimer le compte</a>
          </div>
        </div>
      </div>

      <!-- Compte  4 -->
      <div class ="col-12 col-sm-6 col-lg-3 my-2">
        <div class="card border-primary h-100">
          <div class="card-header">Compte : xxxxxxxxx</div>
          <h4 class="card-title text-center">Solde de compte</h4>
          <p class="card-text text-right pr-3">1 200 €</p>
          <div class="card-footer">
            <a href="#" class="btn btn-primary w-100 my-1">Effectuer un dépôt</a>
            <a href="#" class="btn btn-primary w-100 my-1">Effectuer un retrait</a>
            <a href="#" class="btn btn btn-warning w-100 my-1">Supprimer le compte</a>
          </div>
        </div>
      </div>
      
    </section>
  </main>
  <!-- end main -->

  <!-- modal -->
  <div class="modal fade" id="rules" tabindex="-1" role="dialog" aria-labelledby="rulesTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bg-warning">
          <h5 class="modal-title" id="rulesTitle">Attention</h5>
        </div>
        <div id="rulesContent" class="modal-body">

        </div>
        <div class="modal-footer bg-warning">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">J'ai compris</button>
        </div>
      </div>
    </div>
  </div>
  <!-- end modal -->

<?php
  include "page/footer.php";
?>
