<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.css"/>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.js"></script>
<div class="page-header">
    <h1>Congratulations!</h1>
</div>
<a href="http://www.google.com">
<button  class="ui primary button">


  Save
</button>
</a>

<ul>
     {% for user in users %}
      <li>{{ user.getLogin() }}</li>
      {% endfor %}    
</ul>
