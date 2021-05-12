// ANIMAÇÃO TEXTOS DO BANNER

var intervalID = window.setInterval(animacao, 5000);
let txtBannerPrincipal = document.getElementById('textos-banner-principal');
var s1 = document.getElementById('seletor1');
var s2 = document.getElementById('seletor2');
var s3 = document.getElementById('seletor3');
var cont = 0;

function animacao() {

    if (cont == 0) {
        txtBannerPrincipal.style.transform = 'translate(0%)';
        txtBannerPrincipal.transition = 'linear 0.5s';
        s1.checked = true;
        s2.checked = false;
        s3.checked = false;
        cont++;
    } else if (cont == 1) {
        txtBannerPrincipal.style.transform = 'translate(-34.1%)';
        txtBannerPrincipal.style.transition = 'linear 0.5s';
        s2.checked = true;
        s1.checked = false;
        s3.checked = false;
        cont++;
    } else {
        txtBannerPrincipal.style.transform = 'translate(-68.2%)';
        txtBannerPrincipal.style.transition = 'linear 0.5s';
        s3.checked = true;
        s2.checked = false;
        s1.checked = false;
        cont = 0;
    }
}

// CLICK EM SELETORES DE TEXTO BANNER

s1.addEventListener('click', function () {
    txtBannerPrincipal.style.transform = 'translate(0%)';
    txtBannerPrincipal.transition = 'linear 0.5s';
    s1.checked = true;
    s2.checked = false;
    s3.checked = false;
    cont = 0;
})

s2.addEventListener('click', function () {
    txtBannerPrincipal.style.transform = 'translate(-34.1%)';
    txtBannerPrincipal.style.transition = 'linear 0.5s';
    s2.checked = true;
    s1.checked = false;
    s3.checked = false;
    cont = 1;
})

s3.addEventListener('click', function () {
    txtBannerPrincipal.style.transform = 'translate(-68.2%)';
    txtBannerPrincipal.style.transition = 'linear 0.5s';
    s3.checked = true;
    s2.checked = false;
    s1.checked = false;
    cont = 2;
})

// VALIDAÇÃO DE CAMPOS DO FORMULÁRIO

const campoTelefone = document.getElementById('inputTelefone');

campoTelefone.addEventListener('focusout', (event) => {
    var fone = campoTelefone.value;
    valorTelefone = event.target.value;

    if (fone.length == 10) {
        campoTelefone.value = valorTelefone.replace(/(\d{2})?(\d{4})?(\d{4})/, "($1) $2-$3"); // uso de RegEx (expressões regulares)
    }

    if (fone.length == 11) {
        campoTelefone.value = valorTelefone.replace(/(\d{2})?(\d{5})?(\d{4})/, "($1) $2-$3");  // uso de RegEx (expressões regulares)
    }
})

// SCROLL BOTOES

function deslizarPara(element) {
    document.querySelector(element).scrollIntoView({ behavior: "smooth" });
}

document.querySelector('#menu-sobre').addEventListener('click', function () {
    deslizarPara('#area-empresa');
})

document.querySelector('#menu-servico').addEventListener('click', function () {
    deslizarPara('.container-depoimentos-home4');
})

document.querySelector('#menu-orcamento').addEventListener('click', function () {
    deslizarPara('#form-contato-orcamento');
})

document.querySelector('#menu-contato').addEventListener('click', function () {
    deslizarPara('#form-contato-orcamento');
})

document.querySelector('#btnOrcamento').addEventListener('click', function () {
    deslizarPara('#form-contato-orcamento');
})

document.querySelector('#btnOrcamento2').addEventListener('click', function () {
    deslizarPara('#form-contato-orcamento');
})

document.querySelector('#btnOrcamento3').addEventListener('click', function () {
    deslizarPara('#form-contato-orcamento');
})

// SCROLL 

let sobre = document.querySelector('#menu-sobre');
let site = document.querySelector('#menu-servico');
let orcamento = document.querySelector('#menu-orcamento');
let contato = document.querySelector('#menu-contato');

window.onscroll = function () { scrollar() };

function scrollar() {
    if (scrollY >= 821 && scrollY <= 1254) {
        site.style.backgroundColor = 'white';
        orcamento.style.backgroundColor = 'white';
        contato.style.backgroundColor = 'white';
        sobre.style.backgroundColor = '#c4e8ed';
    } else if (scrollY >= 2454 && scrollY <= 2924) {
        orcamento.style.backgroundColor = 'white';
        contato.style.backgroundColor = 'white';
        site.style.backgroundColor = '#c4e8ed';
        sobre.style.backgroundColor = 'white';
    } else if (scrollY >= 3138 && scrollY <= 3922) {
        sobre.style.backgroundColor = 'white';
        site.style.backgroundColor = 'white';
        orcamento.style.backgroundColor = '#c4e8ed';
        contato.style.backgroundColor = '#c4e8ed';
    } else {
        sobre.style.backgroundColor = 'white';
        site.style.backgroundColor = 'white';
        orcamento.style.backgroundColor = 'white';
        contato.style.backgroundColor = 'white';
    }

    console.log(scrollY);

}