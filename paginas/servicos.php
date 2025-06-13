<section class="container py-5">
  <h2 class="mb-4 text-center text-warning">Nossos Cortes</h2>
  <div class="row g-4">
    <?php 
    include "array.php";
    
    foreach($cortes as $corte): ?>
      <div class="col-12 col-sm-6 col-md-4">
        <div class="card h-100 shadow-sm rounded-4" style="background-color: #222; color: #fff; border: none;">
          <div class="card-body d-flex flex-column justify-content-between">
            <div>
              <h5 class="card-title text-uppercase fw-bold"><?php echo htmlspecialchars($corte['nome']); ?></h5>
              <p class="card-text mb-1"><strong>Valor:</strong> R$ <?php echo number_format($corte['valor'], 2, ',', '.'); ?></p>
              <p class="card-text"><strong>Tempo:</strong> <?php echo htmlspecialchars($corte['tempo']); ?></p>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <div class="text-center mt-5">
    <a href="agendar" class="btn btn-warning btn-lg px-5 fw-semibold shadow">
      Agende seu horário
    </a>
  </div>
</section>
