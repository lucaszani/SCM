document.getElementById("btnCalcular").onclick = function(){
	
	var nome = document.getElementById("nomeCompleto").value;
	var altura = parseInt(document.getElementById("altura").value);
    var idade = parseInt(document.getElementById("idade").value);
    var peso = parseInt(document.getElementById("peso").value);
    var sexo = document.getElementById("sexo").checked;

    var elem = document.getElementById("intensidade"),
		selectedNode = parseInt(elem.options[elem.selectedIndex].value);

    
    altura = (altura/100);
    console.log(altura);
    console.log(sexo);
    var cte = 0;   
    
	 if(sexo == true){
        if(idade >= 19){
            if(selectedNode == 1){
            	cte = (662-9.53 * idade + 1 * (15.91 * peso + 539.6 * altura));
            }
            else if(selectedNode == 2){
                cte = (662-9.53 * idade + 1.11 * (15.91 * peso + 539.6 * altura));
            }
            else if(selectedNode == 3){
                cte = (662-9.53 * idade + 1.25 * (15.91 * peso + 539.6 * altura));
            }
            else if(selectedNode == 4){
                cte = (662-9.53 * idade + 1.48 * (15.91 * peso + 539.6 * altura));
            }
        }
        else if (idade < 19 && idade > 0){ 
            if(selectedNode == 1){
                cte = (88.5 - 61.9 * idade + 1 * (26.7 * peso + 903 * altura) + 25);
            }
            else if(selectedNode == 2){
                cte = (88.5 - 61.9 * idade + 1.13 * (26.7 * peso + 903 * altura) + 25);
            }
            else if(selectedNode == 3){
                cte = (88.5 - 61.9 * idade + 1.26 * (26.7 * peso + 903 * altura) + 25);
            }
            else if(selectedNode == 4){
                cte = (88.5 - 61.9 * idade + 1.42 * (26.7 * peso + 903 * altura) + 25);
            }
        }
    }

    else{
        if(idade >= 19){
            if(selectedNode == 1){
                cte = (354-6.91 * idade + 1 * (9.36 * peso + 726 * altura));
            }
            else if(selectedNode == 2){
                cte = (354-6.91 * idade + 1.12 * (9.36 * peso + 726 * altura));
            }
            else if(selectedNode == 3){
                cte = (354-6.91 * idade + 1.27 * (9.36 * peso + 726 * altura));
            }
            else if(selectedNode == 4){
                cte = (354-6.91 * idade + 1.45 * (9.36 * peso + 726 * altura));
            }
        }
        else if(idade < 19 && idade > 0){
            if (selectedNode == 1){
                cte = (135.3 - 30.8 * idade + 1 * (10 * peso + 934 * altura) + 25); 
            }
            else if (selectedNode == 2){
                cte = (135.3 - 30.8 * idade + 1.16 * (10 * peso + 934 * altura) + 25); 
            }
            else if (selectedNode == 3){
                cte = (135.3 - 30.8 * idade + 1.31 * (10 * peso + 934 * altura) + 25); 
            }
            else if (selectedNode == 4){
                cte = (135.3 - 30.8 * idade + 1.56 * (10 * peso + 934 * altura) + 25); 
            }
        }
    }

    cte = cte.toFixed(2);

    alert("Nome: " + nome +  "\nCalorias Consumidas: " +  cte);
}