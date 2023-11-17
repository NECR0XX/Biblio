<!DOCTYPE html>
<html>
<head>
    <title>Lista de Users</title>
</head>
<body>
    <fieldset>
        <legend><h1>Lista de Users</h1></legend>
            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Senha</th>
                        <th>Níveis de Permissão</th>
                        <th>Emprestimos</th>
                    </tr>
                </thead>
                <?php foreach ($users as $user): ?>
                    <tbody>
                        <tr>
                            <td><?php echo $user['id']; ?></td>
                            <td><?php echo $user['nome']; ?></td>
                            <td><?php echo $user['email']; ?></td>
                            <td><?php echo $user['senha']; ?></td>
                            <td><?php echo $user['tipo_usuario']; ?></td>
                            <td><a href="App/View/Usuarios/emprestimos.php?id=<?php echo $user['id']; ?>">Emprestimos</a></td>
                        </tr>
                <?php endforeach; ?>
                <tbody>
            </table>
    </fieldset>
</body>
</html>