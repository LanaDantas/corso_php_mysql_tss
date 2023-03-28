<?php

use crud\UserCRUD;
//si trovano nella root 
require "../config.php";
require "./autoload.php";

$users = (new UserCRUD())->read();
//print_r($users);

?>
<?php require "./class/views/head-view.php" ?>
<table class="table">
    <!-- riga -->
    <tr>
        <th>#</th>
        <th>Nome</th>
        <th>Cognome</th>
        <th>Comune</th>
        <th> Azioni </th>
        <!-- per ogni utente devo vedere le sue info e modificrlo -->

    </tr>
    <!-- prendo elenco utenti dall'array quindi foreach, per ogni elemnto estraggo la proprietà -->
    <?php foreach ($users as $user) { ?>
    <tr>
        <td><?php echo $user->user_id?></td>
        <td><?php echo $user->first_name?></td>
        <td><?php echo $user->last_name?></td>
        <td><?php echo $user->birth_city?></td>
        <!-- la regione è una dipendenza, quindi serve una join -->
        <td>
            <a href= "edit-user.php?user_id=<?= $user->user_id ?>" class="btn btn-primary btn-xs">Edit</a>
            <a href= "delete-user.php?user_id=<?= $user->user_id ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
       
    </tr>
    <?php }?>
</table>
<?php require "./class/views/footer-view.php" ?>