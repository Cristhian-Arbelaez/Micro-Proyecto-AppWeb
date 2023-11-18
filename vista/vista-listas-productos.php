<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Listas de Productos</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#" onclick="CargarContenidoPagina('vista/dashboard.php','content-wrapper')">Inicio</a></li>
              <li class="breadcrumb-item active">Listas de Productos</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">

        <!-- row para criterios de busqueda -->
        <div class="row">

            <div class="col-lg-12">

                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">CRITERIOS DE BÚSQUEDA</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool text-danger" id="btnLimpiarBusqueda">
                                <i class="fas fa-trash fs-5"></i>
                            </button>
                        </div> <!-- ./ end card-tools -->
                    </div> <!-- ./ end card-header -->
                    <div class="card-body">

                        <div class="row">

                            <div class="col-lg-12 d-lg-flex">

                                <div style="width: 20%;" class="form-floating mx-1">
                                    <input type="text" id="ID_Lista_Producto" class="form-control" data-index="1">
                                    <label for="ID_Lista_Producto">ID Lista Producto</label>
                                </div>

                                <div style="width: 20%;" class="form-floating mx-1">
                                    <input type="text" id="Nombre_Producto" class="form-control" data-index="2" data-index="3" data-index="4" data-index="5" data-index="6" data-index="7" data-index="8" data-index="9" data-index="10" data-index="11">
                                    <label for="Nombre_Producto">Nombre Producto</label>
                                </div>

                            </div>

                        </div>
                    </div> <!-- ./ end card-body -->
                </div>

            </div>

        </div>


        <!-- row para listado de Lista  de productos/inventario -->
        <div class="row">
            <div class="col-lg-12">
                <table id="tbl_lista_productos" class="table table-striped w-100 shadow">
                    <thead class="bg-info">
                        <tr style="font-size: 15px;">
                            <th></th>
                            <th>ID Lista Productos</th>
                            <th>ID Pro1</th>
                            <th>ID Pro2</th>
                            <th>ID Pro3</th>
                            <th>ID Pro4</th>
                            <th>ID Pro5</th>
                            <th>ID Pro6</th>
                            <th>ID Pro7</th>
                            <th>ID Pro8</th>
                            <th>ID Pro9</th>
                            <th>ID Pro10</th>
                            <th class="text-cetner">Opciones</th>
                        </tr>
                    </thead>
                    <tbody class="text-small">
                    </tbody>
                </table>
            </div>
        </div>

    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->

<!-- VENTANA MODAL PARA AGREGAR Lista PRODUCTO -->
<div class="modal fade" id="mdlAgregarListaProducto" role="dialog">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <div class="modal-header bg-gray py-1 align-items-center">
                <h5 class="modal-title">Agregar Lista De Productos</h5>
                <button type="button" class="btn btn-outline-primary text-white border-0 fs-5" id="btnCerrarModal"
                    data-bs-dismiss="modal">
                    <i class="far fa-times-circle"></i>
                </button>
            </div>

            <div class="modal-body">

                <form class="needs-validation" novalidate>
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="selProducto1_1"><i class="fas fa-dumpster fs-6"></i>
                                    <span class="small">Producto</span><span class="text-danger">*</span>
                                </label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                    id="selProducto1_1" required>
                                </select>
                                <div class="invalid-feedback">Seleccione Un Producto</div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="selProducto1_2"><i class="fas fa-dumpster fs-6"></i>
                                    <span class="small">Producto</span><span class="text-danger">*</span>
                                </label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                    id="selProducto1_2" required>
                                </select>
                                <div class="invalid-feedback">Seleccione Un Producto</div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="selProducto1_3"><i class="fas fa-dumpster fs-6"></i>
                                    <span class="small">Producto</span><span class="text-danger">*</span>
                                </label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                    id="selProducto1_3" required>
                                </select>
                                <div class="invalid-feedback">Seleccione Un Producto</div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="selProducto1_4"><i class="fas fa-dumpster fs-6"></i>
                                    <span class="small">Producto</span><span class="text-danger">*</span>
                                </label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                    id="selProducto1_4" required>
                                </select>
                                <div class="invalid-feedback">Seleccione Un Producto</div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="selProducto1_5"><i class="fas fa-dumpster fs-6"></i>
                                    <span class="small">Producto</span><span class="text-danger">*</span>
                                </label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                    id="selProducto1_5" required>
                                </select>
                                <div class="invalid-feedback">Seleccione Un Producto</div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="selProducto1_6"><i class="fas fa-dumpster fs-6"></i>
                                    <span class="small">Producto</span><span class="text-danger">*</span>
                                </label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                    id="selProducto1_6" required>
                                </select>
                                <div class="invalid-feedback">Seleccione Un Producto</div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="selProducto1_7"><i class="fas fa-dumpster fs-6"></i>
                                    <span class="small">Producto</span><span class="text-danger">*</span>
                                </label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                    id="selProducto1_7" required>
                                </select>
                                <div class="invalid-feedback">Seleccione Un Producto</div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="selProducto1_8"><i class="fas fa-dumpster fs-6"></i>
                                    <span class="small">Producto</span><span class="text-danger">*</span>
                                </label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                    id="selProducto1_8" required>
                                </select>
                                <div class="invalid-feedback">Seleccione Un Producto</div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="selProducto1_9"><i class="fas fa-dumpster fs-6"></i>
                                    <span class="small">Producto</span><span class="text-danger">*</span>
                                </label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                    id="selProducto1_9" required>
                                </select>
                                <div class="invalid-feedback">Seleccione Un Producto</div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="selProducto1_10"><i class="fas fa-dumpster fs-6"></i>
                                    <span class="small">Producto</span><span class="text-danger">*</span>
                                </label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                    id="selProducto1_10" required>
                                </select>
                                <div class="invalid-feedback">Seleccione Un Producto</div>
                            </div>
                        </div>

                        

                        <div class="col-lg-8">
                            <div class="form-group mb-2">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
                                    id="btnCancelarRegistroProducto">Cancelar</button>
                                <button type="button" class="btn btn-primary"
                                    id="btnGuardarRegistroListaProducto">Guardar</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- VENTANA MODAL PARA AGREGAR PRODUCTO -->

