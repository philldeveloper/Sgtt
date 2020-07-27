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
    $("#regForm").validate({
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
            nome_parceiro_instituicao: {
                ...valid_simple_string,
            },
            parceiro_nat_juridica:{
                ...valid_simple_string
            },
            parceiro_cnpj:{
                required: true,
                maxlength: 18,
                minlength: 18,
            },
            parceiro_endereco:{
                ...valid_simple_string  
            },
            parceiro_cidade:{
                ...valid_simple_string  
            },
            parceiro_uf:{
                required: true  
            },
            parceiro_cep:{
                required: true
            }, 
            parceiro_rep_legal:{
                ...valid_simple_string
            }, 
            parceiro_cpf:{
                required: true,
                maxlength: 14,
                minlength: 14,
            }, 
            rep_legal:{
                ...valid_simple_string 
            }, 
            parceiro_rg:{
                required: true,
            }, 
            parceiro_orgao_exp:{
                required: true,
            }, 
            parceiro_cargo:{
                ...valid_simple_string
            }, 
            parceiro_doravante_denominado:{
                ...valid_simple_string
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
            clausula_descricao: {
                required: true,
                minlength: 3,
            },
            clausula_objetivo: {
                required: true,
                minlength: 3,
            },
            nome_inst_ict: {
                ...valid_simple_string
            },
            nome_inst_privado: {
                ...valid_simple_string
            },
            nome_inst_fundacao: {
                ...valid_simple_string
            },
            nome_empresa_parceira: {
                ...valid_simple_string
            },
            nome_ict_parceira: {
                ...valid_simple_string
            },
            prazo_vigencia:{
                required: true,
                minlength: 1,
                maxlength: 10,
                
            },
            estado_foro: {
                ...valid_simple_string
            },
            cidade_foro: {
                ...valid_simple_string
            },
            cidade_uf_dia_foro: {
                ...valid_simple_string
            },
            ict_inst_foro: {
                ...valid_simple_string
            },
            nome_rep_foro: {
                ...valid_simple_string
            },
            cargo_rep_foro: {
                ...valid_simple_string
            },
            nome_inst_privado_foro: {
                ...valid_simple_string
            },
            nome_rep_privado_foro: {
                ...valid_simple_string
            },
            cargo_rep_privado_foro: {
                ...valid_simple_string
            },
            nome_coordenador_ict: {
                ...valid_simple_string
            },
            nome_coordenador_privado: {
                ...valid_simple_string
            }


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
            minlength: 'O cpf deve conter 11 numeros.',
            maxlength: 'O cpf deve conter 11 numeros.',
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
        
                   if (!firstStep.includes(t) && t !== undefined){
                       firstStep.push(t)
                       window.firstStep = firstStep
                   }   
                }else{
                    if (firstStep.includes(t) && t !== undefined){
                        firstStep.splice(removeInput(firstStep, t), 1)
                        window.firstStep = firstStep
                    }   
                    $(element).removeClass('invalid'); 
               }
            }else{
                this.element(element);
            }

            //Verificando se o array contém o numeros de campos validos =17
    
            window.firstStep = firstStep
    
    },
      // Chamado quando for invalido

    highlight: function(element) {
        let t = $(element).attr('name')
            /* if ($(element).attr('name') === 'nome_ict' || $(element).attr('name') === 'nome_parceiro'){
                return null
            } */
            $(element).addClass('invalid')
            if (!firstStep.includes(t) && t !== undefined){
                firstStep.push(t)
                window.firstStep = firstStep
            }
        },
        
        // Chamado quando for valido
        unhighlight: function(element) {
            let t = $(element).attr('name')
            $(element).removeClass('invalid');   
            if (firstStep.includes(t) && t !== undefined){
                firstStep.splice(removeInput(firstStep, t), 1)
                window.firstStep = firstStep
            }
        },
    })
})