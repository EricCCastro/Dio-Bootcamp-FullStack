<html>

<head>
    <title> Meu primeiro Site em PHP " Woohoo"</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .accordion {
            background-color: #eee;
            color: #000000;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 17px;
            transition: 0.4s;
        }

        .active,
        .accordion:hover {
            background-color: #ccc;
        }

        .panel {
            padding: 0 18px;
            background-color: white;
            overflow: hidden;
            max-height: 0;
            transition: max-height 0.2s ease-out;
        }

        .h2 {
            color: #000080
        }
    </style>

</head>

<body background="C:\Users\Eric\Documents\GitHub\Dio-Bootcamp-FullStack\Accordion">
    <h2 class="h2">O que é o PHP?</h2>

    <button class="accordion">Sobre o PHP</button>
    <div class="panel">
        <p>O PHP (um acrônimo recursivo para PHP: Hypertext Preprocessor) é uma linguagem de script open source de uso geral, muito utilizada, e especialmente adequada para o desenvolvimento web e que pode ser embutida dentro do HTML.</p>
        <p>Em vez de muitos comandos para mostrar HTML (como acontece com C ou Perl), as páginas PHP contém HTML em código mesclado que faz "alguma coisa" (neste caso, mostra "Olá, eu sou um script PHP!"). O código PHP é delimitado pelas instruções de processamento (tags) de início e fim que permitem que você entre e saia do "modo PHP".</p>
    </div>

    <button class="accordion">Diferencial do PHP</button>
    <div class="panel">
        <p>O que distingue o PHP de algo como o JavaScript no lado do cliente é que o código é executado no servidor, gerando o HTML que é então enviado para o navegador. O navegador recebe os resultados da execução desse script, mas não sabe qual era o código fonte. Você pode inclusive configurar seu servidor web para processar todos os seus arquivos HTML com o PHP, e então não há como os usuários dizerem o que você tem na sua manga.</p>
    </div>

    <button class="accordion">Vantagens de Utilizar PHP</button>
    <div class="panel">
        <p>A melhor coisa em usar o PHP é que ele é extremamente simples para um iniciante, mas oferece muitos recursos avançados para um programador profissional. Não tenha medo de ler a longa lista de recursos do PHP. Pode entrar com tudo, o mais rápido que puder, e começar a escrever scripts simples em poucas horas.</p>
        <p></p>
    </div>

    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>

</body>

<script type="text/javascript">
    $(document).ready(function() {
        alert("Clique em OK para Prosseguir");
    });
</script>

</html>