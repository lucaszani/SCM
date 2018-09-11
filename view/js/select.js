$(document).ready(function () {
    $("#intensidade").on('change', function () {
        $('#exercicio').html('');
        var exercicios = [];
        if ($('#intensidade').val() == 1) {
            exercicios = ['Caminhada', 'Abdominal'];
            var novosExercicios = '';

            exercicios.forEach(function(valor){
                novosExercicios += '<option value="' + valor + '">' + valor + '</option>';
            });

            $('#exercicio').html(novosExercicios);

            $('#exercicio').removeAttr('disabled');
        }
        else if ($('#intensidade').val() == 2) {
            exercicios = ['Cooper', 'Flexão'];
            var novosExercicios = '';

            exercicios.forEach(function(valor){
                novosExercicios += '<option value="' + valor + '">' + valor + '</option>';
            });

            $('#exercicio').html(novosExercicios);

            $('#exercicio').removeAttr('disabled');
        }
        else if ($('#intensidade').val() == 3) {
            exercicios = ['Corrida', 'Supino'];
            var novosExercicios = '';

            exercicios.forEach(function(valor){
                novosExercicios += '<option value="' + valor + '">' + valor + '</option>';
            });

            $('#exercicio').html(novosExercicios);

            $('#exercicio').removeAttr('disabled');
        }
    });
})