<div class="page-header">
    <h1>Users test maj!</h1>
</div>


<table class="ui blue table" >
    <tr><th>Nom</th><th>Prenom</th> <th>Login</th><th>Email</th><th>Rôle</th><th>Action</th></tr>
    {% for user in users %}
    <tr>
        <td>{{ user.getFirstname() }}</td><td>{{ user.getLastname() }}</td><td>{{ user.getLogin() }}</td><td> {{ user.getEmail()}}</td>
        <td> {{ user.getRole().getName()}}</td><td><div class="ui icon buttons">

                <button class="ui button">
                    <i class="edit icon"></i>
                </button>
                <button onclick="" class="ui  button">
                <i class=" red remove icon"></i>
                </button>
            </div>
        </td>
    </tr>
    {% endfor %}
</table>
