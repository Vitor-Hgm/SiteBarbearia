<section id="agendamento" class="agendamento-section">
  <div class="agendamento-container">
    <div class="agendamento-header">
      <h2>Agendar <span class="highlight">Horário</span></h2>
      <p>Reserve seu horário de forma rápida e prática</p>
    </div>

    <div class="form-wrapper">
      <div class="form-card">
        <div class="form-header">
          <h5>Formulário de Agendamento</h5>
        </div>
        <div class="form-body">
          <form method="post" action="processa_agendamento.php">
            <div class="form-group">
              <label for="name">Nome Completo</label>
              <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
              <label for="phone">Telefone/WhatsApp</label>
              <input type="tel" id="phone" name="phone" required>
            </div>

            <div class="form-group">
              <label for="service">Serviço</label>
              <select id="service" name="service" required>
                <option value="" disabled selected>Selecione um serviço</option>
                <option value="Corte Masculino">Corte Social</option>
                <option value="Corte Masculino">Corte Degradê</option>
                <option value="Barba Completa">Barba Completa</option>
                <option value="Sobrancelha">Sobrancelha</option>
                <option value="Paltinado">Platinado</option>
                <option value="Corte + Barba">Corte + Barba</option>
              </select>
            </div>

            <div class="form-group">
              <label for="date">Data</label>
              <input type="date" id="date" name="date" required>
            </div>

            <div class="form-group">
              <label for="time">Horário</label>
              <select id="time" name="time" required>
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

            <button type="submit" class="submit-btn">Solicitar Agendamento</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
