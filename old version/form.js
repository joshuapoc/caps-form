/* Animacion de slide (botones y secciones del formulario)*/
const sig_buttons=document.querySelectorAll(".sig");
const atr_buttons=document.querySelectorAll(".atr");
const btn_sections=document.querySelectorAll(".buttons");
const form_sections=document.querySelectorAll(".form");
for(i=0;i<sig_buttons.length;i++){
    let btn_section=i;
    let form_section=i;
    sig_buttons[i].addEventListener("click", ()=>{
        btn_sections[btn_section].style.transform="translate(-110%)";
        form_sections[form_section].style.transform="translate(-110%)";
        form_sections[form_section+1].style.transform="translate(0)";
        btn_sections[btn_section+1].style.transform="translate(0%)";
    });
}
for(i=atr_buttons.length-1;i>=0;i--){
    let current_btn_section=i;
    let current_form_section=i;
    let prior_form_section=i-1;
    let prior_btn_section=i-1;
    atr_buttons[current_btn_section].addEventListener("click", ()=>{
        btn_sections[prior_btn_section].style.transform="translate(0%)";
        form_sections[prior_form_section].style.transform="translate(0%)";
        btn_sections[current_btn_section].style.transform="translate(110%)";
        form_sections[current_form_section].style.transform="translate(110%)";
    });
}
/* Checked inputs */
const form_label_ticks=document.querySelectorAll(".form .data small");
const form_inputs=document.querySelectorAll(".form .data input");

for(i=0;i<form_inputs.length;i++){
    let field=i;
    form_inputs[field].addEventListener("blur", ()=>{
        if(form_inputs[field].value===""){
            form_label_ticks[field].innerHTML="✖";
        }else{
            form_label_ticks[field].innerHTML="✔";
        }
    });
}

/* Validacion inputs de correo */
const input_correo=document.querySelector("#email");

console.log(regex.test(input_correo.value));

/* Time validator */
/* const input_horas=document.querySelector("#horas-sem");
const borders=document.querySelector("#border");
input_horas.addEventListener("blur", ()=>{
    let re=/[a-zA-Z]+/;
    let re2=/[0-9]+/;
    let values=input_horas.value;
    if(re.test(values)===true){
        borders.classList.remove("border");
        borders.classList.add("error");
    }
    if(re2.test(values)===true && re.test(values)===false){
        borders.classList.remove("error");
        borders.classList.add("border");
    }
}); */

/* Validacion observaciones*/
const textarea=document.querySelector(".observaciones textarea");
textarea.addEventListener("keypress", ()=>{
    let mensaje=document.querySelector(".observaciones .border");
    let num_chars=textarea.value.length+1;
    if(textarea.value.length>=300){
        mensaje.innerHTML="maximo 300 caracteres";
        mensaje.classList.remove("border");
        mensaje.classList.add("error");
    }else{
        textarea.addEventListener("keydown", (e)=>{
            let key=e.key;
            if(key==="Backspace"){
                mensaje.classList.remove("error");
                mensaje.classList.add("border");
                mensaje.innerHTML=num_chars+"/"+300+" caracteres";        
            }
        })
        mensaje.innerHTML=num_chars+"/"+300+" caracteres";
    }
});