<!-- VENTANA MODAL PARA ACTUALIZACION -->
<div class="modal fade" id="mdlActualizarListaProducto" role="dialog">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <div class="modal-header bg-gray py-1 align-items-center">
                <h5 class="modal-title">Actualizar Lista De Productos</h5>
                <button type="button" class="btn btn-outline-primary text-white border-0 fs-5" id="btnCerrarModal"
                    data-bs-dismiss="modal">
                    <i class="far fa-times-circle"></i>
                </button>
            </div>

            <div class="modal-body">

                <form class="needs-validation" novalidate>
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="selProducto2_1"><i class="fas fa-dumpster fs-6"></i>
                                    <span class="small">Producto</span><span class="text-danger">*</span>
                                </label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                    id="selProducto2_1" required>
                                </select>
                                <div class="invalid-feedback">Seleccione Un Producto</div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="selProducto2_2"><i class="fas fa-dumpster fs-6"></i>
                                    <span class="small">Producto</span><span class="text-danger">*</span>
                                </label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                    id="selProducto2_2" required>
                                </select>
                                <div class="invalid-feedback">Seleccione Un Producto</div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="selProducto2_3"><i class="fas fa-dumpster fs-6"></i>
                                    <span class="small">Producto</span><span class="text-danger">*</span>
                                </label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                    id="selProducto2_3" required>
                                </select>
                                <div class="invalid-feedback">Seleccione Un Producto</div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="selProducto2_4"><i class="fas fa-dumpster fs-6"></i>
                                    <span class="small">Producto</span><span class="text-danger">*</span>
                                </label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                    id="selProducto2_4" required>
                                </select>
                                <div class="invalid-feedback">Seleccione Un Producto</div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="selProducto2_5"><i class="fas fa-dumpster fs-6"></i>
                                    <span class="small">Producto</span><span class="text-danger">*</span>
                                </label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                    id="selProducto2_5" required>
                                </select>
                                <div class="invalid-feedback">Seleccione Un Producto</div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="selProducto2_6"><i class="fas fa-dumpster fs-6"></i>
                                    <span class="small">Producto</span><span class="text-danger">*</span>
                                </label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                    id="selProducto2_6" required>
                                </select>
                                <div class="invalid-feedback">Seleccione Un Producto</div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="selProducto2_7"><i class="fas fa-dumpster fs-6"></i>
                                    <span class="small">Producto</span><span class="text-danger">*</span>
                                </label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                    id="selProducto2_7" required>
                                </select>
                                <div class="invalid-feedback">Seleccione Un Producto</div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="selProducto2_8"><i class="fas fa-dumpster fs-6"></i>
                                    <span class="small">Producto</span><span class="text-danger">*</span>
                                </label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                    id="selProducto2_8" required>
                                </select>
                                <div class="invalid-feedback">Seleccione Un Producto</div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="selProducto2_9"><i class="fas fa-dumpster fs-6"></i>
                                    <span class="small">Producto</span><span class="text-danger">*</span>
                                </label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                    id="selProducto2_9" required>
                                </select>
                                <div class="invalid-feedback">Seleccione Un Producto</div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="selProducto2_10"><i class="fas fa-dumpster fs-6"></i>
                                    <span class="small">Producto</span><span class="text-danger">*</span>
                                </label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                    id="selProducto2_10" required>
                                </select>
                                <div class="invalid-feedback">Seleccione Un Producto</div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="form-group mb-2">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
                                    id="btnCancelarRegistroProducto">Cancelar</button>
                                <button type="button" class="btn btn-primary"
                                    id="btnActualizarRegistroListaProducto">Guardar</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- VENTANA MODAL PARA ACTUALIZACION -->



