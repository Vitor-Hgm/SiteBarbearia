<?php

$base = "https://{$_SERVER['SERVER_NAME']}{$_SERVER['SCRIPT_NAME']}";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Barbearia LK</title>
    <link rel="icon" href="imagens/ico.ico" type="image/x-icon">
    <base href="https://barbearialk.great-site.net/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <style>
    html,
    body {
        height: 100%;
        margin: 0;
    }

    body {
        font-family: 'Segoe UI', sans-serif;
        background-color: #111;
        color: #f8f9fa;
        scroll-behavior: smooth;
    }

    .logo {
        width: 55px;
    }

    .text-warning {
        color: #f5b942 !important;
    }

    .bg-dark {
        background-color: #1a1a1a !important;
    }

    .shadow {
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.6);
    }

    .img-fluid {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .img-fluid:hover {
        transform: scale(1.05);
        box-shadow: 0 15px 25px rgba(0, 0, 0, 0.7);
    }

    h2,
    h4 {
        font-family: 'Segoe UI', sans-serif;
        letter-spacing: -0.5px;
    }

    .display-5 {
        font-weight: 700;
    }

    .text-muted {
        color: #bbb !important;
    }

    .btn-gold {
        background: linear-gradient(90deg, #f5b942, #f1c572);
        color: #000;
        font-weight: 600;
        border: none;
    }

    .btn-gold:hover {
        background: linear-gradient(90deg, #f1c572, #f5b942);
        box-shadow: 0 0 10px #f5b94288;
    }

    .hover-warning:hover {
        color: #f5b942 !important;
        text-decoration: underline;
    }

    @media (max-width: 767px) {
        .display-5 {
            font-size: 2rem;
        }

        .fs-5 {
            font-size: 1rem;
        }
    }
    </style>
</head>

<body>
    <div class="d-flex flex-column min-vh-100">
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-black shadow-sm">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="?param=home">
                    <img src="imagens/icone.png" class="logo" alt="Logo">
                    <strong>Barbearia LK</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarMenu">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="?param=home">Início</a></li>
                        <li class="nav-item"><a class="nav-link" href="?param=sobre">Sobre</a></li>
                        <li class="nav-item"><a class="nav-link" href="?param=servicos">Serviços</a></li>
                        <li class="nav-item"><a class="nav-link" href="?param=galeria">Galeria</a></li>
                    </ul>
                    <a href="agendamento" class="btn btn-gold ms-lg-3">Agendar Horário</a>
                </div>
            </div>
        </nav>


        <main class="container flex-fill my-5 pt-5">

            

            <?php
            $pagina = $_GET["param"] ?? "home";
            $param = explode("/", $pagina);
            $pagina = $param[0];
            $id = $param[1] ?? null;

            $arquivo = "paginas/{$pagina}.php";
            if (file_exists($arquivo)) {
                include $arquivo;
            } else {
                include "paginas/erro.php";
            }
            ?>
        </main>

        <footer class="bg-black text-light py-5 mt-auto border-top border-warning border-2">
            <div class="container">
                <div class="row gy-4 justify-content-center justify-content-md-between text-center text-md-start">
                    <!-- Coluna 1: Logo e descrição -->
                    <div class="col-md-4">
                        <h5 class="text-warning fw-bold mb-3">Barbearia LK</h5>
                        <p class="small">
                            Transformando seu estilo com excelência e dedicação. <br>
                            Barbearia que valoriza tradição, modernidade e <br>atendimento personalizado.
                        </p>
                    </div>

                    <!-- Coluna 2: Links rápidos -->
                    <div class="col-md-3">
                        <h6 class="text-warning fw-semibold mb-3">Links Rápidos</h6>
                        <ul class="list-unstyled">
                            <li><a href="home" class="text-light text-decoration-none hover-warning">Início</a></li>
                            <li><a href="sobre" class="text-light text-decoration-none hover-warning">Sobre</a></li>
                            <li><a href="servicos" class="text-light text-decoration-none hover-warning">Serviços</a>
                            </li>
                            <li><a href="galeria" class="text-light text-decoration-none hover-warning">Galeria</a></li>
                        </ul>
                    </div>

                    <!-- Coluna 3: Contato e redes -->
                    <div class="col-md-4">
                        <h6 class="text-warning fw-semibold mb-3">Contato & Localização</h6>
                        <p class="small mb-1"><i class="bi bi-telephone-fill me-2"></i> (44) 99869-1352</p>
                        <p class="small mb-1"><i class="bi bi-envelope-fill me-2"></i> contato@.com</p>
                        <p class="small mb-2">
                            <i class="bi bi-geo-alt-fill me-2"></i> Avenida Júlio José de Souza, Alto Palmital, <br>Boa
                            Esperança
                        </p>
                        <div class="d-flex justify-content-center justify-content-md-start gap-3">
                            <a href="https://www.instagram.com/barbearia_lk01/" class="text-warning fs-5"
                                target="_blank"><i class="bi bi-instagram"></i></a>
                            <a href="https://wa.me/554498691352" class="text-warning fs-5" target="_blank"><i
                                    class="bi bi-whatsapp"></i></a>
                        </div>
                    </div>
                </div>

                <hr class="border-warning mt-5" />
                <div class="text-center small text-muted mt-3">
                    <span class="text-white">&copy; <?= date('Y') ?> Barbearia LK. Todos os direitos reservados.</span>
                </div>
            </div>
        </footer>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>