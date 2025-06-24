<section class="bg-black text-light py-5" style="min-height: 100vh;">
  <div class="container">
    <header class="mb-5 text-center">
      <h2 class="display-4 fw-bold">
        Nossa <span class="text-warning">Galeria</span>
      </h2>
      <p class="fs-5 text-muted mx-auto" style="max-width: 600px;">
        Confira os melhores momentos e resultados dos nossos serviços. Inspiração e estilo em cada clique.
      </p>
    </header>

    <div class="row g-4">
      <?php
      $imagens = [
        ["src" => "fotos/foto.jpg", "alt" => "Foto 1"],
        ["src" => "fotos/foto2.jpg", "alt" => "Foto 2"],
        ["src" => "fotos/foto3.jpg", "alt" => "Foto 3"],
        ["src" => "fotos/foto4.jpg", "alt" => "Foto 4"],
        ["src" => "fotos/foto5.jpg", "alt" => "Foto 5"],
        ["src" => "fotos/foto6.jpg", "alt" => "Foto 6"],
        ["src" => "fotos/foto7.jpg", "alt" => "Foto 7"],
        ["src" => "fotos/foto8.jpg", "alt" => "Foto 8"],
        ["src" => "fotos/foto9.jpg", "alt" => "Foto 9"],
        ["src" => "fotos/foto10.jpg", "alt" => "Foto 10"],
        
      ];
      foreach ($imagens as $index => $img): ?>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="card bg-dark border-warning shadow-sm gallery-card" style="cursor: pointer;"
               data-bs-toggle="modal" data-bs-target="#modalCarousel" data-bs-slide-to="<?= $index ?>">
            <img src="<?= $img['src'] ?>" alt="<?= htmlspecialchars($img['alt']) ?>" class="card-img-top rounded">
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="text-center mt-5">
      <a href="contato" class="btn btn-lg btn-warning px-5 fw-semibold shadow-lg" role="button">
        Quer agendar? Fale conosco!
      </a>
    </div>
  </div>
</section>

<!-- Modal com Carrossel -->
<div class="modal fade" id="modalCarousel" tabindex="-1" aria-labelledby="modalCarouselLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content bg-dark border-warning">
      <div class="modal-header border-0">
        <h5 class="modal-title text-warning" id="modalCarouselLabel">Galeria de Fotos</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body p-0 position-relative">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="false" data-bs-interval="false">
          <div class="carousel-inner">
            <?php foreach ($imagens as $index => $img): ?>
              <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                <img src="<?= $img['src'] ?>" class="d-block w-100 rounded-bottom carousel-clickable" alt="<?= htmlspecialchars($img['alt']) ?>"
                     style="height: 500px; object-fit: contain; cursor: pointer;">
              </div>
            <?php endforeach; ?>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Estilo da Galeria -->
<style>
  .gallery-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 0.375rem;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .gallery-card img:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 20px rgba(245, 185, 66, 0.7);
  }

  .gallery-card:active img {
    transform: scale(0.95);
    transition: transform 0.2s ease;
  }
</style>

<!-- Script do Carrossel -->
<script>
  const modalCarousel = document.getElementById('modalCarousel');
  const carouselElement = document.getElementById('carouselExampleIndicators');
  const bsCarousel = bootstrap.Carousel.getOrCreateInstance(carouselElement);

  modalCarousel.addEventListener('show.bs.modal', (event) => {
    const trigger = event.relatedTarget;
    if (!trigger) return;

    const slideTo = trigger.getAttribute('data-bs-slide-to');
    if (slideTo !== null) {
      bsCarousel.to(parseInt(slideTo));
    }
  });

  carouselElement.querySelectorAll('.carousel-clickable').forEach(img => {
    img.addEventListener('click', () => {
      const totalItems = carouselElement.querySelectorAll('.carousel-item').length;
      const activeIndex = Array.from(carouselElement.querySelectorAll('.carousel-item')).findIndex(item => item.classList.contains('active'));

      let nextIndex = activeIndex + 1;
      if (nextIndex >= totalItems) nextIndex = 0;

      bsCarousel.to(nextIndex);
    });
  });
</script>
