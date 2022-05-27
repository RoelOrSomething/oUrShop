let imagenes = ["./imagenes/carru1.png", "./imagenes/carru2.png", "./imagenes/carru3.jpg"]
let size = imagenes.length;
let pos = 0;

function preImg(){
    pos = pos - 1;
    if(pos < 0){
        pos = pos + size;
    }
    pos = pos % size;
    document.getElementById("imagen").src=imagenes[pos];
    console.log(pos)
}

function nextImg(){
    pos = (pos + 1) % size;
    document.getElementById("imagen").src=imagenes[pos];
    console.log(pos)
}