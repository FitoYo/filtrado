<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>Filtrado</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>
                            Busqueda de usuarios
                            {{ Form::open(['route' => 'users', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}
                                <div class="form-group">
                                    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre']) }}
                                </div>
                                  <div class="form-group">
                                    {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) }}
                                </div>
                                  <div class="form-group">
                                    {{ Form::text('bio', null, ['class' => 'form-control', 'placeholder' => 'Bio']) }}
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">
                                        <span class="glyphicon glyphicon-search">Seach</span>
                                    </button>
                                </div>
                            {{ Form::close() }}
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
