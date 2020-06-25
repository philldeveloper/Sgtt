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

/*Lógica para removação* das Clausulas opcionais */
var clausulas = []
var tabs = document.getElementsByClassName("tab-pane");

function handleClausulasOpt(event){
    let badges = Array.from(tabs[currentTab].getElementsByClassName("badge"));
    let id = event.target.id
    let CurrentBadge = event.target.parentNode.children[0] 
    const textarea = document.querySelector(`[name="${id}"]`)
    if(event.target.classList[2] == 'fa-trash'){
        if(countClaulsasActive(badges) + 1 == badges.length){
            Toastify({
                text: "Você não pode remover todas as clausulas.",
                backgroundColor: "linear-gradient(to right, #FEB692, #EA5455)",
                duration: 3000
            }).showToast(); 
            return false
        }
   
        event.target.classList.value = 'remove-box fas fa-undo bg-undo'
        clausulas.push({ name: id, text: textarea.value})
        textarea.value = ''
        textarea.style.display = 'none'
        CurrentBadge.text = 'Removido'
    }else{
        event.target.classList.value = 'remove-box fas fa-trash bg-trash'
        textarea.style.display = 'block'
        clausulas.forEach((cl, index) => {
            if(cl.name == id){
                textarea.value = cl.text
                clausulas.splice(index, 1)
            }
        });
        CurrentBadge.text = ''
    }
    handleCountBadges(badges)
}

const countClaulsasActive = (badges) => badges.filter((badge) => badge.text === 'Removido').length

function handleCountBadges(badges){
    let aux = 1;
    if(badges[0].dataset.opt2){
        aux = Number(badges[0].dataset.opt2)
    }
    badges.forEach((badge, index) => {
        if(badge.text != 'Removido' && badge.id){
            badge.text = `Cláusula ${badge.id.match(/\d+/g)[0]}.${aux}`;
            ++aux;
        }
    })
}


const letterIncrement = (letter) =>  String.fromCharCode(letter.charCodeAt(0) + 1); 

function handleCountBadgesWithLateter(badges) { 
    let aux = 'A';
    if(badges[0].dataset.init){
        aux = badges[0].dataset.init
    }
    badges.forEach((badge, index) => {
        if(badge.text != 'Removido' && badge.id){
            badge.text = `${aux})`;
            aux = letterIncrement(aux);
        }
    })
} 

function handleClausulasOptWithLetter(event){
    let badges = Array.from(tabs[currentTab].getElementsByClassName("badge_letter"));
    let id = event.target.id
    let CurrentBadge = event.target.parentNode.children[0] 
    const textarea = document.querySelector(`[name="${id}"]`)
    if(event.target.classList[2] == 'fa-trash'){
       /*  if(countClaulsasActive(badges) + 1  == badges.length){
            Toastify({
                text: "Você não pode remover todas as clausulas.",
                backgroundColor: "linear-gradient(to right, #FEB692, #EA5455)",
                duration: 3000
            }).showToast(); 
            return false
        } */
   
        event.target.classList.value = 'remove-box fas fa-undo bg-undo'
        clausulas.push({ name: id, text: textarea.value})
        textarea.value = ''
        textarea.style.display = 'none'
        CurrentBadge.text = 'Removido'
    }else{
        event.target.classList.value = 'remove-box fas fa-trash bg-trash'
        textarea.style.display = 'block'
        clausulas.forEach((cl, index) => {
            if(cl.name == id){
                textarea.value = cl.text
                clausulas.splice(index, 1)
            }
        });
        CurrentBadge.text = ''
    }
    handleCountBadgesWithLateter(badges)
}

