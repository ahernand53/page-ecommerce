/*=============================================
                    PLANTILLA
=============================================*/

$.ajax({
    url:"ajax/plantilla.ajax.php",
    success: function (response) {
        let barra_superior = JSON.parse(response).barra_superior;
        let color_fondo = JSON.parse(response).color_fondo;
        let color_texto = JSON.parse(response).color_texto;
        let texto_superior = JSON.parse(response).texto_superior;
        // let fecha = JSON.parse(response).fecha;
        // let icono  = JSON.parse(response).icono;
        // let logo  = JSON.parse(response).logo;
        // let redes_sociales = JSON.parse(JSON.parse(response).redes_sociales);

        $(".backColor, .backColor a").css({
            "background": color_fondo,
            "color": color_texto
        });

        $(".barraSuperior, .barraSuperior a").css({
            "background": barra_superior,
            "color": texto_superior
        });
    }
});