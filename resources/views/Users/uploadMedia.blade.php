<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>Socialite</title>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
      <a href="{{ route('logout') }}">Logout</a>

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
                {{ Form::open(array('method'=>'post','route' => 'galleryAdd')) }}
                {{Form::token()}}
                {{Form::label('Description', 'Media Description')}}
                {{Form::text('mediaDesc', null,array('placeholder'=>'Media Description'))}}<br>
                {{Form::file('upMedia')}}
                {{Form::submit('Upload')}}
                {{ Form::close() }}
              </div>
    </body>
</html>
