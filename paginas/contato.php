<?php
// Variáveis de controle
$mensagemEnviada = false;
$erroEnvio = '';

// Processa o formulário
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = trim($_POST["nome"] ?? '');
    $email = trim($_POST["email"] ?? '');
    $mensagem = trim($_POST["mensagem"] ?? '');

    // Validação
    if (empty($nome) || empty($email) || empty($mensagem)) {
        $erroEnvio = "Todos os campos são obrigatórios.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erroEnvio = "E-mail inválido.";
    } else {
        // Dados do e-mail
        $destinatario = "seuemail@seudominio.com"; // Altere para seu e-mail
        $assunto = "Mensagem do site";
        $corpo = "Nome: $nome\n";
        $corpo .= "E-mail: $email\n";
        $corpo .= "Mensagem:\n$mensagem";

        $headers = "From: $email\r\nReply-To: $email\r\n";

        // Envia o e-mail
        if (mail($destinatario, $assunto, $corpo, $headers)) {
            $mensagemEnviada = true;
        } else {
            $erroEnvio = "Erro ao enviar a mensagem. Tente novamente mais tarde.";
        }
    }
}
?>

<section class="bg-black text-light py-5 mt-4 mb-4" style="min-height: 100vh;">
  <div class="container" style="max-width: 600px;">
    <h2 class="display-4 text-center fw-bold mb-4">Fale <span class="text-warning">Conosco</span></h2>
    <p class="text-center fs-5 mb-5">
      Preencha o formulário abaixo e entraremos em contato com você.
    </p>

    <?php if ($mensagemEnviada): ?>
      <div class="alert alert-success text-center py-3 fs-5 rounded-3 shadow-sm">
        Mensagem enviada com sucesso! Obrigado pelo contato.
      </div>
    <?php elseif (!empty($erroEnvio)): ?>
      <div class="alert alert-danger text-center py-3 fs-5 rounded-3 shadow-sm">
        <?php echo $erroEnvio; ?>
      </div>
    <?php endif; ?>

    <form method="POST" class="needs-validation" novalidate>
      <div class="mb-4">
        <label for="nome" class="form-label fs-5 fw-semibold">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control form-control-lg rounded-3 border-warning bg-dark text-light" placeholder="Seu nome completo" required>
        <div class="invalid-feedback">Por favor, informe seu nome.</div>
      </div>

      <div class="mb-4">
        <label for="email" class="form-label fs-5 fw-semibold">E-mail</label>
        <input type="email" name="email" id="email" class="form-control form-control-lg rounded-3 border-warning bg-dark text-light" placeholder="seu@email.com" required>
        <div class="invalid-feedback">Por favor, informe um e-mail válido.</div>
      </div>

      <div class="mb-4">
        <label for="mensagem" class="form-label fs-5 fw-semibold">Mensagem</label>
        <textarea name="mensagem" id="mensagem" rows="6" class="form-control form-control-lg rounded-3 border-warning bg-dark text-light" placeholder="Escreva sua mensagem aqui..." required></textarea>
        <div class="invalid-feedback">Por favor, escreva sua mensagem.</div>
      </div>

      <div class="d-grid">
        <button type="submit" class="btn btn-warning btn-lg fw-bold shadow-sm">
          Enviar Mensagem
        </button>
      </div>
    </form>
  </div>
</section>
