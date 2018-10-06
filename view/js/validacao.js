 function valid() 
 {
        var idade = $('#idade').val();
        var peso = $('#peso').val();
        var altura = $('#altura').val();
        var nomeCompleto = $('#nomeCompleto').val();
        var sexo =  $('#sexo').val();
        
        
        
        if ((nomeCompleto == "" &&  idade == "" && altura == "" && peso == "" ) || (nomeCompleto == null &&  idade == null && altura == null && peso == null )) 
        {

            
            $('#nomeCompleto').css({'border':'1px solid red'});
            $('#idade').css({'border':'1px solid red'});
            $('#altura').css({'border':'1px solid red'});
            $('#peso').css({'border':'1px solid red'});
           
            
            alert("Alguns Campos não forão Preenchidos ou Prenchidos com valores invalidos:\nNome Completo\nIdade\nAltura\nPeso");  
            
            document.getElementById("nomeCompleto").placeholder = "Digite seu nome completo";
            document.getElementById("idade").placeholder = "Informe a sua idade";
            document.getElementById("altura").placeholder = "Informe sua altura em centimetros";
            document.getElementById("peso").placeholder = "Informe a seu peso em kilogramas";
            
            return false;        
        }
        else if((nomeCompleto == "" &&  idade == "" && altura == "" ) || (nomeCompleto == null &&  idade == null && altura == null ))
        {

            $('#nomeCompleto').css({'border':'1px solid red'});
            $('#idade').css({'border':'1px solid red'});
            $('#altura').css({'border':'1px solid red'});
            $('#peso').css({'border':'1px solid #ced4da'});

            alert("Alguns Campos não forão Preenchidos ou Prenchidos com valores invalidos:\nNome Completo\nIdade\nAltura");
            
            document.getElementById("nomeCompleto").placeholder = "Digite seu nome completo";
            document.getElementById("idade").placeholder = "Informe a sua idade";
            document.getElementById("altura").placeholder = "Informe sua altura em centimetros";

            return false;
        }
        else if((nomeCompleto == "" &&  idade == "" && peso == "" ) || (nomeCompleto == null &&  idade == null && peso == null))
        {
            
            $('#nomeCompleto').css({'border':'1px solid red'});
            $('#idade').css({'border':'1px solid red'});
            $('#peso').css({'border':'1px solid red'});
            $('#altura').css({'border':'1px solid #ced4da'});  

            alert("Alguns Campos não forão Preenchidos ou Prenchidos com valores invalidos:\nNome Completo\nIdade\nPeso");   
            
            document.getElementById("nomeCompleto").placeholder = "Digite seu nome completo";
            document.getElementById("idade").placeholder = "Informe a sua idade";
            document.getElementById("peso").placeholder = "Informe a seu peso em kilogramas";
            return false;
        }
        else if((nomeCompleto == "" &&  altura == "" && peso == "" ) || (nomeCompleto == null &&  altura == null && peso == null))
        {
            $('#nomeCompleto').css({'border':'1px solid red'});
            $('#altura').css({'border':'1px solid red'});
            $('#peso').css({'border':'1px solid red'});
            $('#idade').css({'border':'1px solid #ced4da'});
           
            alert("Alguns Campos não forão Preenchidos ou Prenchidos com valores invalidos:\nNome Completo\nAltura\nPeso");

            document.getElementById("nomeCompleto").placeholder = "Digite seu nome completo";
            document.getElementById("altura").placeholder = "Informe sua altura em centimetros";
            document.getElementById("peso").placeholder = "Informe a seu peso em kilogramas";

            return false;
            
        }
        else if((idade == "" &&  altura == "" && peso == "" ) || (idade == null &&  altura == null && peso == null ))
        {
            $('#nomeCompleto').css({'border':'1px solid #ced4da'});
            $('#idade').css({'border':'1px solid red'});
            $('#altura').css({'border':'1px solid red'});
            $('#peso').css({'border':'1px solid red'});
           
           
            alert("Alguns Campos não forão Preenchidos ou Prenchidos com valores invalidos:\nIdade\nAltura\nPeso");

            document.getElementById("idade").placeholder = "Informe a sua idade";
            document.getElementById("altura").placeholder = "Informe sua altura em centimetros";
            document.getElementById("peso").placeholder = "Informe a seu peso em kilogramas";

            return false;     
        }
        else if((nomeCompleto == "" &&  idade == ""  ) || (nomeCompleto == null && idade == null ))
        {
            $('#nomeCompleto').css({'border':'1px solid red'});
            $('#idade').css({'border':'1px solid red'});
            $('#altura').css({'border':'1px solid #ced4da'});
            $('#peso').css({'border':'1px solid #ced4da'});
           
           
            alert("Alguns Campos não forão Preenchidos ou Prenchidos com valores invalidos:\nNome\nIdade");

            document.getElementById("nomeCompleto").placeholder = "Digite seu nome completo";
            document.getElementById("idade").placeholder = "Informe a sua idade";

            return false;     
        }
        else if((nomeCompleto == "" &&  altura == ""  ) || (nomeCompleto == null && altura == null ))
        {
            $('#nomeCompleto').css({'border':'1px solid red'});
            $('#idade').css({'border':'1px solid #ced4da'});
            $('#altura').css({'border':'1px solid red'});
            $('#peso').css({'border':'1px solid #ced4da'});
           
           
            alert("Alguns Campos não forão Preenchidos ou Prenchidos com valores invalidos:\nNome\nAltura");

            document.getElementById("nomeCompleto").placeholder = "Digite seu nome completo";
            document.getElementById("altura").placeholder = "Informe sua altura em centimetros";

            return false;     
        }
        else if((nomeCompleto == "" &&  peso == ""  ) || (nomeCompleto == null && peso == null ))
        {
            $('#nomeCompleto').css({'border':'1px solid red'});
            $('#idade').css({'border':'1px solid #ced4da'});
            $('#altura').css({'border':'1px solid #ced4da'});
            $('#peso').css({'border':'1px solid red'});
           
           
            alert("Alguns Campos não forão Preenchidos ou Prenchidos com valores invalidos:\nNome\nPeso");

            document.getElementById("nomeCompleto").placeholder = "Digite seu nome completo";
            document.getElementById("peso").placeholder = "Informe a seu peso em kilogramas";

            return false;     
        }
        else if((idade == "" &&  altura == ""  ) || (idade == null && altura == null ))
        {
            $('#nomeCompleto').css({'border':'1px solid #ced4da'});
            $('#idade').css({'border':'1px solid red'});
            $('#altura').css({'border':'1px solid red'});
            $('#peso').css({'border':'1px solid #ced4da'});
           
           
            alert("Alguns Campos não forão Preenchidos ou Prenchidos com valores invalidos:\nIdade\nAltura");

            document.getElementById("idade").placeholder = "Informe a sua idade";
            document.getElementById("altura").placeholder = "Informe sua altura em centimetros";

            return false;     
        }
        else if((idade == "" &&  peso == ""  ) || (idade == null && peso == null ))
        {
            $('#nomeCompleto').css({'border':'1px solid #ced4da'});
            $('#idade').css({'border':'1px solid red'});
            $('#altura').css({'border':'1px solid #ced4da'});
            $('#peso').css({'border':'1px solid red'});
           
           
            alert("Alguns Campos não forão Preenchidos ou Prenchidos com valores invalidos:\nIdade\nPeso");

            document.getElementById("idade").placeholder = "Informe a sua idade";
            document.getElementById("peso").placeholder = "Informe a seu peso em kilogramas";

            return false;     
        }
        else if((altura == "" &&  peso == ""  ) || (altura == null && peso == null ))
        {
            $('#nomeCompleto').css({'border':'1px solid #ced4da'});
            $('#idade').css({'border':'1px solid #ced4da'});
            $('#altura').css({'border':'1px solid red'});
            $('#peso').css({'border':'1px solid red'});
           
           
            alert("Alguns Campos não forão Preenchidos ou Prenchidos com valores invalidos:\nAltura\nPeso");

            document.getElementById("altura").placeholder = "Informe sua altura em centimetros";
            document.getElementById("peso").placeholder = "Informe a seu peso em kilogramas";

            return false;     
        }
        else if((nomeCompleto == "" ) || (nomeCompleto == null))
        {
            $('#nomeCompleto').css({'border':'1px solid red'});
            $('#idade').css({'border':'1px solid #ced4da'});
            $('#altura').css({'border':'1px solid #ced4da'});
            $('#peso').css({'border':'1px solid #ced4da'});
           
           
            alert("Alguns Campos não forão Preenchidos ou Prenchidos com valores invalidos:\nNome");

            document.getElementById("nomeCompleto").placeholder = "Digite seu nome completo";

            return false;     
        }
        else if((idade == "" ) || (idade == null))
        {
            $('#nomeCompleto').css({'border':'1px solid #ced4da'});
            $('#idade').css({'border':'1px solid red'});
            $('#altura').css({'border':'1px solid #ced4da'});
            $('#peso').css({'border':'1px solid #ced4da'});
           
           
            alert("Alguns Campos não forão Preenchidos ou Prenchidos com valores invalidos:\nNome");

            document.getElementById("idade").placeholder = "Informe a sua idade";

            return false;     
        }
        else if((altura == "" ) || (altura == null))
        {
            $('#nomeCompleto').css({'border':'1px solid #ced4da'});
            $('#idade').css({'border':'1px solid #ced4da'});
            $('#altura').css({'border':'1px solid red'});
            $('#peso').css({'border':'1px solid #ced4da'});
           
           
            alert("Alguns Campos não forão Preenchidos ou Prenchidos com valores invalidos:\nAltura");

            document.getElementById("altura").placeholder = "Informe sua altura em centimetros";

            return false;     
        }
        else if((peso == "" ) || (peso == null))
        {
            $('#nomeCompleto').css({'border':'1px solid #ced4da'});
            $('#idade').css({'border':'1px solid #ced4da'});
            $('#altura').css({'border':'1px solid #ced4da'});
            $('#peso').css({'border':'1px solid red'});
           
           
            alert("Alguns Campos não forão Preenchidos ou Prenchidos com valores invalidos:\nPeso");

            document.getElementById("altura").placeholder = "Informe a seu peso em kilogramas";

            return false;     
        }
        else
        {
            $('#nomeCompleto').css({'border':'1px solid #ced4da'});
            $('#idade').css({'border':'1px solid #ced4da'});
            $('#altura').css({'border':'1px solid #ced4da'});
            $('#peso').css({'border':'1px solid #ced4da'});
        }
        
        
}