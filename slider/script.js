let slideIndex = 0; //Define uma variável
showSlides(); //chama a função showSlides() para iniciar o slideShow.


/* 
    Seleciona todos os elementos <img> que estão dentro de elementos com a classe .slides e  os armazena em uma variável slides.
*/
function showSlides() {
    let slides = document.querySelectorAll('.slides img');
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = 'none';
    }
    slideIndex++;

    
    /*
    : Inicia um loop que percorre todos os elementos na coleção slides.
    slides[i].style.display = 'none';: Oculta cada imagem definido seu estilo
    display como 'none' , o que fez com que não seja exibida.
    */


    if (slideIndex > slides.length) {
        slideIndex = 1;
    }
     slides[slideIndex - 1].style.display = 'block';
     setTimeout(showSlides, 2000); //Altere este valor (2000) para ajustar a velocidade do slideshow (em milisegundos)
    
}

