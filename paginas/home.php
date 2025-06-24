<!-- Seção Hero / Inicial -->
<section class="bg-dark text-light py-5 d-flex align-items-center" style="min-height: 85vh; background: linear-gradient(145deg, #111 0%, #1c1c1c 100%);">
  <div class="container text-center">
    <h1 class="display-3 fw-bold mb-3 text-uppercase" style="letter-spacing: 1px;">
      Bem-vindo à <span class="text-warning">Barbearia LK</span>
    </h1>
    <p class="lead fs-5 mb-4 mx-auto" style="max-width: 640px;">
      Tradição e inovação unidas para transformar seu visual com excelência e estilo.
    </p>
    <a href="agendamento" class="btn btn-warning btn-lg px-5 fw-semibold shadow pulse-hover">
      Agende seu horário
    </a>
  </div>
</section>

<!-- Por que escolher -->
<section class="bg-black text-light py-5">
  <div class="container text-center">
    <h2 class="display-6 fw-bold mb-5">
      Por que escolher a <span class="text-warning">Barbearia LK?</span>
    </h2>
    <div class="row g-4 justify-content-center">
      <div class="col-6 col-md-4 col-lg-3">
        <div class="feature-card">
          <i class="bi bi-award text-warning fs-1 mb-3"></i>
          <h5 class="fw-bold mb-2">Profissionalismo</h5>
          <p class="text-muted small mb-0">Excelência no atendimento</p>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-3">
        <div class="feature-card">
          <i class="bi bi-people text-warning fs-1 mb-3"></i>
          <h5 class="fw-bold mb-2">Foco no Cliente</h5>
          <p class="text-muted small mb-0">Nossa maior recompensa é a sua confiança</p>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-3">
        <div class="feature-card">
          <i class="bi bi-clock text-warning fs-1 mb-3"></i>
          <h5 class="fw-bold mb-2">Segunda a Sábado</h5>
          <p class="text-muted small mb-0">Estamos disponíveis quando você precisar</p>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-3">
        <div class="feature-card">
          <i class="bi bi-star-fill text-warning fs-1 mb-3"></i>
          <h5 class="fw-bold mb-2">Avaliações Positivas</h5>
          <p class="text-muted small mb-0">Excelentes feedbacks dos clientes</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Ambiente sofisticado -->
<section class="bg-dark text-light py-5">
  <div class="container text-center">
    <h2 class="display-6 fw-bold mb-4">Ambiente sofisticado para sua melhor experiência</h2>
    <p class="fs-5 mb-3 mx-auto" style="max-width: 650px;">
      Um espaço moderno e acolhedor para você relaxar enquanto cuidamos do seu visual com excelência.
    </p>
    <p class="fs-5 mx-auto" style="max-width: 650px;">
      Profissionais dedicados e apaixonados pelo que fazem, garantindo um atendimento exclusivo do início ao fim.
    </p>
    <a href="servicos" class="btn btn-warning btn-lg px-5 fw-semibold shadow pulse-hover">
      Conheça nossos serviços
    </a>
  </div>
</section>
<style>
  .pulse-hover {
  transition: transform 0.3s ease;
}
.pulse-hover:hover {
  transform: scale(1.05);
}

.feature-card {
  padding: 2rem;
  background-color: rgba(255, 255, 255, 0.02);
  border-radius: 1rem;
  transition: transform 0.3s ease, background-color 0.3s ease;
  box-shadow: 0 0 15px rgba(255, 255, 255, 0.03);
  height: 100%;
}
.feature-card:hover {
  transform: translateY(-5px);
  background-color: rgba(255, 255, 255, 0.05);
}

@media (max-width: 767px) {
  h1.display-3 {
    font-size: 2.2rem;
  }
  p.lead, p.fs-5 {
    font-size: 1.1rem;
    max-width: 100% !important;
  }
  .btn-lg {
    padding-left: 2rem !important;
    padding-right: 2rem !important;
    font-size: 1.2rem;
  }
}

</style>