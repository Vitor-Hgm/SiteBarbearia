<section class="container py-5">
  <h2 class="mb-4 text-center text-warning display-5 fw-bold">
    <i class="fa-solid fa-scissors me-2"></i>Nossos Cortes
  </h2>
  
  <div class="row g-4">
    <?php 
    include "array.php";
    
    foreach($cortes as $corte): ?>
      <div class="col-12 col-sm-6 col-md-4">
        <div class="card h-100 shadow-lg rounded-4 border-0" style="background-color: #1c1c1c; color: #fff;">
          <div class="card-body d-flex flex-column justify-content-between">
            <div>
              <h5 class="card-title text-uppercase fw-bold text-warning">
                <i class="fa-solid fa-user-scissors me-2"></i><?php echo htmlspecialchars($corte['nome']); ?>
              </h5>
              <p class="card-text mb-2">
                <i class="fa-solid fa-tag text-warning me-2"></i>
                <strong>Valor:</strong> R$ <?php echo number_format($corte['valor'], 2, ',', '.'); ?>
              </p>
              <p class="card-text">
                <i class="fa-regular fa-clock text-warning me-2"></i>
                <strong>Tempo:</strong> <?php echo htmlspecialchars($corte['tempo']); ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <div class="text-center mt-5">
    <a href="agendar" class="btn btn-warning btn-lg px-5 fw-semibold shadow">
      <i class="fa-solid fa-calendar-check me-2"></i>Agende seu horário
    </a>
  </div>
</section>
