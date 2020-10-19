<!-- main -->
<main class="container">
<section class="row">

    <?php
    foreach ($accounts as $keys => $value):
    ?>
    <div class ="col-12 col-sm-6 col-lg-3 my-2">
        <div class="card bg-ligh border-dark h-100">
        <div class="card-header">
            <h5 class="card-title"><?= $value['a_type'] ?></h5>
            <a href="account.php?account=<?= $value['a_id'] ?>" >
            <?= $value['a_number'] ?>
            </a>
        </div>
        <h4 class="card-title text-center">Solde : <?= $value['a_balance'] ?> €</h4>
        <p class="card-text text-center pr-3"> Dernière opération :<br>
            <?= $value['t_type'] ?> le <?= date_format(date_create($value['t_date']),"d/m/Y") ?> : <?= $value['t_amount'] ?> €
        </p>
        <div class="card-footer">
            <a href="guichet.php?account=<?= $value['a_id'] ?>" class="btn btn-primary w-100 my-1">Dépôt / Retrait</a>
            <a href="suppression.php?account=<?= $value['a_id'] ?>" class="btn btn btn-warning w-100 my-1">Supprimer le compte</a>
        </div>
        </div>
    </div>
    <?php
    endforeach;
    ?>

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
