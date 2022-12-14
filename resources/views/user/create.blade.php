<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Create</title>

</head>
<body>
    <main class="container">
        <h1>New User</h1>
          <form method="POST" action="{{route('user.store')}}" class="row g-3">
            @csrf
            <div class="col-md-6">
              <label for="name" class="form-label">Name</label>
              <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="col-md-6">
              <label for="email" class="form-label">Email</label>
              <input type="email" name="email" class="form-control" id="email">
            </div>
            <div class="row justify-content-center mt-4">
              <button type="submit" class="col-1 btn btn-success">Create</button>

              <a type="button" href="{{route('user.index')}}" class="col-1 btn btn-dark">Cancel</a>
            </div>
          </form>

    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
