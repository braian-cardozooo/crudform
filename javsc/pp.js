const form = document.querySelector('form');
const resultadosDiv = document.getElementById('resultados');

form.addEventListener('submit', function(e) {
    e.preventDefault();

    const correo = form.correo.value;
    if (correo.trim() === '') {
        resultadosDiv.innerHTML = 'Por favor, ingrese un correo electrónico válido.';
        return;
    }

    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                resultadosDiv.innerHTML = xhr.responseText;
            } else {
                resultadosDiv.innerHTML = 'Error en la solicitud: ' + xhr.status;
            }
        }
    };

    xhr.open('GET', 'buscar_registros.php?correo=' + encodeURIComponent(correo), true);
    xhr.send();
});
function limpiarFormulario() {
    document.getElementById("miFormulario").reset();
}