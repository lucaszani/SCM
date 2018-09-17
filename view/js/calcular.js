document.getElementById("btnCalcular").onclick = function(){
	
	var altura = document.getElementById("altura").value
    var idade = document.getElementById("idade").value;
    var peso = document.getElementById("peso").value;
    var sexo = document.getElementById("sexo").checked;

    var elem = document.getElementById("intensidade"),
		selectedNode = elem.options[elem.selectedIndex].value;
    
    
    var cte = 0;    
    
	console.log(sexo);

	 if(sexo == true){
        if(idade >= 19){
            if(selectedNode == 1){
            }
            else if(selectedNode == 2){
                cte = ((662-9.53) * (idade) + 1.11 * (15.91 * peso) + (539.6 * altura));
            }
            else if(selectedNode == 3){
                cte = ((662-9.53) * (idade) + 1.25 * (15.91 * peso) + (539.6 * altura));
            }
            else if(selectedNode == 4){
                cte = ((662-9.53) * (idade) + 1.48 * (15.91 * peso) + (539.6 * altura));
            }
            else {
                console.log("Selecione um exercício")
            }
        }
        else if (idade < 19 && idade > 0){ 
            if(selectedNode == 1){
                cte = ((885.5-61.9) * (idade) + 1 * ((26.7 * peso) + (903 * altura)) + 25);
            }
            else if(selectedNode == 2){
                cte = ((885.5-61.9) * (idade) + 1.13 * ((26.7 * peso) + (903 * altura)) + 25);
            }
            else if(selectedNode == 3){
                cte = ((885.5-61.9) * (idade) + 1.26 * ((26.7 * peso) + (903 * altura)) + 25);
            }
            else if(selectedNode == 4){
                cte = ((885.5-61.9) * (idade) + 1.42 * ((26.7 * peso) + (903 * altura)) + 25);
            }
            else{
                console.log("Selecione um exercício")
            }
        }
        else{
            console.log("informe sua idade");
        }
    }
    else if (sexo == false){
        if(idade >= 19){
            if(selectedNode == 1){
                cte = ((354-6.91) * (idade) + 1 * (9.36 * peso) + (726 * altura));
            }
            else if(selectedNode == 2){
                cte = ((354-6.91) * (idade) + 1.12 * (9.36 * peso) + (726 * altura));
            }
            else if(selectedNode == 3){
                cte = ((354-6.91) * (idade) + 1.27 * (9.36 * peso) + (726 * altura));
            }
            else if(selectedNode == 4){
                cte = ((354-6.91) * (idade) + 1.45 * (9.36 * peso) + (726 * altura));
            }
            else{
                console.log("Selecione um exercício");
            }
        }
        else if(idade < 19 && idade > 0){
            if (selectedNode == 1){
                cte = ((135.3 - 30.8) * (idade) + 1 * ((10 * peso) + (934 * altura) + 25)); 
            }
            else if (selectedNode == 2){
                cte = ((135.3 - 30.8) * (idade) + 1.16 * ((10 * peso) + (934 * altura) + 25)); 
            }
            else if (selectedNode == 3){
                cte = ((135.3 - 30.8) * (idade) + 1.31 * ((10 * peso) + (934 * altura) + 25)); 
            }
            else if (selectedNode == 4){
                cte = ((135.3 - 30.8) * (idade) + 1.56 * ((10 * peso) + (934 * altura) + 25)); 
            }
            else{
                console.log("Informe a sua idade");
            }
        }
    }   
    console.log(cte);
}
