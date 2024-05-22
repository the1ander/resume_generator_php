function addHoverClass(event) {
    event.target.classList.add('hovered');
}

// Função para remover a classe 'hovered' quando o mouse sai do botão
function removeHoverClass(event) {
    event.target.classList.remove('hovered');
}

// Selecionando todos os botões
const buttons = document.querySelectorAll('button');

// Adicionando os eventos de mouseover e mouseout para cada botão
buttons.forEach(button => {
    button.addEventListener('mouseover', addHoverClass);
    button.addEventListener('mouseout', removeHoverClass);
});