function habilitar(){
    text_1 = document.getElementById("text_1").value;
    text_2 = document.getElementById("text_2").value;
    text_3 = document.getElementById("text_3").value;
    text_4 = document.getElementById("text_4").value;
    val = 0;

    if(text_1 == ""){
        val++;
    }
    if(text_2 == ""){
        val++;
    }
    if(text_3 == ""){
        val++;
    }
    if(text_4 == ""){
        val++;
    }
    if(val == 0){
        document.getElementById("boton").disabled = false;
    } else{
        document.getElementById("boton").disabled = true;
    }
}

document.getElementById("text_1").addEventListener("keyup", habilitar);
document.getElementById("text_2").addEventListener("keyup", habilitar);
document.getElementById("text_3").addEventListener("keyup", habilitar);
document.getElementById("text_4").addEventListener("keyup", habilitar);