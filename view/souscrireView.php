<!-- main -->
<main class="container">
<section class="row my-5">

    <div class="col-12 col-md-6 mx-auto">
    <h3>Ouverture de compte</h3>
    <form action="souscrire.php" method="post">

        <div class="form-group">
        <label for="account">Sélectionnez le type de compte</label>
        <select class="form-control" id="account" name="type">
            <option>Compte courant</option>
            <option>Livret A</option>
            <option>Plan Epargne logement</option>
        </select>
        </div>

        <div class="form-group">
        <label for="amount">Montant minimum</label>
        <input type="number" class="form-control" id="amount" name="amount" placeholder="Veuillez entrer le montant, minimum 50€" min="50">
        </div>
            <div class="text-center">
        <input type="submit" value="Valider" class="btn btn-primary">
        </div>
    </form>
    </div>

<?php
  if (isset($type) && isset($amount)) {
?>
    <div class="alert alert-success" role="alert">
    Compte créé avec succés:
    <p>- Type , <?php echo $type ?></p>
    <p>- Montant , <?php echo $amount ?></p> 
    </div>

    <!-- <div class="alert alert-danger" role="alert">
    This is a danger alert—check it out!
    </div> -->

<?php
  }
?>

</section>
</main>
<!-- end main -->
