<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-md-12 mt-5">
                <div class="card mt-5">
                    <img src="{{ asset('images/checked.jpeg') }}" class="card-img-top" alt="..." style="width: 30px;">
                    <div class="card-body">
                      <h5 class="card-title">Informations reçues</h5>
                      <p class="card-text">
                        Nous avons reçues les informations. Un retour vous sera fait sous peu.
                      </p>
                      <a href="{{route('form.index')}}" class="btn btn-primary">Retour</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>