// main.js
// Este arquivo contém o código JavaScript para a funcionalidade do Swiper
// na página de depoimentos. O código é responsável por inicializar o Swiper,
// configurar suas opções e adicionar a funcionalidade de autoplay.
// O código é executado quando o DOM está completamente carregado.
/// O Swiper é uma biblioteca de slider/carrossel que permite criar apresentações de slides responsivas e interativas.

document.addEventListener('DOMContentLoaded', function () {
    // Inicializa o Swiper somente após o carregamento completo do DOM
    const swiper = new Swiper('.swiper-container', {
        slidesPerView: 'auto', // Define o número de slides visíveis como automático
        loop: true, // Habilita o loop infinito dos slides
        initialSlide: 1, // Define o slide inicial como o segundo (índice 1)
        speed: 500, // Define a velocidade da transição entre slides em milissegundos
        autoplay: {
            delay: 3000, // Define o intervalo de tempo entre slides no autoplay
            disableOnInteraction: false, // Continua o autoplay mesmo após interação do usuário
        },
        spaceBetween: 24, // Define o espaço entre os slides em pixels
        pagination: {
            el: '.swiper-pagination', // Seleciona o elemento para a paginação
            clickable: true, // Permite que a paginação seja clicável
        }
    });
});