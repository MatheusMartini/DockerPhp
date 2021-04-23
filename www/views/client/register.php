<h1>Formulário de Cadastro</h1>

<form action="?controller=client&action=registerView" method="post">
    <div class="form-group">
        <label for="name">Nome:</label>
        <input type="text" class="form-control" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
        <label for="login">Login:</label>
        <input type="text" class="form-control" placeholder="Enter login" name="login">
    </div>
    <div class="form-group">
        <label for="pass">Senha:</label>
        <input type="password" class="form-control" placeholder="Enter password" name="pass">
    </div>
    <div class="form-group">
        <label for="phone">Telefone:</label>
        <input type="text" class="form-control" placeholder="Enter phone" name="phone">
    </div>
    <div class="form-group">
        <label for="aboutYou">Sobre você:</label>
        <textarea type="text" class="form-control" placeholder="About you" name="aboutYou"></textarea>
    </div>

    <div class="form-group">
        <label>Tipos de conteudo que deseja receber:</label>
        <select class="form-control" name="contentSelect">
            <option value="Politíca">Política</option>
            <option value="Esportes">Esportes</option>
            <option value="Tecnologia">Tecnologia</option>
            <option value="Games">Games</option>
            <option value="Todos">Todos</option>
        </select>
    </div>

    <div class="form-group">
        <label>Genero:</label>
        <br>
        <div class="radio">
            <label><input type="radio" name="gender" value="female"> Feminino</label>
        </div>
        <div class="radio">
            <label><input type="radio" name="gender" value="male"> Masculino</label>
        </div>
        <div class="radio">
            <label><input type="radio" name="gender" value="other"> Outro</label>
        </div>


    </div>

    <div class="checkbox">
        <label><input type="checkbox" name="accept"> Desejo receber os comunicados do site.</label>
    </div>


    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

