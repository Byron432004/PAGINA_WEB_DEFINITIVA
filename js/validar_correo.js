function validarCorreo() {
    // Obtiene el valor del campo de correo
    var correo = document.getElementById('correo').value;

    // Verifica si el correo contiene el símbolo @
    if (correo.indexOf('@') === -1) {
        // Muestra un mensaje de alerta
        alert('Correo electrónico inválido. Asegúrate de incluir el símbolo "@".');

        // Limpia el campo de correo
        document.getElementById('correo').value = '';

        // Devuelve el foco al campo de correo para que el usuario pueda corregirlo fácilmente
        document.getElementById('correo').focus();

        // Detiene el flujo del formulario
        return false;
    }

    // Si todo está bien, permite continuar con el envío del formulario
    return true;
}