
const marcador = document.querySelector('.marcadores');
const formulario = document.querySelector('#formulario');

if ( marcador ){
    marcador.addEventListener('click',mostrarOtros);
    formulario.addEventListener('submit', llenarFormulario );

}



function mostrarOtros(e){
    e.preventDefault();
    
    var marcador = document.querySelectorAll('.marcadores');
    var boton = e.target.childNodes[0].data;
   
    var marcadores = marcador[0].children;

    var html_css = document.querySelectorAll('.html-css');
    var php_js = document.querySelectorAll('.php-js');
  
    if (boton === 'Html/css' || boton === "php/js/mysql" || boton === 'Todos' ){
        for(var i=0 ; i < marcadores.length; i++){
        marcador[0].children[i].classList.remove('seleccionado');
        }  
    }   
    if (boton === 'Html/css'){
        e.target.classList.add('seleccionado');
        mostrarTodos();
        php_js.forEach((data) => {
            data.style.display = 'none';
        })
      
    }
    if (boton === "php/js/mysql"){
        e.target.classList.add('seleccionado');
        mostrarTodos();
        html_css.forEach((data) => {
            data.style.display = 'none';
        })
        
    }
    if(boton === 'Todos'){
        e.target.classList.add('seleccionado');
        mostrarTodos();
    }
   
}

function mostrarTodos(){
    var proyectos = document.querySelectorAll('.contenedor-proyectos');
    var proyecto = proyectos[0].children;

   
    

    for (var i = 0; i < proyecto.length; i++) {        
        proyecto[i].style.display = 'block';
    }
}
function llenarFormulario(e){
    e.preventDefault();
    var nombre = document.querySelector('#name').value,
        email = document.querySelector('#email').value, 
        telefono = document.querySelector('#telefono').value,
        mensaje = document.querySelector('#mensaje').value;
    
    if(nombre === '' || email === '' || telefono === '' || mensaje === ''){
        Swal.fire({
            title: 'Error!',
            text: 'Debes llenar todos los campos',
            icon: 'error',
            confirmButtonText: 'Ok'
        })
    }else{
        var datos = new FormData();
        datos.append('nombre', nombre);
        datos.append('email', email);
        datos.append('telefono', telefono);
        datos.append('mensaje', mensaje);
        datos.append('accion','enviar');

        enviarFormulario(datos);
    }

}

function enviarFormulario(datos){

    var xhr = new XMLHttpRequest();

    xhr.open('POST','./includes/modelos/modelo-contacto.php',true);

    return ;

    xhr.onload = function(){
        if(this.status === 200){
            var respuesta = JSON.parse(xhr.responseText)
            var correcto = respuesta.respuesta;
            if(correcto === 'correcto'){
                Swal.fire({
                    title: 'Se ha enviado correctamente!',
                    text: 'muchas gracias!!',
                    icon: 'success',
                    confirmButtonText: 'Ok'
                }).then((result) => {
                    var contenedor = document.querySelector('.contenedor-contacto');

                    var resultado = document.createElement('div');
                    resultado.classList.add('correcto');
                    resultado.innerHTML = 'El mensaje fue enviado correctamente';
                    formulario.remove();
                    contenedor.appendChild(resultado);
                });
            }
        }else{
            Swal.fire({
                title: 'Error!',
                text: 'Error 404',
                icon: 'error',
                confirmButtonText: 'Ok'
            })
        }
    }
    xhr.send(datos)
}




const button = document.querySelector('.menu-mobil');

console.log('button',button);

button.addEventListener('click', function(){
    document.querySelector('.menu').classList.toggle("hidden")
})


