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
                            <th>cantidad</th>
                            <th>elaboracion</th>
                            <th>caducidad</th>
                            <th>Utilizado</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($elaboraciones as $key => $reg) {
                            $datos = array();
                            $productos = array();

                            $utilizado = $utilizadoCtrl->getByid(array('id_elaboracion' => $reg['id']));
                            foreach ($utilizado as $key => $value) {
                                $datos[] = $value['id_producto'];
                            }

                            if (!empty($datos)) {
                                $productos = $ProductosCtrl->getByField('(' . implode(',', $datos) . ')');
                            }

                        ?>
                            <tr>
                                <td><?= $reg['nombre'] ?></td>
                                <td><?= $reg['cantidad'] ?></td>
                                <td><?= Funciones::dateFormat($reg['elaboracion']) ?></td>
                                <td><?= Funciones::dateFormat($reg['caducidad']) ?></td>
                                <td>
                                    <form action="detalleProducto" method="POST">
                                        <!-- <input type="hidden" name="ruta" value="proddetalleProducto"> -->
                                        <select class="select2" style="width: 200px;" onchange="submit()" name="id">
                                            <option value="0" selected disabled>Lista de ingredientes ingredientes...</option>
                                            <?php
                                            if (!empty($productos)) {
                                                foreach ($productos as $key => $value) {
                                            ?>
                                                    <option value="<?= $value['id'] ?>"><?= $value['nombre'] ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </form>
                                </td>
                                <td>
                                    <a href="editelaboracion&id=<?= $reg['id'] ?>" class="btn btn-info btn-sm"><i class="fas fa-pen"></i></a>
                                    <!-- <a href="" class="btn btn-danger btn-sm"><i class=""></i></a> -->
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