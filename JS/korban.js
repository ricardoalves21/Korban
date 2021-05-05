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

// SCROLL

function deslizarPara(element) {
    document.querySelector(element).scrollIntoView({ behavior: "smooth" });
}

document.querySelector('#menu-sobre').addEventListener('click', function () {
    event.preventDefault();
    deslizarPara('#area-empresa');
})

document.querySelector('#menu-servico').addEventListener('click', function () {
    event.preventDefault();
    deslizarPara('#sites');
})

document.querySelector('#menu-orcamento').addEventListener('click', function () {
    event.preventDefault();
    deslizarPara('#contato');
})

document.querySelector('#menu-contato').addEventListener('click', function () {
    event.preventDefault();
    deslizarPara('#contato');
})

// BOTAO TOPO

// window.onscroll = function () { scrollar() };

// function scrollar() {
//     let topo = document.querySelector('#voltar-topo');
//     topo.style.animation = 'btnTopo linear 1s';
//     console.log(scrollY);
// }

// let topo = document.querySelector('#menu-contato');
// let scr = scrollY;

// window.onscroll = function () { scrollar() };

// function scrollar() {
//     if (scrollY > 1) {
//         topo.style.backgroundColor = 'yellow';
//         console.log(scrollY);
//         scrollY = 0;
//     }
// }



