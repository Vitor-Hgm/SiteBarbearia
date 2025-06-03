<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbearia Lk</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <header class="text-center">
        <nav>
            <a href="home" class="logo-header">
                <img src="imagens/barbearialogo.png" alt="Logo" class="img">Barbearia Lk
            </a>
            <ul>
                <li>
                    <a href="home">
                        Home
                    </a>
                </li>
                <li>
                    <a href="servicos">
                        Serviços
                    </a>
                </li>
                <li>
                    <a href="galeria">
                        Galeria
                    </a>
                </li>
                <li>
                    <a href="contato">
                        Contato
                    </a>
                </li>
                <li>
                    <a href="agendar" class="btn">
                        Agendar
                    </a>
                </li>
            </ul>
        </nav>

    </header>
    
    <section>
        <img src="imagens/banner.png" alt="Banner">
    </section>


    <main class="container">
       <?php
   

   $pagina = $_GET["param"] ?? "home";

   $pagina = "paginas/{$pagina}.php";

   if (file_exists($pagina)) {
       include $pagina;
   } else {
       include "paginas/erro.php";
   }
    ?>


    </main>


    <footer>
        <p>
            <img src="imagens/barbearialogo.png" alt="Logo">Barbearia LK
        </p>
        <p>
            (44) 99869-1352
            <Br>
            Avenida Julio José de Souza, Alto Palmital, Boa Esperança
            <br>

        </p>
    </footer>
    
</body>

</html>