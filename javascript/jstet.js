
let dots = document.getElementsByClassName('dotsSlider'),
    dotsCont = document.getElementsByClassName('dotsCont')[0],
    slides = document.getElementsByClassName('slides'),
    left =  document.querySelector('#left'),
    right = document.querySelector('#right'),
    slideIndex = 0,
    len = slides.length;




// smooth scroll

function scrollTo(element) {
window.scroll({
    left: 0, 
    top: element.offsetTop, 
    behavior: 'smooth'
})
}

let button = document.querySelector('.whButton');
var footer = document.querySelector('#testing');

button.addEventListener('click', () => {
scrollTo(footer);
})


k = 0;



let i = 0;

setInterval(async function showCase()
{
    left.onclick = function (){
        console.log('my try');
        i--;
        console.log(i);
    }
    
    right.onclick = function (){
        console.log('my try');
        i++;
        console.log(i);
    }

    if(i + 1 == slides.length || i == slides.length){
        for( let m = 0; m < len ; m++){
            if (m!== i){
                slides[m].classList.remove('show');
                dots[m].classList.remove('active');
            }
        }
        slides[slides.length - 2].classList.remove('show');
        dots[len - 2].classList.remove('active');
        i = 0;

        slides[i].classList.add('show');
        dots[i].classList.add('active');

        slides[i].style.order = '2';
        slides[slides.length - 1].style.order = '1';

    }
    
    else{
        for( let m = 0; m < len ; m++){
            if (m!== i){
                slides[m].classList.remove('show');
                dots[m].classList.remove('active');
            }
        }
        slides[i].style.order = '1';
        slides[i+1].style.order = '2';
        
        slides[i].classList.add('show');
        dots[i].classList.add('active');

        slides[len-1].classList.remove('show');
        dots[len-1].classList.remove('active');

        slides[i+1].classList.add('show');
        dots[i+1].classList.add('active');

        i++;

        if(i >= 2){
            slides[i-2].classList.remove('show');
            dots[i-2].classList.remove('active');
        } 
    }

}, 2000)


// const all_ = document.querySelector('.main');
// const selectedNum = document.getElementById('selectedNum');

// function updateSelectedNum(){
//     const selectedArray = document.querySelectorAll(".row .object.selected")
//     const cnt = selectedArray.length
//     selectedNum.innerText = cnt
// }
// all_.addEventListener('click', (e) => {
//     if(e.target.classList.contains('object')) {
//         e.target.classList.toggle('selected')
//         updateSelectedNum()
//     }
// })





const all_ = document.querySelector('.main');
const selectedNum = document.getElementById('selectedNum');

function updateSelectedNum(){
    const selectedArray = document.querySelectorAll(".row .object.selected")
    const cnt = selectedArray.length
    selectedNum.innerText = cnt
}
all_.addEventListener('click', (e) => {
    if(e.target.classList.contains('object') && !e.target.classList.contains('alreadySelected')) {
        e.target.classList.toggle('selected')
        updateSelectedNum()
    }
})


document.querySelector('button').onclick = bntclick;

function bntclick() {
    let myValue = document.querySelector('.input1').value;
    output = document.getElementById('output');
    output.innerText += myValue
}
