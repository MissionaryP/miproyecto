var nombre, apellido, edad;
var producto = document.getElementById("producto");
var id_producto = document.getElementById("id_producto");
var descripcion = document.getElementById("descripcion");
var stock = document.getElementById("stock");
var tipo = document.getElementById("tipo");
var precio = document.getElementById("precio");
var campos = [0,0,0,0,0,0];

function validar(){
    if(producto.value===""){
        campos[0]=1;
    }
    if(id_producto.value===""){
         campos[1]=1;
    }
    if(descripcion.value===""){
        campos[2]=1;
    }
    if(stock.value===""){
         campos[3]=1;
    }
    if(tipo.value===""){
         campos[4]=1;
    }
    if(precio.value===""){
         campos[5]=1;
    }
    
    alertar(campos);
}

function alertar(a){
    var camposVacios=""; 
    var alertaVacio= 0;
    if(a[0]===1){
        camposVacios+="Producto, ";
        alertaVacio=1;
    }
    if(a[1]===1){
        camposVacios+="Id Producto, ";
        alertaVacio=1;
    }
    if(a[2]===1){
        camposVacios+="Descripcion, ";
        alertaVacio=1;
    }
    if(a[3]===1){
        camposVacios+="Stock, ";
        alertaVacio=1;
    }
    if(a[4]===1){
        camposVacios+="Tipo, ";
        alertaVacio=1;
    }
    if(a[5]===1){
        camposVacios+="Precio, ";
        alertaVacio=1;
    }
    if(alertaVacio===1){
        alert("Algunos campos se encuenta vacios, debe rellenar los campos: "+camposVacios+" favor de llenarlos antes de proseguir\nJuan Pablo Durante");
    }else{
        alert("Se ha agregado un producto nuevo\nJuan Pablo Durante");
    }
}