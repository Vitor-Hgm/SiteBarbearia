<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Agendamento - Barbearia LK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

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

    .form-label {
        font-weight: 500;
    }

    .invalid-feedback {
        font-size: 0.9rem;
    }
    </style>
</head>

<body>
    <section id="agendamento" class="py-5 bg-black text-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Agendar <span class="text-warning">Horário</span></h2>
                <p class="text-muted fs-5"><span class="text-warning">Reserve seu horário de forma rápida e prática</p>
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
                                <input type="text" class="form-control" id="name" name="name" required minlength="3">
                                <div class="invalid-feedback">Informe seu nome completo (mínimo 3 letras).</div>
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Telefone/WhatsApp</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required
                                    pattern="\(?\d{2}\)?\s?\d{4,5}-?\d{4}">
                                <div class="invalid-feedback">Digite um telefone válido. Ex: (44) 99876-5432</div>
                            </div>

                            <div class="mb-3">
                                <label for="service" class="form-label">Serviço</label>
                                <select class="form-select" id="service" name="service" required>
                                    <option value="" disabled selected>Selecione um serviço</option>
                                    <option value="Corte Masculino">Corte Masculino</option>
                                    <option value="Barba Completa">Barba</option>
                                    <option value="Sobrancelha">Sobrancelha</option>
                                    <option value="Platinado">Platinado</option>
                                    <option value="Luzes">Luzes</option>
                                </select>
                                <div class="invalid-feedback">Escolha um serviço.</div>
                            </div>

                            <div class="mb-3">
                                <label for="date" class="form-label">Data</label>
                                <input type="date" class="form-control" id="date" name="date" required>
                                <div class="invalid-feedback">Escolha uma data válida.</div>
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
                                    <option value="13:00">13:00</option>
                                    <option value="13:30">13:30</option>
                                    <option value="14:00">14:00</option>
                                    <option value="14:30">14:30</option>
                                    <option value="15:00">15:00</option>
                                    <option value="15:30">15:30</option>
                                    <option value="16:00">16:00</option>
                                    <option value="16:30">16:30</option>
                                    <option value="17:00">17:00</option>
                                    <option value="17:30">17:30</option>
                                    <option value="18:00">18:00</option>
                                    <option value="18:30">18:30</option>
                                    <option value="19:00">19:00</option>
                                    <option value="19:30">19:30</option>
                                    <option value="20:00">20:00</option>
                                    <option value="20:30">20:30</option>
                                    <option value="21:00">21:00</option>
                                    <option value="21:30">21:30</option>
                                    <option value="22:00">22:00</option>
                                </select>
                                <div class="invalid-feedback">Escolha um horário.</div>
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

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const form = document.getElementById("form-agendamento");

        form.addEventListener("submit", function(event) {
            event.preventDefault();

            if (!form.checkValidity() || !dataValida()) {
                form.classList.add("was-validated");
                return;
            }

            const nome = form.name.value.trim();
            const telefone = form.phone.value.trim();
            const servico = form.service.value;
            const data = form.date.value;
            const horario = form.time.value;
            const obs = form.obs.value.trim();

            const msg = `*Agendamento Barbearia LK*%0A%0A` +
                `*Nome:* ${nome}%0A` +
                `*Telefone:* ${telefone}%0A` +
                `*Serviço:* ${servico}%0A` +
                `*Data:* ${data}%0A` +
                `*Horário:* ${horario}%0A` +
                `*Observações:* ${obs || 'Nenhuma'}%0A`;

            const telefoneWhats = "554498691352";
            const link = `https://api.whatsapp.com/send?phone=${telefoneWhats}&text=${msg}`;
            window.open(link, "_blank");
        });

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
</body>

</html>