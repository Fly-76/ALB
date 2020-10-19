</main>
<!-- main -->
<main class="d-flex justify-content-center form_container">
    <div class="card bg-ligh border-dark mt-4 mb-5 p-4">
        <div class="mb-3">Solde : <?= $account['a_balance'] ?> €</div>

        <form action="guichet.php" method="post">
            <div class="form-check row">
            <div class="col">
                <input class="form-check-input" type="radio" name="type" id="retrait" value="retrait" checked>
                <label class="form-check-label" for="retrait">Retrait</label>
            </div>
            <div class="col">
                <input class="form-check-input" type="radio" name="type" id="depot" value="depot">
                <label class="form-check-label" for="depot">Dépot</label>
            </div>

            <div class="input-group mb-3">
                <label for="amount">Montant de l'opération en euros</label>
            </div>
            <div class="input-group mb-3">
                <input type="number" class="form-control" id="amount" name="amount" placeholder="Veuillez entrer le montant" min="0" max="2000">
            </div>

            <div class="d-flex justify-content-center mt-3 login_container">
                <input type="submit" value="Valider" class="btn btn-primary">
            </div>
        </form>
    </div>
</main>
<!-- end main -->
