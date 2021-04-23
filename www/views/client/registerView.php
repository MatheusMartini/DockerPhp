<div id="divToPrint">
    <h1>Registro do Cliente</h1>
    <table class="table table-bordered">
        <tr>
            <th>Nome</th>
            <td><?= $arrayClient['name'] ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?= $arrayClient['email'] ?></td>
        </tr>
        <tr>
            <th>Login</th>
            <td><?= $arrayClient['login'] ?></td>
        </tr>
        <tr>
            <th>Telefone</th>
            <td><?= $arrayClient['phone'] ?></td>
        </tr>
        <tr>
            <th>Sobre</th>
            <td><?= $arrayClient['aboutYou'] ?></td>
        </tr>
        <tr>
            <th>Conteudo preferido</th>
            <td><?= $arrayClient['contentSelect'] ?></td>
        </tr>
        <tr>
            <th>Sexo</th>
            <td><?= $arrayClient['gender'] ?></td>
        </tr>

        <tr>
            <th>Termo de aceite</th>
            <td><?= $arrayClient['acceptView'] ?></td>
        </tr>

        </tr>

    </table>
</div>

<button type="submit" class="btn btn-primary" onclick="printDiv()">Imprimir Cadastro</button>