
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

 