function irArriba(){
    window.addEventListener('scroll', () => {
        var scroll = document.documentElement.scrollTop;
        console.log(scroll);
        var boton__Arriba = document.getElementById('boton__Arriba');

        if(scroll > 300){
            boton__Arriba.style.right = 20 + "px";
        } else{
            boton__Arriba.style.right = -100 + "px";
        }
    })
}

irArriba();