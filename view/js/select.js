$(document).ready(function () {
    $("#intensidade").on('change', function () {
        $('#exercicio').html('');
        var exercicios = [];
        if ($('#intensidade').val() == 2) {
            exercicios = ['Caminhada', 'Passear com o cachorro', 'Ir ao mercado a pé','Fazer uma aula de alongamento'];
            var novosExercicios = '';

            exercicios.forEach(function(valor){
                novosExercicios += '<option value="' + valor + '">' + valor + '</option>';
            });

            $('#exercicio').html(novosExercicios);

            $('#exercicio').removeAttr('disabled');
        }
        else if ($('#intensidade').val() == 3) {
            exercicios = ['Praticar um esporte no lazer', 'Pedalar sem ficar ofegante', 'Correr sem ficar ofegante', 'Treinar musculação em circuito'];
            var novosExercicios = '';

            exercicios.forEach(function(valor){
                novosExercicios += '<option value="' + valor + '">' + valor + '</option>';
            });

            $('#exercicio').html(novosExercicios);

            $('#exercicio').removeAttr('disabled');
        }
        else if ($('#intensidade').val() == 4) {
            exercicios = ['HIIT', 'Correr até ficar ofegante', 'Pedalar até ficar ofegante', 'Treinar musculação intensa', 'Treinar sprints em esportes'];
            var novosExercicios = '';

            exercicios.forEach(function(valor){
                novosExercicios += '<option value="' + valor + '">' + valor + '</option>';
            });

            $('#exercicio').html(novosExercicios);

            $('#exercicio').removeAttr('disabled');
        }
    });
})