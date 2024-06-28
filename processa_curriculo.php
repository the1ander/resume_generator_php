<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/style/processa_Style.css">
    
    <link rel ="stylesheet" href ="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <title>Currículo Processado</title>
</head>

<body>

    <main class="mainLayout">
    
        <section class="head">
            
        
            <h1> 
            <?php
            
            echo "Currículo de ";
            echo htmlspecialchars($_POST['name']);
            ?>
            </h1>   
            <div class="all_placeholder_texts">

                <div class="name">
                    <p class="all_title">Nome:</p>
                    <div id="processed_name">
                        <?php echo htmlspecialchars($_POST['name']); ?>
                    </div>
                </div>

                <div class="idade">
                    <p class="all_title">Idade:</p>
                    <div id="processed_idade">
                        <?php echo htmlspecialchars($_POST['idade']); ?>
                    </div>
                </div>

                <div class="email">
                    <p class="all_title">E-mail:</p>
                    <div id="processed_email">
                        <?php echo htmlspecialchars($_POST['email']); ?>
                    </div>
                   
                </div>

                <div class="apresentacao">
                    <p class="all_title">Apresentação:</p>
                    <div id="processed_apresentacao">
                        <?php echo htmlspecialchars($_POST['apresentacao']); ?>
                    </div>
                </div>

                <div class="formacao">
                    <p class="all_title">Formação:</p>
                    <div id="processed_formacao">
                        <?php echo htmlspecialchars($_POST['formacao']); ?>
                    </div>
                </div>

                <div class="qualificacao">
                    <p class="all_title">Qualificações:</p>
                    <div id="processed_qualificacao">
                        <?php echo htmlspecialchars($_POST['qualificacao']); ?>
                    </div>
                </div>

                <div class="exp">
                    <p class="all_title">Experiências:</p>
                    <div id="processed_exp">
                        <?php echo htmlspecialchars($_POST['exp']); ?>
                    </div>
                </div>

            </div>

        </section>
      
        <button id="butClick" type="button" class="btn btn-success" onclick="printAndHide()">gerar</button>
        
        
    </main>
    <script src="/script/processa_Script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    
</body>
</html>