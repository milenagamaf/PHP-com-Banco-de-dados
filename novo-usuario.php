<h1>Novo Usuários</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="data_nasc" class="form-control">
    </div>

    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>

    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email" class="form-control">
    </div>

    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control">
    </div>

    <div class="mb-3">
        <label>Birth</label>
        <input type="text" name="birth" class="form-control">
    </div>

    <div class="mb-3">
        <label>Avatar</label>
        <input type="text" name="avatar" class="form-control">
    </div>

    <div class="mb-3">
        <label>Bio</label>
        <input type="text" name="bio" class="form-control">
    </div>

    <div class="mb-3">
        <label>Type</label>
        <input type="text" name="type" class="form-control">
    </div>

    <div class="mb-3">
        <label>Status</label>
        <input type="text" name="status" class="form-control">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>


</form>