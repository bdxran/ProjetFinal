window.onload=function(){
    var bouton = document.getElementById('button_navbar_js');
    var nav = document.getElementById('nav');
    bouton.onclick = function(e){
        if(nav.style.display=="block"){
            nav.style.display="none";
        }else{
            nav.style.display="block";
        }
    };
};
