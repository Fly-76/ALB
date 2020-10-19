<!-- main -->
<main class="table-responsive">

<h2>Solde : <?= $account['a_balance'] ?> €</h2>

<h2>Dernières opérations</h2>
<table class="table table-striped table-bordered table-sm">
    <thead>
    <tr>
        <th class="th-sm">Description</th>
        <th class="th-sm">Type</th>
        <th class="th-sm">Montant</th>
        <th class="th-sm">Date</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($transact as $key => $value) { ?>
        <tr>
        <td><?= $value['t_description'] ?></td>
        <td><?= $value['t_type'] ?></td>
        <td><?= $value['t_amount'] ?> €</td>
        <td><?= date_format(date_create($value['t_date']),"d/m/Y") ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>

</main>
<!-- end main -->
