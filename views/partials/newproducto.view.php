<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Nuevo producto</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="home">Home</a></li>
                        <li class="breadcrumb-item active">Nuevo producto</li>
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
                <h3 class="card-title">Nuevo producto</h3>

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
                            <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>

                        <div class="form-group col-3">
                            <label for="">numLote</label>
                            <input type="text" name="lote" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group col-3">
                            <label for="">caducidad</label>
                            <input type="date" name="cadu" id="" class="form-control">
                        </div>
                    </div>

                    <div class="row d-flex align-items-center">
                        <div class="form-group col-9">
                            <label for="">Proveedor</label>
                            <select class="js-example-basic-single" name="provider" style="width: 200px;">

                                <?php
                                foreach ($Proveedorctrl->getAll() as $key => $value) {
                                    echo '<option value="' . $value['id'] . '">' . $value['nombre'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary h-25">Enviar</button>
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