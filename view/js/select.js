$(document).ready(function () {
    $("#intensidade").on('change', function () {
        $('#exercicio').html('');
        var exercicios = [];
        if ($('#intensidade').val() == 1) {
            exercicios = ['Caminhada', 'Supino 50% 1 RM', 'Rosca Direta 50% 1 RM'];
            var novosExercicios = '';

            exercicios.forEach(function(valor){
                novosExercicios += '<option value="' + valor + '">' + valor + '</option>';
            });

            $('#exercicio').html(novosExercicios);

            $('#exercicio').removeAttr('disabled');
        }
        else if ($('#intensidade').val() == 2) {
            exercicios = ['Corrida 60/75% FC', 'Supino 60/70% 1 RM', 'Puxador Alto 60/70% 1 RM'];
            var novosExercicios = '';

            exercicios.forEach(function(valor){
                novosExercicios += '<option value="' + valor + '">' + valor + '</option>';
            });

            $('#exercicio').html(novosExercicios);

            $('#exercicio').removeAttr('disabled');
        }
        else if ($('#intensidade').val() == 3) {
            exercicios = ['Corrida 76/90% FC', 'Supino 4x até falha', 'Extensão de cotovelo 4x até falha'];
            var novosExercicios = '';

            exercicios.forEach(function(valor){
                novosExercicios += '<option value="' + valor + '">' + valor + '</option>';
            });

            $('#exercicio').html(novosExercicios);

            $('#exercicio').removeAttr('disabled');
        }
    });
})