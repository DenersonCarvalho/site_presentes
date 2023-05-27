// Atribua uma função a cada botão "Escolher"
const buttons = document.querySelectorAll('a');
const escolhido = document.querySelector('#texto').innerText;
buttons.forEach(button => {
	button.addEventListener('click', () => {
		alert(escolhido+'Você escolheu o presente ' + button.previousElementSibling.innerText);
    })
})