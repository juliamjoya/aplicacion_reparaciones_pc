function init() {
    $("#formulario_modal_operacion").on("submit", function(e){
        guardar(e);
    });
}

$(document).ready(function(){
    $('#listaRegistrosOperacion').DataTable({
        ajax:{
            url:'../controller/controlador_operacion.php?op=listar_operacion',
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
    var formData = new FormData($("#formulario_modal_operacion")[0]);
    $.ajax({
        url: "../controller/controlador_operacion.php?op=guardar_editar_registro_operacion",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos) {
            $('#formulario_modal_operacion')[0].reset();
            $('#modal_registro_operacion').modal('hide');
            //$('#listaRegistrosOperacion').DataTable().ajax.reload();

            // swal.fire(
            //     'Registro Nuevo',
            //     'El registro fue guardado correctamente',
            //     'success'
            // )

            location.reload(); //Recarga la pagina despues de guardar un registro
        }
    });
}

function editar(id_operacion){
    //console.log(id_operacion);
    $('#titulo_modal_operacion').html('Editar Registro');
    $.post("../controller/controlador_operacion.php?op=consultar_registro_operacion",{id:id_operacion},function (data){
        //console.log(data); // para verificar si captura datos. Los captura en formato texto y no en JSON
        data = JSON.parse(data); // Convierte los datos capturados en formato JSON
        $('#id').val(data.id);
        $('#numero_recibido').val(data.numero_recibido);
        $('#descripcion_fallos_pc').val(data.descripcion_fallos_pc);
        $('#repuestos_reparacion').val(data.repuestos_reparacion);
    });
    $('#modal_registro_operacion').modal('show');
}

function eliminar(id_operacion){
    swal.fire({
        title: "Eliminar registro operación",
        text: "¿Esta seguro de eliminar el registro?",
        icon: "error",
        showCancelButton: true,
        confirmButtonText: "Si",
        cancelButtonText: "No",
        reverseButtons: false
    }).then((result) => {
        if(result.isConfirmed) {
            $.post("../controller/controlador_operacion.php?op=eliminar_registro_operacion",{id:id_operacion},function (data){});

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

$(document).on("click", "#btn_nuevo_registro_operacion", function(){
    $('#titulo_modal_operacion').html('Nuevo Registro');
    $('#modal_registro_operacion').modal('show');
});

init();