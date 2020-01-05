const valid_simple_string = {
    required: true,
    minlength: 3,
    maxlength: 100
}

function removeInput(vetor, t){
    let result = []
    vetor.map((item, index)=>{
        if (item === t){
            result.push(index)
        }
    })
    return result[0]
}

let firstStep = []
let error = 0
$(document).ready(function($){
    var inputs = $("#regForm").validate({
    rules : {
            nome_ict: {
                ...valid_simple_string,
            },
            nome_parceiro:{
                ...valid_simple_string
            },
            nome_teste:{
                ...valid_simple_string,
            },
            nat_juridica:{
                ...valid_simple_string  
            },
            cnpj:{
                    required: true,
                    maxlength: 18,
                    minlength: 18,
            },
            endereco:{
                ...valid_simple_string  
            },
            cidade:{
                ...valid_simple_string 
            }, 
            uf:{
                required: true
            }, 
            cep:{
                required: true,
                maxlength: 9,
                minlength: 9,
            }, 
            rep_legal:{
                ...valid_simple_string 
            }, 
            cpf:{
                required: true,
                maxlength: 14,
                minlength: 14,
            }, 
            rg:{
                required: true,
            }, 
            orgao_exp:{
                required: true,
            }, 
            nacionalidade:{
                required: true,
                minlength: 3,
            }, 
            est_civil:{
                required: true,
                minlength: 3,
            }, 
            ato_nomeacao:{
                required: true,
                minlength: 3,
            }, 
            doravante_denominado:{
                required: true,
                minlength: 3,
            }, 

    },
    messages: {
        nome_ict: {
            required: '',
            minlength: ''
        },
        nome_parceiro: {
            required: '',
            minlength: ''
        },
        cnpj: {
            minlength: 'O cnpj deve conter 14 numeros.',
            maxlength: 'O cnpj deve conter 14 numeros.',
        },
        cep: {
            minlength: 'O cep deve conter 8 numeros.',
            maxlength: 'O cep deve conter 8 numeros.',
        },
        cpf: {
            minlength: 'O cep deve conter 11 numeros.',
            maxlength: 'O cep deve conter 11 numeros.',
        }
    },
    onfocusout: function(element) {
         let t = $(element).attr('name');
            if (($(element).attr('name') === 'nome_ict' || $(element).attr('name') === 'nome_parceiro')){
               if (!element.value || element.value.length < 3){
                   Toastify({
                       text: "Esse campo deve conter ao menos 3 caracteres.",
                       backgroundColor: "linear-gradient(to right, #FEB692, #EA5455)",
                       duration: 3000
                   }).showToast();   
                   $(element).addClass('invalid')   
        
                   if (firstStep.includes(t) && t !== undefined){
                       firstStep.splice(removeInput(firstStep, t), 1)
                       window.firstStep = firstStep
                   }   
               }else{
                $(element).removeClass('invalid'); 
                if (!firstStep.includes(t) && t !== undefined){
                    firstStep.push(t)
                    window.firstStep = firstStep
                }   
               }
            }else{
                this.element(element);
            }

            //Verificando se o array contém o numeros de campos validos =17
            if (firstStep.length === 17){
                window.firstStep = firstStep
            }
    },
      // Chamado quando for invalido

    highlight: function(element) {
        let t = $(element).attr('name')
            if ($(element).attr('name') === 'nome_ict' || $(element).attr('name') === 'nome_parceiro'){
                return null
            }
            $(element).addClass('invalid')
            if (firstStep.includes(t) && t !== undefined){
                firstStep.splice(removeInput(firstStep, t), 1)
                window.firstStep = firstStep
            }
    },
    
    // Chamado quando for valido
    unhighlight: function(element) {
            let t = $(element).attr('name')
            $(element).removeClass('invalid');   
            this.countError = ++error
            if (!firstStep.includes(t) && t !== undefined){
                firstStep.push(t)
                window.firstStep = firstStep
            }
    },
    })
});