<script>

    var accion;
    var table;
    var validation = true;

    var Toast = Swal.mixin({
        toast: true,
        position: 'top',
        showConfirmButton: false,
        timer: 3000
    });

    $(document).ready(function () {

        $.ajax({
            url: "ajax/listaproductos.ajax.php",
            type: "POST",
            data: { 'accion': 10 }, //1: LISTAR PRODUCTOS
            dataType: 'json',
            success: function (respuesta) {
                console.log("respuesta", respuesta);
            }
        });

        $.ajax({
            url: "ajax/listaproductos.ajax.php",
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function (respuesta) {

                var options = '<option selected value="">Seleccione Un Producto</option>';

                for (let index = 0; index < respuesta.length; index++) {
                    options = options + '<option value=' + respuesta[index][0] + '>' + respuesta[index][1] + '</option>';
                }

                $("#selProducto").append(options);
                // $("#selProveedor2").append(options);

            }
        });


        table = $("#tbl_lista_productos").DataTable({

            dom: 'Bfrtip',
            buttons: [{
                text: 'Agregar Lista De Productos',
                className: 'addNewRecord',
                action: function (e, dt, node, config) {
                    //EVENTO PARA LEVENTAR LA VENTA MODAL
                    $("#mdlAgregarListaProducto").modal('show');
                    accion = 2;
                }
            }, 'pageLength'
            ],
            pageLength: [5, 10, 15, 30, 50, 100],
            pageLength: 10,

            ajax: {
                url: "ajax/listaproductos.ajax.php",
                dataSrc: '',
                type: "POST",
                data: { 'accion': 10 }, //1: LISTAR PRODUCTOS
            },

            responsive: {
                details: {
                    type: 'column'
                }
            },
            columnDefs: [
                {
                    targets: 0,
                    visible: false
                },

                {
                    targets: 12,
                    orderable: false,
                    render: function (data, type, full, meta) {
                        return "<center>" +
                            "<span class='btnEditarListaProducto text-primary px-1' style='cursor:pointer;'>" +
                            "<i class='fas fa-pencil-alt fs-5'></i>" +
                            "</span>" +
                            "<span class='btnEliminarListaProducto text-danger px-1' style='cursor:pointer;'>" +
                            "<i class='fas fa-trash fs-5'></i>" +
                            "</span>" +
                            "</center>"
                    }
                },
            ],

            language: {
                url: "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            }
        });


        $("#ID_Lista_Producto").keyup(function () {
            table.column($(this).data('index')).search(this.value).draw();
        })

        $("#Nombre_Producto").keyup(function () {
            table.column($(this).data('index')).search(this.value).draw();
        })


        $("#btnLimpiarBusqueda").on('click', function () {

            $("#ID_Lista_Producto").val('')
            $("#Nombre_Producto").val('')

            table.search('').columns().search('').draw();
        })

        $('#tbl_lista_productos tbody').on('click', '.btnEditarListaProducto', function () {

            $("#mdlActualizarProducto").modal('show');
            var data = table.row($(this).parents('tr')).data();
            accion = 3;

            $("#ipt_ID_Producto").val(data[1]);
            $("#iptNombreProducto2").val(data[2]);
            $("#iptPrecioProducto2").val(data[3]);
            $("#selProveedor2").val(data[4]);

        })
    });

    document.getElementById("btnGuardarRegistroListaProducto").addEventListener("click", function () {

        var form = document.getElementsByClassName('needs-validation');
        var validation = Array.prototype.filter.call(form, function (form) {
            if (form.checkValidity() === true) {
                console.log("Listo Para Registrar La Lista De Productos")

                Swal.fire({
                    title: 'Esta Seguro De Registrar Esta Lista De Productos?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, Deseo Registrarla',
                    cancelButtonText: 'Cancelar',
                }).then((result) => {

                    if (result.isConfirmed) {
                        var datos = new FormData();
                        datos.append("accion", accion);
                        datos.append("ID_Proveedor", $("#selProveedor1_1").val());
                        datos.append("ID_Proveedor", $("#selProveedor1_2").val());
                        datos.append("ID_Proveedor", $("#selProveedor1_3").val());
                        datos.append("ID_Proveedor", $("#selProveedor1_4").val());
                        datos.append("ID_Proveedor", $("#selProveedor1_5").val());
                        datos.append("ID_Proveedor", $("#selProveedor1_6").val());
                        datos.append("ID_Proveedor", $("#selProveedor1_7").val());
                        datos.append("ID_Proveedor", $("#selProveedor1_8").val());
                        datos.append("ID_Proveedor", $("#selProveedor1_9").val());
                        datos.append("ID_Proveedor", $("#selProveedor1_10").val());

                        if (accion == 2) {
                            var titulo_msj = "El Producto Se Agrego Correctamente"
                        }

                        $.ajax({
                            url: "ajax/productos.ajax.php",
                            method: "POST",
                            data: datos,
                            cache: false,
                            contentType: false,
                            processData: false,
                            dataType: 'json',
                            success: function (respuesta) {
                                if (respuesta == "ok") {
                                    Toast.fire({
                                        icon: 'success',
                                        title: titulo_msj
                                    });

                                    table.ajax.reload();

                                    $("#mdlAgregarListaProducto").modal('hide');

                                    $("#iptNombreProducto").val("");
                                    $("#iptPrecioProducto").val("");
                                    $("#selProveedor").val(0);

                                } else {
                                    Toast.fire({
                                        icon: 'error',
                                        title: 'El Producto No Fue Agregado'
                                    });
                                }
                            }

                        });
                    }
                })


            } else {
                console.log("No Paso La Validacion")
            }

            form.classList.add('was-validated');
        });

    });

    document.getElementById("btnActualizarRegistroProducto").addEventListener("click", function () {

        var form = document.getElementsByClassName('needs-validation');
        var validation = Array.prototype.filter.call(form, function (form) {
            if (form.checkValidity() === true) {
                console.log("Listo Para Actualizar El Producto")

                Swal.fire({
                    title: 'Esta Seguro De Actualizar Este Producto?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, Deseo Actualizarlo',
                    cancelButtonText: 'Cancelar',
                }).then((result) => {

                    if (result.isConfirmed) {
                        var datos = new FormData();
                        datos.append("accion", accion);
                        datos.append("ID_Producto", $("#ipt_ID_Producto").val());
                        datos.append("Nombre", $("#iptNombreProducto2").val());
                        datos.append("Precio", $("#iptPrecioProducto2").val());
                        datos.append("ID_Proveedor", $("#selProveedor2").val());

                        if (accion == 3) {
                            var titulo_msj = "El Producto Se Actualizo Correctamente"
                        }

                        $.ajax({
                            url: "ajax/productos.ajax.php",
                            method: "POST",
                            data: datos,
                            cache: false,
                            contentType: false,
                            processData: false,
                            dataType: 'json',
                            success: function (respuesta) {
                                if (respuesta == "ok") {
                                    Toast.fire({
                                        icon: 'success',
                                        title: titulo_msj
                                    });

                                    table.ajax.reload();

                                    $("#mdlActualizarProducto").modal('hide');

                                    $("#ipt_ID_Producto").val("");
                                    $("#iptNombreProducto2").val("");
                                    $("#iptPrecioProducto2").val("");
                                    $("#selProveedor2").val(0);
                                } else {
                                    Toast.fire({
                                        icon: 'error',
                                        title: 'El Producto No Fue Actualizado'
                                    });
                                }
                            }

                        });
                    }
                })


            } else {
                console.log("No Paso La Validacion")
            }

            form.classList.add('was-validated');
        });

    });



    document.getElementById("btnCancelarRegistroProducto").addEventListener("click", function () {
        $(".needs-validation").removeClass("was-validated");
    })

    document.getElementById("btnCerrarModal").addEventListener("click", function () {
        $(".needs-validation").removeClass("was-validated");
    })

</script>