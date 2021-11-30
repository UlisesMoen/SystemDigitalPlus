<?php require APPROOT . '/views/shared/header3.php'; ?>

<?php require APPROOT . '/views/shared/aside.php'; ?>

<main>
    
    <div class="container caja">
        <div class="row">
            <h1>Cobranza</h1>
            <div class="col-lg-12">
            </div>
        </div>
        <table id="tablaClientes" class="table table-striped table-bordered table-condensen" style="width: 100%;">
                            <thead class="text-center">
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Localidad</th>
                                    <th>Fecha</th>
                                    <th>Estatus</th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                            <?php foreach ($data['clients'] as $cliente) : ?>
                                    <tr>
                                    <td><?php echo $cliente->id; ?></td>
                                        <td><?php echo $cliente->nombre; ?></td>
                                        <td><?php echo $cliente->localidad; ?></td>
                                        <td><?php echo $cliente->fecha; ?></td>
                                        <td>
                                        hol
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                            </tbody>
                        </table>
    </div>
 
</main>

<script src="<?php echo URLROOT; ?>/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo URLROOT; ?>/js/popper.min.js"></script>
<script src="<?php echo URLROOT; ?>/js/bootstrap.min.js"></script>
<script src="<?php echo URLROOT; ?>/js/script.js"></script>

</body>

</html>