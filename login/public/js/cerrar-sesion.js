const cerrar_sesion = () => {
    let cerrar = document.getElementById('cerrar').value;
    let data = new FormData();
    data.append('cerrar',cerrar);
    data.append('action','cerrar');
    fetch("../app/controller/cerrar-sesion.php", {
        method: 'POST',
        body: data
    }).then(respuesta => respuesta.json())
    .then(respuesta => {
        if (respuesta[0] == 1) {
            alert(`${respuesta[1]}`);
            window.location = "./login.php"; // Redirigir al listado después de la actualización
        }
    });
}
document.getElementById('cerrar').addEventListener('click',() => {
    cerrar_sesion();
});