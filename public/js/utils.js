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

function handleCheckbox(){
    const checkBox = document.getElementById("possui_apoio")
    const clausula = document.getElementById("clausula_apoio_wrapper")
    if (checkBox.checked == true){
      clausula.style.display = "block"
    } else {
      clausula.style.display = "none"
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
