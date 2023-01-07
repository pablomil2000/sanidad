<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Informe de producto</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="home">Home</a></li>
                        <li class="breadcrumb-item active">Informe producto</li>

                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">

        <!-- Default box -->
        <div class="card" id="informe">
            <div class="card-header">
                <h3 class="card-title">Informe</h3>
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

                <table style="width: 100%;">
                    <tr>
                        <td><label for="nombre">Nombre: </label></td>
                        <td><span id="nombre"><?= $producto['nombre'] ?></span></td>
                        <td><label for="nombre">Nº de lote: </label></td>
                        <td><span id="regSan"><?= $producto['numLote'] ?></span></td>
                    </tr>
                    <tr>
                        <td><label for="nombre">Fecha de compra: </label></td>
                        <td><span id="telefono"><?= Funciones::dateFormat($producto['compra']) ?></span></td>
                        <td><label for="nombre">Fecha de caducidad: </label></td>
                        <td><span id="direccion"><?= Funciones::dateFormat($producto['caducidad']) ?></span></td>
                    </tr>
                </table>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->

    <section class="content">

        <!-- Default box -->
        <div class="card" id="listado">
            <div class="card-header">
                <h3 class="card-title">Usado en</h3>
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
                <table id="table_id" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>Elaboracion</th>
                            <th>cantidad</th>
                            <th>Fecha de elaboracion</th>
                            <th>Fecha de caducidad</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        foreach ($usadoEn as $key => $value) {
                            $elaboracion = $elaboracionCtrl->getByid(array('id' => $value['id_elaboracion']))[0];
                            echo '<tr>';
                            echo '<td>' . $elaboracion['nombre'] . '</td>';
                            echo '<td>' . $elaboracion['cantidad'] . '</td>';
                            echo '<td>' . Funciones::dateFormat($elaboracion['elaboracion']) . '</td>';
                            echo '<td>' . Funciones::dateFormat($elaboracion['caducidad']) . '</td>';
                            echo '</tr>';
                        }
                        ?>
                    </tbody>

                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>