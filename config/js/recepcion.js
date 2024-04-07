function init() {
    $("#formulario_modal_recepcion").on("submit", function(e){
        guardar(e);
    });
}

$(document).ready(function(){
    // $('#listaRegistrosRecepcion').DataTable({
    //     serverSide:true,
    //     processing:true,
    //     paging:true,
    //     order:[],
    //     ajax:{
    //         url:'../controller/controlador_recepcion.php?op=listar_recepcion',
    //         type:'post',
    //     },
    //     columnsDefs:[{
    //         target:[0,6],
    //         orderable:false,
    //     }]
    // });

    $('#listaRegistrosRecepcion').DataTable({
        ajax:{
            url:'../controller/controlador_recepcion.php?op=listar_recepcion',
            type:'post',
        },
        processing: true,
        language: {
            info: 'Mostrando paginas _PAGE_ de _PAGES_',
            infoEmpty: 'Mostrando un total de 0 registros',
            infoFiltered: '(filtrado de un total de _MAX_ registros)',
            lengthMenu: 'Mostrando _MENU_ registros por pagina',
            zeroRecords: 'No se encontraron resultados',
            search: 'Buscar'
        }
    });
});

function guardar(e){
    e.preventDefault();
    var formData = new FormData($("#formulario_modal_recepcion")[0]);
    $.ajax({
        url: "../controller/controlador_recepcion.php?op=guardar_editar_registro_recepcion",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos) {
            $('#formulario_modal_recepcion')[0].reset();
            $('#modal_registro_recepcion').modal('hide');
            //$('#listaRegistrosRecepcion').DataTable().ajax.reload();

            // swal.fire(
            //     'Registro Nuevo',
            //     'El registro fue guardado correctamente',
            //     'success'
            // )

            location.reload(); //Recarga la pagina despues de guardar un registro
        }
    });
}

function editar(id_recepcion){
    //console.log(id_recepcion);
    $('#titulo_modal_recepcion').html('Editar Registro');
    $.post("../controller/controlador_recepcion.php?op=consultar_registro_recepcion",{id:id_recepcion},function (data){
        //console.log(data); // para verificar si captura datos. Los captura en formato texto y no en JSON
        data = JSON.parse(data); // Convierte los datos capturados en formato JSON
        $('#id').val(data.id);
        $('#numero_recibido').val(data.numero_recibido);
        $('#estado_pc').val(data.estado_pc);
        $('#marca_pc').val(data.marca_pc);
        $('#nombre_cliente').val(data.nombre_cliente);
        $('#telefono_cliente').val(data.telefono_cliente);
        $('#codigo_operario').val(data.codigo_operario);
    });
    $('#modal_registro_recepcion').modal('show');
}

function eliminar(id_recepcion){
    swal.fire({
        title: "Eliminar registro recepcion",
        text: "¿Esta seguro de eliminar el registro?",
        icon: "error",
        showCancelButton: true,
        confirmButtonText: "Si",
        cancelButtonText: "No",
        reverseButtons: false
    }).then((result) => {
        if(result.isConfirmed) {
            $.post("../controller/controlador_recepcion.php?op=eliminar_registro_recepcion",{id:id_recepcion},function (data){});

            location.reload(); //Recarga la pagina despues de eliminar un registro

            /* DataTable.destroy();
            DataTable.ajax.reload(); */
            

            // swal.fire(
            //     'Registro Eliminado',
            //     'El registro fue eliminado exitosamente',
            //     'success'
            // )
        }
    })
}

$(document).on("click", "#btn_nuevo_registro_recepcion", function(){
    $('#titulo_modal_recepcion').html('Nuevo Registro');
    $('#modal_registro_recepcion').modal('show');
});

init();