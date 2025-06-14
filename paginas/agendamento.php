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
          <form method="post" action="processa_agendamento.php" id="form-agendamento" novalidate>
            <div class="mb-3">
              <label for="name" class="form-label">Nome Completo</label>
              <input type="text" class="form-control bg-dark text-light border-secondary" id="name" name="name" required minlength="3">
              <div class="invalid-feedback">Informe seu nome completo (mínimo 3 letras).</div>
            </div>

            <div class="mb-3">
              <label for="phone" class="form-label">Telefone/WhatsApp</label>
              <input type="tel" pattern="\(?\d{2}\)?\s?\d{4,5}-?\d{4}" class="form-control bg-dark text-light border-secondary" id="phone" name="phone" required>
              <div class="invalid-feedback">Digite um telefone válido. Ex: (11) 91234-5678</div>
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
              <div class="invalid-feedback">Escolha um serviço.</div>
            </div>

            <div class="mb-3">
              <label for="date" class="form-label">Data</label>
              <input type="date" class="form-control bg-dark text-light border-secondary" id="date" name="date" required>
              <div class="invalid-feedback">Escolha uma data válida.</div>
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
              <div class="invalid-feedback">Escolha um horário.</div>
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
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("form-agendamento");

    // Impede envio se houver campos inválidos
    form.addEventListener("submit", function (event) {
      if (!form.checkValidity() || !dataValida()) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add("was-validated");
    });

    // Impede data anterior a hoje
    function dataValida() {
      const inputData = document.getElementById("date");
      const dataSelecionada = new Date(inputData.value);
      const hoje = new Date();
      hoje.setHours(0, 0, 0, 0);
      if (dataSelecionada < hoje) {
        inputData.setCustomValidity("Data inválida");
        return false;
      } else {
        inputData.setCustomValidity("");
        return true;
      }
    }
  });
</script>
