$(document).ready(function(){
    $(document).on("click", "#btn_iniciar_sesion", function(e){
        var usuario = document.getElementById("usuario").value;
        var contrasena = document.getElementById("contrasena").value;

        if (usuario === "" || contrasena === "") {
            e.preventDefault();
            alert("Por favor, complete todos los campos.");

              ///// Swal.fire({
              /////   title: "ERROR",
              /////   text: "Por favor, complete todos los campos.",
              /////   icon: "error",
              /////   //showCancelButton: true,
              /////   confirmButtonColor: "#1C215C",
              /////   //cancelButtonColor: "#d33",
              /////   confirmButtonText: "Continuar..."
              ///// }).then((result) => {
              /////   if (result.isConfirmed) {
              /////       //Redireccionar con los datos capturados para abrir vista
              /////     Swal.fire({
              /////       title: "Deleted!",
              /////       text: "Your file has been deleted.",
              /////       icon: "success"
              /////     });
              /////   }
              ///// });
        }else{
            e.preventDefault();
            var formData = new FormData($("#form_inicio_sesion")[0]);
            $.ajax({
                url: "../controller/controlador_inicio_sesion.php?op=iniciar_sesion",
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                dataType: "json",
                success: function(response) {
                    if (response.status === 'success') {
                        console.log("Inicio de sesión exitoso:", response.data);
                        // Redireccionar o realizar alguna acción
                        //window.location.href = 'ruta_a_vista_deseada.php';
                        // Obtener los valores de nombre, apellido y rol
                        var nombre = encodeURIComponent(response.data.nombres);
                        var apellido = encodeURIComponent(response.data.apellidos);
                        var id_role = encodeURIComponent(response.data.id_role);
                        var rol = encodeURIComponent(response.data.nombre_rol);

                         // Redirigir a Dashboard.php con los valores en la URL
                         //window.location.href = 'dashboard.php?nombre=' + nombre + '&apellido=' + apellido + '&id_role=' + id_role + '&rol=' + rol;
                    } else {
                        console.error("Error en el inicio de sesión:", response.message);
                        alert(response.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Error en la solicitud AJAX:", error);
                    alert("Ocurrió un error, por favor intente nuevamente.");
                }
            });
        }
    });
});