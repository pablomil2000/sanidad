<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Proveedores</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Proveedores</li>
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
                <h3 class="card-title">Proveedores</h3>

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
                            <th>Registro sanitario</th>
                            <th>tlf</th>
                            <th>direccion</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        foreach ($proveedores as $key => $proveedor) {
                        ?>
                            <tr>
                                <td><?= $proveedor['nombre'] ?></td>
                                <td><?= $proveedor['regSan'] ?></td>
                                <td><?= $proveedor['tlf'] ?></td>
                                <td><?= $proveedor['direccion'] ?></td>
                                <td>
                                    <a href="editprovider&id=<?= $proveedor['id'] ?>" class="btn btn-info btn-sm"><i class="fas fa-pen"></i></a>
                                    <a href="" class="btn btn-warning btn-sm"><i class=""></i></a>
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