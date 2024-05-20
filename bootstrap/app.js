const imags = document.querySelectorAll('.cont-slide img');
const precedent = document.querySelector('.left');
const suivant = document.querySelector('.rigth');

let index = 0;

suivant.addEventListener('click',slideSuivant);
function slideSuivant(){
    if(index<2){
        imags[index].classList.remove('active');
        index++;
        imags[index].classList.add('active');
    }
    else if(index===2){
        imags[index].classList.remove('active');
        index=0;
        imags[index].classList.add('active');
    }
}

precedent.addEventListener('click',slidePrecedent);
function slidePrecedent(){
    if(index > 0){
        imags[index].classList.remove('active');
        index--;
        imags[index].classList.add('active');
    }
    else if(index===0){
        imags[index].classList.remove('active'); 
        index=2;
        imags[index].classList.add('active');
    }
}
setInterval(() => {
    if(index<2){
        imags[index].classList.remove('active');
        index++;
        imags[index].classList.add('active');
    }
    else if(index===2){
        imags[index].classList.remove('active');
        index=0;
        imags[index].classList.add('active');
    }
}, 10000);