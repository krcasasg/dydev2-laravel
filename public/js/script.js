document.addEventListener("DOMContentLoaded", function(event) {
    let input_rol = document.querySelector('#USUARI_Cargo_____b');
    console.log(input_rol.value);
    if(input_rol.value == 'agente'){
        document.querySelector('#solo-agente').style.display = 'flex';
    }else{
        let solo_agente = document.querySelector('#solo-agente');
        solo_agente.style.display = 'none';
    }

    if(document.querySelector('#form-usuari')){

        input_rol.addEventListener('change', function(){
            if(input_rol.value == 'agente'){
                document.querySelector('#solo-agente').style.display = 'flex';
            }else{
                document.querySelector('#solo-agente').style.display = 'none'
            }
        });

    }
});
