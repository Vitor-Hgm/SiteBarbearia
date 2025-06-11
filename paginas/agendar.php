
<section id="agendamento" class="py-5 bg-black text-light">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="display-5 fw-bold">Agendar <span class="text-warning">Horário</span></h2>
      <p class="text-muted fs-5">Reserve seu horário de forma rápida e prática</p>
    </div>

    <div class="mx-auto" style="max-width: 500px;">
      <div class="card bg-dark border border-secondary text-light">
        <div class="card-header text-center">
          <h5 class="card-title mb-0">Formulário de Agendamento</h5>
        </div>
        <div class="card-body">
          <form method="post" action="processa_agendamento.php">
            <div class="mb-3">
              <label for="name" class="form-label">Nome Completo</label>
              <input type="text" class="form-control bg-dark text-light border-secondary" id="name" name="name" required>
            </div>

            <div class="mb-3">
              <label for="phone" class="form-label">Telefone/WhatsApp</label>
              <input type="tel" class="form-control bg-dark text-light border-secondary" id="phone" name="phone" required>
            </div>

            <div class="mb-3">
              <label for="service" class="form-label">Serviço</label>
              <select class="form-select bg-dark text-light border-secondary" id="service" name="service" required>
                <option value="" disabled selected>Selecione um serviço</option>
                <option value="Corte Masculino">Corte Masculino</option>
                <option value="Barba Completa">Barba Completa</option>
                <option value="Sobrancelha">Sobrancelha</option>
                <option value="Hidratação Capilar">Hidratação Capilar</option>
                <option value="Corte + Barba">Corte + Barba</option>
              </select>
            </div>

            <div class="mb-3">
              <label for="date" class="form-label">Data</label>
              <input type="date" class="form-control bg-dark text-light border-secondary" id="date" name="date" required>
            </div>

            <div class="mb-4">
              <label for="time" class="form-label">Horário</label>
              <select class="form-select bg-dark text-light border-secondary" id="time" name="time" required>
                <option value="" disabled selected>Selecione um horário</option>
                <option value="08:00">08:00</option>
                <option value="09:00">09:00</option>
                <option value="10:00">10:00</option>
                <option value="11:00">11:00</option>
                <option value="12:00">12:00</option>
                <option value="14:00">14:00</option>
                <option value="15:00">15:00</option>
                <option value="16:00">16:00</option>
                <option value="17:00">17:00</option>
                <option value="18:00">18:00</option>
              </select>
            </div>

            <button type="submit" class="btn btn-warning w-100 fw-bold text-dark">
              Solicitar Agendamento
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
