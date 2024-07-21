/* Animacion de slide (botones y secciones del formulario)*/
const sig_buttons=document.querySelectorAll(".sig");
const atr_buttons=document.querySelectorAll(".atr");
const form_sections=document.querySelectorAll(".form");
for(i=0;i<sig_buttons.length;i++){
    let form_section=i;
    sig_buttons[i].addEventListener("click", ()=>{
        form_sections[form_section].style.transform="translate(-110%)";
        form_sections[form_section+1].style.transform="translate(0)";
    });
}
for(i=atr_buttons.length-1;i>=0;i--){
    let current_btn_section=i;
    let current_form_section=i;
    let prior_form_section=i-1;
    atr_buttons[current_btn_section].addEventListener("click", ()=>{
        form_sections[prior_form_section].style.transform="translate(0%)";
        form_sections[current_form_section].style.transform="translate(110%)";
    });
}
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
const validador_id=/^([A-Z]{1}|[0-9]{4})([0-9]{4}|[0-9]{7})([A-Z]{1})$/;
input_id.addEventListener("input",()=>{
    let input_id_value=input_id.value.toUpperCase().trim();
    if(validador_id.test(input_id_value)===false){
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
const validador_textos=/^[a-zA-Zñ]+$/;
for(i=0;i<input_textos.length;i++){
    let input_texto=input_textos[i];
    let border_texto=border_textos[i];
    input_textos[i].addEventListener("input",()=>{
        if(validador_textos.test(input_texto.value)===true){
            border_texto.classList.replace("error","border");
            border_texto.innerHTML="✔";
        }else{
            border_texto.classList.replace("border","error");
            border_texto.innerHTML="Solo caracteres alfabeticos";
        }
    });
}

/* Validacion inputs de correo */
const input_correo=document.querySelector(".email input");
const border_correo=document.querySelector(".email .border");
const validador_correo=/^[a-zA-z0-9-_\.]+@[a-zA-Z]+\.[a-z]+$/;
input_correo.addEventListener("input", ()=>{
    if(validador_correo.test(input_correo.value)===true){
        border_correo.innerHTML="✔";
        border_correo.classList.replace("error","border");
    }else{
        border_correo.innerHTML="Formato incorrecto";
        border_correo.classList.replace("border","error");
    }
});

/* Validacion inputs de telefono */
const input_tel=document.querySelector(".telefono input");
const border_tel=document.querySelector(".telefono .border");
const validador_tel=/^([\+][0-9]+|[0-9])+$/;
input_tel.addEventListener("input",()=>{
    if(validador_tel.test(input_tel.value)===true){
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
const validador_numeros=/^[0-9]+$/;
for(i=0;i<input_numeros.length;i++){
    let input_numero=input_numeros[i];
    let border_numero=border_numeros[i];
    input_numeros[i].addEventListener("input",()=>{
        if(validador_numeros.test(input_numero.value)===true){
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
    let num_chars=textarea.value.length;
    let mensaje=document.querySelector(".observaciones .border");
    let insertion=e.inputType;
    if(insertion=="insertText" || insertion=="insertLineBreak" || insertion=="deleteContentBackward"){
        mensaje.innerHTML=num_chars+"/300 caracteres";
    }
    console.log(num_chars);
});