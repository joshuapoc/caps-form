<?php
/* 1. Se redirigira el usuario a la pagina principal en caso de que no haya 
errores de envio. El url nuevo llevara un mensaje de 'enviado' o 'error' en caso
de que hayan exepciones u errores*/
if(isset($_GET['error'])){
    echo "
    <script>
       popup_container.style.visibility='visible';
       popup_message.innerHTML='Error de envio o datos ya existentes';
       popup_message.style.color='red';
       popup_logo.style.animation='girar 4s';
       popup_logo.style.animationDelay='1s';
       window.addEventListener('click',(e)=>{
            if(e.target===popup_x || e.target===popup_container){
                popup_container.style.visibility='hidden';
                popup_logo.style.animation='';
            }
       });
    </script>
    ";
}elseif(isset($_GET['enviado'])){
    echo "
    <script>
       popup_container.style.visibility='visible';
       popup_message.innerHTML='Envio exitoso';
       popup_logo.style.animation='girar 4s';
       popup_logo.style.animationDelay='1s';
       window.addEventListener('click',(e)=>{
            if(e.target===popup_x || e.target===popup_container){
                popup_container.style.visibility='hidden';
                popup_logo.style.animation='';
            }
       });
    </script>
    ";
}
?>