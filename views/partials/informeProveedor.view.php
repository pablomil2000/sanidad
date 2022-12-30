<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Informe proveedor</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="home">Home</a></li>
                        <li class="breadcrumb-item active">Informe proveedor</li>

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
                <h3 class="card-title">Selecciona proveedor</h3>
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
                <form action="" method="post">
                    <label for="">Proveedor</label>
                    <select class="select2" id="proveedor" name="provider" style="width: 250px;">

                        <?php
                        echo '<option value="0">Selecciona un proveedor</option>';

                        foreach ($Proveedorctrl->getAll() as $key => $value) {
                            echo '<option value="' . $value['id'] . '">' . $value['nombre'] . '</option>';
                        }
                        ?>
                    </select>
                </form>
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

    <section class="content">

        <!-- Default box -->
        <div class="card" style="display: none;" id="informe">
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
                        <td><span id="nombre">asd</span></td>
                        <td><label for="nombre">Nº registro sanitario: </label></td>
                        <td><span id="regSan">asd</span></td>
                    </tr>
                    <tr>
                        <td><label for="nombre">telefono: </label></td>
                        <td><span id="telefono">asd</span></td>
                        <td><label for="nombre">direccion: </label></td>
                        <td><span id="direccion">asd</span></td>
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
        <div class="card" style="display: none;" id="listado">
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
                <table id="lista" style="width: 100%;">
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