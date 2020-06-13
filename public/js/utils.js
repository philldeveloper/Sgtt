function handleNameICT(event){
    const name = event.target.value
    const campos_icts = document.querySelectorAll('#handle_ict')

    campos_icts.forEach((campo) => {
        campo.value = name
        console.log(campo)
    })
}

function handleNameParceiro(event){
    const name = event.target.value
    const campos_parceiros = document.querySelectorAll('#handle_parceiro')

    campos_parceiros.forEach((campo) => {
        campo.value = name
        console.log(campo)
    })
}

function handleFundacaoNameApoio(event){
    const name = event.target.value
    const campos_fund_apoio = document.querySelectorAll('#handle_apoio')
    campos_fund_apoio.forEach((campo) => {
        campo.value = name
        console.log(campo)
    })
}

function handleCheckbox(){
    const checkBox = document.getElementById("possui_apoio")
    const clausulas = document.querySelectorAll("#clausula_apoio_wrapper")
    if (checkBox.checked == true){
        console.log(clausulas)
        clausulas.forEach( clausula => clausula.style.display = "block")
    } else {
        clausulas.forEach( clausula => clausula.style.display = "none")
    }
}

function handleCoordenadorICT(){
    const elem = document.getElementById('nome_coordenador_ict').value;
    const coord_ict = document.getElementById('coord_ict')
    coord_ict.style.fontWeight = 'bold'
    coord_ict.innerText = `${elem};`
}

function handleCoordenadorPrivado(){
    const elem = document.getElementById('nome_coordenador_privado').value;
    const coord_privado = document.getElementById('coord_privado')
    coord_privado.style.fontWeight = 'bold'
    coord_privado.innerText = ` ${elem}`
}

function handleCheckBoxTermoDeUso(event){
    const termo = document.getElementById('termo_de_uso')
    const termo_msg_error = document.getElementById('termo_msg_error')
    if(!termo.checked){  
        event.preventDefault();
        termo_msg_error.style.display = 'block'
        termo_msg_error.style.color = 'red'
    }else{
        termo_msg_error.style.display = 'none'
    }
}

function handleRepresentanteICT(event){
    const name = event.target.value
    const campos_rep_ict = document.querySelectorAll('#rep_ict')

    campos_rep_ict.forEach((campo) => {
        campo.value = name
    })
}

function handleRepresentantePrivado(event){
    const name = event.target.value
    const campos_rep_privado = document.querySelectorAll('#rep_privado')

    campos_rep_privado.forEach((campo) => {
        campo.value = name
    })
}

function handleEnderecoPrivado(event){
    const name = event.target.value
    const campos = document.querySelectorAll('#endereco_privado')

    campos.forEach((campo) => {
        campo.value = name
    })
}

function handleEnderecoICT(event){
    const name = event.target.value
    const campos = document.querySelectorAll('#endereco_ICT')

    campos.forEach((campo) => {
        campo.value = name
    })
}

function handleCargoICT(event){
    const name = event.target.value
    const campos = document.querySelectorAll('#cargo_ICT')

    campos.forEach((campo) => {
        campo.value = name
    })
}

function handleCargoPrivado(event){
    const name = event.target.value
    const campos = document.querySelectorAll('#cargo_privado')

    campos.forEach((campo) => {
        campo.value = name
    })
}




