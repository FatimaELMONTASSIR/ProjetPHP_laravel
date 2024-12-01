<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Avec Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container text_center">
      <div class="row">
        <div class="col s12">
          <h1>La liste des clients</h1>
        
          <hr>
          <a href="/ajouter" class="btn btn-primary">Ajouter un client </a>
          <hr>
          
           
           @if (session('status')) 
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
         @endif
    
          <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nom</th>
              <th>Prénom</th>
              <th>Équipe</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($clients as $index =>$client)
            <tr>
            <td>{{$index + 1}}</td>
              <td>{{$client->nom}}</td>
              <td>{{$client->Prenom}}</td>
              <td>{{$client->equipe}}</td>
              <td>
                <a href="update-client/{{$client->id}}" class="btn btn-info">Update</a>
                <a href="{{ url('delete-client/'.$client->id)}}"class="btn btn-danger">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
          </table>
        
         </div>
      </div>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>