/* Checked inputs */
const form_label_ticks=document.querySelectorAll(".form .data small");
const form_inputs=document.querySelectorAll(".form .data input");
for(i=0;i<form_inputs.length;i++){
    let field=i;
    form_inputs[field].addEventListener("blur", ()=>{
        if(form_inputs[field].value!==""){
            form_label_ticks[field].style.color="var(--dark-purple)";
        }
    });
}

/* Validacion DNI-NIE */
const input_id=document.querySelector("#dni-nie");
const id_border=document.querySelector(".id .border");
const regex_id=/^([A-Z]{1}|[0-9]{4})([0-9]{4}|[0-9]{7})([A-Z]{1})$/;
let validador_id=false;
input_id.addEventListener("input",()=>{
    let input_id_value=input_id.value.toUpperCase().trim();
    if(regex_id.test(input_id_value)===false){
        id_border.classList.replace("border","error");
        id_border.innerHTML="Formato incorrecto";
    }else{
        id_border.classList.replace("error","border");
        id_border.innerHTML="✔";
    }
});

/* Validacion tipo texto*/
const input_textos=document.querySelectorAll(".texto input");
const border_textos=document.querySelectorAll(".texto .border");
const regex_textos=/^[a-zA-Zñ ]+$/;
for(i=0;i<input_textos.length;i++){
    let input_texto=input_textos[i];
    let border_texto=border_textos[i];
    input_textos[i].addEventListener("input",()=>{
        if(regex_textos.test(input_texto.value)===false){
            border_texto.classList.replace("border","error");
            border_texto.innerHTML="Solo caracteres alfabeticos";
        }else{
            border_texto.classList.replace("error","border");
            border_texto.innerHTML="✔";
        }
    });
}

/* Validacion inputs de correo */
const input_correo=document.querySelector(".email input");
const border_correo=document.querySelector(".email .border");
const regex_correo=/^[a-zA-z0-9-_\.]+@[a-zA-Z]+\.[a-z]+$/;
input_correo.addEventListener("input", (e)=>{
    e.preventDefault();
    if(regex_correo.test(input_correo.value)===false){
        border_correo.innerHTML="Formato incorrecto";
        border_correo.classList.replace("border","error");
    }else{
        border_correo.innerHTML="✔";
        border_correo.classList.replace("error","border");
    }
});

/* Validacion inputs de telefono */
const input_tel=document.querySelector(".telefono input");
const border_tel=document.querySelector(".telefono .border");
const regex_tel=/^([\+][0-9]+|[0-9])+$/;
input_tel.addEventListener("input",()=>{
    if(regex_tel.test(input_tel.value)===true){
        border_tel.innerHTML="✔";
        border_tel.classList.replace("error","border");
    }else{
        border_tel.innerHTML="Solo caracteres numericos";
        border_tel.classList.replace("border","error");
    }
});

/* Validacion inputs de tipo numero*/
const input_numeros=document.querySelectorAll(".numero input");
const border_numeros=document.querySelectorAll(".numero .border");
const regex_numeros=/^[0-9]+$/;
for(i=0;i<input_numeros.length;i++){
    let input_numero=input_numeros[i];
    let border_numero=border_numeros[i];
    input_numeros[i].addEventListener("input",()=>{
        if(regex_numeros.test(input_numero.value)===true){
            border_numero.classList.replace("error","border");
            border_numero.innerHTML="✔";
        }else{
            border_numero.classList.replace("border","error");
            border_numero.innerHTML="Solo caracteres numericos";
        }
    });
}

/* Validacion observaciones*/
const textarea=document.querySelector(".observaciones textarea");
textarea.addEventListener("input",(e)=>{
    let label_tick_observaciones=document.querySelector(".observaciones small");
    let num_chars=textarea.value.length;
    let mensaje=document.querySelector(".observaciones .border");
    let insertion=e.inputType;
    if(insertion=="insertText" || insertion=="insertLineBreak" || insertion=="deleteContentBackward"){
        mensaje.innerHTML=num_chars+"/300 caracteres";
    }
    textarea.addEventListener("blur",()=>{
        if(textarea.value!==""){
            label_tick_observaciones.style.color="var(--dark-purple)";
        }
    });
});
/* Eventos de modal (alert personalizado)*/
const popup_x=document.querySelector(".popup-message .exit");
const popup_container=document.querySelector(".popup-container");
const popup_logo=document.querySelector(".logo");
const popup_message=document.querySelector(".popup-message strong");
const submit_input=document.querySelector("#enviar");
const borders=document.querySelectorAll(".data .border");
const inputs=document.querySelectorAll(".data input");
submit_input.addEventListener("click",(e)=>{
    let errores=0;
    for(i=0;i<borders.length;i++){
        if(borders[i].className==="error"){
            errores+=1;
        }
    }
    for(i=0;i<inputs.length;i++){
        if(inputs[i].value===""){
            errores+=1;
        }
    }
    if(errores>0){
        e.preventDefault();
        popup_container.style.visibility="visible";
        popup_message.innerHTML=errores+" campos vacios o incorrectos";
        popup_logo.style.animation="girar 4s";
        popup_logo.style.animationDelay="1s";
        window.addEventListener("click",(e)=>{
            if(e.target===popup_x || e.target===popup_container){
                popup_container.style.visibility="hidden";
                popup_message.innerHTML="";
                popup_logo.style.animation="";
                popup_logo.style.animationDelay="";
            }
        });
    }
});
/* Animacion de slide (botones y secciones del formulario)*/
const sig_buttons=document.querySelectorAll(".sig");
const atr_buttons=document.querySelectorAll(".atr");
const form_sections=document.querySelectorAll(".form");
for(i=0;i<sig_buttons.length;i++){
    let form_section=i;
    sig_buttons[i].addEventListener("keydown",(e)=>{
        if(e.key==="Tab"){
            e.preventDefault();
        }else{
            
        }
    });
}

function slide_next(form_iteration){
    form_sections[form_iteration].style.transform="translate(-110%)";
    form_sections[form_iteration+1].style.transform="translate(0)";
}




/* sig_buttons[i].addEventListener("click", ()=>{
    form_sections[form_section].style.transform="translate(-110%)";
    form_sections[form_section+1].style.transform="translate(0)";
}); */





for(i=0;i<atr_buttons.length;i++){
    let current_form_section=i+1;
    let prior_form_section=i;
    atr_buttons[i].addEventListener("click",()=>{
        form_sections[current_form_section].style.transform="translate(110%)";
        form_sections[prior_form_section].style.transform="translate(0%)";
    });
}
/* sig_buttons[0].addEventListener("keydown",(e)=>{
    if(e.key==="Tab"){
        e.preventDefault();
    }
}); */