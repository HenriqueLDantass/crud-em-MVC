<?php $render('header')   ?>

<h2>Editar usuario</h2>
<form action="<?= $base; ?>/usuario/<?= $usuario['id']?>/editar" method="POST">
   
        <label for="">Nome</label> <br>
        <input type="text" name='nome' value="<?=$usuario['nome'] ?>"><br><br>
        <label for="">email</label><br>
        <input type="email" name='email' value="<?=$usuario['email'] ?>"><br><br>
        
        <input type="submit" value="Salvar">

</form>

<?php $render('footer')?>