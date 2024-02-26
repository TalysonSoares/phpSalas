
<section class="container">
    <table class="table">
        <table class="table table-hover table-striped">
            <thead class="table-dark">
                <tr>
                    <th>#ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $database = require("../src/conexao.php");
                    
                    $users = $database->query("SELECT * FROM tb_usuarios");
                    
                    foreach($users->fetchAll() as $user) {

                        echo "
                            <tr>
                                <td>{$user['id']}</td>
                                <td>{$user['nome']}</td>
                                <td>{$user['email']}</td>
                                <td>
                                    <a href='#' class='btn btn-warning'>Editar</a>
                                    <a href='#' class='btn btn-danger'>Excluir</a>
                                </td>
                            </tr>                        
                        ";

                    }
                ?>
            </tbody>
        </table>
    </table>
</section>