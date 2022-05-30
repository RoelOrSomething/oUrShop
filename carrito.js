
function agregarCarrito(id,cantidad){
    if(sessionStorage.getItem(id) != null){
        nuevaCant = parseInt(sessionStorage.getItem(id)) + parseInt(cantidad)
        sessionStorage.setItem(id, nuevaCant);
    }else{
        sessionStorage.setItem(id,cantidad);
    }
    document.getElementById("cantidadP"+id).value=0;

    carritoJSON = JSON.stringify(sessionStorage);
    console.log(carritoJSON);
}

function mostrarCarrito(){
    var carritoJSON = JSON.stringify(sessionStorage);
    request= new XMLHttpRequest()
    request.open("POST", "listaCarrito.php", false);
    request.setRequestHeader("Content-type", "application/json");
    request.send(carritoJSON);
    document.getElementById('tablaCarrito').innerHTML = request.response;
}
