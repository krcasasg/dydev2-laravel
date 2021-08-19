document.addEventListener("DOMContentLoaded", function(event) {
    if(document.querySelector('#form-usuari')){
        if(document.querySelector('#solo-agente')){
            let solo_agente = document.querySelector('#solo-agente');
            solo_agente.style.display = 'none';
        }
        let input_rol = document.querySelector('#USUARI_Cargo_____b');
        input_rol.addEventListener('change', function(){
            if(input_rol.value == 'agente'){
                document.querySelector('#solo-agente').style.display = 'flex';
            }else{
                document.querySelector('#solo-agente').style.display = 'none'
            }
        });

    }
});
