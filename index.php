<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/style/css3.css">
    <title>currículo</title>
    
    


</head>

<body>


    <main class="mainLayout">

       
        <section class="head">

            <div class="tile">
                <h2>GERADOR DE CURRÍCULO ONLINE</h2>
            </div>

            <div class="all_menu_button">

                <button onclick="window.location.href='guia.php'">Como Usar</button>
                <button>documentação</button>

            </div class="small_explain">

            <div>

            </div>

            <div class="all_placeholder_texts">

                <div class="name">
                    <p class="all_title">Digite seu nome no campo</p>
                    <div id="placeholder_text_name">
                        <!-- O texto vai aqui dentro  -->
                    </div>
                    <textarea class="textarea" id="name_area" rows="2" cols="50"></textarea>
                    <button class="inButton" id="name_button" onclick="addTextToArea('name_area', 'placeholder_text_name'),clearNameArea('name_area')">Adicionar Nome</button>
                    <button class="offButton" id="name_delete_button" onclick="toDelete('placeholder_text_name')">deletar</button>
                </div>

                <div class="idade">
                    <p class="all_title">Digite sua idade no campo</p>
                    <div id="placeholder_text_idade">
                        <!-- O texto vai aqui dentro  -->
                    </div>
                    <textarea class="textarea" id="idade_area" rows="2" cols="25"></textarea>
                    <button class="inButton" id="idade_button" onclick="addTextToArea('idade_area', 'placeholder_text_idade'),  clearNameArea('idade_area')">Adicionar idade</button>
                    <button class="offButton" id="idade_delete_button" onclick="toDelete('placeholder_text_idade')">deletar</button>
                </div>

                <div class="email">
                    <p class="all_title">Digite seu E-mail no campo</p>
                    <div id="placeholder_text_email">
                        <!-- O texto vai aqui dentro  -->
                    </div>
                    <textarea class="textarea" id="email_area" rows="2" cols="50"></textarea>
                    <button class="inButton" id="email_button" onclick="addTextToArea('email_area', 'placeholder_text_email'), clearNameArea('email_area')">Adicionar seu Email</button>
                    <button class="offButton" id="email_delete_button" onclick="toDelete('placeholder_text_email')">deletar</button>
                </div>

                <div class="apresentacao">
                    <p class="all_title">Se apresente brevemente no campo abaixo</p>
                    <div id="placeholder_text_apresentacao">
                        <!-- O texto vai aqui dentro  -->
                    </div>
                    <textarea class="textarea" id="apresentacao_area" rows="5" cols="50"></textarea>
                    <button class="inButton" id="apresentacao_button" onclick="addTextToArea('apresentacao_area', 'placeholder_text_apresentacao'),clearNameArea('apresentacao_area')">Adicionar apresentação</button>
                    <button class="offButton" id="apresentacao_delete_button" onclick="toDelete('placeholder_text_apresentacao')">deletar</button>
                </div>

                <div class="formacao">
                    <p class="all_title">Coloque suas formacao no campo abaixo</p>
                    <div id="placeholder_text_formacao">
                        <!-- O texto vai aqui dentro  -->
                    </div>
                    <textarea class="textarea" id="formacao_area" rows="4" cols="50"></textarea>
                    <button class="inButton" id="formacao_button" onclick="addTextToArea('formacao_area', 'placeholder_text_formacao'),clearNameArea('formacao_area')">Adicionar Nova formação</button>
                    <button class="offButton" id="formacao_delete_button" onclick="toDelete('placeholder_text_formacao')">deletar</button>

                </div>

                <div class="qualificacao">
                    <p class="all_title">Coloque suas qualificações no campo abaixo</p>
                    <div id="placeholder_text_qualificacao">
                        <!-- O texto vai aqui dentro  -->
                    </div>
                    <textarea class="textarea" id="qualificacao_area" rows="2" cols="50"></textarea>
                    <button class="inButton" id="qualificacao_button" onclick="addTextToArea('qualificacao_area', 'placeholder_text_qualificacao'),clearNameArea('qualificacao_area')">Adicionar Qualificações</button>
                    <button class="offButton" id="qualificacao_delete_button" onclick="toDelete('placeholder_text_qualificacao')">deletar</button>

                </div>

                <div class="Exp">
                    <p class="all_title">Adicione suas experiências no campo abaixo</p>
                    <div id="placeholder_text_Exp">
                        <!-- O texto vai aqui dentro  -->
                    </div>
                    <textarea class="textarea" id="Exp_area" rows="4" cols="50"></textarea>
                    <button class="inButton" id="Exp_button" onclick="addTextToArea('Exp_area', 'placeholder_text_Exp'),clearNameArea('Exp_area')">Adicionar Experiências</button>
                    <button class="offButton" id="Exp_delete_button" onclick="toDelete('placeholder_text_Exp')">deletar</button>

                </div>

            </div>
            <button id="buttonSend" onclick="submitForm()">GERAR</button>

        </section>


    </main>



</body>
<script src="/script/script.js"></script>

</html>