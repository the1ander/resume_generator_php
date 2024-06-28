// Função para adicionar o texto à área
function addTextToArea(textAreaId, displayAreaId, clearFunction) {
    const textArea = document.getElementById(textAreaId);
    const displayArea = document.getElementById(displayAreaId);
    const textValue = textArea.value.trim();

    if (textValue !== "") {
        displayArea.textContent += ` ${textValue}`;
        if (clearFunction) {
            clearFunction();
        }
    }
}

// Função para limpar o texto
function clearNameArea(value) {
    const nameTextArea = document.getElementById(value);
    nameTextArea.value = "";
}

// Função para deletar o texto inserido
function toDelete(elementId) {
    var element = document.getElementById(elementId);
    if (element) {
        element.textContent = '';
    } else {
        console.log('Nenhuma textarea foi inserida com id:' + elementId);
    }
}

// Função para enviar o formulário para processa_curriculo.php
function submitForm() {
    const placeholders = {
        name: document.getElementById('placeholder_text_name').textContent.trim(),
        idade: document.getElementById('placeholder_text_idade').textContent.trim(),
        email: document.getElementById('placeholder_text_email').textContent.trim(),
        apresentacao: document.getElementById('placeholder_text_apresentacao').textContent.trim(),
        formacao: document.getElementById('placeholder_text_formacao').textContent.trim(),
        qualificacao: document.getElementById('placeholder_text_qualificacao').textContent.trim(),
        exp: document.getElementById('placeholder_text_Exp').textContent.trim()
    };

// Envie os dados para processa_curriculo.php via método POST
const form = document.createElement('form');
form.method = 'POST';
form.action = 'processa_curriculo.php';

for (const key in placeholders) {
    if (placeholders.hasOwnProperty(key)) {
        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = key;
        input.value = placeholders[key];
        form.appendChild(input);
    }
}

document.body.appendChild(form);
form.submit();
}

