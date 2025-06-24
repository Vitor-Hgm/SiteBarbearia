<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Agendamento</title>
    <link href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head>

<style>
body {
    background-color: #111;
    color: #f8f9fa;
    font-family: 'Segoe UI', sans-serif;
}

.bg-dark {
    background-color: #1a1a1a !important;
}

.btn-warning {
    background: linear-gradient(90deg, #f5b942, #f1c572);
    color: #000;
    font-weight: 600;
    border: none;
}

.btn-warning:hover {
    background: linear-gradient(90deg, #f1c572, #f5b942);
    box-shadow: 0 0 10px #f5b94288;
}

.form-control,
.form-select {
    background-color: #1a1a1a;
    color: #f8f9fa;
    border: 1px solid #444;
}

.form-control::placeholder,
.form-select option {
    color: #bbb;
}

.choices__inner {
    background-color: #1a1a1a !important;
    color: #f8f9fa !important;
    border: 1px solid #444 !important;
}

.choices__list--dropdown {
    background-color: #1a1a1a !important;
    border: 1px solid #444 !important;
}

.choices__item--choice {
    color: #f8f9fa !important;
}

.choices__item--choice.is-selected {
    background-color: #333 !important;
}

.choices__list--dropdown .choices__item--selectable:hover {
    background-color: #222 !important;
}

@media (max-width: 767px) {
    .display-5 {
        font-size: 1.75rem;
    }

    .form-control,
    .form-select {
        font-size: 0.9rem;
    }

    .btn-warning {
        font-size: 1rem;
    }
}
</style>

<section class="py-5 bg-black text-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">Agendar <span class="text-warning">Horário</span></h2>
            <p class="text-muted fs-5"><span class="text-warning">Reserve seu horário de forma rápida e prática</span></p>
        </div>

        <div class="mx-auto" style="max-width: 500px;">
            <div class="card bg-dark border border-secondary text-light">
                <div class="card-header text-center">
                    <h5 class="card-title mb-0">Formulário de Agendamento</h5>
                </div>
                <div class="card-body">
                    <form method="post" id="form-agendamento" novalidate>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome Completo</label>
                            <input type="text" class="form-control" id="name" name="name" required minlength="3"
                                pattern="^[A-Za-zÀ-ÿ\s]{3,}$"
                                title="Digite um nome válido com pelo menos 3 letras. Números e símbolos não são permitidos.">
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Telefone/WhatsApp</label>
                            <input type="tel" class="form-control" id="phone" name="phone" required
                                pattern="\(?\d{2}\)?\s?\d{4,5}-?\d{4}">
                        </div>

                        <div class="mb-3">
                            <label for="service" class="form-label">Serviço Principal</label>
                            <select class="form-select" id="service" name="service" required>
                                <option value="" disabled selected>Selecione um serviço</option>
                                <option value="Corte Social">Corte Social</option>
                                <option value="Corte Degradê">Corte Degradê</option>
                                <option value="Platinado">Platinado</option>
                                <option value="Luzes">Luzes</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label d-block">Serviços Adicionais (opcional)</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Barba" id="add-barba" name="adicionais[]">
                                <label class="form-check-label" for="add-barba">Barba</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Sobrancelha" id="add-sobrancelha" name="adicionais[]">
                                <label class="form-check-label" for="add-sobrancelha">Sobrancelha</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="date" class="form-label">Data</label>
                            <input type="text" class="form-control" id="date" name="date" required>
                        </div>

                        <div class="mb-3">
                            <label for="time" class="form-label">Horário</label>
                            <select class="form-select" id="time" name="time" required>
                                <option value="" disabled selected>Selecione um horário</option>
                                <option value="08:00">08:00</option>
                                <option value="08:30">08:30</option>
                                <option value="09:00">09:00</option>
                                <option value="09:30">09:30</option>
                                <option value="10:00">10:00</option>
                                <option value="10:30">10:30</option>
                                <option value="11:00">11:00</option>
                                <option value="11:30">11:30</option>
                                <option value="12:00">12:00</option>
                                <option value="13:00">13:00</option>
                                <option value="14:00">14:00</option>
                                <option value="15:00">15:00</option>
                                <option value="16:00">16:00</option>
                                <option value="17:00">17:00</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="obs" class="form-label">Observações (opcional)</label>
                            <textarea class="form-control" id="obs" name="obs" rows="3"
                                placeholder="Ex: Prefiro com navalha"></textarea>
                        </div>

                        <button type="submit" class="btn btn-warning w-100 fw-bold text-dark">
                            Enviar para o WhatsApp
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("form-agendamento");
    const inputData = document.getElementById("date");

    new Choices("#service", {
        searchEnabled: false,
        itemSelectText: ''
    });
    new Choices("#time", {
        searchEnabled: false,
        itemSelectText: ''
    });

    flatpickr(inputData, {
        minDate: "today",
        dateFormat: "Y-m-d",
        locale: {
            firstDayOfWeek: 1
        },
        onChange: function(selectedDates, dateStr, instance) {
            if (dateStr) {
                inputData.setCustomValidity("");
            }
        }
    });

    form.addEventListener("submit", function(event) {
        event.preventDefault();

        // 🔧 VALIDAÇÃO ESPECIAL: serviço principal opcional se houver adicionais
        const servicoPrincipal = form.service;
        const adicionaisSelecionados = document.querySelectorAll('input[name="adicionais[]"]:checked');
        if (!servicoPrincipal.value && adicionaisSelecionados.length > 0) {
            servicoPrincipal.required = false;
        } else {
            servicoPrincipal.required = true;
        }

        if (!form.checkValidity()) {
            form.classList.add("was-validated");
            return;
        }

        const nome = form.name.value.trim();
        const telefone = form.phone.value.trim();
        const servico = form.service.value;
        const data = form.date.value;
        const horario = form.time.value;
        const obs = form.obs.value.trim();

        const adicionais = [];
        const checkboxes = document.querySelectorAll('input[name="adicionais[]"]:checked');
        checkboxes.forEach(cb => adicionais.push(cb.value));

        const msg = `*Agendamento Barbearia LK*%0A%0A` +
            `*Nome:* ${nome}%0A` +
            `*Telefone:* ${telefone}%0A` +
            `*Serviço:* ${servico || '(somente adicional)'}${adicionais.length ? " + " + adicionais.join(", ") : ""}%0A` +
            `*Data:* ${data}%0A` +
            `*Horário:* ${horario}%0A` +
            `*Observações:* ${obs || 'Nenhuma'}%0A`;

        const telefoneWhats = "554498691352";
        const link = `https://api.whatsapp.com/send?phone=${telefoneWhats}&text=${msg}`;
        window.open(link, "_blank");
    });
});
</script>

