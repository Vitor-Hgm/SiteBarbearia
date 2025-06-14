<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Estilo Fino</title>
  <link href='style.css' rel "stylesheet ";

  <!-- Bootstrap CSS + Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #111;
      color: #f8f9fa;
      scroll-behavior: smooth;
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

    h2, h4 {
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
      border-radius: 6px;
      transition: box-shadow 0.3s ease;
    }

    .btn-gold:hover, .btn-gold:focus {
      background: linear-gradient(90deg, #f1c572, #f5b942);
      box-shadow: 0 0 12px #f5b942cc;
      color: #000;
    }

    /* Navbar toggler maior para toque */
    .navbar-toggler {
      padding: 0.5rem 0.75rem;
      font-size: 1.25rem;
    }

    .navbar-brand strong {
      white-space: nowrap;
    }

    /* Links da navbar maiores e com padding confortável */
    .nav-link {
      padding-left: 1rem !important;
      padding-right: 1rem !important;
    }

    /* Melhor alinhamento e espaçamento dos links com ícones */
    .nav-link.d-flex {
      gap: 0.5rem;
    }

    /* Hover sutil para ícones sociais do footer */
    .social-icon {
      transition: color 0.3s ease;
    }
    .social-icon:hover,
    .social-icon:focus {
      color: #f5b942 !important;
      text-decoration: none;
    }

    /* Ajuste geral para mobile */
    @media (max-width: 991px) {
      .navbar-nav {
        font-size: 1.1rem;
      }
    }

    /* Tamanhos responsivos para display-5 */
    @media (max-width: 767px) {
      .display-5 {
        font-size: 2rem;
      }
      .fs-5 {
        font-size: 1rem;
      }
    }

    /* Melhor alinhamento do botão agendar desktop */
    @media (min-width: 992px) {
      .btn-gold {
        padding: 0.5rem 1.5rem;
        font-size: 1rem;
      }
    }

    /* Hover nos links rápidos do footer */
    .hover-warning:hover {
      color: #f5b942 !important;
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <!-- HEADER (Navbar) -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-black shadow-sm">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="?param=home" style="gap: 0.5rem;">
        <i class="bi bi-scissors text-warning fs-3"></i>
        <strong class="fs-4 mb-0">Barbearia LK</strong>
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu"
        aria-controls="navbarMenu" aria-expanded="false" aria-label="Alternar menu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarMenu">
        <ul class="navbar-nav ms-auto mb-3 mb-lg-0 fs-5 align-items-lg-center">
          <li class="nav-item">
            <a class="nav-link px-3 py-2 d-flex align-items-center gap-2" href="?param=home">
              <i class="bi bi-house-door-fill"></i> Início
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-3 py-2 d-flex align-items-center gap-2" href="?param=sobre">
              <i class="bi bi-info-circle-fill"></i> Sobre
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-3 py-2 d-flex align-items-center gap-2" href="?param=servicos">
              <i class="bi bi-scissors"></i> Serviços
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-3 py-2 d-flex align-items-center gap-2" href="?param=galeria">
              <i class="bi bi-image-fill"></i> Galeria
            </a>
          </li>

          <!-- Botão agendar no menu mobile -->
          <li class="nav-item d-lg-none mt-2">
            <a href="?param=agendamento" class="btn btn-gold w-100 fw-semibold d-flex align-items-center justify-content-center gap-2">
              <i class="bi bi-calendar-check-fill"></i> Agendar Horário
            </a>
          </li>
        </ul>

        <!-- Botão agendar desktop -->
        <a href="?param=agendamento" 
           class="btn btn-gold ms-lg-3 d-none d-lg-inline-flex fw-semibold px-4 py-2 align-items-center gap-2">
          <i class="bi bi-calendar-check-fill"></i> Agendar Horário
        </a>
      </div>
    </div>
  </nav>

  <!-- CONTEÚDO -->
  <main class="container my-5 pt-5">
    <?php
      $pagina = $_GET["param"] ?? "home";
      $caminho = "paginas/{$pagina}.php";

      if (file_exists($caminho)) {
          include $caminho;
      } else {
          include "paginas/erro.php";
      }
    ?>
  </main>

  <!-- FOOTER -->
  <footer class="bg-black text-light py-5 mt-auto border-top border-warning border-2">
    <div class="container">
      <div class="row gy-4">
        <!-- Logo e descrição -->
        <div class="col-md-4">
          <h5 class="text-warning fw-bold mb-3">Barbearia LK</h5>
          <p class="small text-muted">
            Transformando seu estilo com excelência e dedicação há mais de 15 anos.
            Barbearia premium que valoriza tradição, modernidade e atendimento personalizado.
          </p>
        </div>

        <!-- Links úteis -->
        <div class="col-md-4">
          <h6 class="text-warning fw-semibold mb-3">Links Rápidos</h6>
          <ul class="list-unstyled">
            <li><a href="?param=home" class="text-light text-decoration-none hover-warning d-flex align-items-center gap-2">
              <i class="bi bi-house-door-fill"></i> Início
            </a></li>
            <li><a href="?param=sobre" class="text-light text-decoration-none hover-warning d-flex align-items-center gap-2">
              <i class="bi bi-info-circle-fill"></i> Sobre
            </a></li>
            <li><a href="?param=servicos" class="text-light text-decoration-none hover-warning d-flex align-items-center gap-2">
              <i class="bi bi-scissors"></i> Serviços
            </a></li>
            <li><a href="?param=galeria" class="text-light text-decoration-none hover-warning d-flex align-items-center gap-2">
              <i class="bi bi-image-fill"></i> Galeria
            </a></li>
          </ul>
        </div>

        <!-- Contato e redes sociais -->
        <div class="col-md-4">
          <h6 class="text-warning fw-semibold mb-3">Contato & Redes Sociais</h6>
          <p class="small mb-1"><i class="bi bi-telephone-fill me-2"></i> (11) 99999-9999</p>
          <p class="small mb-3"><i class="bi bi-envelope-fill me-2"></i> contato@estilofino.com</p>

          <div class="d-flex gap-3 fs-5">
            <a href="#" class="text-warning social-icon" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="text-warning social-icon" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="text-warning social-icon" aria-label="WhatsApp"><i class="bi bi-whatsapp"></i></a>
            <a href="#" class="text-warning social-icon" aria-label="Twitter"><i class="bi bi-twitter"></i></a>
          </div>
        </div>
      </div>

      <hr class="border-warning mt-5" />

      <div class="text-center small text-muted">
        &copy; <?= date('Y') ?> Estilo Fino. Todos os direitos reservados.
      </div>
    </div>
  </footer>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>