<!-- Cabeçalho -->
<?php 
    include_once 'php/header.php';
?>
<!-- Conteúdo da página -->
<section>
    <div class="mb-4">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="border rounded shadow-sm p-4 bg-light">
                    <h1 class="h1">Cadastro</h1>
                    <form autocomplete="on">
                        <div class="form-group">
                            <label class="font-weight-bold" for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" placeholder="Seu nome" required>
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold" for="email">E-mail</label>
                            <input type="email" class="form-control" id="email" aria-describedby="ajudaEmail"
                                placeholder="Seu email" required>
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold" for="senha">Senha</label>
                            <input autocomplete="off" type="password" class="form-control" id="senha"
                                placeholder="Sua senha" required>
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold" for="senha2">Confirme sua senha</label>
                            <input autocomplete="off" type="password" class="form-control" id="senha2"
                                placeholder="Confirme sua senha" required>
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold" for="fotoPerfil">Escolha sua imagem de perfil:</label>
                            <input class="border border-black p-2 m-2 rounded" type="file" class="form-control-file"
                                id="fotoPerfil">
                        </div>

                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="updates">
                            <label class="form-check-label" for="updates">Deseja receber novidades por e-mail? Nunca
                                venderemos seu e-mail a terceiros.</label>
                        </div>

                        <button type="submit" class="btn btn-primary">Cadastrar-se</button>
                    </form>

                    <div class="mt-5">
                        <span>
                            Já possui uma conta? | <a href="login.html">Fazer login</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Rodapé -->
<?php 
    include_once 'footer.php';
?>