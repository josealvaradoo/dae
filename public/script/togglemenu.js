(function(d){
    d.addEventListener('DOMContentLoaded',function(){
        console.log("La página ya cargó");
        var tglMenuButton = d.querySelector('.toggle-menu span.fa');
        var navMenu = d.querySelector('.nav');
        var tglStatus = false;
        tglMenuButton.addEventListener('click',function(){
            if(tglStatus==false){
                navMenu.classList.add('active');
                tglStatus = true;
            }
            else{
                navMenu.classList.remove('active');
                tglStatus = false;
            }
            console.log("Estás haciendo click en el botón de toggle menu");
        });
    });
})(document);