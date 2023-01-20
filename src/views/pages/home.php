<?php $render('header')   ?>

<a href="<?=$base?>/novo">Novo usuario</a>



<table border="1" width="100%">
        <tr>
            <th>id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>

<?php
foreach($usuarios as $dadosPessoal): ?>
                    <tr>
                        <td><?= $dadosPessoal['id']?></td>
                        <td><?= $dadosPessoal['nome']?></td>
                        <td><?= $dadosPessoal['email']?></td>
                        <td>
                            <a href="<?= $base?>/usuario/<?=$dadosPessoal['id']?>/editar">editar</a>
                            <a href="<?= $base?>/usuario/<?=$dadosPessoal['id']?>/excluir" onclick="return confirm('tem certeza que deseja excluir este usuario?')">excluir</a>
                        </td>

                    </tr>


                <?php endforeach;
?>
</table>
<?php $render('footer')?>