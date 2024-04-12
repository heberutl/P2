<script>
    window.onload = function() {
      // Comprobamos si el usuario ha iniciado sesión o no
      var usuarioAutenticado = true; // Esta variable debería ser true si el usuario está autenticado

      // Si el usuario no está autenticado, lo redirigimos a la página de inicio de sesión
      if (!usuarioAutenticado) {
        window.location.href = '../login.php';
      }
    }
  </script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <link href="..\DataTables\Buttons-3.0.0\css\buttons.bootstrap5.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.datatables.net/buttons/3.0.0/css/buttons.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap5.min.css" rel="stylesheet"> 

    <title>Personas</title>
</head>
<body>
    <div class="container">
        <?php include("../navbar.php");?>
        <br>
        <div class="row">        
            <div class="col-md-12">
                <H2>ADMINISTRACIÓN DE PERSONAS</H2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table id="lista_personas" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Ap. Paterno</th>
                            <th>Ap. Materno</th>
                            <th>Sexo</th>
                            <th>CURP</th>
                            <th>FECHAHORA</th>
                            <th width="5%">Eliminar</th>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Modal para insertar nueva sucursal -->
    <div class="modal fade" id="modalInsertar">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-tittle" >
                        Personas | Nuevo Registro
                    </h4>                    
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST" id="persona">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="NOMBRE">Nombre:</label>
                                        <input type="text" class="form-control" id="NOMBRE" name="NOMBRE">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="AP_PATERNO">Apellido Paterno:</label>
                                        <input type="text" class="form-control" id="AP_PATERNO" name="AP_PATERNO" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="AP_MATERNO">Apellido Materno:</label>
                                        <input type="text" class="form-control" id="AP_MATERNO" name="AP_MATERNO" required>
                                    </div> 
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="SEXO">Sexo:</label>
                                        <input type="text" class="form-control" id="SEXO" name="SEXO" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="CURP">Curp:</label>
                                        <input type="text" class="form-control" id="CURP" name="CURP" required>
                                    </div>
                                </div>
                            </div>
                            
                        </form>
                        <div class="modal-footer">
                                <button type="button" class="btn btn-default cerrarModal" data-dismiss="modal" aria-label="close">Cancelar</button>
                                <button type="button" id="btnGuardar" class="btn btn-danger">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/printThis/1.15.0/printThis.min.js" integrity="sha512-d5Jr3NflEZmFDdFHZtxeJtBzk0eB+kkRXWFQqEc1EKmolXjHm2IKCA7kTvXBNjIYzjXfD5XzIjaaErpkZHCkBg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(".cerrarmodal").click(function(){
        $("#modalInsertar").modal('hide')
        });
        
        //Todo lo que este dentro se ejecutara al dar click
        $("#btnGuardar").click(function() {
        Swal.fire({
        title: "¿Guardar registro?",
        showCancelButton: true,
        confirmButtonText: "Aceptar",
        denyButtonText: 'No guardar'
    }).then((result) => {
        if (result.isConfirmed) {
            // Aquí va la lógica para guardar los datos
            var NOMBRE = $("#NOMBRE").val();
            var AP_PATERNO = $("#AP_PATERNO").val();
            var AP_MATERNO = $("#AP_MATERNO").val();
            var SEXO = $("#SEXO").val();
            var CURP = $("#CURP").val();
            
            if(NOMBRE=="" || AP_PATERNO=="" || AP_MATERNO=="") {
                alert("Existen campos vacíos");
            } else {
                $.ajax({
                    url: "insertar_personas.php",
                    type: "POST",
                    data: {
                        NOMBRE: NOMBRE, 
                        AP_PATERNO: AP_PATERNO, 
                        AP_MATERNO: AP_MATERNO, 
                        SEXO: SEXO, 
                        CURP: CURP
                    },
                    success: function(respuesta) {
                        if(respuesta == "ok") {
                            // Cerrar el modal después de agregar el registro
                            $("#modalInsertar").modal("toggle");
                            
                            // Limpiar los campos del formulario
                            $("#NOMBRE").val("");
                            $("#AP_PATERNO").val("");
                            $("#AP_MATERNO").val("");
                            $("#SEXO").val("");
                            $("#CURP").val("");
                            
                            // Mostrar mensaje de éxito con SweetAlert
                            Swal.fire("Guardado!", "", "success");
                            
                            // Recargar los datos de la tabla
                            $("#lista_personas").DataTable().ajax.reload();
                        } else {
                            // Mostrar mensaje de error con SweetAlert
                            Swal.fire("Error", "Ha ocurrido un error mientras se guardaban los datos", "error");
                        }  
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        // Mostrar mensaje de error con SweetAlert
                        Swal.fire("Error", textStatus + ": " + errorThrown, "error");
                    }
                });
            }
        } else if (result.isDenied) {
            Swal.fire("No se guardaron los cambios", "", "info");
        }
    });
});

        
        $(document).ready(function(){
        cargar_tabla();
        $("#modalInsertar").modal("show");
        });
        function cargar_tabla(){
            $("#lista_personas").dataTable({
                language: {"url": "https://cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json"}, // Configuración del idioma
                //"paging":   false,
                responsive: true,
                dom: 'Bfrtilp',
                buttons: [                    
                    {
                        extend: 'excelHtml5',
                        text: '<i class="fa fa-file-excel"></i>',
                        titleAttr: "Exportar a Excel",
                        className: 'btn btn-success'
                    },
                    {
                        extend: 'pdfHtml5',
                        text: '<i class="fa-regular fa-file-pdf"></i>',
                        titleAttr: "Exportar a PDF",
                        className: 'btn btn-danger'
                    },
                    {
                        text: 'Nuevo',
                        action: function () {
                        lanzarModal();
                        },
                        counter:1
                    }
                    
                ],
                "ajax": {
                    "type": "POST",
                    "url": "lista_personas.php",
                    "dataSrc": "",
                    "data":""
                },
                "columns": [
                    { "data": "id" },
                    { "data": "nombre" },
                    { "data": "apPaterno" },
                    { "data": "apMaterno" },
                    { "data": "sexo" },
                    { "data": "curp" },
                    { "data": "fecha" },
                    { "data": "Opciones" }
                ]
            });
        }
        function lanzarModal(){
            $('#modalInsertar').modal('show');
        }

    function Eliminar(ID) {
        Swal.fire({
            title: "¿Está seguro de eliminar registro?",
            text: "No podrá revertir esta acción.",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Sí, eliminarlo"
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: 'eliminar_personas.php',
                    data: { 'ID': ID },
                    success: function (respuesta) {
                        // Recargar los datos de la tabla sin reinicializarla
                        $('#lista_personas').DataTable().ajax.reload();
                        // Mostrar un mensaje de éxito
                        Swal.fire({
                            title: "¡Eliminado!",
                            text: "El registro ha sido eliminado correctamente.",
                            icon: "success"
                        });
                    }
                });
            }
        });
    };
    </script>
    
</body>
</html>