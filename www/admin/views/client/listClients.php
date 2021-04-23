<h1>Lista de clientes</h1>
<table class="table table-striped">

    <tr>
        <th>ID cliente</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Endereço</th>
        <th colspan='2'>Ações</th>
    </tr>

    <?php
    foreach ($arrayClients as $client) {
    ?>

        <tr>
            <td>
                <?php echo ($client['idClient']) ?>
            </td>
            <td>
                <?php echo ($client['name']) ?>
            </td>
            <td>
                <?php echo ($client['email']) ?>
            </td>
            <td>
                <?php echo ($client['phone']) ?>
            </td>
            <td>
                <?php echo ($client['address']) ?>
            </td>
            <td>
                <a 
                    href="?controller=client&action=updateClient&id=<?php echo ($client['idClient']) ?>" 
                    class="btn btn-warning"
                >   
                    Editar
                </a>
            </td>
            <td>
                <a 
                    href="?controller=client&action=deleteClient&id=<?php echo ($client['idClient']) ?>" 
                    class="btn btn-danger"
                >   
                    Excluir
                </a>
            </td>
        </tr>

    <?php
    }
    ?>


</table>