let errata = "Valores inválidos!";

function cadastro() {
    
    let nome = document.getElementById("username").value;
    let email = document.getElementById("email").value;
    let senha = document.getElementById("password").value;

    if (nome == "" && email  == "" && senha  == "")  {
        alert(errata);
    } else {
        alert("Sucesso!");
    }

    

    
}
function validacao(){
    let nomeVal = document.getElementById("usernameValidation").value;
    let senhaVal = document.getElementById("passwordValidation").value;
    
    if (nomeVal == "" && senhaVal == "") {
        alert(errata);
    } else {
        location.href = "paginaHome.html";   
    }
}



function horas() {
    let timeDisplay = document.getElementById("horas");
    let dateString = new Date().toLocaleString("pt-BR", {timeZone: "America/Sao_Paulo"});
    timeDisplay.innerHTML = dateString;
} 
setInterval(horas);

function image() {
    let imageDisplay = document.getElementById("imagem");
    let image = input.type("file").value;
    imageDisplay.innerHTML = image;
}

