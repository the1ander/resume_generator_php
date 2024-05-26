<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>curriculo</title>

    <link rel="stylesheet" href="/style/curricStyle.css">
    <script src="script\script.js"></script>
</head>

<body>
    <main class="mainLayout">
        <section class="head">
            <div class="imgDiv">
                <img class="imgPerf" src="https://miro.medium.com/v2/resize:fit:700/1*g09N-jl7JtVjVZGcd-vL2g.jpeg">
            </div>

            <div class="textHead">
                <p>Nome: <input type="text" id="nameText">
                </p>
                <p>Idade: <input type="text" id="ageText">
                </p>
                <p>Email: <input type="email" id="nameText">
                </p>
            </div>

        </section>
            <section class="textBody">
                <p>Objetivo: <textarea id="objText"></textarea>
                </p>
                <p>Qualificações: <textarea id="qualificText"></textarea>
                </p>
                <p>Formação: <textarea id="formText"></textarea>
                </p>
                <p>Experiência: <textarea id="expText"></textarea>
                </p>
            </section>

        </section>
        <button id="buttonSend">ENVIAR</button>
    </main>

</body>

</html>