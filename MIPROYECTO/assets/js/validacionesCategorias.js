var nombre, apellido, edad;
var categoria = document.getElementById("categoria");
var id_categoria = document.getElementById("id_categoria");
var descripcion = document.getElementById("descripcion");
var campos = [0,0,0];

function validarCategorias(){
    if(categoria.value===""){
        campos[0]=1;
    }
    if(id_categoria.value===""){
         campos[1]=1;
    }
    if(descripcion.value===""){
        campos[2]=1;
    }
    alertar(campos);
}

function alertar(a){
    var camposVacios=""; 
    var alertaVacio= 0;
    if(a[0]===1){
        camposVacios+="Categoria, ";
        alertaVacio=1;
    }
    if(a[1]===1){
        camposVacios+="Id Categoria, ";
        alertaVacio=1;
    }
    if(a[2]===1){
        camposVacios+="Descripcion, ";
        alertaVacio=1;
    }
    if(alertaVacio===1){
        alert("Algunos campos se encuenta vacios, debe rellenar los campos: "+camposVacios+" favor de llenarlos antes de proseguir\nJuan Pablo Durante");
    }else{
        alert("Se ha agregado una nueva categoria nuevo\nJuan Pablo Durante");
    }
}