$(document).ready(function () {
    $("#intensidade").on('change', function () {
        $('#exercicio').html('');
        var exercicios = [];
        if ($('#intensidade').val() == 1) {
            exercicios = ['Nenhum exercício disponível'];
            var novosExercicios = '';

            exercicios.forEach(function(valor){
                novosExercicios += '<option value="' + valor + '">' + valor + '</option>';
            });

            $('#exercicio').html(novosExercicios);
            
        }        
        if ($('#intensidade').val() == 2) {
            exercicios = ['Caminhada', 'Passear com o cachorro', 'Ir ao mercado a pé', 'Fazer uma aula de alongamento'];
            var novosExercicios = '';

            exercicios.forEach(function(valor){
                novosExercicios += '<option value="' + valor + '">' + valor + '</option>';
            });

            $('#exercicio').html(novosExercicios);

            $('#exercicio').removeAttr('disabled');
        }
        else if ($('#intensidade').val() == 3) {
            exercicios = ['Praticar esporte por lazer', 'Pedalar sem ficar ofegante', 'Correr sem fiar ofegante', 'Treinar musculação em ciruito'];
            var novosExercicios = '';

            exercicios.forEach(function(valor){
                novosExercicios += '<option value="' + valor + '">' + valor + '</option>';
            });

            $('#exercicio').html(novosExercicios);

            $('#exercicio').removeAttr('disabled');
        }
        else if ($('#intensidade').val() == 4) {
            exercicios = ['Praticar HIIT', 'Correr até ficar ofegante', 'Musculação intensa', 'Treinar sprints'];
            var novosExercicios = '';

            exercicios.forEach(function(valor){
                novosExercicios += '<option value="' + valor + '">' + valor + '</option>';
            });

            $('#exercicio').html(novosExercicios);

            $('#exercicio').removeAttr('disabled');
        }
    });
})