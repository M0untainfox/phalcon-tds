<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.js"></script>
<div class="page-header">
    <h1>Users !</h1>
</div>


<table class="ui blue table" >
    <tr><th>Nom</th><th>Prenom</th> <th>Login</th><th>Email</th><th>Rôle</th><th>Action</th></tr>
    <?php foreach ($users as $user) { ?>
    <tr>
        <td><?= $user->getFirstname() ?></td><td><?= $user->getLastname() ?></td><td><?= $user->getLogin() ?></td><td> <?= $user->getEmail() ?></td>
        <td> <?= $user->getRole()->getName() ?></td><td><div class="ui icon buttons">

                <button class="ui button">
                    <i class="edit icon"></i>
                </button>
                <button onclick="document.location.href'users/'+<?= $user->getId() ?>" class="ui  button">
                <i class=" red remove icon"></i>
                </button>
            </div>
        </td>
    </tr>
    <?php } ?>
</table>

