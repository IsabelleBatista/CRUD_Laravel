<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Index</title>
  </head>
  <body>

      <main class="container">
        <div class="row justify-content-between">
          <div class="col-4 h1">
            <h1>Contatos</h1>
          </div>

          <div class="col-2 h1">
              <a class="btn btn-success" type="buttton" href="{{route('user.create')}}">
                New User
              </a>
          </div>
        </div>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">View</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
              <th scope="row">{{$user->id}}</th>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>
                <a type="button" href="{{route('user.show', $user->id)}}" class="btn btn-primary">VIEW</a>
              </td>
              <td>
                <a type="button" href="{{route('user.edit', $user->id)}}" class="btn btn-warning">EDIT</a>
              </td>
              <td>
                <form  method="POST" action="{{route('user.destroy', $user->id)}}">
                  @method('delete')
                  @csrf
                  <button type="submit" class="btn btn-danger">DELETE</button>
                </form>
              </td>
            </tr>




            @endforeach

        </tbody>
      </table>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
