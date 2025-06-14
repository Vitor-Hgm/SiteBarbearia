<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbearia Lk</title>
    <link rel="stylesheet" href="css/aos.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
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
            <p class="mt-3">Barbearia Lk</p>
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


<footer class="bg-dark text-light pt-5">
  <div class="container">
    <div class="row text-center text-md-start">

      <!-- Logo e Redes Sociais -->
      <div class="col-md-4 mb-4">
        <h2 class="fw-bold text-warning">Barbearia <span class="text-light">LK</span></h2>
        <p class="small">
          Estilo e tradição para homens de atitude.<br>Mais que um corte, uma experiência completa.
        </p>
        <div class="d-flex justify-content-center justify-content-md-start gap-3 mt-3">
          <a href="#" class="text-warning fs-4" target="_blank" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="text-warning fs-4" target="_blank" aria-label="WhatsApp"><i class="bi bi-whatsapp"></i></a>
        </div>
      </div>

      <!-- Contato -->
      <div class="col-md-4 mb-4">
        <h5 class="text-warning fw-bold mb-3">Contato</h5>
        <p class="mb-1"><i class="fa-solid fa-phone me-2 text-warning"></i>(44) 99869-1352</p>
        <p class="mb-1"><i class="fa-solid fa-envelope me-2 text-warning"></i>contato@barbearialk.com</p>
        <p><i class="fa-solid fa-location-dot me-2 text-warning"></i>Avenida Júlio José de Souza, S/N<br>Alto Palmital - Boa Esperança/PR</p>
      </div>

      <!-- Horário -->
      <div class="col-md-4 mb-4">
        <h5 class="text-warning fw-bold mb-3">Horário de Funcionamento</h5>
        <p class="mb-1">Segunda à Quarta: 08:00 - 12:30</p>
        <p class="mb-1">Quinta à Sábado: 15:00 - 22:00</p>
        <p class="mb-0">Domingos: Fechado</p>
      </div>
    </div>

    <hr class="border-warning">

    <!-- Rodapé Inferior -->
    <div class="text-center pb-3 small">
      © 2025 <span class="text-warning">Barbearia LK</span>. Todos os direitos reservados.
    </div>
  </div>
</footer>

<style>
    footer a {
        color: #FFC107;
        text-decoration:none;
        transition: color 0.3 ease;
    }
    footer a:hover {
        color : #fffffff
    }
</style>
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