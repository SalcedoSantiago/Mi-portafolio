

document.querySelector('.marcadores').addEventListener('click',mostrarOtros);

    

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

    console.log(proyecto);
    

    for (var i = 0; i < proyecto.length; i++) {        
        proyecto[i].style.display = 'block';
    }
}


$(function () {
    
    $('.menu-mobil').click(function(){
        $('.menu').slideToggle(1000);
    })


});