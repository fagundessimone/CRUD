$(document).ready(function(){
    $('.edit-button').on('click', function(){
        var $dados = $(this).closest('.dados');
        $dados.find('.dados-description').addClass('hidden');
        $dados.find('.dados-actions').addClass('hidden');
        $dados.find('.edit-dados').removeClass('hidden');
    });
});