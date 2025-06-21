<section class="bg-black text-light py-5" style="min-height: 100vh;">
  <div class="container">
    <header class="mb-5 text-center">
      <h2 class="display-4 fw-bold">
        Nossos <span class="text-warning">Serviços</span>
      </h2>
      <p class="fs-5 text-muted mx-auto" style="max-width: 600px;">
        Oferecemos uma gama completa de serviços para realçar seu estilo, desde cortes clássicos até tratamentos especiais. Qualidade e excelência em cada detalhe.
      </p>
    </header>

    <div class="row g-4">
      <?php 
      $servicos = [
        ["icon" => "bi-scissors", "titulo" => "Corte Masculino", "desc" => "Técnicas modernas e clássicas para cortes personalizados que combinam com seu estilo e personalidade."],
        ["icon" => "bi-brush", "titulo" => "Barba & Estilo", "desc" => "Modelagem, aparo e tratamentos para manter sua barba impecável e com um toque sofisticado."],
        ["icon" => "bi-droplet", "titulo" => "Tratamentos Capilares", "desc" => "Hidratação, revitalização e cuidados para cabelos saudáveis, fortes e com brilho natural."],
        ["icon" => "bi-emoji-smile", "titulo" => "Design de Sobrancelha", "desc" => "Serviço especializado para deixar suas sobrancelhas alinhadas e harmoniosas."],
        ["icon" => "bi-person-check", "titulo" => "Consultoria de Estilo", "desc" => "Consultoria personalizada para ajudar você a escolher o visual perfeito para cada ocasião."],
        ["icon" => "bi-clock-history", "titulo" => "Atendimento 24/7", "desc" => "Estamos sempre prontos para atender você, com agendamento flexível e dedicação total."],
      ];

      foreach($servicos as $s): ?>
      <div class="col-md-6 col-lg-4">
        <div class="card bg-dark border-warning shadow-lg h-100 service-card">
          <div class="card-body d-flex flex-column text-center">
            <div class="mb-4 text-warning fs-1 icon-container">
              <i class="bi <?= $s['icon'] ?>"></i>
            </div>
            <h5 class="card-title text-warning fw-bold mb-3"><?= $s['titulo'] ?></h5>
            <p class="card-text text-muted flex-grow-1 px-3"><?= $s['desc'] ?></p>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <hr class="my-5 border-warning opacity-50">

    <div class="text-center">
      <h3 class="fw-bold mb-3">Por que escolher a <span class="text-warning">Estilo Fino</span>?</h3>
      <p class="fs-5 text-muted mx-auto" style="max-width: 700px;">
        Além da técnica apurada, oferecemos atendimento exclusivo e ambiente acolhedor para você relaxar e se transformar com estilo e segurança.
      </p>
      <a href="agendamento" class="btn btn-lg btn-warning px-5 fw-semibold shadow-lg mt-3 hover-grow">
        Agende seu horário agora
      </a>
    </div>
  </div>

  <style>
    .service-card {
      border-radius: 15px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      cursor: default;
      padding-bottom: 2rem; /* Espaço extra pra evitar compactação */
    }
    .service-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 25px rgba(245, 185, 66, 0.6);
      cursor: pointer;
    }

    .icon-container i {
      transition: transform 0.3s ease;
    }
    .service-card:hover .icon-container i {
      transform: scale(1.2) rotate(10deg);
    }

    /* Remove estilo do botão pois eles não existem mais */
    
    /* Responsividade */
    @media (max-width: 768px) {
      .service-card {
        border-radius: 12px;
      }
      .icon-container i {
        font-size: 3.5rem !important;
      }
    }
  </style>
</section>
