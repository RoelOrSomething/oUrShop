
function agregarCarrito(id,cantidad){
    if(sessionStorage.getItem(id) != null){
        nuevaCant = parseInt(sessionStorage.getItem(id)) + parseInt(cantidad)
        sessionStorage.setItem(id, nuevaCant);
    }else{
        sessionStorage.setItem(id,cantidad);
    }
    console.log(sessionStorage);
}

