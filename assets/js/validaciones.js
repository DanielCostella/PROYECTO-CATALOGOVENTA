$(document).ready(function () {
    // Validación para el formulario de categorías
    $('#formulario-categorias').submit(function(event) {
        event.preventDefault(); // Evita el envío del formulario inicial

        let formValid = true;

        $('#formulario-categorias input[type="text"], #formulario-categorias textarea').each(function() {
            if ($(this).val().trim() === '') {
                alert('El campo ' + $(this).attr('name') + ' no puede estar vacío. Por favor ingrese un valor. - Desarrollado por Daniel Costella');
                $(this).focus();
                formValid = false;
                return false; // Detiene el each para mostrar una alerta a la vez
            }
        });

        if (formValid) {
            this.submit();
        }
    });

    // Validación para el formulario de productos
    $('#formulario-productos').submit(function(event) {
        event.preventDefault(); // Evita el envío del formulario inicial

        let formValid = true;

        // Recorremos cada campo en el formulario de productos
        $('#formulario-productos input[type="text"], #formulario-productos textarea, #formulario-productos select').each(function() {
            if ($(this).val().trim() === '') {
                alert('El campo ' + $(this).attr('name') + ' no puede estar vacío. Por favor ingrese un valor. - Desarrollado por Daniel Costella');
                $(this).focus();
                formValid = false;
                return false; // Detiene el each para mostrar una alerta a la vez
            }
        });

        if (formValid) {
            this.submit();
        }
    });
});