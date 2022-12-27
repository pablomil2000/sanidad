<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Editar proveedor</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="home">Home</a></li>
                        <li class="breadcrumb-item"><a href="proveedores">proveedores</a></li>
                        <li class="breadcrumb-item active">Editar proveedor</li>
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
                <h3 class="card-title">Editar proveedor</h3>

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
                <form action="" method="post" class="container">
                    <div class="row">
                        <div class="form-group col-5">
                            <label for="">Nombre</label>
                            <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId" value="<?= $proveedores[0]['nombre'] ?>">
                        </div>

                        <div class="form-group col-3">
                            <label for="">Registro Sanitario</label>
                            <input type="text" name="regSan" id="" class="form-control" placeholder="" aria-describedby="helpId" value="<?= $proveedores[0]['regSan'] ?>">
                        </div>
                        <div class="form-group col-3">
                            <label for="">telefono</label>
                            <input type="text" name="tlf" id="" class="form-control" placeholder="" aria-describedby="helpId" value="<?= $proveedores[0]['tlf'] ?>">
                        </div>
                    </div>

                    <div class="row d-flex align-items-center">
                        <div class="form-group col-5">
                            <label for="">Direccion</label>
                            <input type="text" name="direc" id="" class="form-control" placeholder="" aria-describedby="helpId" value="<?= $proveedores[0]['direccion'] ?>">
                        </div>

                        <button type="submit" class="btn btn-primary h-25">Actualizar</button>
                    </div>
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
</div>