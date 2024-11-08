const iniciar_sesion = () => {
    let data = new FormData();
    data.append("usuario",$("#usuario").val());
    data.append("password",$("#password").val());
    data.append("metodo",'logeos');
    fetch("../app/controller/login.php", {
        method: "POST",
        body:data
    }).then(respuesta => respuesta.json())
    .then(respuesta => {
        if (respuesta[0]==1) {
            alert(respuesta[1]);
            window.location="home.php";
        }else{
            alert(respuesta[1]);
        }
    }).catch(error => error);

    
}
$('#btn_iniciar').on('click', ()=>{
    iniciar_sesion();
})