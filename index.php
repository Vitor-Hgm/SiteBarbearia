<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Barbearia LK</title>
    <link rel="icon" href="imagens/ico.ico" type="image/x-icon">

    <base href="http://localhost/sitebarbearia/barbearialk/base ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

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
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-black shadow-sm">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="home">
                    <img src="imagens/icone.png" class="logo" alt="Logo">
                    <strong>Barbearia LK</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarMenu">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="home">Início</a></li>
                        <li class="nav-item"><a class="nav-link" href="sobre">Sobre</a></li>
                        <li class="nav-item"><a class="nav-link" href="servicos">Serviços</a></li>
                        <li class="nav-item"><a class="nav-link" href="galeria">Galeria</a></li>
                    </ul>
                    <a href="agendamento" class="btn btn-gold ms-lg-3">Agendar Horário</a>
                </div>
            </div>
        </nav>

        <!-- CONTEÚDO -->
        <main class="container flex-fill my-5 pt-5">
            <?php
        $pagina = $_GET["param"] ?? "home";
        $param = explode("/", $pagina);
        $pagina = $param[0];
        $id = $param[1] ?? null;

        $pagina = "paginas/{$pagina}.php";
        if (file_exists($pagina)) {
            include $pagina;
        } else {
            include "paginas/erro.php";
        }
      ?>
        </main>

        <!-- FOOTER -->
        <footer class="bg-black text-light py-5 mt-auto border-top border-warning border-2">
            <div class="container">
                <div class="row gy-4 justify-content-between">
                    <div class="col-md-4">
                        <h5 class="text-warning fw-bold mb-3">Barbearia LK</h5>
                        <p class="small text-muted">
                            Transformando seu estilo com excelência e dedicação há mais de 2 anos.
                            Barbearia que valoriza tradição, modernidade e atendimento personalizado.
                        </p>
                    </div>

                    <div class="col-md-3">
                        <h6 class="text-warning fw-semibold mb-3">Links Rápidos</h6>
                        <ul class="list-unstyled">
                            <li><a href="?param=home" class="text-light text-decoration-none hover-warning">Início</a>
                            </li>
                            <li><a href="?param=sobre" class="text-light text-decoration-none hover-warning">Sobre</a>
                            </li>
                            <li><a href="?param=servicos"
                                    class="text-light text-decoration-none hover-warning">Serviços</a></li>
                            <li><a href="?param=galeria"
                                    class="text-light text-decoration-none hover-warning">Galeria</a></li>
                        </ul>
                    </div>

                    <div class="col-md-4">
                        <h6 class="text-warning fw-semibold mb-3">Contato & Redes Sociais</h6>
                        <p class="small mb-1"><i class="bi bi-telephone-fill me-2"></i> (44) 99869-1352</p>
                        <p class="small mb-3"><i class="bi bi-envelope-fill me-2"></i> contato@estilofino.com</p>
                        <div class="d-flex gap-3">

                            <a href="https://www.instagram.com/barbearia_lk01/" class="text-warning fs-5"
                                aria-label="Instagram" target="_blank"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="text-warning fs-5" aria-label="WhatsApp" target="_blank"><i
                                    class="bi bi-whatsapp"></i></a>

                        </div>
                    </div>
                </div>

                <hr class="border-warning mt-5" />
                <div class="text-center small text-muted">
                    &copy; <?= date('Y') ?> Barbearia LK. Todos os direitos reservados.
                </div>
            </div>
        </footer>

    </div> <!-- /WRAPPER FLEX -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>