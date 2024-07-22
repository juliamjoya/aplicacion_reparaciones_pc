$(document).ready(function(){
    $(document).on("click", "#btn_iniciar_sesion", function(e){
        var usuario = document.getElementById("usuario").value;
        var contrasena = document.getElementById("contrasena").value;

        if (usuario === "" || contrasena === "") {
            e.preventDefault();
            alert("Por favor, complete todos los campos.");
        }else{
            e.preventDefault();
            var formData = new FormData($("#form_inicio_sesion")[0]);
            $.ajax({
                url: "../controller/controlador_inicio_sesion.php?op=iniciar_sesion",
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(datos) {
                }
            });
        }
    });
});