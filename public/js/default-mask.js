$(document).ready(function($){
    $("#telefone").keypress(function(event){
            if ($(this).val().length == 15){
                    $("#telefone").mask("(00) 00000-0009");
            }else{
                    $("#telefone").mask("(00) 0000-00009");
            }
    }) 
    $('.cnpj').keypress(function(event){
         $('.cnpj').mask("99.999.999/9999-99");
    })  

    $('.cpf').keypress(function(event){
        $('.cpf').mask("999.999.999-99");
    })

    $('.cep').keypress(function(event){
        $('.cep').mask('00000-000');
    })
    
    $('.rg').keypress(function(event){
        $('.rg').mask('99.999.999-9')
    })
   
})


