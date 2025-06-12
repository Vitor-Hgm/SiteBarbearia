<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbearia Lk</title>
    <link rel="stylesheet" href="css/aos.css">
    <base href="http://localhost/sitebarbearia/barbearialk/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
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
        <a href="home" class="logo-header" title="Logo-header">
            <img src="imagens/barbearialogo.png" alt="Logo" class="img" width="50">
            <p class="mt-2">Barbearia Lk</p>
        </a>

        <a href="javascript:showMenu()" class="header-menu" title="Header-menu">
            <i class="fa-solid fa-bars"></i>
        </a>
        <nav class="header-nav">
            <ul>
                <li class="text-center mt-3">
                    <a href="home" titile="Home">
                        Home
                    </a>
                </li>
                <li class="text-center mt-3">
                    <a href="servicos" titile="Serviços">
                        Serviços
                    </a>
                </li>
                <li class="text-center mt-3">
                    <a href="galeria" title="Galeria">
                        Galeria
                    </a>
                </li>
                <li class="text-center mt-3">
                    <a href="contato" title="Contato">
                        Contato
                    </a>
                </li>
                <li>
                    <a href="agendar" class="btn btn-gold mt-2">Agendar Horário</a>
                </li>
            </ul>
        </nav>

    </header>


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
        <div class="footer-container">

            <div class="footer-section">
                <img src="imagens/barbearialogo.png" alt="Barbearia logo">
                <h2>Barbearia <span>LK</span></h2>
                <p>Estilo e tradição para homens de atitude. Mais que um corte, uma experiência completa.</p>
                <div class="ico">
                    <a href="" title="instagram" target="_blank">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="" title="instagram" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>

            </div>

            <div class="footer-section">
                <h3>Contato</h3>
                <p>📞 (44) 99869-1352</p>
                <p>✉ contato@barbeariaprtime.com</p>
                <p>📍 Avenida Júlio José de souza, S/N<br>Alto Palmital - Boa Esperança/PR</p>
            </div>

            <div class="footer-section">
                <h3>Horário de Funcionamento</h3>
                <p>Segunda à Quarta: 08:00 - 12:30</p>
                <p>Quinta à Sábado: 15:00: - 22:00</p>
                <p>Domingos: Fechado</p>
            </div>

        </div>

        </div>

        <div class="footer-bottom">
            © 2025 Barbearia LK. Todos os direitos reservados.
        </div>
    </footer>

    <script src="js/aos.js"></script>
    <script src="js/fslightbox.js"></script>
    <script>
    AOS.init();

    function showMenu() {
        var menu = document.querySelector(".header-nav");
        menu.classList.toggle("show");
    }
    </script>

</body>

</html>