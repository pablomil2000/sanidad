<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Productos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="home">Home</a></li>
                        <li class="breadcrumb-item active">Productos</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Productos</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <table id="table_id" class="display">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Comprado en</th>
                            <th>Numero de lote</th>
                            <th>fecha compra</th>
                            <th>direccion</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        foreach ($productos as $key => $reg) {
                            $proveedor = $proveedoresCtrl->getByid(array('id' => $reg['id_proveedor']));
                        ?>
                            <tr style="<?= $reg['caducidad'] <= date('Y-m-d') ? 'background-color:#fc5f53; color:white' : '' ?>;">
                                <td><?= $reg['nombre'] ?></td>
                                <td><?= $proveedor[0]['nombre'] ?></td>
                                <td><?= $reg['numLote'] ?></td>
                                <td><?= Funciones::dateFormat($reg['compra']) ?></td>
                                <td><?= Funciones::dateFormat($reg['caducidad']) ?></td>
                                <td>
                                    <a href="editproducto&id=<?= $reg['id'] ?>" class="btn btn-info btn-sm"><i class="fas fa-pen"></i></a>

                                    <?php
                                    if ($reg['visible'] == 0) {
                                    ?>
                                        <a href="cambiarvisible&id=<?= $reg['id'] ?>" class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a>

                                    <?php
                                    } else {
                                    ?>
                                        <a href="cambiarvisible&id=<?= $reg['id'] ?>" class="btn btn-success btn-sm"><i class="fas fa-eye-slash"></i></a>

                                    <?php
                                    }

                                    ?>

                                    <a href="" class="btn btn-danger btn-sm"><i class=""></i></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>


                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>