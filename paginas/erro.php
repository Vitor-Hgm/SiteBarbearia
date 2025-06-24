<title>Erro 404</title>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    text-align: center;
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
    gap: 20px;
    flex-wrap: wrap;
}

.img-erro {
    width: 50%;
    max-width: 100%;
    height: auto;
}

.mensagem {
    max-width: 800px;
    text-align: left;
    font-size: 18px;

    a {
        margin-top: 20px;
    }
}

h1 {
    margin-top: 10px;
    font-size: 40px;
}
</style>


<h1 class="mt-5">Erro 404!</h1>
<div class="container">
    <img src="imagens/erro.png" alt="Erro 404" class="img-erro">
    <p class="mensagem">
        A página que você está procurando não existe ou foi removida!
        <br>
        <a href="home" alt="home" class="btn btn-dark md-">
            Página inicial
        </a>
    </p>
</div>