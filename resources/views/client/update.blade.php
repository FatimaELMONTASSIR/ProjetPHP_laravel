
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Avec Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col s12">
          <h1> UPDATE Un client </h1>
          <hr>
          
           
          @if (session('status')) 
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
        @endif
        <div>
        @foreach ($errors->all() as $error)
        <li class="alert alert-danger">
        {{ $error }}
        </div>
        @endforeach 
<form action="/update/traitement" method="GET" class="form-group">
    @csrf
    <input type="text" name="id" style="display: none;" value="{{$clients->id}}">
    <div class="mb-3">
    <label for="nom" class="form-label">Nom</label>
    <input type="text" class="form-control" id="nom" name="nom" value="{{$clients->nom}}">
  </div>
  <div class="mb-3">
    <label for="prenom" class="form-label">Prenom</label>
    <input type="text" class="form-control" id="prenom"  name="prenom" value="{{$clients->Prenom}}">
  </div>
  <div class="mb-3">
    <label class="form-label" for="Equipe">Equipe</label>
    <input type="text" class="form-control" id="equipe"  name="equipe" value="{{$clients->equipe}}">
  </div>
  <button type="submit" class="btn btn-primary">MODIFIER LE CLIENT</button>
  <br><br><br>
  <a href="/Liste" class=" btn btn-danger">Revenir à liste des client </a>
</form>
         </div>
      </div>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html> 