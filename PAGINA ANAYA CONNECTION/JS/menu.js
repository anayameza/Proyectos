(function(){
    const openButton = document.querySelector('.nav__menu');
    const menu = document.querySelector('.nav__link');
    const cerrarMenu = document.querySelector('.nav__cerrar');

    openButton.addEventListener('click', ()=>{
        menu.classList.add('nav__link--show');
    });

    cerrarMenu.addEventListener('click', ()=>{
        menu.classList.remove('nav__link--show');
    });
    
    
})();