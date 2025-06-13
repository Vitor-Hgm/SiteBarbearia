<!-- Seção da Galeria -->
<section class="bg-black text-light py-5 mt-4 mb-4" style="min-height: 100vh;">
    <div class="container">
        <header class="mb-5 text-center d-block w-100">
            <h2 class="display-4 fw-bold w-100 mb-3">
                <span class="text-warning">Cortes</span>
            </h2>
            <p class="fs-5 mx-auto" style="max-width: 600px;">
                Confira os melhores momentos e resultados dos nossos serviços. Inspiração e estilo em cada clique.
            </p>
        </header>

        <div class="row g-4">
            <!-- Galeria de imagens com modal dinâmico -->
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card bg-dark border-warning shadow-sm gallery-card" data-bs-toggle="modal"
                    data-bs-target="#modalImagem" data-img="fotos/foto.jpg" data-title="Corte Social"
                    style="cursor: pointer;">
                    <img src="fotos/foto.jpg" alt="Corte Social" class="card-img-top rounded img-fluid">
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card bg-dark border-warning shadow-sm gallery-card" data-bs-toggle="modal"
                    data-bs-target="#modalImagem" data-img="fotos/foto2.jpg" data-title="Corte Degradê/Americano com risco"
                    style="cursor: pointer;">
                    <img src="fotos/foto2.jpg" alt="Corte Degradê/Americano'Com risco'" class="card-img-top rounded img-fluid">
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card bg-dark border-warning shadow-sm gallery-card" data-bs-toggle="modal"
                    data-bs-target="#modalImagem" data-img="fotos/foto3.jpg" data-title="Corte Social "
                    style="cursor: pointer;">
                    <img src="fotos/foto3.jpg" alt="Corte estiloso" class="card-img-top rounded img-fluid">
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card bg-dark border-warning shadow-sm gallery-card" data-bs-toggle="modal"
                    data-bs-target="#modalImagem" data-img="fotos/foto4.jpg" data-title="Corte Degradê"
                    style="cursor: pointer;">
                    <img src="fotos/foto4.jpg" alt="Corte Degradê" class="card-img-top rounded img-fluid">
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card bg-dark border-warning shadow-sm gallery-card" data-bs-toggle="modal"
                    data-bs-target="#modalImagem" data-img="fotos/foto5.jpg" data-title="Corte Degradê"
                    style="cursor: pointer;">
                    <img src="fotos/foto5.jpg" alt="Corte Degradê" class="card-img-top rounded img-fluid">
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card bg-dark border-warning shadow-sm gallery-card" data-bs-toggle="modal"
                    data-bs-target="#modalImagem" data-img="fotos/foto6.jpg" data-title="Corte Social com risco"
                    style="cursor: pointer;">
                    <img src="fotos/foto6.jpg" alt="Corte Social com risco" class="card-img-top rounded img-fluid">
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card bg-dark border-warning shadow-sm gallery-card" data-bs-toggle="modal"
                    data-bs-target="#modalImagem" data-img="fotos/foto7.jpg" data-title="Corte Social"
                    style="cursor: pointer;">
                    <img src="fotos/foto7.jpg" alt="Corte Social" class="card-img-top rounded img-fluid">
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card bg-dark border-warning shadow-sm gallery-card" data-bs-toggle="modal"
                    data-bs-target="#modalImagem" data-img="fotos/foto8.jpg" data-title="Corte Degradê/Moicano"
                    style="cursor: pointer;">
                    <img src="fotos/foto8.jpg" alt="Corte Degradê/Moicano" class="card-img-top rounded img-fluid">
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card bg-dark border-warning shadow-sm gallery-card" data-bs-toggle="modal"
                    data-bs-target="#modalImagem" data-img="fotos/foto9.jpg" data-title="Corte Degradê/Moicano"
                    style="cursor: pointer;">
                    <img src="fotos/foto9.jpg" alt="Corte Degradê/Moicano" class="card-img-top rounded img-fluid">
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card bg-dark border-warning shadow-sm gallery-card" data-bs-toggle="modal"
                    data-bs-target="#modalImagem" data-img="fotos/foto10.jpg" data-title="Corte Platinado"
                    style="cursor: pointer;">
                    <img src="fotos/foto10.jpg" alt="Corte Platinado" class="card-img-top rounded img-fluid">
                </div>
            </div>
            <!-- Adicione mais imagens aqui seguindo o padrão -->
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalImagem" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content bg-dark border-warning">
                    <div class="modal-header border-0">
                        <h5 class="modal-title text-warning" id="modalTitulo"></h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body text-center position-relative">
                        <!-- Botões de navegação -->
                        <button id="btnAnterior"
                            class="btn btn-outline-warning position-absolute top-50 start-0 translate-middle-y ms-2"
                            style="z-index: 2;">←</button>
                        <img id="modalImg" src="" alt="Imagem ampliada" class="img-fluid rounded w-100"
                            style="max-height: 80vh; object-fit: contain;">
                        <button id="btnProximo"
                            class="btn btn-outline-warning position-absolute top-50 end-0 translate-middle-y me-2"
                            style="z-index: 2;">→</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="agendar" class="btn btn-lg btn-warning px-5 fw-semibold shadow-lg">
                Quer agendar? Fale conosco!
            </a>
        </div>
    </div>
</section>

<!-- CSS -->
<style>
.gallery-card img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.gallery-card img:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 20px rgba(245, 185, 66, 0.7);
}

@media (max-width: 768px) {
    h2.display-4 {
        font-size: 1.75rem;
    }

    p.fs-5 {
        font-size: 0.95rem;
    }

    .btn {
        font-size: 0.95rem;
        padding: 0.75rem 1.5rem;
    }

    .modal-dialog.modal-lg {
        max-width: 95%;
        margin: 1rem auto;
    }

    .gallery-card img {
        height: 150px;
    }
}
</style>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- JavaScript com suporte a teclado e navegação -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const modalImg = document.getElementById('modalImg');
    const modalTitulo = document.getElementById('modalTitulo');
    const galleryCards = document.querySelectorAll('.gallery-card');
    const btnAnterior = document.getElementById('btnAnterior');
    const btnProximo = document.getElementById('btnProximo');
    const modal = document.getElementById('modalImagem');

    let currentIndex = 0;
    const imagens = Array.from(galleryCards).map(card => ({
        src: card.getAttribute('data-img'),
        title: card.getAttribute('data-title')
    }));

    function abrirModal(index) {
        modalImg.src = imagens[index].src;
        modalTitulo.textContent = imagens[index].title;
        currentIndex = index;
    }

    galleryCards.forEach((card, index) => {
        card.addEventListener('click', () => abrirModal(index));
    });

    btnAnterior.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + imagens.length) % imagens.length;
        abrirModal(currentIndex);
    });

    btnProximo.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % imagens.length;
        abrirModal(currentIndex);
    });

    document.addEventListener('keydown', function(event) {
        if (!modal.classList.contains('show')) return;

        switch (event.key) {
            case 'ArrowLeft':
                event.preventDefault();
                currentIndex = (currentIndex - 1 + imagens.length) % imagens.length;
                abrirModal(currentIndex);
                break;
            case 'ArrowRight':
                event.preventDefault();
                currentIndex = (currentIndex + 1) % imagens.length;
                abrirModal(currentIndex);
                break;
            case 'Escape':
                const bsModal = bootstrap.Modal.getInstance(modal);
                bsModal.hide();
                break;
        }
    });
});
</script>