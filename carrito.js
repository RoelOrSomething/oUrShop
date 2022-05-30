
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

function hacerPedido(){
    console.log("Hago pedido.");
    nombre = document.getElementById('nombrePedido').value;
    apellido = document.getElementById('apellidoPedido').value;
    email = document.getElementById('emailPedido').value;
    sessionStorage.setItem("nombre", nombre);
    sessionStorage.setItem("apellido", apellido);
    sessionStorage.setItem("email", email);
    pedidoJSON = JSON.stringify(sessionStorage);
    console.log(pedidoJSON);

    request= new XMLHttpRequest()
    request.open("POST", "hacerPedido.php", false);
    request.setRequestHeader("Content-type", "application/json");
    request.send(pedidoJSON);

    if (request.response === 200){
        document.getElementById('resultadoPedido').innerHTML = "Pedido exitoso!";
    }

    sessionStorage.removeItem("nombre");
    sessionStorage.removeItem("apellido");
    sessionStorage.removeItem("email");
}