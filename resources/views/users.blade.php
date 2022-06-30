<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>Filtrado</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->

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
                                        <span>seach</span>
                                    </button>
                                </div>
                            {{ Form::close() }}
                        </h1>
                    </div>
                </div>
                <div class="col-md-8">
                    <table class="table table-hover table-striped">
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td> {{$user->id}} </td>
                                    <td> {{$user->name}} </td>
                                    <td> {{$user->email}} </td>
                                    <td> {{$user->bio}} </td>
                                </tr>
                            @endforeach
                        </tbody>                        
                    </table>
                    {{$users->render()}}
                </div>
            </div>
        </div>
    </body>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script> -->
    <script src="{{ asset('js/app.js') }}"></script>
</html>
