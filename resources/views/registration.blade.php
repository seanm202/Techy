<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">



        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <div class="register">
          {{ Form::open(array('method'=>'post','route' => 'register')) }}
          {{Form::token()}}
          {{Form::label('name', 'Full Name')}}
          {{Form::text('name', null,array('placeholder'=>'Full Name'))}}<br>
          {{Form::label('email', 'E-Mail Address')}}
          {{Form::text('email', null,array('placeholder'=>'example@example.com'))}}<br>
          {{Form::label('password', 'Password')}}
          {{Form::password('password')}}<br>
          {{Form::submit('Submit')}}
          {{ Form::close() }}
        </div>
    </body>
</html>
