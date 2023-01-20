<?php $render('header')   ?>

<h2>Adicionar novo Usuario</h2>
<form action="<?= $base; ?>/novo" method="POST">
   
        <label for="">Nome</label> <br>
        <input type="text" name='nome'><br><br>
        <label for="">email</label><br>
        <input type="email" name='email'><br><br>
        
        <input type="submit" value="Adicionar">

</form>

<?php $render('footer')?>